<x-layout>

    <x-slot:heading>
        Students
    </x-slot:heading>

    <div class="flex-col w-2/3 mx-auto text-sm">
        <div class="mb-6">
            <x-button href="/students/create">Add Student</x-button>
        </div>
        @foreach ($students as $student)
            <a
                href="/students/{{ $student['id'] }}"
                class="content-center">
                <div class="flex justify-between border mb-6 p-4 border-gray-50 rounded-lg hover:border-blue-900">
                    <p class="font-bold">{{ $student['name'] }}</p>
                    <p>{{ $student['email'] }}</p>
                </div>
            </a>
        @endforeach
    </div>

</x-layout>
