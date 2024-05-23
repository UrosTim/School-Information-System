<x-layout>
    <x-slot:heading>
        {{ $teacher->name }}
    </x-slot:heading>

    <div class="space-y-6">
        <h2 class="font-bold text-2xl">
            Prof. {{ $teacher->name }}
        </h2>
        <p class="text-blue-900">
            Email: {{ $teacher->email }}
        </p>
    </div>
    <div class="py-6 border-t border-blue-900">
        List of subjects:
        @foreach($subjects as $subject)
            <div class="block pt-2 font-bold">
                <a
                    href="/subjects/{{ $subject->slug }}"
                    class="hover:text-blue-900">
                    {{ $subject->title }}
                </a>
            </div>
        @endforeach
    </div>
</x-layout>
