<x-layout>
    <x-slot:title>Home</x-slot>
    <!-- Home Hero-->
    <section class="bg-gray-50 dark:bg-gray-900 pt-12 sm:pt-16 lg:pt-20">
        <div
          class="mx-auto max-w-2xl px-4 sm:px-6 lg:flex lg:max-w-screen-2xl lg:items-start lg:px-8"
        >
            @php
                $article = config('info.articles')[0];
            @endphp
          <!-- Featured Article-->
          <article class="relative lg:sticky lg:top-8 lg:w-1/2">
            <!-- Image -->
            <a
              href="{{ url('/blog') }}"
              class="group aspect-h-9 aspect-w-16 relative z-10 block animate-pulse overflow-hidden rounded-2xl bg-gray-100 dark:bg-gray-800"
            >
              <img
                class="lazy rounded-2xl object-cover object-center opacity-0 transition duration-300 ease-in-out group-hover:scale-110"
                data-src="{{ $article['image'] }}"
              />
            </a>

            <!-- Content -->
            <div class="mt-6 mb-6 md:align-middle">
              <a
                href="{{ url('/projects/'. Str::of($article['category'])->lower()) }}"
                class="transition-color relative text-sm font-medium uppercase tracking-widest text-red-700 dark:text-red-300 duration-300 ease-in-out hover:text-red-600 dark:hover:text-red-200"
                >{{ __($article['category']) }}</a
              >
              <a href="{{ url('/blog') }}" class="group mt-3 block">
                <h2
                  class="text-3xl font-medium tracking-normal text-gray-900 dark:text-gray-300 decoration-gray-800 dark:decoration-gray-400 decoration-3 transition duration-300 ease-in-out group-hover:underline md:tracking-tight lg:text-4xl lg:leading-tight"
                >
                  {{ $article['title']}}
                </h2>
                <div>
                  <p class="mt-4 text-base leading-loose text-gray-600 dark:text-gray-400">
                    {{ $article['description'] }}
                  </p>
                </div>
              </a>

              <!-- Author -->
              <div class="mt-4 flex items-center sm:mt-8">
                <a
                  href="{{ url('/about')}}"
                  class="h-10 w-10 animate-pulse rounded-xl bg-gray-50 dark:bg-gray-900"
                >
                  <img
                    data-src="{{ asset('images/author.jpeg') }}"
                    class="lazy h-full w-full rounded-xl object-cover object-center opacity-0 transition duration-300 ease-in-out"
                  />
                </a>
                <div class="ml-3">
                  <a
                    href="{{ url('/about')}}"
                    class="text-sm font-medium text-gray-800 dark:text-gray-400 hover:underline"
                  >
                  {{ __(config('info.sitename'))}}
                  </a>
                  <p class="text-sm text-gray-500">
                    <time datetime="2021-12-16">{{$article['date']}}</time>
                    <span aria-hidden="true"> &middot; </span>
                    <span> {{ $article['duration']}} read </span>
                  </p>
                </div>
              </div>
            </div>
          </article>

          <!-- Recent Articles-->
          <div class="mt-12 sm:mt-16 lg:ml-12 lg:mt-0 lg:w-1/2 xl:ml-16">
            <h3
              class="relative border-b border-gray-300/70 pb-2.5 text-2xl font-medium text-gray-900 dark:text-gray-100 before:absolute before:-bottom-px before:left-0 before:h-px before:w-24 before:bg-red-600 dark:before:bg-red-200 before:content-['']"
            >
              {{ __('Recent stories') }}
            </h3>

            <!-- Articles Container -->
            <div class="grid lg:grid-cols-2 lg:gap-x-5 xl:grid-cols-1">
              <!-- 1st Article -->
              @foreach (config('info.articles') as $index => $article)
              <x-cards.article :article="$article" :id="$index"/>
              @endforeach
            </div>
          </div>
        </div>
      </section>
</x-layout>
