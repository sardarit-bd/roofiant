<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\AreaService;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AreaserviceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $areaServices = AreaService::with(['area', 'service'])
            ->latest('id')
            ->paginate(15);

        return view('dashboard.area-services.index', compact('areaServices'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $areas = Area::orderBy('name')->get();
        $services = Service::orderBy('name')->get();

        return view('dashboard.area-services.create', compact('areas', 'services'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'area_id' => [
                'required',
                'integer',
                'exists:areas,id',
                // Prevent duplicate area-service combinations
                Rule::unique('area_services')->where(function ($query) use ($request) {
                    return $query->where('service_id', $request->service_id);
                }),
            ],
            'service_id' => [
                'required',
                'integer',
                'exists:services,id',
            ],
        ], [
            'area_id.unique' => 'This area-service combination already exists.',
        ]);

        $areaService = AreaService::create($validated);

        $area = Area::find($validated['area_id']);
        $service = Service::find($validated['service_id']);

        return redirect()
            ->route('area-services.index')
            ->with('success', "Successfully linked \"{$service->name}\" to \"{$area->name}\".");
    }

    /**
     * Display the specified resource.
     */
    public function show(AreaService $areaService)
    {
        $areaService->load(['area', 'service']);

        return view('dashboard.area-services.show', compact('areaService'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AreaService $areaService)
    {
        $areaService->load(['area', 'service']);
        $areas = Area::orderBy('name')->get();
        $services = Service::orderBy('name')->get();

        return view('dashboard.area-services.edit', compact('areaService', 'areas', 'services'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AreaService $areaService)
    {
        $validated = $request->validate([
            'area_id' => [
                'required',
                'integer',
                'exists:areas,id',
                // Prevent duplicate area-service combinations (excluding current)
                Rule::unique('area_services')->where(function ($query) use ($request) {
                    return $query->where('service_id', $request->service_id);
                })->ignore($areaService->id),
            ],
            'service_id' => [
                'required',
                'integer',
                'exists:services,id',
            ],
        ], [
            'area_id.unique' => 'This area-service combination already exists.',
        ]);

        $areaService->update($validated);

        $area = Area::find($validated['area_id']);
        $service = Service::find($validated['service_id']);

        return redirect()
            ->route('area-services.index')
            ->with('success', "Successfully updated to \"{$service->name}\" in \"{$area->name}\".");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AreaService $areaService)
    {
        $areaService->load(['area', 'service']);
        $areaName = $areaService->area->name;
        $serviceName = $areaService->service->name;

        $areaService->delete();

        return redirect()
            ->route('area-services.index')
            ->with('success', "Unlinked \"{$serviceName}\" from \"{$areaName}\".");
    }
}
