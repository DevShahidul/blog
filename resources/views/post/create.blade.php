<x-admin.admin-layout>
    <x-slot name="header">
        <h1 class="text-2xl font-semibold">{{ __('Create new post') }}</h1>
        <a href="{{ route('posts') }}" class="px-4 py-2 text-sm text-white rounded-md bg-primary hover:bg-primary-dark focus:outline-none focus:ring focus:ring-primary focus:ring-offset-1 focus:ring-offset-white dark:focus:ring-offset-dark capitalize">
            {{ __('Back to posts') }}
        </a>
    </x-slot>

    
</x-admin.admin-layout>
