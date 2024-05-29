<x-layout>

    <x-slot:heading>
        Reports
    </x-slot:heading>

    <div class="flex-col w-2/3 mx-auto text-sm">
        <div class="mb-6">
            <x-button href="/reports/create">Add Report</x-button>
        </div>
        @foreach ($reports as $report)
            <a
                href="/reports/{{ $report['id'] }}"
                class="flex mb-6 content-center justify-between text-center px-4 py-6 border border-gray-200 rounded-lg hover:border-blue-900">
                <div>
                    <strong>{{ $report->subject->title }}</strong>
                </div>
                <div class="text-sm text-blue-900">
                    Prof. {{ $report->subject->teacher->name }}
                </div>
                <div class="text-sm font-bold text-blue-900">
                    {{ $report->student->name }}: {{ $report->points }}/100
                </div>
            </a>
        @endforeach
    </div>

</x-layout>
