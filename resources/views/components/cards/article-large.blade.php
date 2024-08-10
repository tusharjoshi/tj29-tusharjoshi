@props(['article' => config('info.articles')[0], 'id' => 0])
<article class="md:grid md:grid-cols-4 md:gap-8">
    <!-- Image -->
    <div class="md:col-span-1">
      <a
        href="{{ url('/blog') }}"
        class="group aspect-h-9 aspect-w-16 relative z-10 block animate-pulse overflow-hidden rounded-2xl bg-gray-50 dark:bg-gray-900 md:aspect-h-1 md:aspect-w-1"
      >
        <img
          data-src="{{ asset('images/feed-01.jpeg') }}"
          class="lazy rounded-2xl object-cover object-center opacity-0 transition duration-300 ease-in-out group-hover:scale-110"
        />
      </a>
    </div>

    <!-- Content -->
    <div
      class="relative mt-6 flex flex-col flex-wrap md:col-span-3 md:mt-0"
    >
      <div
        class="mb-8 box-border flex w-full flex-1 flex-col justify-between border-b-2 border-gray-100 px-6 pb-8 md:px-0"
      >
        <div>
          <a
            href="{{ url('/projects/technology')}}"
            class="transition-color relative text-tiny font-medium uppercase tracking-widest text-red-700 dark:text-red-300 duration-300 ease-in-out hover:text-red-600 dark:hover:text-red-200"
          >
            {{__($article['category'])}}
          </a>

          <h3
            class="mt-2.5 text-xl font-medium leading-tight text-gray-900 dark:text-gray-100 decoration-gray-800 decoration-2 transition duration-300 ease-in-out hover:underline sm:text-2xl lg:text-xl xl:text-2xl"
          >
            <a href="{{ url('/blog') }}">
              <span class="absolute inset-0" aria-hidden="true"></span>
              {{ $article['title']}}
            </a>
          </h3>

          <p
            class="mt-3.5 block text-base leading-relaxed text-gray-500 dark:text-gray-400"
          >
          {{ $article['description']}}
          </p>
        </div>

        <!-- Article Footer Info -->
        <footer class="flex items-center sm:mt-2">
          <div class="flex items-center text-sm lg:text-[15px]">
            <x-icons.calendar />
            <span class="ml-1 text-gray-500">Nov 2, 2020</span>

            <span class="hidden items-center sm:flex">
              <x-icons.clock />
              <span class="ml-1 text-gray-500">15 min read</span>
            </span>
          </div>
        </footer>
      </div>
    </div>
  </article>
