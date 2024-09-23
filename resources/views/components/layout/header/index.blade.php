<header
    class="relative border-b border-gray-300/60 dark:border-gray-700/60  bg-white dark:bg-gray-800 dark:border-gray-700"
    x-data="{ mobileMenuOpen: false }"
  >
    <nav
      class="mx-auto flex h-20 max-w-7xl items-center ps-4 sm:ps-6 lg:ps-8"
    >
      <!-- Main navbar for large screens -->
      <div class="flex w-full items-center justify-between">
        <!-- Logo-->
        <div class="flex row shrink-0 items-center">
          <a href="{{ url('/') }}">
            <x-icons.logo />
          </a>
          <a href="{{ url('/') }}" class="hidden lg:block">
            <span class="text-4xl text-gray-700 dark:text-gray-100 hidden lg:block ms-2">{{ __(config('info.sitename'))}}</span>
          </a>
        </div>

        <!-- Navigation for large screens -->
        <div
          class="ms-6 hidden items-center justify-between text-xl md:flex md:space-s-0.5 md:text-base lg:space-s-2"
        >
            @foreach (config('info.navlinks') as $navLink)
                <a
                    href="{{ url($navLink['url']) }}"
                    class="ps-3 py-1 text-md font-medium text-gray-800 dark:text-gray-100 transition duration-300 ease-in-out hover:text-red-700 dark:hover:text-red-200"
                >
                    {{ __($navLink['name']) }}
                </a>
            @endforeach

          <!-- Template pages dropdown container -->
          <div class="relative" x-data="{ open: false }">
            <!-- Pages dropdown button -->
            <button
              type="button"
              class="group flex items-center ps-3 py-1 text-md font-medium text-gray-800 dark:text-gray-100 transition duration-300 ease-in-out hover:text-red-700 dark:hover:text-red-200"
              @click="open = true"
            >
              <span :class="{'text-red-700 dark:text-red-200': open}">{{ __('Pages') }}</span>

              <x-icons.chevron-down />
            </button>

            <!-- Pages dropdown -->
            <div
              style="display: none"
              class="absolute right-0 z-20 mt-3 w-52 space-y-1 rounded-xl bg-white dark:bg-gray-700 p-2.5 outline-none drop-shadow filter focus:outline-none"
              x-show.transition="open"
              @click.away="open = false"
            >
                @foreach (config('info.pagelinks') as $pageLink)
                    <a
                        href="{{ url($pageLink['url']) }}"
                        class="block rounded-lg ps-5 py-3.5 font-medium text-gray-800 dark:text-gray-100 transition duration-300 ease-in-out hover:bg-gray-50 dark:bg-gray-700 dark:hover:bg-gray-600 hover:text-red-700 dark:hover:text-red-200"
                    >
                        {{ __($pageLink['name']) }}
                    </a>
                @endforeach
            </div>
          </div>

          <x-theme-toggle />
          <x-language-switcher />
        </div>

        <div class="flex ps-0 items-center">
            <div class="md:hidden flex items-center space-s-2">
                <x-theme-toggle />
                <x-language-switcher />
            </div>

        <!-- Hamburger menu button -->
        <button
          class="group relative ms-2 flex cursor-pointer items-center justify-center rounded-xl bg-gray-50 dark:bg-gray-700 p-3 transition duration-300 ease-in-out hover:bg-gray-100 focus:outline-none md:hidden"
          aria-label="Toggle Navigation"
          @click="mobileMenuOpen = !mobileMenuOpen"
        >
          <span
            class="relative h-3.5 w-4 transform transition duration-500 ease-in-out"
          >
            <span
              class="absolute block h-0.5 rotate-0 transform rounded-full bg-gray-600 dark:bg-gray-400 opacity-100 transition-all duration-300 ease-in-out group-hover:bg-gray-900 dark:group-hover:bg-gray-100"
              :class="mobileMenuOpen ? 'w-0 top-1.5 left-1/2': 'top-0 left-0 w-full'"
            ></span>
            <span
              class="absolute left-0 top-1.5 block h-0.5 w-full transform rounded-full bg-gray-600 dark:bg-gray-400 opacity-100 transition-all duration-300 ease-in-out group-hover:bg-gray-900 dark:group-hover:bg-gray-100"
              :class="mobileMenuOpen ? 'rotate-45': 'rotate-0'"
            ></span>
            <span
              class="absolute left-0 top-1.5 block h-0.5 w-full transform rounded-full bg-gray-600 dark:bg-gray-400 opacity-100 transition-all duration-300 ease-in-out group-hover:bg-gray-900 dark:group-hover:bg-gray-100"
              :class="mobileMenuOpen ? '-rotate-45': 'rotate-0'"
            ></span>
            <span
              class="absolute block h-0.5 rotate-0 transform rounded-full bg-gray-600 dark:bg-gray-400 opacity-100 transition-all duration-300 ease-in-out group-hover:bg-gray-900 dark:group-hover:bg-gray-100"
              :class="mobileMenuOpen ? 'top-1.5 left-1/2 w-0': 'left-0 top-3 w-full'"
            ></span>
          </span>
        </button>
        </div>
      </div>
    </nav>

    <!-- Mobile menu -->
    <nav
      class="md:hidden"
      aria-label="Global"
      id="mobile-menu"
      x-show="mobileMenuOpen"
      @keydown.escape.window="mobileMenuOpen = false"
    >
      <div class="space-y-1 ps-2 pb-3 pt-2">
        @foreach (config('info.navlinks') as $navLink)
            <a
                href="{{ url($navLink['url']) }}"
                class="block rounded-lg bg-gray-50 dark:bg-gray-700 ps-4 py-3 font-medium text-red-700 dark:text-red-300"
                aria-current="page"
            >{{ __($navLink['name']) }}</a>
        @endforeach
      </div>
      <div class="border-t border-gray-300/70 dark:border-gray-100/70 pb-3 pt-4">
        <div
          class="mt-2 ps-6 text-xs font-medium uppercase tracking-widest text-gray-500"
        >
          {{ __('Pages') }}
        </div>
        <div class="mt-3 space-y-1 ps-2">
            @foreach (config('info.pagelinks') as $pageLink)
            <a
                href="{{ url($pageLink['url']) }}"
                class="block rounded-lg ps-4 py-2 font-medium text-gray-600 dark:text-gray-200  transition duration-300 ease-in-out hover:bg-gray-50 dark:bg-gray-700 hover:text-red-700"
            >
                {{ __($pageLink['name']) }}
            </a>
            @endforeach
        </div>
      </div>
    </nav>
  </header>
