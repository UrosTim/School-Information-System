<x-layout>
    <x-slot:heading>
        {{ $subject->title }}
    </x-slot:heading>

    <div>
        <h2 class="font-bold text-2xl">
            {{ $subject->title }}
        </h2>
        <div class="mt-4">
            <a href="/teachers/{{ $subject->teacher['id'] }}"
               class="text-blue-900 text-sm hover:font-bold">
                Prof. {{ $subject->teacher->name }}
            </a>
        </div>
        <p class="text-sm text-blue-900 mt-2">
            {{ $subject->teacher->email }}
        </p>
        <p class="w-1/3 mt-10">
            {{ $subject->description }}
        </p>
        <p class="my-6">List of students:</p>
        @foreach($students as $student)
            <div>
                <a
                    href="/students/{{ $student['id'] }}"
                    class="text-sm hover:text-blue-900">
                    {{ $student->name }}
                </a>
            </div>
        @endforeach
    </div>

</x-layout>
