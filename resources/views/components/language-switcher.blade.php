@if (csrf_token())
<form action="{{ route('language.switch') }}" method="post" class="inline-block py-0 me-0">
    @csrf
    <select
        name="lang" id="lang"
        onchange="this.form.submit()"
        class="ps-1 pe-1 py-0 rtl:pb-2 rtl:pt-0 w-14 rounded
        bg-gray-100 dark:bg-gray-800
         text-gray-800 dark:text-gray-100 flex items-center border-gray-300">
        @foreach(config('app.languages') as $language)
            <option class="bg-gray-100 dark:bg-gray-800
         text-gray-800 dark:text-gray-100  rtl:-mt-2" value="{{ $language }}" {{ app()->getLocale() === $language ? 'selected' : '' }}>
                {{ strtoupper($language)}}
            </option>
        @endforeach
    </select>
</form>
@endif
