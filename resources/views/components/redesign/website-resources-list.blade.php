@php
    $locale = app()->getLocale();
@endphp

<section class="py-10 md:py-16 bg-white">

    <div class="block md:hidden container">
        <div class="w-full mb-7 px-4">
            <form method="GET" action="{{ request()->url() }}" id="resources-category-form">
                <select name="category" class="w-full p-2 border-2 border-secondary rounded-md" onchange="this.form.submit()">
                    <option value="" @selected(!request()->query('category'))>{{ __('2026/materials.resources.all') }}</option>
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}" @selected(request()->query('category') == $category->id)>
                        {{ $locale === 'en' ? ($category->name_en ?? $category->name) : $category->name }}
                    </option>
                    @endforeach
                </select>
            </form>
        </div>
    </div>

    <div class="container flex items-start space-x-0 md:space-x-10">
        <div class="w-1/3 hidden md:block">
            <nav class="flex flex-col space-y-7">
                @foreach($categories as $category)
                    <x-redesign.website-resources-link :category="$category" />
                @endforeach
            </nav>
        </div>
        <div class="w-full md:w-2/3">
            <div class="flex flex-stretch flex-col md:flex-row flex-wrap"> 
                @foreach($topics as $topic)
                    @php
                        $link = null;
                        if($topic->type === 'article'){
                            $link = $topic->url;
                        }else{
                            $link = route('view-pdf-topic', $topic);
                        }
                        $title = $locale === 'en' ? ($topic->title_en ?? $topic->title) : $topic->title;
                        $description = $locale === 'en'
                            ? ($topic->description_en ?? $topic->description ?? '')
                            : ($topic->description ?? '');
                    @endphp
                    <div class="w-full md:w-1/2 mb-5">
                        <x-redesign.website-resources-card 
                            :title="$title"
                            :description="$description"
                            image=""
                            :link="$link"/>
                    </div>
                @endforeach
            </div>
            @if($topics->total() > $topics->perPage())
                <div class="mt-8">
                    {{ $topics->appends(request()->except('page'))->links() }}
                </div>
            @endif
        </div>
    </div>
</section>