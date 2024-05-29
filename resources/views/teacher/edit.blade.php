<x-layout>
    <x-slot:heading>
        Edit Teacher
    </x-slot:heading>

    <form action="/teachers/{{ $teacher->id }}" method="POST">
        @csrf
        @method('PATCH')
        <div>
            <h2 class="text-2xl font-semibold leading-7 text-gray-900">
                Edit Subject: {{ $teacher->name }}
            </h2>
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <x-form.field>
                    <x-form.label for="name">
                        Name
                    </x-form.label>
                    <div class="mt-2">
                        <x-form.input name="name" id="name" value="{{ $teacher->name }}" required/>
                        <x-form.error name="name"/>
                    </div>
                </x-form.field>

                <x-form.field>
                    <x-form.label for="email">
                        Email
                    </x-form.label>
                    <div class="mt-2">
                        <x-form.input name="email" id="email" value="{{ $teacher->email }}" required/>
                        <x-form.error name="email"/>
                    </div>
                </x-form.field>

                <x-form.field>
                    <x-form.label for="password">
                        Password
                    </x-form.label>
                    <div class="mt-2">
                        <x-form.input name="password" type="password" id="password" required/>
                        <x-form.error name="password"/>
                    </div>
                </x-form.field>

            </div>
            <div class="mt-10">
                <x-form.button>
                    Submit
                </x-form.button>
                <a
                    href="/teachers/{{ $teacher->id }}"
                    class="ml-4 hover:text-blue-900">
                    Cancel
                </a>
            </div>
        </div>
    </form>


</x-layout>
