<x-redesign.website-layout>
    

    <section class="py-10 lg:py-20 bg-white">
        <div class="container">
            <h3 class="text-center text-2xl lg:text-3xl font-medium text-gray-900 mb-10 lg:mb-20">
                {{ __('2026/discussion.list.subtitle') }}
            </h3>

            @if($discusiones->total() === 0)
                <p class="text-center text-gray-600 py-16">
                    {{ __('2026/discussion.list.empty') }}
                </p>
            @else
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($discusiones as $discusion)
                        <x-redesign.website-discusion-card :discusion="$discusion" />
                    @endforeach
                </div>

                <div class="mt-12 flex justify-center">
                    {{ $discusiones->links() }}
                </div>
            @endif
        </div>
    </section>

    <x-redesign.website-strategic-partnerships />
</x-redesign.website-layout>
