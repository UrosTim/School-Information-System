<x-layout>

    <x-slot:heading>
        Teachers
    </x-slot:heading>

    <div class="block w-full text-sm">
        @foreach ($teachers as $teacher)
            <a
                href="/teachers/{{ $teacher['id'] }}"
                class="inline-block mb-6 mr-6 h-32 content-center w-1/5 text-center px-4 py-6 border border-gray-200 rounded-lg hover:border-blue-900">
                <div>
                    Prof. <strong>{{ $teacher['name'] }}</strong>
                </div>
                <div>
                    {{ $teacher['email'] }}
                </div>
            </a>
            @if($loop->iteration % 4 == 0)
                <br>
            @endif
        @endforeach
    </div>

</x-layout>
