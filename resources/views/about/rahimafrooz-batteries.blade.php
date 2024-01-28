@extends('front-layouts.app')
@section('content')
<div class="h-[300px]" style="background-size: cover; background-position: center; background-repeat: no-repeat; background-image: url('{{asset("/images/system/Rahimafrooz Batteries Ltd.png")}}')">

</div>

<div class="px-[133px] bg-[#DDEBF6] py-20" style="background-size: cover; background-position: center; background-repeat: no-repeat;background-image:url({{asset('/images/system/rahim-afroz-patern-3.png')}}">
    <div class="container mx-auto">
        <div class="w-1/2 mx-auto">
            <h1 class="text-center font-bold text-4xl text-[#0D72B9]">Rahimafrooz Storage Power Business (RSPB)</h1>
        </div>
        <div class="flex justify-between gap-20 mt-10">
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

    <div class="container mx-auto mt-20">
{{--        <iframe id="player" type="text/html" width="100%" height="430"--}}
{{--                src="http://www.youtube.com/embed/M7lc1UVf-VE?enablejsapi=1&origin=http://example.com"--}}
{{--                frameborder="0"></iframe>--}}
        <iframe width="100%" height="500" src="https://www.youtube.com/embed/6GolJa3RKDQ" title="" frameBorder="0"   allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"  allowFullScreen></iframe>
    </div>
<div class="container mx-auto my-20">
    <div class="relative w-full " style="padding-top: 42.25%;">
        <video class="absolute top-0 left-0 w-full h-[100%] object-cover" autoplay loop>
            <source src="{{asset("/images/system/Company-Milestone.mp4")}}">
        </video>
    </div>
    <p class="text-justify mt-6">
        Rahimafrooz batteries deliver an optimal combination of power and durability. The high-quality performance of the batteries is guaranteed by ensuring that every critical function of the batteries is tested using the most advanced technology. Facilities at the factories include modern production machinery and testing facilities with complete air treatment systems and innovative lead recycling infrastructures. Key processes are computer controlled, guaranteeing accuracy and quality.
    </p>
</div>


@endsection
