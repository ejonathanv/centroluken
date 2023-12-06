<div class="article_card">
    <a href="{{ route('article', $article) }}">
        <div class="article_card_image" style="background-image: url({{ $article->cover }});">
        </div>
    </a>
    <div class="article_card_content flex-1 flex flex-col">
        <p class="text-xs font-bold mb-4 text-secondary">
            {{ $article->date }} | 
            @if(session()->get('locale') == 'es')
            {{ $article->category_name }}
            @else
            {{ $article->category_name_en }}
            @endif
        </p>
        <h3 class="text-primary mb-5 !leading-tight">
            @if(session()->get('locale') == 'es')
            {{ $article->title }}
            @else
            {{ $article->title_en }}
            @endif
        </h3>
        <p class="mb-5 text-sm text-gray-500 flex-1">
            @if(session()->get('locale') == 'es')
            {{ $article->excerpt }}
            @else
            {{ $article->excerpt_en }}
            @endif
        </p>
        <div class="mt-auto">
            <a href="{{ route('article', $article) }}" class="btn btn-primary btn-sm">
                @if(session()->get('locale') == 'es')
                Leer más
                @else
                Read more
                @endif
            </a>
        </div>
    </div>
</div>