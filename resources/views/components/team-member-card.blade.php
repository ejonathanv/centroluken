<div class="flex flex-col md:flex-row items-start space-y-7 md:space-y-0 md:space-x-7 text-center md:text-left">
    <div class="flex-shrink-0 flex w-full md:w-auto">
        <img src="{{ asset('img/miembros/' . $img) }}" alt="" class="w-48 h-auto object-cover rounded shadow mx-auto">
    </div>
    <div class="flex flex-col justify-center">
        <h4 class="text-primary mb-2">
            <span class="text-lg md:text-xl">{{ $name }}</span> <br> <span class="text-secondary text-xs !md:text-sm">{{ $jobtitle }}</span>
        </h4>
        <p class="text-gray-500 text-sm">
            {{ $slot }}
        </p>
    </div>
</div>