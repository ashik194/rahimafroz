<div class="h-[85px]">
    <div class="flex h-full bg-[#DDEBF6]">
        <div class="w-3/4">asdf</div>
        <div class="w-3/4 h-[82px]" style='background-size:cover; background-position:center; background-repeat:no-repeat;background-image: url("{{asset('images/system/top-header.svg')}}")'>
            <div class="flex justify-end items-center h-full">
                <div class="md:pr-[133px]">
                    <div class="flex justify-between">
                        <div class="text-white text-[12px]"><i class="fa-solid fa-tty"></i> +880 2 5815 3128 <span class="px-2">|</span> <i class="fa-solid fa-envelope"></i> battery@rahimafrooz.com</div>
                        <div class="flex justify-between px-2">
                            <div class="px-1"><i class="fa-brands fa-square-facebook text-white text-md "></i></div>
                            <div class="px-1"><i class="fa-brands fa-square-facebook text-white text-md "></i></div>
                            <div class="px-1"><i class="fa-brands fa-square-facebook text-white text-md "></i></div>
                        </div>
                    </div>
                    <div class="flex justify-between mt-2">
                        <a href="">
                            <div class="mx-2 rahimafroz-btn  w-[92px] ">
                                <div class="btn-up w-[92px] px-2 ">
                                    <div class="absolute text-[15px] font-bold ml-[-2px] mt-[-2px]">
                                        <i class="fa-brands fa-square-facebook pr-1"></i>
                                        Buy Now
                                    </div>
                                </div>

                            </div>
                        </a>
                        <a href="">
                            <div class="mx-2 rahimafroz-btn  w-[163px] before:w-[103.5%]">
                                <div class="btn-up w-[163px] px-2 ">
                                    <div class="absolute text-[15px] font-bold ml-[-2px] mt-[-2px]">
                                        <i class="fa-brands fa-square-facebook pr-1"></i>
                                        Manage My Battery
                                    </div>
                                </div>

                            </div>
                        </a>
                        <a href="">
                            <div class="mx-2 rahimafroz-btn  w-[82px] before:w-[107%]">
                                <div class="btn-up w-[82px] px-2 ">
                                    <div class="absolute text-[15px] font-bold ml-[-2px] mt-[-2px]">
                                        <span class="pr-1">English</span> <i class="fa-solid fa-angle-down"></i>
                                    </div>
                                </div>

                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="header">
    <header class="bg-[#005CAB]">
        <nav class="flex justify-between items-center md:px-[133px] px-8 h-[40px]  mx-auto">
            <div class="">
                Logo
            </div>
            <div
                class="nav-links duration-500 md:static absolute md:min-h-fit min-h-[60vh] left-0 top-[-100%] md:w-auto  w-full flex items-center">
                <ul class="flex md:flex-row flex-col md:items-center text-white">
                    <li ><a class="text-sm text-white hover:text-[#DDEBF6] pr-1 border-b-2 py-1.5" href="#">Home</a></li>
                    <li><a class="text-sm text-white hover:text-[#DDEBF6] pr-1" href="#">About <span class="fa-solid fa-angle-down"></span></a></li>
                    <li><a class="text-sm text-white hover:text-[#DDEBF6] pr-1" href="#">Products <span class="fa-solid fa-angle-down"></span></a></li>
                    <li><a class="text-sm text-white hover:text-[#DDEBF6] pr-1" href="#">Services <span class="fa-solid fa-angle-down"></span></a></li>
                    <li><a class="text-sm text-white hover:text-[#DDEBF6] pr-1" href="#">Contact</a></li>
                </ul>
            </div>
            <div class="flex items-center gap-6">
                <form action="" class="hidden md:block">
                    <input type="search" name="" id="" class="bg-[#DDEBF6] h-[30px] rounded-full w-4/4 lg:inline-block lg:ml-auto " placeholder="Search">
                    <i class="fa-solid fa-search text-gray-500 ml-[-25px]"></i>
                </form>
                <div class="hidden md:block rahimafroz-main-btn w-[125px]" >
                    <div class="btn-up w-[125px] px-2">
                        <div class="absolute text-[15px] font-bold ml-[-2px] mt-[-2px]">
                            Become a Dealer
                        </div>
                    </div>
                </div>
                <div class="hidden md:block rahimafroz-main-btn w-[125px]" >
                    <div class="btn-up w-[125px] px-2">
                        <div class="absolute text-[15px] font-bold ml-[-2px] mt-[-2px]">
                            Global Presence
                        </div>
                    </div>
                </div>
                <i onclick="onToggleMenu(this)" name="menu" id="menuBar" class="fa-solid fa-bars text-white text-3xl cursor-pointer md:hidden"></i>
            </div>

        </nav>
    </header>
    <div id="mobileMenu" class="hidden bg-[#005CAB] px-6 min-h-screen">
{{--        <div class="">--}}
{{--            <img class="w-16 cursor-pointer" src="https://cdn-icons-png.flaticon.com/512/5968/5968204.png" alt="...">--}}
{{--        </div>--}}
        <div
            class="nav-links duration-500 md:static block left-0 top-[-100%]">
            <ul class="flex md:flex-row flex-col md:items-center text-white gap-2">
                <li ><a class="text-sm text-white hover:text-[#DDEBF6] border-b-2 py-1.5" href="#">Home</a></li>
                <li><a class="text-sm text-white hover:text-[#DDEBF6]" href="#">About <span class="fa-solid fa-angle-down"></span></a></li>
                <li><a class="text-sm text-white hover:text-[#DDEBF6]" href="#">Products <span class="fa-solid fa-angle-down"></span></a></li>
                <li><a class="text-sm text-white hover:text-[#DDEBF6]" href="#">Services <span class="fa-solid fa-angle-down"></span></a></li>
                <li><a class="text-sm text-white hover:text-[#DDEBF6]" href="#">Contact</a></li>
            </ul>
        </div>
        <div class="">
{{--            <form action="" class=" md:block">--}}
{{--                <input type="search" name="" id="" class="bg-[#DDEBF6] h-[30px] rounded-full w-4/4 lg:inline-block lg:ml-auto " placeholder="Search">--}}
{{--                <i class="fa-solid fa-search text-gray-500 ml-[-25px]"></i>--}}
{{--            </form>--}}
            <div class="my-2 rahimafroz-main-btn w-[125px]" >
                <div class="btn-up w-[125px] px-2">
                    <div class="absolute text-[15px] font-bold ml-[-2px] mt-[-2px]">
                        Become a Dealer
                    </div>
                </div>
            </div>
            <div class="my-2  rahimafroz-main-btn w-[125px]" >
                <div class="btn-up w-[125px] px-2">
                    <div class="absolute text-[15px] font-bold ml-[-2px] mt-[-2px]">
                        Global Presence
                    </div>
                </div>
            </div>

        </div>
    </div>


    <script>
        const navLinks = document.querySelector('.nav-links')
        function onToggleMenu(e){
            document.querySelector("#mobileMenu").classList.toggle('hidden')
            document.querySelector("#menuBar").classList.toggle('fa-close')
        }
    </script>
