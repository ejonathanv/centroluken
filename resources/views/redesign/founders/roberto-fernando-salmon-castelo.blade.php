<x-redesign.website-layout :title="__('2026/philosophy.meta_title')">
    <x-redesign.website-founder-bio 
        :name="__('2026/about.team.partners.five.name')"
        pictureOne="{{ asset('redesign/img/philosophy/founder-5.jpg') }}"
        pictureTwo="https://placehold.co/600x400">
        @foreach (trans('2026/about.team.partners.five.bio') as $paragraph)
            <p class="{{ $loop->last ? '' : 'mb-10' }}">
                {{ $paragraph }}
            </p>
        @endforeach

    </x-redesign.website-founder-bio>
    <x-redesign.website-materials />
    <x-redesign.website-strategic-partnerships />
</x-redesign.website-layout>