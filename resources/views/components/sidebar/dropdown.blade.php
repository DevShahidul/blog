<div {{ $attributes->merge(['x-data' => "{ isActive: false, open: false }"]) }}>
    <!-- active classes 'bg-primary-100 dark:bg-primary' -->
    <button
      @click="$event.preventDefault(); open = !open"
      class="flex w-full items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-primary-100 dark:hover:bg-primary"
      :class="{ 'bg-primary-100 dark:bg-primary': isActive || open }"
      role="button"
      aria-haspopup="true"
      :aria-expanded="(open || isActive) ? 'true' : 'false'"
    >
        {{ $trigger }}
        <span aria-hidden="true" class="ml-auto">
            <svg
              class="w-4 h-4 transition-transform transform"
              :class="{ 'rotate-180': open }"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
        </span>
    </button>

    <div x-show="open" class="mt-2 space-y-2 px-7" role="menu" arial-label="Components">
        {{ $content }}
    </div>
  </div>