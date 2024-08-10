<x-layout>
    <x-slot:title>Projects</x-slot>
    <!-- Category Header -->
    <section class="bg-gray-50 dark:bg-gray-700 py-12 sm:py-20 lg:py-24">
        <!-- Conatiner -->
        <div
          class="mx-auto max-w-xl px-4 sm:px-12 md:max-w-3xl lg:max-w-screen-xl lg:px-8"
        >
          <div
            class="flex w-full flex-col items-center md:flex-row md:justify-between"
          >
            <!-- Category -->
            <div
              class="order-2 mt-8 flex flex-col items-center md:order-1 md:mt-0 md:flex-row"
            >
              <!-- Category Image -->
              <div class="flex-shrink-0">
                <div class="relative h-[100px] w-[100px] rounded-2xl bg-gray-100">
                  <img
                    src="images/technology.jpeg"
                    alt="Technology"
                    class="h-full w-full rounded-2xl object-cover object-center"
                  />
                  <span
                    class="absolute inset-0 rounded-2xl shadow-inner"
                    aria-hidden="true"
                  />
                </div>
              </div>

              <div class="mt-6 text-center md:ml-5 md:mt-0 md:text-left">
                <p class="text-xs uppercase tracking-widest text-red-700 dark:text-red-300">
                  {{ __('Recent in') }}
                </p>
                <h1
                  class="mt-1.5 text-3xl font-medium tracking-normal text-gray-900 dark:text-gray-50 sm:text-4xl md:tracking-tight lg:text-5xl lg:leading-tight"
                >
                {{ __('Technology') }}
                </h1>
              </div>
            </div>

            <!-- Breadcrumb -->
            <div class="order-1 md:order-2">
              <nav
                aria-label="breadcrumb"
                class="flex items-center space-x-1.5 text-[15px] sm:space-x-4"
              >
                <span>
                  <a
                    href="{{ url('/')}}"
                    class="group flex items-center text-gray-500 no-underline transition duration-300 ease-in-out hover:text-gray-900 hover:no-underline"
                  >
                    <x-icons.home />
                    {{ __(config('info.sitename')) }}
                  </a>
                </span>

                <span class="text-gray-400">
                  <x-icons.chevron-right />
                </span>

                <span class="text-red-700 dark:text-red-300">{{ __('Technology') }}</span>
              </nav>
            </div>
          </div>
        </div>
      </section>

      <!-- Primary Feed -->
      <section
        class="relative mx-auto max-w-xl px-5 py-12 sm:px-12 sm:py-16 md:max-w-3xl lg:max-w-screen-xl lg:px-8 lg:py-20"
      >
        <div class="w-full lg:grid lg:grid-cols-3 lg:gap-8 xl:gap-12">
          <!-- Articles -->
          <div class="col-span-2">
            <x-cards.article-large />
            <x-cards.article-large />
            <x-cards.article-large />
            <x-cards.article-large />
            <x-cards.article-large />
            <x-cards.article-large />
            <x-cards.article-large />
          </div>

          <!-- Sidebar -->
          <div
            class="mx-auto mt-12 w-full max-w-xl sm:mt-16 md:max-w-3xl lg:col-span-1 lg:mt-0 lg:max-w-none"
          >
            <!-- Most read articles -->
            <div class="w-full rounded-2xl bg-gray-50 dark:bg-gray-800 p-5 sm:p-8">
              <h3
                class="relative border-b border-gray-300/70 dark:border-gray-400/70 pb-2.5 text-2xl font-medium text-gray-900 dark:text-gray-100 before:absolute before:-bottom-px before:left-0 before:h-px before:w-24 before:bg-red-600 before:content-['']"
              >
                {{ __('Most read in Technology') }}
              </h3>

              <!-- Articles -->
              <div class="space-y-6 pt-6 sm:space-y-5 lg:space-y-6 xl:space-y-5">
                <!-- 1st Article -->
                <article class="flex space-x-4 sm:space-x-6 lg:space-x-4">
                  <!-- Image -->
                  <a
                    href="{{ url('/blog') }}"
                    class="group relative z-10 animate-pulse overflow-hidden rounded-2xl bg-gray-100 dark:bg-gray-900"
                  >
                    <img
                      data-src="images/trending-01.jpeg"
                      class="lazy h-24 w-24 rounded-2xl object-cover object-center opacity-0 transition duration-300 ease-in-out group-hover:scale-110 sm:h-28 sm:w-28 lg:h-20 lg:w-20 xl:h-24 xl:w-24"
                    />
                  </a>

                  <!-- Content -->
                  <div class="w-2/3">
                    <div
                      class="flex h-full w-full flex-1 flex-col justify-center"
                    >
                      <div>
                        <a
                          href="{{ url('/blog') }}"
                          class="text-md font-medium leading-snug tracking-normal text-gray-900 dark:text-gray-100 decoration-gray-800 decoration-2 transition duration-300 ease-in-out hover:underline"
                        >
                          How to generate better ideas
                        </a>
                      </div>

                      <!-- Author -->
                      <div class="mt-2 flex items-center justify-between">
                        <!-- Author meta -->
                        <div class="flex items-center justify-center">
                          <div class="text-sm">
                            <span class="text-gray-500">By </span>
                            <a
                              class="font-medium text-gray-700 dark:text-gray-400 hover:underline"
                              href="{{ url('/about') }}"
                              >{{ __(config('info.sitename')) }}</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </article>

                <!-- 2nd Article -->
                <article class="flex space-x-4 sm:space-x-6 lg:space-x-4">
                  <!-- Image -->
                  <a
                    href="{{ url('/blog') }}"
                    class="group relative z-10 animate-pulse overflow-hidden rounded-2xl bg-gray-100 dark:bg-gray-900"
                  >
                    <img
                      data-src="images/trending-02.jpeg"
                      class="lazy h-24 w-24 rounded-2xl object-cover object-center opacity-0 transition duration-300 ease-in-out group-hover:scale-110 sm:h-28 sm:w-28 lg:h-20 lg:w-20 xl:h-24 xl:w-24"
                    />
                  </a>

                  <!-- Content -->
                  <div class="w-2/3">
                    <div
                      class="flex h-full w-full flex-1 flex-col justify-center"
                    >
                      <div>
                        <a
                          href="{{ url('/blog') }}"
                          class="text-md font-medium leading-snug tracking-normal text-gray-900 dark:text-gray-100 decoration-gray-800 decoration-2 transition duration-300 ease-in-out hover:underline"
                        >
                          7 simple things you can do to improve your design
                        </a>
                      </div>

                      <!-- Author -->
                      <div class="mt-2 flex items-center justify-between">
                        <!-- Author meta -->
                        <div class="flex items-center justify-center">
                          <div class="text-sm">
                            <span class="text-gray-500">By </span>
                            <a
                              class="font-medium text-gray-700 dark:text-gray-400 hover:underline"
                              href="{{ url('/about') }}"
                              >{{ __(config('info.sitename')) }}</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </article>

                <!-- 3rd Article -->
                <article class="flex space-x-4 sm:space-x-6 lg:space-x-4">
                  <!-- Image -->
                  <a
                    href="{{ url('/blog') }}"
                    class="group relative z-10 animate-pulse overflow-hidden rounded-2xl bg-gray-100 dark:bg-gray-900"
                  >
                    <img
                      data-src="images/trending-03.jpeg"
                      class="lazy h-24 w-24 rounded-2xl object-cover object-center opacity-0 transition duration-300 ease-in-out group-hover:scale-110 sm:h-28 sm:w-28 lg:h-20 lg:w-20 xl:h-24 xl:w-24"
                    />
                  </a>

                  <!-- Content -->
                  <div class="w-2/3">
                    <div
                      class="flex h-full w-full flex-1 flex-col justify-center"
                    >
                      <div>
                        <a
                          href="{{ url('/blog') }}"
                          class="text-md font-medium leading-snug tracking-normal text-gray-900 dark:text-gray-100 decoration-gray-800 decoration-2 transition duration-300 ease-in-out hover:underline"
                        >
                          6 books that will change your life
                        </a>
                      </div>

                      <!-- Author -->
                      <div class="mt-2 flex items-center justify-between">
                        <div class="flex items-center justify-center">
                          <div class="text-sm">
                            <span class="text-gray-500">By </span>
                            <a
                              class="font-medium text-gray-700 dark:text-gray-400 hover:underline"
                              href="{{ url('/about') }}"
                              >{{ __(config('info.sitename')) }}</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </article>

                <!-- 4th Article -->
                <article class="flex space-x-4 sm:space-x-6 lg:space-x-4">
                  <!-- Images -->
                  <a
                    href="{{ url('/blog') }}"
                    class="group relative z-10 animate-pulse overflow-hidden rounded-2xl bg-gray-100 dark:bg-gray-900"
                  >
                    <img
                      data-src="images/trending-04.jpeg"
                      class="lazy h-24 w-24 rounded-2xl object-cover object-center opacity-0 transition duration-300 ease-in-out group-hover:scale-110 sm:h-28 sm:w-28 lg:h-20 lg:w-20 xl:h-24 xl:w-24"
                    />
                  </a>

                  <!-- Content -->
                  <div class="w-2/3">
                    <div
                      class="flex h-full w-full flex-1 flex-col justify-center"
                    >
                      <div>
                        <a
                          href="{{ url('/blog') }}"
                          class="text-md font-medium leading-snug tracking-normal text-gray-900 dark:text-gray-100 decoration-gray-800 decoration-2 transition duration-300 ease-in-out hover:underline"
                        >
                          The importance of having a positive work culture
                        </a>
                      </div>

                      <!-- Content -->
                      <div class="mt-2 flex items-center justify-between">
                        <div class="flex items-center justify-center">
                          <div class="text-sm">
                            <span class="text-gray-500">By </span>
                            <a
                              class="font-medium text-gray-700 dark:text-gray-400 hover:underline"
                              href="{{ url('/about') }}"
                              >{{ __(config('info.sitename')) }}</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </article>
              </div>
            </div>

            <!-- Related Tags -->
            <div class="mt-8 w-full rounded-2xl bg-gray-50 dark:bg-gray-800 p-5 sm:p-8">
              <h3
                class="relative border-b border-gray-300/70 pb-2.5 text-2xl font-medium text-gray-900 dark:text-gray-100 before:absolute before:-bottom-px before:left-0 before:h-px before:w-24 before:bg-red-600 before:content-['']"
              >
                Related tags
              </h3>

              <!-- Tags -->
              <div class="pt-5">
                <ul class="-m-1 flex flex-wrap justify-start">
                  <li>
                    <a href="{{ url('/tag') }}">
                      <span
                        class="m-1 inline-flex items-center rounded-full border border-gray-300/70 bg-transparent px-4 py-1 text-sm font-medium text-gray-800 dark:text-gray-400 transition duration-300 ease-in-out hover:text-red-700 dark:hover:text-red-200 sm:px-4 sm:py-1.5"
                      >
                        Trends
                      </span>
                    </a>
                  </li>
                  <li>
                    <a href="{{ url('/tag') }}">
                      <span
                        class="m-1 inline-flex items-center rounded-full border border-gray-300/70 bg-transparent px-4 py-1 text-sm font-medium text-gray-800 dark:text-gray-400 transition duration-300 ease-in-out hover:text-red-700 dark:hover:text-red-200 sm:px-4 sm:py-1.5"
                      >
                        Tips
                      </span>
                    </a>
                  </li>
                  <li>
                    <a href="{{ url('/tag') }}">
                      <span
                        class="m-1 inline-flex items-center rounded-full border border-gray-300/70 bg-transparent px-4 py-1 text-sm font-medium text-gray-800 dark:text-gray-400 transition duration-300 ease-in-out hover:text-red-700 dark:hover:text-red-200 sm:px-4 sm:py-1.5"
                      >
                        Ideas
                      </span>
                    </a>
                  </li>
                  <li>
                    <a href="{{ url('/tag') }}">
                      <span
                        class="m-1 inline-flex items-center rounded-full border border-gray-300/70 bg-transparent px-4 py-1 text-sm font-medium text-gray-800 dark:text-gray-400 transition duration-300 ease-in-out hover:text-red-700 dark:hover:text-red-200 sm:px-4 sm:py-1.5"
                      >
                        Security
                      </span>
                    </a>
                  </li>
                  <li>
                    <a href="{{ url('/tag') }}">
                      <span
                        class="m-1 inline-flex items-center rounded-full border border-gray-300/70 bg-transparent px-4 py-1 text-sm font-medium text-gray-800 dark:text-gray-400 transition duration-300 ease-in-out hover:text-red-700 dark:hover:text-red-200 sm:px-4 sm:py-1.5"
                      >
                        Gaming
                      </span>
                    </a>
                  </li>
                  <li>
                    <a href="{{ url('/tag') }}">
                      <span
                        class="m-1 inline-flex items-center rounded-full border border-gray-300/70 bg-transparent px-4 py-1 text-sm font-medium text-gray-800 dark:text-gray-400 transition duration-300 ease-in-out hover:text-red-700 dark:hover:text-red-200 sm:px-4 sm:py-1.5"
                      >
                        Climate
                      </span>
                    </a>
                  </li>
                  <li>
                    <a href="{{ url('/tag') }}">
                      <span
                        class="m-1 inline-flex items-center rounded-full border border-gray-300/70 bg-transparent px-4 py-1 text-sm font-medium text-gray-800 dark:text-gray-400 transition duration-300 ease-in-out hover:text-red-700 dark:hover:text-red-200 sm:px-4 sm:py-1.5"
                      >
                        Gear
                      </span>
                    </a>
                  </li>
                  <li>
                    <a href="{{ url('/tag') }}">
                      <span
                        class="m-1 inline-flex items-center rounded-full border border-gray-300/70 bg-transparent px-4 py-1 text-sm font-medium text-gray-800 dark:text-gray-400 transition duration-300 ease-in-out hover:text-red-700 dark:hover:text-red-200 sm:px-4 sm:py-1.5"
                      >
                        Reviews
                      </span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>

            <!-- Social Media Links -->
            <div class="mt-8 w-full rounded-2xl bg-gray-50 dark:bg-gray-800 p-5 sm:p-8">
              <h3
                class="relative border-b border-gray-300/70 pb-2.5 text-2xl font-medium text-gray-900 dark:text-gray-100 before:absolute before:-bottom-px before:left-0 before:h-px before:w-24 before:bg-red-600 before:content-['']"
              >
                Follow us
              </h3>

              <!-- Links -->
              <div class="pt-5">
                <div class="overflow-hidden">
                    @foreach (config('info.sociallinks') as $link)
                    <a
                      href="{{ url($link['url']) }}"
                      class="group flex w-full items-center justify-between"
                      >
                      <div class="flex items-center">
                          <div>
                          <span
                              class="flex h-9 w-9 items-center justify-center rounded-full border border-gray-300/70 bg-transparent transition duration-300 ease-in-out"
                          >
                              <x-dynamic-component :component="$link['name']" />
                          </span>
                          </div>

                          <div class="relative col-span-3 flex flex-col flex-wrap">
                          <div
                              class="box-border flex w-full flex-1 flex-col justify-between px-6 md:px-0"
                          >
                              <div
                              class="transition-color relative z-10 ml-3 text-base font-medium text-gray-700 dark:text-gray-300 duration-300 ease-in-out group-hover:text-red-600 dark:hover:text-red-200"
                              >
                              {{ $link['title'] }}
                              </div>
                          </div>
                          </div>
                      </div>

                      <div>
                          <x-icons.arrow-narrow-right />
                      </div>
                      </a>
                      @if (!($loop->last))
                      <hr
                      class="my-2.5 ml-13 w-full border-t border-dashed border-gray-300/70"
                      />
                      @endif
                    @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</x-layout>
