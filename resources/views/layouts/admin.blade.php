<!DOCTYPE html>
<html
  lang="{{ str_replace('_', '-', app()->getLocale()) }}"
  class="h-full bg-gray-100"
>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap"
    />

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    @livewireStyles
  </head>
  <body class="text-gray-9000 h-full font-sans antialiased">
    <div x-data="toggle" @keydown.escape.window="off">
      <!-- Off-canvas menu for mobile, show/hide based on off-canvas menu state. -->
      <div
        x-show="value"
        x-trap.noscroll="value"
        x-cloak
        role="dialog"
        aria-modal="true"
        class="fixed inset-0 z-40 flex md:hidden"
      >
        <!--
          Off-canvas menu overlay, show/hide based on off-canvas menu state.
        -->
        <div
          x-show="value"
          x-transition:enter="transition-opacity ease-linear duration-300"
          x-transition:enter-start="opacity-0"
          x-transition:enter-end="opacity-100"
          x-transition:leave="transition-opacity ease-linear duration-300"
          x-transition:leave-start="opacity-100"
          x-transition:leave-end="opacity-0"
          class="fixed inset-0 bg-gray-600 bg-opacity-75"
          aria-hidden="true"
        ></div>

        <!--
          Off-canvas menu, show/hide based on off-canvas menu state.
        -->
        <div
          x-show="value"
          x-transition:enter="transition ease-in-out duration-300 transform"
          x-transition:enter-start="-translate-x-full"
          x-transition:enter-end="translate-x-0"
          x-transition:leave="transition ease-in-out duration-300 transform"
          x-transition:leave-start="translate-x-0"
          x-transition:leave-end="-translate-x-full"
          class="relative flex w-full max-w-xs flex-1 flex-col bg-gray-800 pt-5 pb-4"
        >
          <!--
            Close button, show/hide based on off-canvas menu state.
          -->
          <div
            x-show="value"
            x-transition:enter="ease-in-out duration-300"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="ease-in-out duration-300"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="absolute top-0 right-0 -mr-12 pt-2"
          >
            <button
              type="button"
              class="ml-1 flex h-10 w-10 items-center justify-center rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
              @click="off"
            >
              <span class="sr-only">Close sidebar</span>
              <x-heroicon-o-x class="h-6 w-6 text-white" />
            </button>
          </div>

          <div class="flex flex-shrink-0 items-center px-4">
            <img
              class="h-8 w-auto"
              src="https://tailwindui.com/img/logos/workflow-logo-indigo-500-mark-white-text.svg"
              alt="Workflow"
            />
          </div>
          <div class="mt-5 h-0 flex-1 overflow-y-auto">
            <nav class="space-y-1 px-2">
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
              <a
                href="#"
                class="group flex items-center rounded-md bg-gray-900 px-2 py-2 text-base font-medium text-white"
              >
                <x-heroicon-o-home
                  class="mr-4 h-6 w-6 flex-shrink-0 text-gray-300"
                />
                Dashboard
              </a>

              <a
                href="#"
                class="group flex items-center rounded-md px-2 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white"
              >
                <x-heroicon-o-users
                  class="mr-4 h-6 w-6 flex-shrink-0 text-gray-400 group-hover:text-gray-300"
                />
                Team
              </a>
            </nav>
          </div>
        </div>

        <div class="w-14 flex-shrink-0" aria-hidden="true">
          <!-- Dummy element to force sidebar to shrink to fit close icon -->
        </div>
      </div>

      <!-- Static sidebar for desktop -->
      <div class="hidden md:fixed md:inset-y-0 md:flex md:w-64 md:flex-col">
        <!-- Sidebar component, swap this element with another sidebar if you like -->
        <div class="flex min-h-0 flex-1 flex-col bg-gray-800">
          <div class="flex h-16 flex-shrink-0 items-center bg-gray-900 px-4">
            <img
              class="h-8 w-auto"
              src="https://tailwindui.com/img/logos/workflow-logo-indigo-500-mark-white-text.svg"
              alt="Workflow"
            />
          </div>
          <div class="flex flex-1 flex-col overflow-y-auto">
            <nav class="flex-1 space-y-1 px-2 py-4">
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
              <a
                href="#"
                class="group flex items-center rounded-md bg-gray-900 px-2 py-2 text-sm font-medium text-white"
              >
                <x-heroicon-o-home
                  class="mr-3 h-6 w-6 flex-shrink-0 text-gray-300"
                />
                Dashboard
              </a>

              <a
                href="#"
                class="group flex items-center rounded-md px-2 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white"
              >
                <x-heroicon-o-users
                  class="mr-3 h-6 w-6 flex-shrink-0 text-gray-400 group-hover:text-gray-300"
                />
                Team
              </a>
            </nav>
          </div>
        </div>
      </div>

      <div class="flex flex-col md:pl-64">
        <!-- navbar -->
        <div class="sticky top-0 z-10 flex h-16 flex-shrink-0 bg-white shadow">
          <button
            type="button"
            class="border-r border-gray-200 px-4 text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500 md:hidden"
            @click="on"
          >
            <span class="sr-only">Open sidebar</span>
            <x-heroicon-o-menu-alt-2 class="h-6 w-6" />
          </button>
          <div class="flex flex-1 justify-between px-4">
            <div class="flex flex-1">
              <form class="flex w-full md:ml-0" action="#" method="GET">
                <label for="search-field" class="sr-only">Search</label>
                <div
                  class="relative w-full text-gray-400 focus-within:text-gray-600"
                >
                  <div
                    class="pointer-events-none absolute inset-y-0 left-0 flex items-center"
                  >
                    <x-heroicon-s-search class="h-5 w-5" />
                  </div>
                  <input
                    id="search-field"
                    class="block h-full w-full border-transparent py-2 pr-3 pl-8 text-gray-900 placeholder-gray-500 focus:border-transparent focus:placeholder-gray-400 focus:outline-none focus:ring-0 sm:text-sm"
                    placeholder="Search"
                    type="search"
                    name="search"
                  />
                </div>
              </form>
            </div>
            <div class="ml-4 flex items-center md:ml-6">
              <button
                type="button"
                class="rounded-full bg-white p-1 text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
              >
                <span class="sr-only">View notifications</span>
                <x-heroicon-o-bell class="h-6 w-6" />
              </button>

              <!-- Profile dropdown -->
              <div class="relative ml-3">
                <x-nore::dropdown align="right" width="48">
                  <x-slot name="trigger">
                    <button
                      class="flex items-center text-sm font-medium text-gray-500 transition duration-150 ease-in-out hover:text-gray-700 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-indigo-500 focus-visible:ring-offset-2"
                    >
                      <div>{{ Auth::user()->name }}</div>

                      <div class="ml-1">
                        <x-heroicon-s-chevron-down
                          class="h-4 w-4 fill-current"
                        />
                      </div>
                    </button>
                  </x-slot>

                  <x-slot name="content">
                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                      @csrf
                      <x-nore::dropdown-link href="#">Your Profile</x-nore::dropdown-link>
                      <x-nore::dropdown-link
                        :href="route('logout')"
                        onclick="event.preventDefault();this.closest('form').submit();"
                      >
                        {{ __('Log Out') }}
                      </x-nore::dropdown-link>
                    </form>
                  </x-slot>
                </x-nore::dropdown>
              </div>
            </div>
          </div>
        </div>

        <main class="relative flex-1 overflow-y-auto focus:outline-none">
          <div class="py-6">
            @if (isset($pageTitle) || isset($header) || isset($headerActions))
              <div
                class="mx-auto flex flex-col space-y-4 px-4 sm:flex-row sm:items-center sm:justify-between sm:space-y-0 sm:px-6 md:px-8"
              >
                @if(isset($pageTitle))
                  <div>
                    <x-nore::page-title>{{ $pageTitle }}</x-nore::page-title>
                  </div>
                @elseif(isset($header))
                  <div>{{ $header }}</div>
                @endif @isset($headerActions)
                  <div>{{ $headerActions }}</div>
                @endisset
              </div>
            @endif {{ $slot }}
          </div>
        </main>
      </div>
    </div>
    <x-nore::toast />

    @livewireScripts
  </body>
</html>
