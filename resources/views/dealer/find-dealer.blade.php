@extends('front-layouts.app')
@section('content')
    <iframe width="100%" height="520"
            src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Rosemont+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
            frameborder="0" allowfullscreen>
    </iframe>
    <div class="bg-[#DDEBF6] py-10">
        <div class="container mx-auto px-[20px] md:px-[133px]">
            <div class="my-4 ">
                <h1 class="text-2xl text-[#005CAB]">Search Results</h1>
                <h6 class="lg my-2 text-[#005CAB]">02 Dealers founded</h6>
            </div>
            <div>
                <div class="w-full">
                    <div class="mt-4 mb-8">
                        <hr class="border-b border-[#005CAB] w-full mb-3">
                        <div class="sm:flex justify-between gap-4 lg:gap-20 flex-wrap">
                            <div class="flex-1 px-6 py-8 mt-6 border border-[#005CAB] text-[#005CAB]">
                                <h4 class="text-xl">Dealer Name: <span>New Saika Motors</span></h4>
                                <h4 class="text-xl">Address    : <span>Hazi Kalu Miah Market, C & B Road, Narsingdi.</span></h4>

                                <div class="mt-16">
                                    <h4 class="text-xl">Proprietor Name: <span>Mr. XYZ</span></h4>
                                    <h4 class="text-xl">Phone: <span>017116-21552, 01717-156527</span></h4>
                                    <h4 class="text-xl"> Email: <span> </span></h4>
                                    <h4 class="text-xl mt-4"> <i class="fa-solid fa-map-marker"></i> Locate on map </h4>
                                </div>
                            </div>
                            <div class="sm:flex-1 px-6 text-[#005CAB]">
                                <h3 class="text-xl font-bold mb-1">Dealer Network:</h3>
                                <img class="w-full" src="{{asset('/images/system/find-dealer.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 mb-8">
                        <hr class="border-b border-[#005CAB] w-full mb-3">
                        <div class="flex justify-between gap-4 lg:gap-20 flex-wrap">
                            <div class="sm:flex-1 px-6 py-8 mt-6 border border-[#005CAB] text-[#005CAB]">
                                <h4 class="text-xl">Dealer Name: <span>New Saika Motors</span></h4>
                                <h4 class="text-xl">Address    : <span>Hazi Kalu Miah Market, C & B Road, Narsingdi.</span></h4>

                                <div class="mt-16">
                                    <h4 class="text-xl">Proprietor Name: <span>Mr. XYZ</span></h4>
                                    <h4 class="text-xl">Phone: <span>017116-21552, 01717-156527</span></h4>
                                    <h4 class="text-xl"> Email: <span> </span></h4>
                                    <h4 class="text-xl mt-4"> <i class="fa-solid fa-map-marker"></i> Locate on map </h4>
                                </div>
                            </div>
                            <div class="sm:flex-1 px-6 text-[#005CAB]">
                                <h3 class="text-xl font-bold mb-1">Dealer Network:</h3>
                                <img class="w-full" src="{{asset('/images/system/find-dealer.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
