<section class="py-10 md:py-16 bg-white">

    <div class="block md:hidden container">
        <div class="w-full mb-7 px-4">
            <select name="" id="" class="w-full p-2 border-2 border-secondary rounded-md">
                <option value="">Todos</option>
                @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="container flex items-start space-x-0 md:space-x-10">
        <div class="w-1/3 hidden md:block">
            <nav class="flex flex-col space-y-7">
                @foreach($categories as $category)
                    <x-redesign.website-resources-link :category="$category" />
                @endforeach
            </nav>
        </div>
        <div class="w-full md:w-2/3">
            <div class="flex flex-stretch flex-col md:flex-row flex-wrap">
                @foreach($topics as $topic)
                    <div class="w-full md:w-1/2 mb-5">
                        <x-redesign.website-resources-card 
                            :title="$topic->title"
                            :description="$topic->description ?? ''"
                            image="https://placehold.co/600x400"/>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>