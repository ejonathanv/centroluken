@section('title', 'Temas de Interés')

<x-guest-layout header="header2">
    
    <section class="py-10 md:py-24">
        <div class="container">
            <div class="flex items-start space-x-16">
                <div class="w-4/12">
                    <h2 class="text-primary mb-5">
                        Temas de interés
                    </h2>
                    <nav class="topicsNav">   
                        @foreach($categories as $category)
                        <a href="{{ route('topicCategory', $category) }}" class="flex justify-between items-center space-x-6 @if($currentCategory->id == $category->id) active @endif">
                            <span class="text-base">
                                {{ $category->name }}
                            </span>
                            <i class="fas fa-chevron-right"></i>
                        </a>
                        @endforeach
                    </nav>
                </div>
                <div class="w-8/12">
                    <h1 class="text-primary mb-7 leading-relaxed">
                        {{ $currentCategory->name }}
                    </h1>
                    <ul class="space-y-9">
                        @foreach($topics as $topic)
                        <li>
                            <a href="{{ $topic->url }}"
                                class="text-secondary">
                                <h4>
                                    {{ $topic->title }}
                                </h4>
                            </a>
                            <p class="text-gray-500 text-sm">
                                Fuente: <a href="#">{{ $topic->source }}</a> | {{ $topic->created_at->format('d/m/Y') }}
                            </p>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="section_divider"></section>
    <section class="section_divider"></section>

</x-guest-layout>