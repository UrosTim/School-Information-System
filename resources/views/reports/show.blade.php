<x-layout>
    <x-slot:heading>
        Report: {{ $report->id }}
    </x-slot:heading>

    <div class="space-y-8">
        <div>
            <a
                href="/reports/{{ $report->subject->slug }}"
                class="hover:text-blue-900">
                <p class="text-2xl">
                    {{ $report->subject->title }}
                </p>
            </a>
        </div>
        <div class="flex items-center space-x-6">
            <x-button href="/reports/{{ $report->id }}/edit">
                Edit Subject
            </x-button>
            <div class="text-red-700 hover:font-bold">
                <form
                    action="/reports/{{ $report->id }}"
                    method="POST">
                    @csrf
                    @method('DELETE')
                    <button>
                        Delete
                    </button>
                </form>
            </div>
        </div>
        <div>
            <a
                href="/teachers/{{ $report->subject->teacher->id }}"
                class="">
                <p class="text-sm text-blue-900 hover:font-bold">
                    Prof. {{ $report->subject->teacher->name }}
                </p>
            </a>
        </div>
        <div>
            <a
                href="/students/{{ $report->student->id }}"
                class="">
                <p class="text-lg hover:text-blue-900">
                    {{ $report->student->name }}
                </p>
            </a>
        </div>
        <div>
            Score: <strong>{{ $report->points }}</strong>
        </div>
        <div class="w-1/2">
            Comment:
            <div class="mt-4 text-sm">
                {{ $report->comment }}
            </div>
        </div>
        <div>
            {{ $report->created_at->format('F jS Y') }}
        </div>

    </div>

</x-layout>
