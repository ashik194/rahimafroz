@extends('front-layouts.app')
@section('content')
<div class="h-[120px] sm:h-[200px] lg:h-[300px] xl:h-[400px]" style="background-size: cover; background-position: center; background-repeat: no-repeat; background-image: url('{{asset("/images/system/Rahimafrooz Batteries Ltd.png")}}')">

</div>

<div class="bg-[#DDEBF6] py-20" style="background-size: cover; background-position: center; background-repeat: no-repeat;background-image:url({{asset('/images/system/rahim-afroz-patern-3.png')}}">
    <div class="container mx-auto px-[20px] md:px-[133px] ">
        <div class="w-full md:w-1/2 mx-auto">
            <h1 class="text-center font-bold text-xl md:text-3xl lg:text-4xl text-[#0D72B9]">Rahimafrooz Storage Power Business (RSPB)</h1>
        </div>
        <div class="flex justify-between gap-20 mt-10 flex-wrap">
            <div class="flex-1">
                <p class="text-justify">
                    Rahimafrooz was founded in 1954 as a pioneer in the Bangladeshi battery industry. Rahimafrooz Storage Power Business (RSPB) is the core business of the Group, with leadership in the local and some international markets. As the leading supplier of lead acid batteries in Bangladesh with the latest technology of batteries, RSPB serves the most extensive network of dealers and retailers. It is the only company that has batteries to offer for every segment in the industry. RSPB produces a complete range of products ranging from 2.5 Ah to 3000 Ah, for applications primarily in Automotive, Inverters, Solar, Marine, Traction and Telecoms. With exports starting in 1992, GLOBATT, VOLTA, IGNUS, and DELTA have taken RSPB across global frontiers.
                </p>
            </div>
            <div class="flex-1">
                <p class="text-justify">
                    RSPB enjoys a presence in over 70+ global markets, with domination in some key APAC, SAARC, and Middle Eastern markets. Rahimafrooz had pioneered in bringing the conventional Dry Charge technology in automotive and Industrial in the 1960s, followed by Maintenance Free (MF) technology in 2009. RSPB continues to be the only MF battery manufacturer in Bangladesh and has continued to hold its pioneering position through recent technological developments including the Enhanced Flooded Batteries (EFB) for Start-Stop, OPzV for Industrial, and the completely sealed Valve Regulated Lead Acid (VRLA) batteries for both starting and deep cycle applications.
                </p>
            </div>
        </div>
    </div>
</div>
<div class="bg-[#DDEBF6]" style="background-size: cover; background-position: center; background-repeat: no-repeat;background-image:url({{asset('/images/system/rahim-afroz-patern-2.png')}}">

    <div class="container mx-auto pt-20 px-[20px] md:px-[133px]">
{{--        <iframe id="player" type="text/html" width="100%" height="430"--}}
{{--                src="http://www.youtube.com/embed/M7lc1UVf-VE?enablejsapi=1&origin=http://example.com"--}}
{{--                frameborder="0"></iframe>--}}
        {{-- <iframe width="100%" height="500" src="https://www.youtube.com/embed/6GolJa3RKDQ" title="" frameBorder="0"   allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"  allowFullScreen></iframe> --}}
        <iframe width="100%"  class="h-[250px] md:h-[300px] lg:h-[500px]" src="https://www.youtube.com/embed/6GolJa3RKDQ" title="" frameBorder="0"   allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"  allowFullScreen></iframe>
    </div>


    <div class="container mx-auto mt-20 pb-20 px-[20px] md:px-[133px]">
        <div class="flex items-center mt-12 flex-wrap">
            <div class="lg:flex-1">
                <div class="h-[350px] xl:h-[280px] md:w-[500px] lg:w-[500px] xl:w-[700px] bg-[#0D72B9] p-10">
                    <h1 class="text-white md:text-3xl lg:text-4xl mb-4">Rahimafrooz Batteries Ltd.</h1>
                    <p class="text-md lg:text-2xl text-justify text-white">
                        RBL’s modern manufacturing plant is also equipped with lead-recycling management system. The plant has the capacity to manufacture over a 2.5 million battery units per annum for automotive and other applications.
                    </p>
                </div>
                <p class="text-[#0D72B9] text-right my-6 mr-2">Rahimafrooz Batteries Factory</p>
            </div>
            <div class="lg:flex-1">
                <img src="{{asset('images/system/Image-01.png')}}" alt="" class="w-full h-[400px] xl:h-[550px]">
            </div>
        </div>
        <div class="flex items-center mt-12 flex-wrap">
            <div class="lg:flex-1">
                <img src="{{asset('images/system/Image-02.png')}}" alt="" class="w-full h-[400px] xl:h-[550px]">
            </div>
            <div class="lg:flex-1">
                <div class="h-[350px] xl:h-[280px] md:w-[500px] lg:w-[500px] xl:w-[700px] bg-[#0D72B9] p-10">
                    <h1 class="text-white md:text-3xl lg:text-4xl mb-4">Rahimafrooz Globatt Ltd.</h1>
                    <p class="text-md lg:text-2xl text-justify text-white">
                        The RGL factory is equipped with modern SLI battery manufacturing facilities for which raw materials are sourced from Korea, Singapore, Australia and Europe. With a production capacity of 1.5 million units per year, this plant is one the largest battery export plant in South Asia.
                    </p>
                </div>
                <p class="text-[#0D72B9] my-6 ml-2">Rahimafrooz Globatt Factory </p>
            </div>
            
        </div>
        <div class="flex items-center mt-12 flex-wrap">
            <div class="lg:flex-1">
                <div class="h-[350px] xl:h-[280px] md:w-[500px] lg:w-[500px] xl:w-[700px] bg-[#0D72B9] p-10">
                    <h1 class="text-white md:text-3xl lg:text-4xl mb-4">Rahimafrooz Accumulators Ltd.</h1>
                    <p class="text-md lg:text-2xl text-justify text-white">
                        RAL is equipped to manufacture 330 million Amp. Hour of tubular industrial batteries using low maintenance and VRLA technologies in 2V, 6V and 12V units, catering to motive, traction, stationary and other backup applications.
                    </p>
                </div>
                <p class="text-[#0D72B9] text-right my-6 mr-2">Rahimafrooz Accumulators Factory </p>
            </div>
            <div class="lg:flex-1">
                <img src="{{asset('images/system/Image-03.png')}}" alt="" class="w-full h-[400px] xl:h-[550px]">
            </div>
        </div>
    </div>


    <div class="container mx-auto mt-20 pb-20 px-[20px] md:px-[133px]">
        {{-- <div class="relative w-full " style="padding-top: 42.25%;">
            <video class="absolute top-0 left-0 w-full h-[100%] object-cover" autoplay loop>
                <source src="{{asset("/images/system/Company-Milestone.mp4")}}">
                </video>
            </div> --}}
            <div class="my-10">
                <h1 class="text-4xl text-center font-bold uppercase text-[#0D72B9] mt-24 mb-10">RSPB Milestone</h1>
                <img src="{{asset('images/system/Milestone-1024x565.png')}}" alt="" class="w-full">
            </div>
    <p class=" mt-6 text-center text-md lg:text-2xl lg:px-36">
        Rahimafrooz batteries deliver an optimal combination of power and durability. The high-quality performance of the batteries is guaranteed by ensuring that every critical function of the batteries is tested using the most advanced technology. Facilities at the factories include modern production machinery and testing facilities with complete air treatment systems and innovative lead recycling infrastructures. Key processes are computer controlled, guaranteeing accuracy and quality.
    </p>
</div>

<div class="container mx-auto mt-10 pb-20 px-[20px] md:px-[133px]">
    <h1 class="text-4xl text-center font-bold uppercase text-[#0D72B9] mb-16">Our Values</h1>
    <div class="mt-10 flex justify-between gap-20 flex-wrap">
        <div class="flex-1">
            <div class="flex justify-center">
                <img  src="{{asset('/images/system/our-values-icon-1.png')}}" alt="">
            </div>
            <h5 class="mt-6 text-center">Integrity in All Our Dealings</h5>
        </div>
        <div class="flex-1">
            <div class="flex justify-center">
                <img class="text-center" src="{{asset('/images/system/our-values-icon-2.png')}}" alt="">
            </div>
            <h5 class="mt-6 text-center">Excellence in Everything We Do</h5>
        </div>
        <div class="flex-1">
            <div class="flex justify-center">
                <img class="text-center" src="{{asset('/images/system/our-values-icon-3.png')}}" alt="">
            </div>
            <h5 class="mt-6 text-center">Total Commitment to Customer Satisfaction</h5>
        </div>
        <div class="flex-1">
            <div class="flex justify-center">
                <img class="text-center" src="{{asset('/images/system/our-values-icon-4.png')}}" alt="">
            </div>
            <h5 class="mt-6 text-center">Thinking Ahead and Taking New Initiatives</h5>
        </div>
        <div class="flex-1">
            <div class="flex justify-center">
                <img class="text-center" src="{{asset('/images/system/our-values-icon-5.png')}}" alt="">
            </div>
            <h5 class="mt-6 text-center">Valuing and Inspiring People</h5>
        </div>
    </div>
</div>

</div>

@endsection