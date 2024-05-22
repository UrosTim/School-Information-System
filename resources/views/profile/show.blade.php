<x-layout>
    <x-slot:heading>
        {{ $profile->name }}
    </x-slot:heading>

    Name: {{ $profile->name }}
    Email: {{ $profile->email }}
    Role: {{ $profile->role }}
</x-layout>
