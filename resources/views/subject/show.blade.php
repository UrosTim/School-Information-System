<x-layout>
    <x-slot:heading>
        {{ $subject->title }}
    </x-slot:heading>

    <div>
        <h2 class="font-bold text-2xl mb-6">
            {{ $subject->title }}
        </h2>

        <div class="flex items-center space-x-6">
            <x-button href="/subjects/{{ $subject->slug }}/edit">
                Edit Subject
            </x-button>
            <div class="text-red-700 hover:font-bold">
                <form
                    action="/subjects/{{ $subject->slug }}"
                    method="POST">
                    @csrf
                    @method('DELETE')
                    <button>
                        Delete
                    </button>
                </form>
            </div>
        </div>

        <div class="mt-4">
            <a href="/teachers/{{ $subject->teacher->id }}"
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
        <p class="my-6 pt-4 border-t border-blue-900">List of students:</p>
        <div class="grid grid-cols-4 gap-4">
            @foreach($students as $student)
                <div>
                    <a
                        href="/students/{{ $student['id'] }}"
                        class="text-sm hover:text-blue-900 grid-cols-2">
                        {{ $student->name }}
                    </a>
                </div>
            @endforeach
        </div>
        <p class="my-6 pt-4 border-t border-blue-900">List of reports:</p>
        <div class="grid grid-cols-3 gap-4">
            @foreach($reports as $report)
                <div>
                    <a
                        href="/reports/{{ $report['id'] }}"
                        class="text-sm hover:text-blue-900">
                        {{ $report->student->name }} - {{ $report->created_at->format('F jS Y') }}
                    </a>
                </div>
            @endforeach
        </div>
    </div>

</x-layout>
