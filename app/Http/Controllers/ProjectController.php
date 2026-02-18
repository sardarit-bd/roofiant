<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Project;
use App\Models\ProjectImage;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::with(['area', 'images'])
            ->withCount(['images', 'services'])
            ->latest()
            ->paginate(12);

        return view('dashboard.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $areas = Area::orderBy('name')->get();
        $services = Service::orderBy('name')->get();

        return view('dashboard.projects.create', compact('areas', 'services'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'area_id' => ['required', 'integer', 'exists:areas,id'],
            'client' => ['nullable', 'string', 'max:255'],
            'deadline' => ['nullable', 'date'],
            'content' => ['nullable', 'string'],
            'type' => ['nullable', 'string', 'max:255'],
            'warranty' => ['nullable', 'string', 'max:255'],
            'size' => ['nullable', 'string', 'max:255'],
            'services' => ['nullable', 'array'],
            'services.*' => ['integer', 'exists:services,id'],
            'images' => ['nullable', 'array', 'max:10'],
            'images.*' => ['image', 'mimes:jpeg,jpg,png,webp', 'max:2048'],
        ]);

        // Create project
        $project = Project::create([
            'title' => $validated['title'],
            'area_id' => $validated['area_id'],
            'client' => $validated['client'] ?? null,
            'deadline' => $validated['deadline'] ?? null,
            'content' => $validated['content'] ?? null,
            'type' => $validated['type'] ?? null,
            'warranty' => $validated['warranty'] ?? null,
            'size' => $validated['size'] ?? null,
        ]);

        // Attach services
        if (! empty($validated['services'])) {
            $project->services()->attach($validated['services']);
        }

        // Upload images
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('projects', 'public');
                ProjectImage::create([
                    'project_id' => $project->id,
                    'image' => $path,
                ]);
            }
        }

        return redirect()
            ->route('projects.show', $project)
            ->with('success', "Project \"{$project->title}\" created successfully.");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'area_id' => ['required', 'integer', 'exists:areas,id'],
            'client' => ['nullable', 'string', 'max:255'],
            'deadline' => ['nullable', 'date'],
            'content' => ['nullable', 'string'],
            'type' => ['nullable', 'string', 'max:255'],
            'warranty' => ['nullable', 'string', 'max:255'],
            'size' => ['nullable', 'string', 'max:255'],
            'services' => ['nullable', 'array'],
            'services.*' => ['integer', 'exists:services,id'],
            'images' => ['nullable', 'array', 'max:10'],
            'images.*' => ['image', 'mimes:jpeg,jpg,png,webp', 'max:2048'],
        ]);

        // Update project
        $project->update([
            'title' => $validated['title'],
            'area_id' => $validated['area_id'],
            'client' => $validated['client'] ?? null,
            'deadline' => $validated['deadline'] ?? null,
            'content' => $validated['content'] ?? null,
            'type' => $validated['type'] ?? null,
            'warranty' => $validated['warranty'] ?? null,
            'size' => $validated['size'] ?? null,
        ]);

        // Sync services
        if (isset($validated['services'])) {
            $project->services()->sync($validated['services']);
        } else {
            $project->services()->detach();
        }

        // Upload new images
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('projects', 'public');
                ProjectImage::create([
                    'project_id' => $project->id,
                    'image' => $path,
                ]);
            }
        }

        return redirect()
            ->route('projects.show', $project)
            ->with('success', "Project \"{$project->title}\" updated successfully.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        // Delete all images from storage
        foreach ($project->images as $image) {
            Storage::disk('public')->delete($image->image);
            $image->delete();
        }

        // Detach services
        $project->services()->detach();

        // Delete project
        $project->delete();

        return redirect()
            ->back()
            ->with('success', 'Project deleted successfully.');
    }

    /**
     * Delete a single project image
     */
    public function deleteImage(ProjectImage $image)
    {
        Storage::disk('public')->delete($image->image);
        $image->delete();

        return back()->with('success', 'Image deleted successfully.');
    }
}
