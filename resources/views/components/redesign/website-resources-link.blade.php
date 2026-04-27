@php
    $locale = app()->getLocale();
@endphp

<div class="relative @if(request()->category == $category->id) opacity-100 @else opacity-30 @endif">
    <a href="?category={{ $category->id }}">
        <h3 class="cursor-pointer py-4 px-6 border-t-2 text-base border-r-2 border-secondary text-left">
            {{ $locale === 'en' ? ($category->name_en ?? $category->name) : $category->name }}
        </h3>
        <i class="fa fa-plus absolute bottom-2 right-2"></i>
    </a>
</div>