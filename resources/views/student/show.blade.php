<x-layout>
    <x-slot:heading>
        {{ $student->name }}
    </x-slot:heading>

    <div class="space-y-6">
        <h2 class="font-bold text-2xl">
            {{ $student->name }}
        </h2>
        <p class="text-blue-900">
            Email: {{ $student->email }}
        </p>
    </div>
    <div class="py-6 border-t border-blue-900">
        List of subjects:
        @foreach($subjects as $subject)
            <div class="block pt-2 font-bold">
                <a
                    href="/subjects/{{ $subject['id'] }}"
                    class="hover:text-blue-900">
                    {{ $subject->title }}
                </a>
            </div>
        @endforeach
    </div>
</x-layout>
