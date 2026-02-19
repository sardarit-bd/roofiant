<x-dashboard-layout>
    <h2 class="my-6 text-2xl font-semibold text-gray-700">
        Dashboard
    </h2>

    <!-- Cards -->
    <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
        <!-- Card -->
        <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
            <div class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500">
                <i class="fas fa-clipboard"></i>
            </div>
            <div>
                <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                    Blog posts
                </p>
                <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                    {{ $blogs->count() }}
                </p>
            </div>
        </div>
        <!-- Card -->
        <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
            <div class="p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500">
                <i class="fas fa-location"></i>
            </div>
            <div>
                <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                    Areas
                </p>
                <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                    {{ $areas->count() }}
                </p>
            </div>
        </div>
        <!-- Card -->
        <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
            <div class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full dark:text-blue-100 dark:bg-blue-500">
                <i class="fa-solid fa-briefcase"></i>
            </div>
            <div>
                <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                    Services
                </p>
                <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                    {{ $services->count() }}
                </p>
            </div>
        </div>
        <!-- Card -->
        <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
            <div class="p-3 mr-4 text-teal-500 bg-teal-100 rounded-full dark:text-teal-100 dark:bg-teal-500">
                <i class="fa-solid fa-diagram-project"></i>
            </div>
            <div>
                <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                    Projects
                </p>
                <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                    {{ $projects->count() }}
                </p>
            </div>
        </div>
    </div>

    <!-- Projects Table -->
    <div class="w-full overflow-hidden rounded-lg shadow-xs mb-8">
        <div class="w-full overflow-x-auto">
            <table class="w-full whitespace-no-wrap">
                <thead>
                    <tr
                        class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        <th class="px-4 py-3">ID</th>
                        <th class="px-4 py-3">Project Title</th>
                        <th class="px-4 py-3">Client</th>
                        <th class="px-4 py-3">Type</th>
                        <th class="px-4 py-3">Size</th>
                        <th class="px-4 py-3">Warranty</th>
                        <th class="px-4 py-3">Deadline</th>
                        <th class="px-4 py-3">Status</th>
                        <th class="px-4 py-3">view</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                    @forelse ($projects as $project)
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3 text-sm">
                                #{{ $project->id }}
                            </td>
                            <td class="px-4 py-3">
                                <div class="flex items-center text-sm">
                                    <div>
                                        <p class="font-semibold">{{ $project->title }}</p>
                                        <p class="text-xs text-gray-600 dark:text-gray-400">
                                            Area ID: {{ $project->area_id }}
                                        </p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{ $project->client }}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                <span
                                    class="px-2 py-1 font-semibold leading-tight text-blue-700 bg-blue-100 rounded-full dark:bg-blue-700 dark:text-blue-100">
                                    {{ $project->type }}
                                </span>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{ $project->size }}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                <span
                                    class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-700">
                                    {{ $project->warranty }}
                                </span>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{ \Carbon\Carbon::parse($project->deadline)->format('M d, Y') }}
                            </td>
                            <td class="px-4 py-3 text-xs">
                                @php
                                    $deadline = \Carbon\Carbon::parse($project->deadline);
                                    $isOverdue = $deadline->isPast();
                                @endphp
                                @if ($isOverdue)
                                    <span
                                        class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:bg-red-700 dark:text-red-100">
                                        Overdue
                                    </span>
                                @else
                                    <span
                                        class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-700">
                                        Active
                                    </span>
                                @endif
                            </td>
                            <td class="px-4 py-3">
                                <div class="flex items-center space-x-2 text-sm">
                                    <button onclick="showProjectDetails({{ $project->id }})"
                                        class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-blue-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray hover:text-blue-800"
                                        aria-label="View">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Hidden Project Details Row -->
                        <tr id="details-{{ $project->id }}" class="hidden bg-gray-50 dark:bg-gray-900">
                            <td colspan="9" class="px-4 py-4">
                                <div class="p-4">
                                    <h4 class="text-lg font-semibold text-gray-700 dark:text-gray-200 mb-3">Project
                                        Details</h4>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <div>
                                            <p class="text-sm font-semibold text-gray-600 dark:text-gray-400">Content:
                                            </p>
                                            <p class="text-sm text-gray-700 dark:text-gray-300 mt-1">
                                                {{ $project->content }}</p>
                                        </div>
                                        <div>
                                            <p class="text-sm font-semibold text-gray-600 dark:text-gray-400">Created:
                                            </p>
                                            <p class="text-sm text-gray-700 dark:text-gray-300 mt-1">
                                                {{ \Carbon\Carbon::parse($project->created_at)->format('M d, Y h:i A') }}
                                            </p>
                                        </div>
                                        <div>
                                            <p class="text-sm font-semibold text-gray-600 dark:text-gray-400">Last
                                                Updated:</p>
                                            <p class="text-sm text-gray-700 dark:text-gray-300 mt-1">
                                                {{ \Carbon\Carbon::parse($project->updated_at)->format('M d, Y h:i A') }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="9" class="px-4 py-8 text-center text-gray-500 dark:text-gray-400">
                                <i class="fas fa-inbox text-4xl mb-2"></i>
                                <p>No projects found</p>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

    </div>

    <script>
        function showProjectDetails(projectId) {
            const detailsRow = document.getElementById(`details-${projectId}`);
            detailsRow.classList.toggle('hidden');
        }
    </script>

</x-dashboard-layout>
