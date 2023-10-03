@section('title', 'Blog')

<x-guest-layout header="header2">
    <section class="py-10 md:py-24">
        <div class="container">
            <div class="w-10/12 md:w-7/12 mx-auto text-center">
                <h1 class="text-primary title mb-10 !leading-tight">
                    Bienvenidos al Blog de Centro Luken
                </h1>

                <h4 class="text-secondary">
                    Explora ideas innovadoras y soluciones prácticas para el manejo del agua y los recursos naturales.
                </h4>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="flex items-stretch flex-wrap -my-5 -mx-5">
                @foreach($articles as $article)
                <div class="w-4/12 p-5">
                    <x-article-card :article="$article" />
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="section_divider"></section>
    <section class="section_divider"></section>

</x-guest-layout>