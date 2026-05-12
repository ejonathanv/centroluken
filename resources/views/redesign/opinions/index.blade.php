<x-redesign.website-layout>

    <section class="py-10 lg:py-20 bg-white">
        <div class="container">
            <h3 class="text-center text-2xl lg:text-3xl font-medium text-gray-900 mb-10 lg:mb-20">
                {{ __('2026/opinion.list.subtitle') }}
            </h3>

            @if($opiniones->total() === 0)
                <p class="text-center text-gray-600 py-16">
                    {{ __('2026/opinion.list.empty') }}
                </p>
            @else
                <div class="flex items-center justify-between flex-wrap">
                    @foreach($opiniones as $opinion)
                    <x-redesign.website-opinion-card :opinion="$opinion" />
                    @endforeach
                </div>

                @if($opiniones->total() > $opiniones->perPage())
                <div class="mt-12">
                    {{ $opiniones->links() }}
                </div>
                @endif
            @endif
        </div>
    </section>

    <x-redesign.website-strategic-partnerships />
</x-redesign.website-layout>
