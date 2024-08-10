@props(['article' => config('info.articles')[0], 'id' => 0])
<article
class="py-8 sm:flex lg:flex-col xl:flex-row xl:items-center"
>
<!-- Image -->
<a
    href="{{ url('/blog') }}"
    class="order-2 w-full sm:w-2/5 lg:order-1 lg:w-full xl:w-2/5"
>
    <div
    class="group aspect-h-9 aspect-w-16 relative z-10 animate-pulse overflow-hidden rounded-2xl bg-gray-100 dark:bg-gray-800"
    >
    <img
        data-src="images/featured-article-01.jpeg"
        class="lazy rounded-2xl object-cover object-center opacity-0 transition duration-300 ease-in-out group-hover:scale-110"
    />
    </div>
</a>

<!-- Content -->
<div
    class="order-1 mt-5 w-full px-2 sm:mt-0 sm:max-w-sm sm:pl-0 sm:pr-5 lg:order-2 lg:mt-4 xl:ml-5 xl:mt-0 xl:flex-1"
>
    <a
    href="{{ url('/projects/'.Str::of($article['category'])->lower()) }}"
    class="transition-color text-xs font-medium uppercase tracking-widest text-red-700 dark:text-red-300 duration-300 ease-in-out hover:text-red-600 dark:hover:text-red-200"
    >
    {{ __($article['category']) }}
    </a>

    <a href="{{ url('/blog/' . $id) }}">
    <h3
        class="mt-2 text-xl font-medium leading-normal tracking-normal text-gray-900 dark:text-gray-100 decoration-gray-800 decoration-2 transition duration-300 ease-in-out hover:underline"
    >
        {{ $article['title']}}
    </h3>
    </a>

    <!-- Author -->
    <div class="mt-4 flex items-center justify-between">
    <!-- Author meta -->
    <div class="flex items-center justify-center">
        <a
        href="{{ url('/about') }}"
        class="mr-3 animate-pulse rounded-lg bg-gray-50 dark:bg-gray-900"
        >
        <img
            class="lazy h-6 w-6 flex-shrink-0 rounded-lg object-cover object-center opacity-0 transition duration-300 ease-in-out"
            data-src="images/author.jpeg"
            alt="Author 01"
        />
        </a>
        <div class="text-sm">
        <span class="text-gray-500">By </span>
        <a
            class="font-medium text-gray-700 dark:text-gray-200 hover:underline"
            href="{{ url('/blog') }}"
            >{{ __(config('info.sitename'))}}</a
        >
        <span class="text-gray-500 lg:hidden xl:inline-block">
            · {{__($article['date'])}}</span
        >
        </div>
    </div>
    </div>
</div>
</article>
