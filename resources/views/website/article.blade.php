@section('title', 'Blog')

<x-guest-layout header="header2">
    <section class="py-10 md:pt-24 md:pb-16">
        <div class="container flex items-start space-x-20">
            <div class="w-full md:w-8/12 text-left">
                <img src="{{ asset($article->cover) }}" class="w-full h-auto mb-10" alt="{{ $article->title }}">

                <h1 class="text-primary title mb-4 !leading-tight">
                    @if(session()->get('locale') == 'es')
                    {{ $article->title }}
                    @else
                    {{ $article->title_en }}
                    @endif
                </h1>

                <h6 class="text-secondary mb-7">
                    {{ $article->date }} | 
                    @if(session()->get('locale') == 'es')
                    {{ $article->category_name }}
                    @else
                    {{ $article->category_name_en }}
                    @endif
                </h6>

                <h4 class="mb-7">
                    @if(session()->get('locale') == 'es')
                    {{ $article->excerpt }}
                    @else
                    {{ $article->excerpt_en }}
                    @endif
                </h4>

                @if(session()->get('locale') == 'es')
                {!! $article->body !!}
                @else
                {!! $article->body_en !!}
                @endif
            </div>

            <div class="w-full md:w-4/12">
                <h3 class="mb-7">
                    {{ __('global.blog.related') }}
                </h3>

                <ul class="flex flex-col space-y-5">
                    
                    @foreach($relatedArticles as $relatedArticle)
                        <x-article-thumb :article="$relatedArticle" />
                    @endforeach

                </ul>
            </div>
        </div>
    </section>

    <section class="section_divider"></section>
    <section class="section_divider"></section>

</x-guest-layout>