<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pest Data') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('pestdata.store') }}" method="POST">
                        @csrf

                        <div class="mb-4">
                            <label for="date" class="block text-sm font-medium text-gray-700">Date</label>
                            <input type="date" name="date" id="date" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                        </div>

                        <div class="mb-4">
                            <label for="no_of_rainy_days_in_last_week" class="block text-sm font-medium text-gray-700">No. of Rainy Days in Last Week</label>
                            <input type="text" name="no_of_rainy_days_in_last_week" id="no_of_rainy_days_in_last_week" placeholder="No. of Rainy Days" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                        </div>

                        <div class="mb-4">
                            <label for="temperature" class="block text-sm font-medium text-gray-700">Temperature</label>
                            <input type="text" name="temperature" id="temperature" placeholder="Temperature" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                        </div>

                        <div class="mb-4">
                            <label for="crop_growth_code" class="block text-sm font-medium text-gray-700">Crop Growth Code</label>
                            <input type="text" name="crop_growth_code" id="crop_growth_code" placeholder="Crop Growth Code" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                        </div>

                        @foreach(['tillers', 'thrips', 'gall_midge', 'leaffolder', 'yellow_stem_borer', 'bph_wbph_borer', 'paddy_bug'] as $pestType)
                            <div class="mb-4">
                                <label class="block text-sm font-medium text-gray-700">{{ ucfirst(str_replace('_', ' ', $pestType)) }}</label>
                                <div class="flex gap-2">
                                    @for($i = 1; $i <= 10; $i++)
                                        <div class="flex flex-col items-center">
                                            <label for="{{ $pestType }}_in_location_0{{ $i }}" class="sr-only">{{ ucfirst(str_replace('_', ' ', $pestType)) }} in Location 0{{ $i }}</label>
                                            <input type="text" name="{{ $pestType }}_in_location_0{{ $i }}" id="{{ $pestType }}_in_location_0{{ $i }}" placeholder="L{{ $i }}" class="block w-full border-gray-300 rounded-md shadow-sm">
                                        </div>
                                    @endfor
                                </div>
                            </div>
                        @endforeach

                        <div class="mb-4 ">
                            <label for="other_pest_incident" class="block text-sm font-medium text-gray-700">Other Pest Incident</label>
                            <input type="text" name="other_pest_incident" id="other_pest_incident" placeholder="Other Pest Incident" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                        </div>

                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-500 border border-transparent rounded-md shadow-sm text-sm font-medium text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            Save Pest Data
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
