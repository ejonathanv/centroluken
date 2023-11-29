@section('title', 'Temas de Interés')

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
                                @if(session()->get('locale') == 'es')
                                {{ $category->name }}
                                @else
                                {{ $category->name_en }}
                                @endif
                            </span>
                            <i class="fas fa-chevron-right"></i>
                        </a>
                        @endforeach
                    </nav>
                </div>
                <div class="w-8/12">
                    @if($topics->count() > 0)
                    <h1 class="text-primary mb-7 leading-relaxed">
                        @if(session()->get('locale') == 'es')
                        {{ $currentCategory->name }}
                        @else
                        {{ $currentCategory->name_en }}
                        @endif
                    </h1>
                    <ul class="space-y-9">
                        @foreach($topics as $topic)
                        <li>
                            <a href="{{ $topic->url }}" class="text-secondary" target="_blank">
                                <h4>
                                    @if(session()->get('locale') == 'es')
                                    {{ $topic->title }}
                                    @else
                                    {{ $topic->title_en }}
                                    @endif
                                </h4>
                            </a>
                            @if(session()->get('locale') == 'es')
                                @if($topic->description)
                                    <p class="text-gray-500 text-sm my-3">
                                        {{ $topic->description }}
                                    </p>
                                @endif
                            @endif
                            @if(session()->get('locale') == 'en')
                                @if($topic->description_en)
                                    <p class="text-gray-500 text-sm my-3">
                                        {{ $topic->description_en }}
                                    </p>
                                @endif
                            @endif
                            <p class="text-gray-500 text-sm">
                                @if($topic->author) 
                                {{ $topic->author }} |
                                @endif
                                {{ $topic->source }} | 
                                {{ $topic->published_at->format('d/m/Y') }}
                            </p>
                        </li>
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