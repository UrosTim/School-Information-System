<x-layout>
    <x-slot:heading>
        Report: {{ $report->id }}
    </x-slot:heading>

    <div class="space-y-8">
        <div>
            <a
                href="/subjects/{{ $report->subject->slug }}"
                class="hover:text-blue-900">
                <p class="text-2xl">
                    {{ $report->subject->title }}
                </p>
            </a>
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
            Score: {{ $report->points }}
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
