<!-- Footer -->
<footer class="bg-white dark:bg-gray-800 py-12 sm:py-20 lg:py-24">
    <div class="mx-auto max-w-2xl px-4 sm:px-6 lg:max-w-screen-xl lg:px-8">
      <!-- Logo & Social Links -->
      <div class="sm:flex sm:items-center sm:justify-between">
        <!-- Logo -->
        <div class="flex flex-col sm:flex-row items-center justify-center">
            <a href="{{ url('/') }}" class="block">
                <x-icons.logo />
            </a>
            <a href="{{ url('/') }}" class="block">
                <div class="w-min sm:w-full text-4xl text-gray-700 dark:text-gray-100 sm:ml-2 flex items-center justify-center">{{ __(config('info.sitename'))}}</div>
            </a>
        </div>

        <!-- Social Links-->
        <div class="mt-6 flex items-center justify-center sm:mt-0">
          <ul class="flex items-center space-x-3 sm:ml-4">
            @foreach (config('info.sociallinks') as $link)
            <li>
                <a
                    href="{{ url($link['url'])}}" target="_blank"
                    class="group flex h-10 w-10 items-center justify-center rounded-full border border-gray-300/70 bg-transparent transition duration-300 ease-in-out sm:h-12 sm:w-12"
                >
                    <x-dynamic-component :component="$link['name']" />
                </a>
            </li>
            @endforeach
          </ul>
        </div>
      </div>

      <!-- Footer Links Container -->
      <div
        class="mt-10 border-t border-t-gray-300/70 pt-10 md:flex md:items-center md:justify-between"
      >
        <!-- Footer Links -->
        <nav
          class="-mx-5 -my-2 flex flex-wrap items-center justify-center md:justify-start"
          aria-label="Footer"
        >
            @foreach (config('info.footerlinks') as $link)
            <a
                href="{{ url($link['url']) }}"
                class="px-5 py-2 text-base text-gray-500 transition duration-300 ease-in-out hover:text-red-700"
            >
                {{ __($link['name']) }}
            </a>
            @endforeach
        </nav>

        <!-- Copyright Text -->
        <p
          class="ml-0 mt-8 flex shrink-0 items-center justify-center text-base text-gray-500 md:ml-6 md:mt-0"
        >
            &copy; 2024 {{ __(config('info.sitename'))}}. {{ __('All rights reserved') }}.
        </p>
      </div>
    </div>
  </footer>
