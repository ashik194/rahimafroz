@extends('front-layouts.app')
@section('content')
    <div class="h-[400px]" style="background-size: cover; background-position: center; background-repeat: no-repeat; background-image: url('{{asset("/images/system/Manufacturing-banner.png")}}')">

    </div>

    <div class=" bg-[#DDEBF6] py-20" style="background-size: cover; background-position: center; background-repeat: no-repeat;background-image:url({{asset('/images/system/rahim-afroz-patern-2.png')}}">
        <div class="container mx-auto px-[133px]">
            <div class="masonry">

                <div class="h-[300px]">
                    <div class="bg-[#005CAB] py-10 px-20 h-[160px] break-inside my-4">
                        <h1 class="text-4xl font-bold text-white">Manufacturing Facilities</h1>
                    </div>
                </div>
                <div class="h-[560px] break-inside">
                    <img class="w-full" src="{{asset("/images/system/manufacturing.png")}}" alt="">
                    <div class="flex-1 border-b-2 border-[#005CAB]">
                        <h2 class="text-[#0D72B9] text-xl font-bold mt-2">Cominco Line </h2>
                        <h3 class="text-[#0D72B9] text-lg">Canada</h3>
                        <p class="mt-2 mb-6 text-justify">
                            We use Canadian based Cominco line’s expanded grid technology to produce negative grids for our MF/SMFbatteries. We use only superior quality lead calcium alloy to produce the grids, which are pasted using Super MAC machine of USA. After pasting, plates are sent to vacuum dryer for surface drying and stacking for next processing.
                        </p>
                    </div>
                </div>

                <div class="h-[560px] break-inside">
                    <img class="w-full" src="{{asset("/images/system/manufacturing.png")}}" alt="">
                    <div class=" border-b-2 border-[#005CAB]">
                        <h2 class="text-[#0D72B9] text-xl font-bold mt-2">Cast ON Strap (COS) </h2>
                        <h3 class="text-[#0D72B9] text-lg">Machine</h3>
                        <p class="mt-2 mb-6 text-justify">
                            Our modernized COS (Cast –On- Strap) machine has four working stations with rotary table which speeds up the assembly process and ensures high quality group building. This automated machine is capable to handle COS for both central lug and lateral lug position and can manage the variations of strap thickness. It ensures stronger strap than the thinner gas-burnt conventional group building and reduce the lever action movement resulting from the road shock.
                        </p>
                    </div>

                </div>

                <div class="h-[560px] break-inside">
                    <img class="w-full" src="{{asset("/images/system/manufacturing.png")}}" alt="">

                    <div class="flex-1 border-b-2 border-[#005CAB]">
                        <h2 class="text-[#0D72B9] text-xl font-bold mt-2">Die Casting </h2>
                        <h3 class="text-[#0D72B9] text-lg">Machine</h3>
                        <p class="mt-2 mb-6 text-justify">
                            Our pressure die casting machine ensures flawless & high-pressure casted spine for Industrial battery. It also makes sure of high operational life using superfine void-free grain structure under the quick rate of discharge. Our specialized paste recipe facilitates high charge acceptance and reduces recharging time.
                        </p>
                    </div>
                </div>
                <div class="h-[560px] break-inside">
                    <img class="w-full" src="{{asset("/images/system/manufacturing.png")}}" alt="">

                    <div class=" border-b-2 border-[#005CAB]">
                        <h2 class="text-[#0D72B9] text-xl font-bold mt-2">Injection </h2>
                        <h3 class="text-[#0D72B9] text-lg">Molding Facility</h3>
                        <p class="mt-2 mb-6 text-justify">
                            Our injection molding facilities produce all the major containers required to assemble batteries. Superior quality of Polypropylene (PP) granules from Lyondell Basell, Korea and Exxon Mobil, Singapore are used as raw material. Each injection machine is operated by advanced PLC and comes with individual cooling facility for molds.
                        </p>
                    </div>
                </div>
                <div class="h-[560px]">
                    <img class="w-full" src="{{asset("/images/system/manufacturing.png")}}" alt="">

                    <div class="flex-1 border-b-2 border-[#005CAB]">
                        <h2 class="text-[#0D72B9] text-xl font-bold mt-2">Oxide Mill</h2>
                        <h3 class="text-[#0D72B9] text-lg">Sovema, Italy</h3>
                        <p class="mt-2 mb-6 text-justify">
                            The assembled batteries are taken to formation tanks to charge the batteries in circulating water cooling system. We use advanced current transducers for the DC current to ensure high stability of battery formation for each battery. The conversion of lead dioxide after charging is over 95%.
                        </p>
                    </div>
                </div>


                <div class="h-[560px]">
                    <img class="w-full" src="{{asset("/images/system/manufacturing.png")}}" alt="">

                    <div class="flex-1 border-b-2 border-[#005CAB]">
                        <h2 class="text-[#0D72B9] text-xl font-bold mt-2">Quality</h2>
                        <h3 class="text-[#0D72B9] text-lg">Assurance Lab</h3>
                        <p class="mt-2 mb-6 text-justify">
                            Our Quality Assurance laboratory inspects quality of incoming raw materials, in-process semi-finished products and components and 100% finished products before releasing for delivery. The laboratory is equipped with state-of-the-art equipment sourced from renowned makers of the world. The chemical laboratory is equipped with advanced titration and separation mechanism to test primarily the capacity, CCA, RC, Charge Retention tests of all batteries.
                        </p>
                    </div>
                </div>

            <div class="h-[560px]">
                <img class="w-full" src="{{asset("/images/system/manufacturing.png")}}" alt="">

                <div class="flex-1 border-b-2 border-[#005CAB]">
                    <h2 class="text-[#0D72B9] text-xl font-bold mt-2">ATP & ETP</h2>
                    <h3 class="text-[#0D72B9] text-lg">Facilities</h3>
                    <p class="mt-2 mb-6 text-justify">
                        Our Factories are highly equipped with Air Treatment and Effluent Treatment plant to keep our environment green & safe. Our ATP and ETP facilities are design for treating the industrial waste water and air for its reuse or safe disposal to the environment.
                    </p>
                </div>
            </div>


            <div class="h-[560px]">
                <img class="w-full" src="{{asset("/images/system/manufacturing.png")}}" alt="">

                <div class="flex-1 border-b-2 border-[#005CAB]">
                    <h2 class="text-[#0D72B9] text-xl font-bold mt-2">Material</h2>
                    <h3 class="text-[#0D72B9] text-lg">Management</h3>
                    <p class="mt-2 mb-6 text-justify">
                        The factory has built a modern warehouse with access pathway for trucks and container transport. The warehouse provides ample space for storage, sorting, loading and unloading of finished goods and raw materials for a complete packaging solution.
                    </p>
                </div>
            </div>



        </div>

    </div>
@endsection