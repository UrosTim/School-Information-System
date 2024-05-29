<x-layout>
    <x-slot:heading>
        {{ $teacher->name }}
    </x-slot:heading>

    <div class="space-y-6 mb-6">
        <h2 class="font-bold text-2xl">
            Prof. {{ $teacher->name }}
        </h2>
        <p class="text-blue-900 border-b border-blue-900">
            Email: {{ $teacher->email }}
        </p>
    </div>
    <div class="flex items-center space-x-6">
        <x-button href="/teachers/{{ $teacher->id }}/edit">
            Edit Teacher
        </x-button>
        <div class="text-red-700 hover:font-bold">
            <form
                action="/teachers/{{ $teacher->id }}"
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
