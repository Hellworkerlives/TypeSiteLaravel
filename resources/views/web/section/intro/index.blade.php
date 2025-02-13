<section aria-labelledby="intro-title" aria-describedby="intro-description" class="">
    <x-container>
        <div class="flex py-[50px]">
        <div class="flex flex-col gap-10 w-[1200px]">
            <div class="col-span-1 md:col-span-2">
                <h1 class="text-black font-semibold text-[80px] leading-[88px]" id="intro-title">We help people to getting home & renting with <br> good price</h1>
            </div>
            <div class="col-span-1 md:col-span-2">
                <p class="text-[#666666] text-[21px]" id="intro-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id risus vulputate <br> tortor, risus ut. Viverra viverra aliquam, semper duis a aliquam. Elit  <br>porttitor arcu nisl, faucibus.</p>
            </div>
            <div class="col-span-1 md:col-span-2 flex bg-white w-[500px] py-[10px] px-[20px] item-center justify-between rounded-lg">
                <div class="flex item-center gap-5">
                    <img src="{{asset('image/it.svg') }}" alt="" class="w-[30px]">
                    <input type="text" placeholder="Search locations.." name="query" class="flex text-[#1B213A] text-[20px]">
                </div>
                <div>
                    <button aria-label="Октрыть модальное окно" class="bg-[#1B213A] text-center text-white rounded-xl px-[40px] py-[12px]  flex items center gap-3 cursor-pointer">Search</button>
                </div>
            </div>
            <div class="flex col-span-1 md:col-span-2 gap-15">
                <ul>
                    <div class="flex item-center text-center">
                        <h2 class="text-[40px] m-0 text-white">12k</h2>
                        <h2 class="text-[40px] text-[#1B213A]">+</h2>
                    </div>
                    <p class="text-[20px] text-gray-500">Happy <br> Customer</p>
                </ul>
                <ul>
                    <div class="flex item-center text-center">
                        <h2 class="text-[40px] m-0 text-white">14k</h2>
                        <h2 class="text-[40px] text-[#1B213A]">+</h2>
                    </div>
                    <p class="text-[20px] text-gray-500">Awards <br> Winning</p>
                </ul>
                <ul>
                    <div class="flex item-center text-center">
                        <h2 class="text-[40px] m-0 text-white">5k</h2>
                        <h2 class="text-[40px] text-[#1B213A]">+</h2>
                    </div>
                    <p class="text-[20px] text-gray-500">Premium <br> Product</p>
                </ul>
            </div>
        </div>
        <div class="w-[900px] flex justify-center">
            <img src="{{asset('image/VVector.svg') }}" alt="" class="w-[500px]">
        </div>
    </div>
    </x-container>
</section>
