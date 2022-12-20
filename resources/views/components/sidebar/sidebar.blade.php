<aside 
x-transition:enter="transition duration-200 ease-in-out transform sm:duration-500"
x-transition:enter-start="-translate-x-full opacity-0"
x-transition:enter-end="translate-x-0 opacity-100"
x-transition:leave="transition duration-300 ease-in-out transform sm:duration-500"
x-transition:leave-start="translate-x-0 opacity-100"
x-transition:leave-end="-translate-x-full opacity-0"

class="flex-shrink-0 w-full transition-transform md:w-64 bg-white border-r dark:border-primary-darker dark:bg-darker fixed left-0 top-14 z-40 md:z-10 md:relative md:top-0 md:transition-none" :class="isMobileMainMenuOpen ? 'translate-x-0 opacity-100 visible' : ' opacity-0 invisible md:opacity-100 md:visible -translate-x-full md:translate-x-0' ">
    <div class="flex flex-col h-full">
      <!-- Sidebar links -->
      <nav aria-label="Main" class="sidebar-nav flex-1 px-2 py-4 space-y-2 overflow-y-auto md:overflow-y-hidden md:hover:overflow-y-auto">
        <!-- Dashboards links -->
        <x-sidebar.dropdown x-data="{ isActive: false, open: true }">
          <x-slot name="trigger">
            <span aria-hidden="true">
              <svg
                class="w-5 h-5"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
                />
              </svg>
            </span>
            <span class="ml-2 text-sm"> Dashboards </span>
          </x-slot>
          <x-slot name="content">
            <x-sidebar.dropdown-link :href="url('/dashboard')" :active="request()->routeIs('dashboard')"> {{ __('Default') }} </x-sidebar.dropdown-link>
            <x-sidebar.dropdown-link :href="url('/dashboard/projects')" :active="request()->routeIs('posts')"> {{ __('Project Mangement (soon)') }} </x-sidebar.dropdown-link>
            <x-sidebar.dropdown-link :href="url('/dashboard/ecommerce')" :active="request()->routeIs('posts')"> {{ __('E-Commerce (soon)') }} </x-sidebar.dropdown-link>
          </x-slot>
        </x-sidebar.dropdown>

        {{-- Posts links --}}
        <x-sidebar.dropdown>
          <x-slot name="trigger">
            <span aria-hidden="true">
              <svg
                class="w-5 h-5"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"
                />
              </svg>
            </span>
            <span class="ml-2 text-sm"> Posts </span>
          </x-slot>
          <x-slot name="content">
            <x-sidebar.dropdown-link :href="url('/dashboard/posts')" :active="request()->routeIs('posts')"> {{ __('All posts') }} </x-sidebar.dropdown-link>
            <x-sidebar.dropdown-link :href="route('post-create')" :active="request()->routeIs('post-create')"> {{ __('Create post') }} </x-sidebar.dropdown-link>
            <x-sidebar.dropdown-link :href="url('/dashboard/posts/trash')" :active="request()->routeIs('posts')"> {{ __('Deleted posts') }} </x-sidebar.dropdown-link>
          </x-slot>
        </x-sidebar.dropdown>

        {{-- Users links --}}
        <x-sidebar.dropdown>
          <x-slot name="trigger">
            <span aria-hidden="true">
              <svg
                class="w-5 h-5"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"
                />
              </svg>
            </span>
            <span class="ml-2 text-sm"> Users </span>
          </x-slot>
          <x-slot name="content">
            <x-sidebar.dropdown-link :href="url('/dashboard/posts')" :active="request()->routeIs('posts')"> {{ __('All users') }} </x-sidebar.dropdown-link>
            <x-sidebar.dropdown-link :href="url('/dashboard/posts')" :active="request()->routeIs('posts')"> {{ __('Create users') }} </x-sidebar.dropdown-link>
            <x-sidebar.dropdown-link :href="url('/dashboard/posts')" :active="request()->routeIs('posts')"> {{ __('Delete users') }} </x-sidebar.dropdown-link>
          </x-slot>
        </x-sidebar.dropdown>
        
      </nav>

      <!-- Sidebar footer -->
      <div class="flex-shrink-0 px-2 py-4 space-y-2">
        <button
          @click="openSettingsPanel"
          type="button"
          class="flex items-center justify-center w-full px-4 py-2 text-sm text-white rounded-md bg-primary hover:bg-primary-dark focus:outline-none focus:ring focus:ring-primary-dark focus:ring-offset-1 focus:ring-offset-white dark:focus:ring-offset-dark"
        >
          <span aria-hidden="true">
            <svg
              class="w-4 h-4 mr-2"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"
              />
            </svg>
          </span>
          <span>Customize</span>
        </button>
      </div>
    </div>
  </aside>