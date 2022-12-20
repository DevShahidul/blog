@props(['active'])

<a
    {{ $attributes->merge(['class' => 'block p-2 text-sm transition-colors duration-200 rounded-md @if($active) text-gray-700 hover:text-gray-700 dark:text-light dark:hover:text-light @else text-gray-400 hover:text-gray-700 dark:text-gray-400 dark:hover:text-light @endif', 'role' => 'menuitem' ]) }}
>
    {{ $slot }}
</a>