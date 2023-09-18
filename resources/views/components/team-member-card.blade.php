<div class="flex flex-col md:flex-row items-start space-y-7 md:space-y-0 md:space-x-7 text-center md:text-left">
    <div class="flex-shrink-0 flex w-full md:w-auto">
        <img src="{{ asset('img/miembros/' . $img) }}" alt="" class="w-48 h-48 object-cover rounded shadow mx-auto">
    </div>
    <div class="flex flex-col justify-center">
        <h4 class="text-primary mb-2">
            <span class="text-lg md:text-xl">{{ $name }}</span> <br> <span class="text-secondary text-xs !md:text-sm">{{ $jobTitle }}</span>
        </h4>
        <p class="text-gray-500 text-sm">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci quam nihil nulla sed consequatur temporibus incidunt, placeat, repudiandae velit non aspernatur ipsum et rem ullam reprehenderit magnam mollitia provident amet.
            Saepe dolor repellendus assumenda totam, repellat ipsam libero natus eaque quas maiores inventore eos illo reprehenderit, unde quidem molestias enim iusto error nostrum obcaecati? Assumenda asperiores veniam similique dolore ullam.
            Necessitatibus animi.
        </p>
    </div>
</div>