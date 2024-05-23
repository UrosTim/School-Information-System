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
                        <x-form.input name="title" id="title" required />
                        <x-form.error name="title" />
                    </div>
                </x-form.field>

                <x-form.field>
                    <x-form.label for="salary">
                        Salary
                    </x-form.label>
                    <div class="mt-2">
                        <x-form.input name="salary" id="salary" placeholder="$50,000 USD" required />
                        <x-form.error name="salary" />
                    </div>
                </x-form.field>
            </div>
        </div>
    </form>


</x-layout>
