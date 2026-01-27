<div x-data="{
    toggle: false
}" class="relative" @click.outside="toggle = false">
    <div class="relative">
        <h3 class="py-4 px-6 border-t-2 text-base border-r-2 border-secondary">
            {{ $name }}
        </h3>
        <a href="#" @click.prevent="toggle = !toggle">
            <i class="fa fa-plus absolute bottom-2 right-2"></i>
        </a>
    </div>

    <template x-if="toggle">
        <div class="absolute top-full left-0 w-full bg-white p-4 shadow-lg z-10 h-[280px] overflow-y-auto">
            {{ $bio}}
        </div>
    </template>
</div>