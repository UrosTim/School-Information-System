<x-layout>
    <x-slot:heading>
        {{ $profile->name }}
    </x-slot:heading>

    <div class="space-y-12">
        <div class="text-2xl">
            Name: {{ $profile->name }}
        </div>
        <div>
            Email: {{ $profile->email }}
        </div>
        <div>
            Role: {{ $profile->role }}
        </div>
    </div>
    <div class="mt-10">
        <div>
            My subjects:
        </div>
        <div>
            @foreach($subjects as $subject)
                <div class="block pt-2 font-bold text-sm">
                    <a
                        href="/subjects/{{ $subject->slug }}"
                        class="hover:text-blue-900">
                        {{ $subject->title }}
                    </a>
                </div>
            @endforeach
        </div>
    </div>
    <div class="mt-10">
        <div>
            My reports:
        </div>
        <div>
            @foreach($reports as $report)
                <div class="block pt-2 font-bold text-sm">
                    <a
                        href="/subjects/{{ $report->id }}"
                        class="hover:text-blue-900">
                        {{ $report->subject->title }} - {{ $report->created_at->format('F jS Y') }}
                    </a>
                </div>
            @endforeach
        </div>
    </div>

</x-layout>
