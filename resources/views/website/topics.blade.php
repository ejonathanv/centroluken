@section('title', 'Temas de Interés')

@php
    $locale = session()->has('locale') ? session()->get('locale') : config('app.locale');
@endphp

<x-guest-layout header="header2">

    <section class="py-10 md:py-24">
        @isset($currentCategory)
        <div class="container">
            <div class="flex items-start space-x-16">
                <div class="w-4/12">
                    <p class="text-primary mb-5 text-lg font-bold tracking-wider">
                        {{ __('global.menu.topics') }}
                    </p>
                    <nav class="topicsNav">
                        @foreach($categories as $category)
                        <a href="{{ route('topicCategory', $category) }}" class="flex justify-between items-center space-x-6 @if($currentCategory->id == $category->id) active @endif">
                            <span class="text-base">
                                {{ $locale == 'es' ? $category->name : $category->name_en }}
                            </span>
                            <i class="fas fa-chevron-right"></i>
                        </a>
                        @endforeach
                    </nav>
                </div>
                <div class="w-8/12">
                    @if($topics->count() > 0)
                    <h1 class="text-primary mb-7 leading-relaxed">
                        {{ $locale == 'es' ? $currentCategory->name : $currentCategory->name_en }}
                    </h1>
                    <ul class="space-y-9">
                        @foreach($topics as $topic)
                            @if($topic->type === 'article')
                            <li>
                                <a href="{{ $topic->url }}" class="text-secondary" target="_blank">
                                    <h4>
                                        {{ $locale == 'es' ? $topic->title : $topic->title_en }}
                                    </h4>
                                </a>
                                @if($locale == 'es' && $topic->description)
                                    <p class="text-gray-500 text-sm my-3">
                                        {{ $topic->description }}
                                    </p>
                                @endif
                                @if($locale == 'en' && $topic->description_en)
                                    <p class="text-gray-500 text-sm my-3">
                                        {{ $topic->description_en }}
                                    </p>
                                @endif
                                <p class="text-gray-500 text-sm">
                                    @if($topic->author) 
                                    {{ $topic->author }} |
                                    @endif
                                    {{ $topic->source }} | 
                                    {{ $topic->published_at->format('d/m/Y') }}
                                </p>
                            </li>
                            @else
                            <li>
                                <a href="{{ route('view-pdf-topic', $topic) }}" class="text-secondary">
                                    <h4>
                                        {{ $locale == 'es' ? $topic->title : $topic->title_en }}
                                    </h4>
                                </a>
                                @if($locale == 'es' && $topic->description)
                                    <p class="text-gray-500 text-sm my-3">
                                        {{ $topic->description }}
                                    </p>
                                @endif
                                @if($locale == 'en' && $topic->description_en)
                                    <p class="text-gray-500 text-sm my-3">
                                        {{ $topic->description_en }}
                                    </p>
                                @endif
                                <p class="text-gray-500 text-sm">
                                    @if($topic->author) 
                                    {{ $topic->author }} |
                                    @endif
                                    {{ $topic->source }} | 
                                    {{ $topic->published_at->format('d/m/Y') }}
                                </p>
                            </li>
                            @endif
                        @endforeach
                    </ul>
                    @else
                    <p class="text-center text-gray-500 text-lg">
                        {{ __('global.topics.empty') }}
                    </p>
                    @endif
                </div>
            </div>
        </div>
        @else
        <div class="container">
            <p class="text-center text-gray-500 text-lg">
                {{ __('global.topics.empty') }}
            </p>
        </div>
        @endif
    </section>

    <section class="section_divider"></section>
    <section class="section_divider"></section>

</x-guest-layout>