<x-dashboard-layout>
    <div class="mb-6">
        <h2 class="text-2xl font-semibold text-gray-700">
            Team Management
        </h2>
    </div>

    <!-- Success/Error Messages -->
    @if(session('success'))
        <div class="mb-4 px-4 py-3 bg-green-100 border border-green-400 text-green-700 rounded">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="mb-4 px-4 py-3 bg-red-100 border border-red-400 text-red-700 rounded">
            {{ session('error') }}
        </div>
    @endif

    @if($errors->any())
        <div class="mb-4 px-4 py-3 bg-red-100 border border-red-400 text-red-700 rounded">
            <ul class="list-disc list-inside">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="grid gap-6 mb-8 md:grid-cols-2">

        <!-- Category Section -->
        <div class="bg-white rounded-lg shadow-md">
            <div class="p-6 border-b">
                <h3 class="text-lg font-semibold text-gray-700">
                    Team Categories
                </h3>
            </div>

            <!-- Add Category Form -->
            <div class="p-6 border-b">
                <form action="{{ route('team.categories.store') }}" method="POST" class="space-y-4">
                    @csrf
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            Category Name
                        </label>
                        <input
                            type="text"
                            name="name"
                            required
                            placeholder="e.g., Management, Developers, Sales"
                            class="w-full px-3 py-2 text-sm leading-5 text-gray-700 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500"
                        >
                    </div>
                    <button
                        type="submit"
                        class="w-full px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue"
                    >
                        <i class="fas fa-plus mr-2"></i> Add Category
                    </button>
                </form>
            </div>

            <!-- Categories List -->
            <div class="p-6 overflow-x-auto">
                <table class="w-full text-sm text-left">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th class="px-4 py-3">ID</th>
                            <th class="px-4 py-3">Name</th>
                            <th class="px-4 py-3">Teams</th>
                            <th class="px-4 py-3">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y">
                        @forelse($categories as $category)
                            <tr class="text-gray-700">
                                <td class="px-4 py-3 text-sm">{{ $category->id }}</td>
                                <td class="px-4 py-3">
                                    <span class="font-semibold">{{ $category->name }}</span>
                                </td>
                                <td class="px-4 py-3">
                                    <span class="px-2 py-1 text-xs font-semibold text-blue-700 bg-blue-100 rounded-full">
                                        {{ $category->teams->count() }} members
                                    </span>
                                </td>
                                <td class="px-4 py-3">
                                    <div class="flex items-center space-x-2">
                                        <button
                                            onclick="editCategory({{ $category->id }}, '{{ $category->name }}')"
                                            class="text-yellow-600 hover:text-yellow-800"
                                        >
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <form action="{{ route('team.categories.destroy', $category) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button
                                                type="submit"
                                                onclick="return confirm('Are you sure? This will fail if teams exist in this category.')"
                                                class="text-red-600 hover:text-red-800"
                                            >
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="px-4 py-8 text-center text-gray-500">
                                    No categories found
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Team Members Section -->
        <div class="bg-white rounded-lg shadow-md">
            <div class="p-6 border-b">
                <h3 class="text-lg font-semibold text-gray-700">
                    Team Members
                </h3>
            </div>

            <!-- Add Team Member Form -->
            <div class="p-6 border-b">
                <form action="{{ route('teams.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                    @csrf
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            Member Name
                        </label>
                        <input
                            type="text"
                            name="name"
                            required
                            placeholder="Full Name"
                            class="w-full px-3 py-2 text-sm leading-5 text-gray-700 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500"
                        >
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            Designation
                        </label>
                        <input
                            type="text"
                            name="designation"
                            required
                            placeholder="e.g., CEO, Developer, Manager"
                            class="w-full px-3 py-2 text-sm leading-5 text-gray-700 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500"
                        >
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            Category
                        </label>
                        <select
                            name="teamcategory_id"
                            required
                            class="w-full px-3 py-2 text-sm leading-5 text-gray-700 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500"
                        >
                            <option value="">Select Category</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            Profile Image
                        </label>
                        <input
                            type="file"
                            name="image"
                            accept="image/*"
                            class="w-full px-3 py-2 text-sm leading-5 text-gray-700 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500"
                        >
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            Description (Optional)
                        </label>
                        <textarea
                            name="description"
                            rows="3"
                            placeholder="Brief bio or description"
                            class="w-full px-3 py-2 text-sm leading-5 text-gray-700 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500"
                        ></textarea>
                    </div>

                    <button
                        type="submit"
                        class="w-full px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue"
                    >
                        <i class="fas fa-user-plus mr-2"></i> Add Team Member
                    </button>
                </form>
            </div>

            <!-- Team Members List -->
            <div class="p-6 overflow-x-auto">
                <table class="w-full text-sm text-left">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th class="px-4 py-3">ID</th>
                            <th class="px-4 py-3">Member</th>
                            <th class="px-4 py-3">Category</th>
                            <th class="px-4 py-3">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y">
                        @forelse($teams as $team)
                            <tr class="text-gray-700">
                                <td class="px-4 py-3 text-sm">{{ $team->id }}</td>
                                <td class="px-4 py-3">
                                    <div class="flex items-center">
                                        @if($team->image)
                                            <img src="{{ asset($team->image) }}" alt="{{ $team->name }}" class="w-10 h-10 rounded-full mr-3 object-cover">
                                        @else
                                            <div class="w-10 h-10 rounded-full mr-3 bg-blue-500 flex items-center justify-center text-white font-bold">
                                                {{ substr($team->name, 0, 1) }}
                                            </div>
                                        @endif
                                        <div>
                                            <p class="font-semibold">{{ $team->name }}</p>
                                            <p class="text-xs text-gray-500">{{ $team->designation }}</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-3">
                                    <span class="px-2 py-1 text-xs font-semibold text-green-700 bg-green-100 rounded-full">
                                        {{ $team->teamcategory->name ?? 'N/A' }}
                                    </span>
                                </td>
                                <td class="px-4 py-3">
                                    <div class="flex items-center space-x-2">
                                        <button
                                            onclick="viewTeam({{ $team->id }})"
                                            class="text-blue-600 hover:text-blue-800"
                                        >
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        <button
                                            onclick="editTeam({{ $team->id }}, '{{ $team->name }}', '{{ $team->designation }}', {{ $team->teamcategory_id }}, '{{ $team->description }}')"
                                            class="text-yellow-600 hover:text-yellow-800"
                                        >
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <form action="{{ route('teams.destroy', $team) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button
                                                type="submit"
                                                onclick="return confirm('Are you sure you want to delete {{ $team->name }}?')"
                                                class="text-red-600 hover:text-red-800"
                                            >
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>

                            <!-- Hidden Details Row -->
                            <tr id="team-details-{{ $team->id }}" class="hidden bg-gray-50">
                                <td colspan="4" class="px-4 py-4">
                                    <div class="p-4">
                                        <h4 class="font-semibold mb-2">Description:</h4>
                                        <p class="text-gray-600">{{ $team->description ?? 'No description available' }}</p>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="px-4 py-8 text-center text-gray-500">
                                    No team members found
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </div>

    <!-- Edit Category Modal -->
    <div id="editCategoryModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
        <div class="bg-white rounded-lg p-6 w-full max-w-md">
            <h3 class="text-lg font-semibold mb-4 text-gray-700">Edit Category</h3>
            <form id="editCategoryForm" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Category Name
                    </label>
                    <input
                        type="text"
                        id="editCategoryName"
                        name="name"
                        required
                        class="w-full px-3 py-2 text-sm leading-5 text-gray-700 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500"
                    >
                </div>
                <div class="flex justify-end gap-2">
                    <button
                        type="button"
                        onclick="closeEditModal()"
                        class="px-4 py-2 text-sm font-medium text-gray-700 bg-gray-200 rounded-lg hover:bg-gray-300"
                    >
                        Cancel
                    </button>
                    <button
                        type="submit"
                        class="px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700"
                    >
                        Update
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function editCategory(id, name) {
            document.getElementById('editCategoryForm').action = `/dashboard/team-categories/${id}`;
            document.getElementById('editCategoryName').value = name;
            document.getElementById('editCategoryModal').classList.remove('hidden');
        }

        function closeEditModal() {
            document.getElementById('editCategoryModal').classList.add('hidden');
        }

        function viewTeam(teamId) {
            const detailsRow = document.getElementById(`team-details-${teamId}`);
            detailsRow.classList.toggle('hidden');
        }

        document.getElementById('editCategoryModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeEditModal();
            }
        });
    </script>

</x-dashboard-layout>
