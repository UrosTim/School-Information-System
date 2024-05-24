<x-layout>
    <x-slot:heading>
        Create Subject
    </x-slot:heading>

    <form action="/subjects" method="post">
        <div>
            <h2 class="text-2xl font-semibold leading-7 text-gray-900">
                Create a New Subject
            </h2>
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <x-form.field>
                    <x-form.label for="title">
                        Title
                    </x-form.label>
                    <div class="mt-2">
                        <x-form.input name="title" id="title" required/>
                        <x-form.error name="title"/>
                    </div>
                </x-form.field>

                <x-form.field>
                    <x-form.label for="teacher">
                        Teacher
                    </x-form.label>
                    <div class="mt-2">
                        <x-form.input name="teacher" id="teacher" required/>
                        <x-form.error name="teacher"/>
                    </div>
                </x-form.field>

                <x-form.field>
                    <x-form.label for="description">
                        Description
                    </x-form.label>
                    <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600">
                        <textarea
                            name="description"
                            id="description"
                            required
                            class="block flex-1 border-0 bg-transparent py-1.5 px-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">
                        </textarea>
                    </div>
                    <x-form.error name="description"/>
                </x-form.field>
            </div>
            <div class="mt-10">
                <x-form.button>
                    Submit
                </x-form.button>
            </div>
        </div>
    </form>


</x-layout>
