<div class="flex items-start space-x-3">
    <div>
        <a href="{{ route('article', $article) }}">
            <div class="articleThumb" style="background-image: url({{ $article->cover }})"></div>
        </a>
    </div>
    <div>
        <h5 class="text-primary mb-2 !text-sm">
            @if(session()->get('locale') == 'es')
            {{ $article->title }}
            @else
            {{ $article->title_en }}
            @endif
        </h5>
        <a href="{{ route('article', $article) }}" class="text-secondary font-bold text-sm">
            {{ __('global.blog.read') }}
        </a>
    </div>
</div>