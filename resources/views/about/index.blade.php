@extends('front-layouts.app')
@section('content')
    @include('about.banner')
    <div class="bg-[#DDEBF6] py-20">
        <div class="container mx-auto px-[133px]">
            <div class="flex justify-between gap-10">
                <div class="rounded-md w-1/3 bg-white overflow-hidden shadow-2xl">
                    <div class="h-[200px] w-[300px] bg-white">
                        <img src="" alt="">
                    </div>
                    <div class="px-4">
                        <h3 class="text-2xl my-2">Rahimafrooz Batteries Ltd –</h3>
                        <p class="text-justify">RBL’s modern manufacturing plant is also equipped with lead-recycling management system. The plant has the capacity to manufacture over a 2.5 million battery units per annum for automotive and other applications.</p>
                    </div>
                </div>
                <div class="rounded-md w-1/3 bg-white overflow-hidden shadow-2xl">
                    <div class="h-[200px] w-[300px]">
                        <img src="" alt="">
                    </div>
                    <div class="px-4 py-2">
                        <h3 class="text-2xl my-2">Rahimafrooz Globatt Ltd –</h3>
                        <p class="text-justify">
                            The RGL factory is equipped with modern SLI battery manufacturing facilities for which raw materials are sourced from Korea, Singapore, Australia and Europe. With a production capacity of 1.5 million units per year, this plant is one the largest battery export plant in South Asia..</p>
                    </div>
                </div>
                <div class="rounded-md w-1/3 bg-white overflow-hidden shadow-2xl">
                    <div class="h-[200px] w-[300px]">
                        <img src="" alt="">
                    </div>
                    <div class="px-4 py-2">
                        <h3 class="text-2xl my-2">Rahimafrooz Accumulators Ltd – </h3>
                        <p class="text-justify">AL is equipped to manufacture 330 million Amp. Hour of tubular industrial batteries using low maintenance and VRLA technologies in 2V, 6V and 12V units, catering to motive, traction, stationary and other backup applications.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mx-auto mt-20 px-[133px]">
            <h1 class="text-[#0D72B9] text-3xl uppercase font-bold text-center">Our Values</h1>
            <div class="mt-10 flex justify-between gap-20">
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
