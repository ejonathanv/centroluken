<x-redesign.website-layout>
    <x-redesign.website-white-quote :quote="__('2026/materials.studies_quote')" />
    @if (Lang::has('2026/materials.studies_intro') && filled(__('2026/materials.studies_intro')))
    <div class="bg-white pb-10 md:pb-14">
        <div class="container">
            <p class="w-full lg:w-9/12 mx-auto text-center text-sm lg:text-lg text-gray-700">
                {{ __('2026/materials.studies_intro') }}
            </p>
        </div>
    </div>
    @endif
    <x-redesign.page-cover img="{{ asset('redesign/img/materials/proyectos.jpg') }}" />
    <div class="bg-white py-0 md:py-10">
    </div>
    <x-redesign.website-strategies />
    <x-redesign.website-strategic-partnerships />
</x-redesign.website-layout>