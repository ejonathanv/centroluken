<div class="px-4 mb-7 h-full">
    <div class="flex flex-col space-y-4 p-4 border-2 border-secondary h-full">
        @if($image)
        <div class="w-full h-[220px] bg-cover bg-center" style="background-image: url('{{ $image }}')"></div>
        @endif
        <h3 class="text-lg font-medium text-secondary">
            {{ $title }}
        </h3>
        <p class="text-sm text-gray-500">
            {{ $description }}
        </p>
        <a href="{{ $link }}" target="_blank" class="text-sm font-bold text-secondary">
            {{ __('2026/materials.resources.read_more') }}
        </a>
    </div>
</div>