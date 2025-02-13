<header aria-label="Шапка сайта" class=""  id="header" style="border-bottom: 4px solid #c0eeff;">
    <x-container>
        <div class="max-w-full rounded-full backdrop-blur-sm flex justify-between items-center">
        {{-- navbar --}}
        <nav class="hidden md:block">
            <menu aria-label="меню" class="flex item-center gap-20">
                <a aria-label="На главную" href="{{ route('page.home') }}" class="">
                    <img width="95" height="25" src="{{ asset('image/logo.svg') }}" alt="logo" class="">
                </a>
                <li aria-label="Элемент меню навигации" class="inline-flex">
                    <a href="#!" aria-label="Service" class="text-black transition-colors font-medium">Seel House </a>
                </li>
                <li aria-label="Элемент меню навигации" class="inline-flex">
                    <a href="#!" aria-label="Product" class="text-black transition-colors font-medium">Rent House</a>
                </li>
                <li aria-label="Элемент меню навигации" class="inline-flex">
                    <a href="#!" aria-label="About" class="text-black transition-colors font-medium">Online Expirins</a>
                </li>
            </menu>
        </nav>
        {{-- end navbar --}}
        <div class="flex">
             @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}">Личный кабинет</a>
                @else
                    <a href="{{ route('login') }}" class="bg-[#BAD8E3] text-center text-black rounded-full px-[30px] py-[12px]  flex items center gap-3 cursor-pointer" >Войти</a>
                    @if(Route::has('register'))
                        <a href="{{ route('register') }}"  class="bg-[#1B213A] text-center text-white rounded-xl px-[40px] py-[12px]  flex items center gap-3 cursor-pointer">Зарегистрироваться</a>
                    @endif
                @endauth
            @endif
    </div>

        </div>
    </x-container>
</header>
