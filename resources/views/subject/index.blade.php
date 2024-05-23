<x-layout>

    <x-slot:heading>
        Subject List
    </x-slot:heading>

    <div class="flex-col w-2/3 mx-auto items-center space-y-6 text-sm">
        <div>
            <x-button href="/subject/create">Add Subject</x-button>
        </div>

        @foreach ($subjects as $subject)
            <div class="flex p-4 justify-between content-center text-center border border-gray-200 rounded-lg hover:border-blue-900">
                <a
                    href="/subjects/{{ $subject->slug }}"
                    class="hover:text-blue-900">
                    <strong>{{ $subject->title }}</strong>
                </a>
                <a
                    href="/teachers/{{ $subject->teacher_id }}"
                    class="text-sm font-bold hover:text-blue-900">
                    Prof. {{ $subject->teacher->name }}
                </a>
            </div>
        @endforeach
    </div>

</x-layout>
