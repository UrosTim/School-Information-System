<x-layout>
    <x-slot:heading>
        Create Report
    </x-slot:heading>

    <form action="/reports" method="POST">
        @csrf
        <div>
            <h2 class="text-2xl font-semibold leading-7 text-gray-900">
                Create a New Report
            </h2>
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <x-form.field>
                    <x-form.label for="subject_id">
                        Subject
                    </x-form.label>
                    <div class="mt-2">
                        <x-form.input name="subject_id" id="subject_id" placeholder="subject_id" required/>
                        <x-form.error name="subject_id"/>
                    </div>
                </x-form.field>

                <x-form.field>
                    <x-form.label for="student_id">
                        Student
                    </x-form.label>
                    <div class="mt-2">
                        <x-form.input name="student_id" id="student_id" placeholder="student_id" required/>
                        <x-form.error name="student_id"/>
                    </div>
                </x-form.field>

                <x-form.field>
                    <x-form.label for="points">
                        Points
                    </x-form.label>
                    <div class="mt-2">
                        <x-form.input name="points" id="points" placeholder="0-100" required/>
                        <x-form.error name="points"/>
                    </div>
                </x-form.field>

                <x-form.field>
                    <x-form.label for="comment">
                        Comment
                    </x-form.label>
                    <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600">
                        <textarea
                            name="comment"
                            id="comment"
                            required
                            class="block flex-1 border-0 bg-transparent py-1.5 px-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">
                        </textarea>
                    </div>
                    <x-form.error name="comment"/>
                </x-form.field>

            </div>
            <div class="mt-10">
                <x-form.button>
                    Submit
                </x-form.button>
                <a
                    href="/reports"
                    class="ml-4 hover:text-blue-900">
                    Cancel
                </a>
            </div>
        </div>
    </form>


</x-layout>
