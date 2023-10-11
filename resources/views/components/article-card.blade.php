<div class="article_card">
    <a href="{{ route('article', $article) }}">
    <div class="article_card_image" style="background-image: url({{ $article->cover }});">
    </div>
    </a>
    <div class="article_card_content flex-1 flex flex-col">
        <p class="text-xs font-bold mb-4 text-secondary">
            {{ $article->date }} | {{ $article->category_name }}
        </p>
        <h3 class="text-primary mb-5 !leading-tight">
            {{ $article->title }}
        </h3>
        <p class="mb-5 text-sm text-gray-500 flex-1">
            {{ $article->excerpt }}
        </p>
        <div class="mt-auto">
            <a href="{{ route('article', $article) }}" class="btn btn-primary btn-sm">
                Leer más
            </a>
        </div>
    </div>
</div>