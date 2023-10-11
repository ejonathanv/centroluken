<div class="flex items-start space-x-3">
    <div>
        <a href="{{ route('article', $article) }}">
            <div class="articleThumb" style="background-image: url({{ $article->cover }})"></div>
        </a>
    </div>
    <div>
        <h5 class="text-primary mb-2 !text-sm">
            {{ $article->title }}
        </h5>
        <a href="{{ route('article', $article) }}" class="text-secondary font-bold text-sm">
            Leer más
        </a>
    </div>
</div>