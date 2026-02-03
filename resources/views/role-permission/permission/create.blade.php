<x-app-layout>
    <div class="container mx-auto mt-6">
        <div class="bg-white shadow-md rounded">

            <!-- Header -->
            <div class="px-4 py-3 border-b flex justify-between items-center">
                <h4 class="text-lg font-semibold">
                    Create Permission
                </h4>
                <a href="{{ url('permissions') }}"
                   class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">
                    Back
                </a>
            </div>

            <!-- Body -->
            <div class="p-4">
                <form action="{{ url('permissions') }}" method="POST" class="space-y-4">
                    @csrf

                    <div>
                        <label for="name" class="block text-gray-700 font-medium">
                            Permission Name
                        </label>
                        <input
                            type="text"
                            name="name"
                            id="name"
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm
                                   focus:ring focus:ring-blue-500 focus:outline-none"
                            placeholder="Enter permission name"
                        >
                    </div>

                    <div>
                        <button type="submit"
                                class="bg-blue-500 text-white px-6 py-2 rounded hover:bg-blue-600">
                            Save
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</x-app-layout>
