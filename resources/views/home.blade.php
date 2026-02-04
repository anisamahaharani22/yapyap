<x-layout>
    <x-slot:title>
        Welcome
    </x-slot:title>

    <div class="max-w-2xl mx-auto">
        @foreach ($yapyaps as $yapyap)
            <div class="card bg-base-100 shadow mt-8">
                <div class="card-body">
                    <div>
                        <div class="font-semibold">{{ $yapyap['author'] }}</div>
                        <div class="mt-1">{{ $yapyap['message'] }}</div>
                        <div class="text-sm text-gray-500 mt-2">{{ $yapyap['time'] }}</div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-layout>
