<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $areas = Area::paginate(20);

        return view('dashboard.area.index', compact('areas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.area.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'    => ['required', 'string', 'max:255', 'unique:areas,name'],
            'slug'    => ['nullable', 'string', 'max:255', 'unique:areas,slug'],
            'address' => ['nullable', 'string', 'max:500'],
        ]);

        // Auto-generate slug if not provided
        $validated['slug'] = $validated['slug']
            ? Str::slug($validated['slug'])
            : Str::slug($validated['name']);

        // Ensure slug uniqueness
        $originalSlug = $validated['slug'];
        $count = 1;
        while (Area::where('slug', $validated['slug'])->exists()) {
            $validated['slug'] = "{$originalSlug}-{$count}";
            $count++;
        }

        $area = Area::create($validated);

        return redirect()
            ->route('admin.area.index')
            ->with('success', "Area \"{$area->name}\" created successfully.");
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $area = Area::findOrFail($id);

        return view('areas.edit', compact('area'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $area = Area::findOrFail($id);

        $validated = $request->validate([
            'name'    => ['required', 'string', 'max:255', Rule::unique('areas', 'name')->ignore($area->id)],
            'slug'    => ['nullable', 'string', 'max:255', Rule::unique('areas', 'slug')->ignore($area->id)],
            'address' => ['nullable', 'string', 'max:500'],
        ]);

        // Regenerate slug only if name changed and slug wasn't manually provided
        if (empty($validated['slug'])) {
            if ($area->name !== $validated['name']) {
                $validated['slug'] = Str::slug($validated['name']);

                // Ensure slug uniqueness (excluding current area)
                $originalSlug = $validated['slug'];
                $count = 1;
                while (Area::where('slug', $validated['slug'])->where('id', '!=', $area->id)->exists()) {
                    $validated['slug'] = "{$originalSlug}-{$count}";
                    $count++;
                }
            } else {
                // Keep existing slug
                unset($validated['slug']);
            }
        } else {
            $validated['slug'] = Str::slug($validated['slug']);
        }

        $area->update($validated);

        return redirect()
            ->route('areas.index')
            ->with('success', "Area \"{$area->name}\" updated successfully.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $area = Area::findOrFail($id);

        $name = $area->name;
        $area->delete();

        return redirect()
            ->route('areas.index')
            ->with('success', "Area \"{$name}\" deleted successfully.");
    }
}
