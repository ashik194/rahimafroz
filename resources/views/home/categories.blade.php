{{-- <div class="relative bg-[#0D72B9]"
     style="background-position: center; background-size: cover; background-repeat: no-repeat; background-image: url('{{asset("/images/system/rahim-afroz-patern-1.png")}}')"> --}}
<div class="relative min-h-[880px] z-50 mt-[-4px] md:mt-[-28px] lg:mt-[-20px] xl:mt-[-38px]"
     style="background-position: center; background-size: cover; background-repeat: no-repeat; background-image: url('{{asset("/images/system/categories-bg.png")}}')">
    <div class="container mx-auto">
        {{-- <div class="container mx-auto ">
            <div class="mx-[133px] h-12 bg-[#0D72B9] rounded-3xl absolute top-[-24px] z-10 w-full"></div>
        </div> --}}
        <div class=" z-30">
            <div class="pt-32">
                <h1 class="text-lg md:text-4xl text-center uppercase font-bold text-white">Choose Your Product</h1>
            </div>
            <div class="py-10 md:py-20">
                <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">
                    <div class="col-span-1 mt-12 text-center">
                        <div class="w-full flex justify-center">
                            <img src="{{asset('/images/icons/passenger-car.png')}}" alt="">
                        </div>
                        <h3 class="category-name text-white mt-2">Passenger Car</h3>
                    </div>
                    <div class="mt-12 text-center">
                        <div class="w-full flex justify-center">
                            <img src="{{asset('/images/icons/commercial-vehicle.png')}}" alt="">
                        </div>
                        <h3 class="category-name text-white mt-2">Commercial Vehicle</h3>
                    </div>
                    <div class="mt-12 text-center">
                        <div class="w-full flex justify-center">
                            <img src="{{asset('/images/icons/three-wheeler.png')}}" alt="">
                        </div>
                        <h3 class="category-name text-white mt-2">Three Wheeler</h3>
                    </div>
                    <div class="mt-12 text-center">
                        <div class="w-full flex justify-center">
                            <img src="{{asset('/images/icons/motorcycle.png')}}" alt="">
                        </div>
                        <h3 class="category-name text-white mt-2">Motorcycle</h3>
                    </div>
                    <div class="mt-12 text-center">
                        <div class="w-full flex justify-center">
                            <img src="{{asset('/images/icons/generator.png')}}" alt="">
                        </div>
                        <h3 class="category-name text-white mt-2">Generator</h3>
                    </div>
                    <div class="mt-12 text-center">
                        <div class="w-full flex justify-center">
                            <img src="{{asset('/images/icons/special-purpose.png')}}" alt="">
                        </div>
                        <h3 class="category-name text-white mt-2">Special Purpose</h3>
                    </div>
                    <div class="mt-12 text-center">
                        <div class="w-full flex justify-center">
                            <img src="{{asset('/images/icons/ips.png')}}" alt="">
                        </div>
                        <h3 class="category-name text-white mt-2">IPS</h3>
                    </div>
                    <div class="mt-12 text-center">
                        <div class="w-full flex justify-center">
                            <img src="{{asset('/images/icons/solar.png')}}" alt="">
                        </div>
                        <h3 class="category-name text-white mt-2">Solar</h3>
                    </div>
                    <div class="mt-12 text-center">
                        <div class="w-full flex justify-center">
                            <img src="{{asset('/images/icons/tracktor.png')}}" alt="">
                        </div>
                        <h3 class="category-name text-white mt-2">Tractor</h3>
                    </div>
                    <div class="mt-12 text-center">
                        <div class="w-full flex justify-center">
                            <img src="{{asset('/images/icons/golf-cart.png')}}" alt="">
                        </div>
                        <h3 class="category-name text-white mt-2">Golf cart</h3>
                    </div>
                    <div class="mt-12 text-center">
                        <div class="w-full flex justify-center">
                            <img src="{{asset('/images/icons/forklift.png')}}" alt="">
                        </div>
                        <h3 class="category-name text-white mt-2">Forklift</h3>
                    </div>
                    <div class="mt-12 text-center">
                        <div class="w-full flex justify-center">
                            <img src="{{asset('/images/icons/electric-vehicle.png')}}" alt="">
                        </div>
                        <h3 class="category-name text-white mt-2">Electric Vehicle</h3>
                    </div>
                </div>

                <div class="mt-32">
                    <div class="w-full h-50 md:h-24 bg-[#005CAB] rounded-md flex justify-center items-center">
                        <div class="m-4 bg-white h-48 md:h-20 w-full rounded-lg flex items-center justify-between flex-wrap px-4">
                            <div class="mx-0 md:mx-2">
                                <select id="" name="category"
                                        class="block bg-[#005CAB] w-[140px] rounded-md border-0 py-1.5 text-white shadow-sm ring-1 ring-inset ring-[#DDEBF6] focus:ring-2 focus:ring-inset focus:ring-[#DDEBF6] sm:max-w-xs sm:text-sm sm:leading-6">
                                    <option>Category</option>
                                    <option>Passenger Car</option>
                                    <option>IPS</option>
                                </select>
                            </div>
                            <div class="mx-0 md:mx-2">
                                <select id="" name="category"
                                        class="block bg-[#005CAB] w-[140px] rounded-md border-0 py-1.5 text-white shadow-sm ring-1 ring-inset ring-[#DDEBF6] focus:ring-2 focus:ring-inset focus:ring-[#DDEBF6] sm:max-w-xs sm:text-sm sm:leading-6">
                                    <option>Technology</option>
                                </select>
                            </div>
                            <div class="mx-0 md:mx-2">
                                <select id="" name="category"
                                        class="block bg-[#005CAB] w-[140px] rounded-md border-0 py-1.5 text-white shadow-sm ring-1 ring-inset ring-[#DDEBF6] focus:ring-2 focus:ring-inset focus:ring-[#DDEBF6] sm:max-w-xs sm:text-sm sm:leading-6">
                                    <option>Brand</option>
                                </select>
                            </div>
                            <div class="mx-0 md:mx-2">
                                <select id="" name="category"
                                        class="block bg-[#005CAB] w-[140px] rounded-md border-0 py-1.5 text-white shadow-sm ring-1 ring-inset ring-[#DDEBF6] focus:ring-2 focus:ring-inset focus:ring-[#DDEBF6] sm:max-w-xs sm:text-sm sm:leading-6">
                                    <option>Model</option>
                                </select>
                            </div>
                            <div class="mx-0 md:mx-2">
                                <select id="" name="category"
                                        class="block bg-[#005CAB] w-[140px] rounded-md border-0 py-1.5 text-white shadow-sm ring-1 ring-inset ring-[#DDEBF6] focus:ring-2 focus:ring-inset focus:ring-[#DDEBF6] sm:max-w-xs sm:text-sm sm:leading-6">
                                    <option>Year</option>
                                </select>
                            </div>
                            <div class="mx-0 md:mx-2">
                                <select id="" name="category"
                                        class="block bg-[#005CAB] w-[140px] rounded-md border-0 py-1.5 text-white shadow-sm ring-1 ring-inset ring-[#DDEBF6] focus:ring-2 focus:ring-inset focus:ring-[#DDEBF6] sm:max-w-xs sm:text-sm sm:leading-6">
                                    <option>CC</option>
                                </select>
                            </div>
                            <div class="mx-0 md:mx-2">
                                <form action="" class="block">
                                    <input type="search" name="" id="" class="bg-[#95E7F4] border-4 border-[#0D72B9] h-[40px] placeholder-[#0D72B9] font-bold rounded-lg w-[280px] lg:inline-block lg:ml-auto " placeholder="FIND BATTERY">
                                    <i class="fa-solid fa-search ml-[-25px] text-[#0D72B9]"></i>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>