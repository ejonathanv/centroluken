<div class="fixed top-0 bottom-0 left-0 right-0 bg-gray-900 bg-opacity-50 z-50 flex items-center md:items-start justify-center p-4 md:p-10 overflow-y-auto">
    <div class="w-full md:w-9/12">
        <div class="bg-white rounded-lg shadow-md overflow-hidden relative">
            <form action="{{ route('hide-banner-intro') }}" class="absolute top-2 md:top-5 right-2 md:right-5 w-10 h-10 bg-white rounded-full overflow-hidden" method="POST">
                @csrf
                <button class="w-full h-full flex items-center justify-center text-gray-500 hover:text-gray-700 focus:outline-none">
                    <i class="fa fa-times text-lg"></i>
                </button>
            </form>
            @if(session()->get('locale') == 'es')
            <img src="{{ asset('img/popup/centroluken_felicesfiestas_2024.png') }}" class="w-full" alt="Centro Luken">
            @elseif(session()->get('locale') == 'en')
            <img src="{{ asset('img/popup/centroluken_felicesfiestas_2024.png') }}" class="w-full" alt="Centro Luken">
            @else
            <img src="{{ asset('img/popup/centroluken_felicesfiestas_2024.png') }}" class="w-full" alt="Centro Luken">
            @endif
        </div>
    </div>
</div>