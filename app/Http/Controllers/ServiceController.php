<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::paginate(15);

        return view('dashboard.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255', 'unique:services,name'],
            'slug' => ['nullable', 'string', 'max:255', 'unique:services,slug'],
        ]);

        // Auto-generate slug if not provided
        $validated['slug'] = $validated['slug']
            ? Str::slug($validated['slug'])
            : Str::slug($validated['name']);

        // Ensure slug uniqueness
        $originalSlug = $validated['slug'];
        $count = 1;
        while (Service::where('slug', $validated['slug'])->exists()) {
            $validated['slug'] = "{$originalSlug}-{$count}";
            $count++;
        }

        $service = Service::create($validated);

        return redirect()
            ->route('services.index')
            ->with('success', "Service \"{$service->name}\" created successfully.");
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        $service->load(['projects', 'areas'])
            ->loadCount(['projects', 'areas']);

        return view('dashboard.services.show', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        return view('dashboard.services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255', Rule::unique('services', 'name')->ignore($service->id)],
            'slug' => ['nullable', 'string', 'max:255', Rule::unique('services', 'slug')->ignore($service->id)],
        ]);

        // Regenerate slug only if name changed and slug wasn't manually provided
        if (empty($validated['slug'])) {
            if ($service->name !== $validated['name']) {
                $validated['slug'] = Str::slug($validated['name']);

                // Ensure slug uniqueness (excluding current service)
                $originalSlug = $validated['slug'];
                $count = 1;
                while (Service::where('slug', $validated['slug'])->where('id', '!=', $service->id)->exists()) {
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

        $service->update($validated);

        return redirect()
            ->route('services.index')
            ->with('success', "Service \"{$service->name}\" updated successfully.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        $name = $service->name;
        $service->delete();

        return redirect()
            ->route('services.index')
            ->with('success', "Service \"{$name}\" deleted successfully.");
    }
}
