<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Common Data') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if(!$existingCommonData)
                        <form action="{{ route('commondata.store') }}" method="POST">
                            @csrf

                            <div class="mb-4">
                                <label for="user_id" class="block text-sm font-medium text-gray-700">User</label>
                                <select name="user_id" id="user_id" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                                    @foreach($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-4">
                                <label for="district" class="block text-sm font-medium text-gray-700">District</label>
                                <input type="text" name="district" id="district" placeholder="District" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                            </div>

                            <div class="mb-4">
                                <label for="agrarian_service_center" class="block text-sm font-medium text-gray-700">Agrarian Service Center</label>
                                <input type="text" name="agrarian_service_center" id="agrarian_service_center" placeholder="Agrarian Service Center" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                            </div>

                            <div class="mb-4">
                                <label for="village" class="block text-sm font-medium text-gray-700">Village</label>
                                <input type="text" name="village" id="village" placeholder="Village" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                            </div>

                            <div class="mb-4">
                                <label for="latitude" class="block text-sm font-medium text-gray-700">Latitude</label>
                                <input type="text" name="latitude" id="latitude" placeholder="Latitude" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                            </div>

                            <div class="mb-4">
                                <label for="longitude" class="block text-sm font-medium text-gray-700">Longitude</label>
                                <input type="text" name="longitude" id="longitude" placeholder="Longitude" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                            </div>

                            <div class="mb-4">
                                <label for="variety" class="block text-sm font-medium text-gray-700">Variety</label>
                                <input type="text" name="variety" id="variety" placeholder="Variety" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                            </div>

                            <div class="mb-4">
                                <label for="established_method" class="block text-sm font-medium text-gray-700">Established Method</label>
                                <input type="text" name="established_method" id="established_method" placeholder="Established Method" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                            </div>

                            <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-500 border border-transparent rounded-md shadow-sm text-sm font-medium text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                Save Common Data
                            </button>
                        </form>
                    @else
                        <p>Common data for the {{ $currentSeason }} season has already been filled.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
