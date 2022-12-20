@props(['actiev']);

<a {{ $attributes->merge(['class' => 'flex items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light @if($active) bg-primary-100 dark:bg-primary @else hover:bg-primary-100 dark:hover:bg-primary @endif']) }}> 
    {{ $slot }} 
</a>