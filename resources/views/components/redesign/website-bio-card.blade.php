<div x-data="{
    toggle: false
}" class="relative" @click.outside="toggle = false">
    <div class="relative">
        <h3 class="cursor-pointer py-4 px-6 border-t-2 text-base border-r-2 border-secondary text-center" @click="toggle = !toggle">
            {{ $name }}
        </h3>
        <a href="#" @click.prevent="toggle = !toggle">
            <i class="fa absolute bottom-2 right-2" :class="{ 
                'fa-plus': !toggle, 
                'fa-times': toggle,
                'text-tertiary': toggle,
            }"></i>
        </a>
    </div>

    <template x-if="toggle">
        <div class="absolute left-0 w-full bg-white p-4 shadow z-10 h-[280px] overflow-y-auto border-b border-r" style="top: calc(100% + 3px)">
            {{ $bio}}
        </div>
    </template>
</div>