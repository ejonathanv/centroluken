<div class="article_card ">
    <div class="article_card_image" style="background-image: url({{ $article->cover }});">
    </div>
    <div class="article_card_content">
        <h2 class="text-primary mb-7 !leading-tight">
            {{ $article->title }}
        </h2>
        <p>
            {{ $article->excerpt }}
        </p>
        <a href="#" class="btn btn-primary btn-sm mt-5">
            Leer más
        </a>
    </div>
</div>