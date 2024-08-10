@if (csrf_token())
<form action="{{ route('language.switch') }}" method="post" class="inline-block py-0 mr-0">
    @csrf
    <select
        name="lang" id="lang"
        onchange="this.form.submit()"
        class="px-1 py-1 pt-0 pb-0 w-14 rounded
        bg-gray-100 dark:bg-gray-800
         text-gray-800 dark:text-gray-100">
        @foreach(config('app.languages') as $language)
            <option class="bg-gray-100 dark:bg-gray-800
         text-gray-800 dark:text-gray-100" value="{{ $language }}" {{ app()->getLocale() === $language ? 'selected' : '' }}>
                {{ strtoupper($language)}}
            </option>
        @endforeach
    </select>
</form>
@endif
