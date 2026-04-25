@php
    $partners = ['one', 'two', 'three', 'four', 'five'];
@endphp
<section class="bg-white py-10 md:py-20">
    <div class="flex flex-col md:flex-row flex-wrap items-start justify-center w-full">
        @foreach ($partners as $partner)
            <div class="w-full md:w-1/3 px-0 md:px-20 {{ $loop->iteration <= 3 ? 'mb-40' : 'mb-20 md:mb-0' }}">
                <x-redesign.website-bio-card>
                    <x-slot:name>
                        {{ __('2026/about.team.partners.' . $partner . '.name') }}
                    </x-slot:name>
                    <x-slot:bio>
                        @foreach (trans('2026/about.team.partners.' . $partner . '.bio') as $paragraph)
                            <p class="{{ $loop->last ? '' : 'mb-4' }}">{{ $paragraph }}</p>
                        @endforeach
                    </x-slot:bio>
                </x-redesign.website-bio-card>
            </div>
        @endforeach
    </div>
</section>