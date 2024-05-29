<x-layout>
    <x-slot:heading>
        {{ $student->name }}
    </x-slot:heading>

    <div class="space-y-6">
        <h2 class="font-bold text-2xl">
            {{ $student->name }}
        </h2>
        <p class="text-blue-900 border-b border-blue-900">
            Email: {{ $student->email }}
        </p>
    </div>
    <div class="flex items-center space-x-6 mt-6">
        <x-button href="/students/{{ $student->id }}/edit">
            Edit Student
        </x-button>
        <div class="text-red-700 hover:font-bold">
            <form
                action="/students/{{ $student->id }}"
                method="POST">
                @csrf
                @method('DELETE')
                <button>
                    Delete
                </button>
            </form>
        </div>
    </div>
    <div class="py-6">
        List of subjects:
        @foreach($subjects as $subject)
            <div class="block pt-2 text-sm font-bold">
                <a
                    href="/subjects/{{ $subject->slug }}"
                    class="hover:text-blue-900">
                    {{ $subject->title }}
                </a>
            </div>
        @endforeach
    </div>
    <div class="py-6 border-t border-blue-900">
        My reports:
        @foreach($reports as $report)
            <div class="block pt-2 text-sm font-bold">
                <a
                    href="/reports/{{ $report->id }}"
                    class="hover:text-blue-900">
                    {{ $report->subject->title }} - {{ $report->created_at->format('F jS Y') }}
                </a>
            </div>
        @endforeach
    </div>
    Prosek:

</x-layout>
