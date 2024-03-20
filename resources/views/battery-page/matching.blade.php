@extends('front-layouts.app')
@section('content')

<div class="h-[600px]" style="background-size: cover; background-position: center; background-repeat: no-repeat; background-image: url('{{asset("/images/system/RA main page slide show 1.jpeg")}}')">

</div>
    
    {{-- <div class="relative bg-[#0D72B9]"
     style="background-position: center; background-size: cover; background-repeat: no-repeat; background-image: url('{{asset("/images/system/rahim-afroz-patern-1.png")}}')"> --}}
<div class="relative min-h-[880px] z-50"
style="margin-top:-38px;background-position: center; background-size: cover; background-repeat: no-repeat; background-image: url('{{asset("/images/system/categories-bg.png")}}')">
<div class="container mx-auto">
   {{-- <div class="container mx-auto ">
       <div class="mx-[133px] h-12 bg-[#0D72B9] rounded-3xl absolute top-[-24px] z-10 w-full"></div>
   </div> --}}
   <div class=" z-30">
       <div class="pt-32">
           <h1 class="text-4xl text-center uppercase font-bold text-white">Choose Your Product</h1>
       </div>
       <div class="py-20">

           <div class="mt-32">
               <div class="w-full h-24 bg-[#005CAB] rounded-md flex justify-center items-center">
                   <div class="m-4 bg-white h-20 w-full rounded-lg flex items-center justify-between px-4">
                       <div class="mx-2">
                           <select id="" name="category"
                                   class="block bg-[#005CAB] w-[140px] rounded-md border-0 py-1.5 text-white shadow-sm ring-1 ring-inset ring-[#DDEBF6] focus:ring-2 focus:ring-inset focus:ring-[#DDEBF6] sm:max-w-xs sm:text-sm sm:leading-6">
                               <option>Category</option>
                               <option>Passenger Car</option>
                               <option>IPS</option>
                           </select>
                       </div>
                       <div class="mx-2">
                           <select id="" name="category"
                                   class="block bg-[#005CAB] w-[140px] rounded-md border-0 py-1.5 text-white shadow-sm ring-1 ring-inset ring-[#DDEBF6] focus:ring-2 focus:ring-inset focus:ring-[#DDEBF6] sm:max-w-xs sm:text-sm sm:leading-6">
                               <option>Technology</option>
                           </select>
                       </div>
                       <div class="mx-2">
                           <select id="" name="category"
                                   class="block bg-[#005CAB] w-[140px] rounded-md border-0 py-1.5 text-white shadow-sm ring-1 ring-inset ring-[#DDEBF6] focus:ring-2 focus:ring-inset focus:ring-[#DDEBF6] sm:max-w-xs sm:text-sm sm:leading-6">
                               <option>Brand</option>
                           </select>
                       </div>
                       <div class="mx-2">
                           <select id="" name="category"
                                   class="block bg-[#005CAB] w-[140px] rounded-md border-0 py-1.5 text-white shadow-sm ring-1 ring-inset ring-[#DDEBF6] focus:ring-2 focus:ring-inset focus:ring-[#DDEBF6] sm:max-w-xs sm:text-sm sm:leading-6">
                               <option>Model</option>
                           </select>
                       </div>
                       <div class="mx-2">
                           <select id="" name="category"
                                   class="block bg-[#005CAB] w-[140px] rounded-md border-0 py-1.5 text-white shadow-sm ring-1 ring-inset ring-[#DDEBF6] focus:ring-2 focus:ring-inset focus:ring-[#DDEBF6] sm:max-w-xs sm:text-sm sm:leading-6">
                               <option>Year</option>
                           </select>
                       </div>
                       <div class="mx-2">
                           <select id="" name="category"
                                   class="block bg-[#005CAB] w-[140px] rounded-md border-0 py-1.5 text-white shadow-sm ring-1 ring-inset ring-[#DDEBF6] focus:ring-2 focus:ring-inset focus:ring-[#DDEBF6] sm:max-w-xs sm:text-sm sm:leading-6">
                               <option>CC</option>
                           </select>
                       </div>
                       <div class="mx-2">
                           <form action="" class="hidden md:block">
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
<div class=" bg-[#DDEBF6] py-20" style="background-size: cover; background-position: center; background-repeat: no-repeat;background-image:url('http://127.0.0.1:8000/images/system/rahim-afroz-patern-2.png')">
<div class="container mx-auto mt-10">
    <div class="suitable-battery">
        <h3 class="float-right text-xl text-[#005CAB]">Nearest Dealer Find</h3>
        <div class="matching-image flex justify-between gap-4 items-center mt-10">
            <div class="flex-1">
                <h1 class="text-3xl text-[#005CAB] font-semibold">Suitable Batteries For AUDI A3 (Diesel) </h1>
            </div>
                <div class="flex-1 flex justify-center">
                    <div>
                        <div class="brand-product" style="height:280px; width:280px;">
                            <img src="{{asset('/images/system/1. GLOBATT_ACE_N50_GREEN.png')}}" alt="">
                        </div>
                        <div class="mx-auto">
                          <h3 class="text-center">Lucas Ultima Battery</h3>
                            <div class="flex justify-center">
                              <button class="border border-[#005CAB] text-[#005CAB] font-semibold px-3 py-1 hover:bg-[#005CAB] hover:text-white rounded-sm">Select</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex-1 flex justify-center">
                    <div>
                        <div class="brand-product" style="height:280px; width:280px;">
                            <img src="{{asset('/images/system/1. GLOBATT_ACE_N50_GREEN.png')}}" alt="">
                        </div>
                        <div class="mx-auto">
                          <h3 class="text-center">Lucas Ultima Battery</h3>
                            <div class="flex justify-center">
                              <button class="border border-[#005CAB] text-[#005CAB] font-semibold px-3 py-1 hover:bg-[#005CAB] hover:text-white rounded-sm">View Details</button>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>


    <div class="matching-details mt-20">
        <div class="flex flex-wrap">
            <div class="bg-[#3380c4] flex-1">
                <div class=" border-2 border-[#005CAB] px-4 text-white text-xl py-4">
                    Brand
                </div>
                <div class=" border-2 border-[#005CAB] px-4 text-white text-xl py-4">
                    Series
                </div>
                <div class=" border-2 border-[#005CAB] px-4 text-white text-xl py-4">
                    Item Code
                </div>
                <div class=" border-2 border-[#005CAB] px-4 text-white text-xl py-4">
                    Model
                </div>
                <div class=" border-2 border-[#005CAB] px-4 text-white text-xl py-4">
                    Product Dimension (LXBXH) (mm)
                </div>
                <div class=" border-2 border-[#005CAB] px-4 text-white text-xl py-4">
                    Voltage (V)
                </div>
                <div class=" border-2 border-[#005CAB] px-4 text-white text-xl py-4">
                    Ref. Amphere Hour (AH)
                </div>
                <div class=" border-2 border-[#005CAB] px-4 text-white text-xl py-4">
                    Cold Cranking Ability (CCA)
                </div>
                <div class=" border-2 border-[#005CAB] px-4 text-white text-xl py-4">
                    Total Warranty (Months)
                </div>
                <div class=" border-2 border-[#005CAB] px-4 text-white text-xl py-4">
                    Free Warranty (Months)
                </div>
                <div class=" border-2 border-[#005CAB] px-4 text-white text-xl py-4">
                    Pro-rata Warranty (Months)
                </div>
                <div class=" border-2 border-[#005CAB] px-4 text-white text-xl py-4">
                    Terminal Layout
                </div>
                <div class=" border-2 border-[#005CAB] px-4 text-white text-xl py-4">
                    Country of Origin
                </div>
                
            </div>
            <div class=" flex-1">
                <div class="border-2 border-[#005CAB] px-4 text-[#005CAB] text-xl py-4"">
                    Globatt
                </div>
                <div class="border-2 border-[#005CAB] px-4 text-[#005CAB] text-xl py-4"">
                    Pro
                </div>
                <div class="border-2 border-[#005CAB] px-4 text-[#005CAB] text-xl py-4"">
                    AAM
                </div>
                <div class="border-2 border-[#005CAB] px-4 text-[#005CAB] text-xl py-4"">
                    Globatt
                </div>
                <div class="border-2 border-[#005CAB] px-4 text-[#005CAB] text-xl py-4"">
                    Globatt
                </div>
                <div class="border-2 border-[#005CAB] px-4 text-[#005CAB] text-xl py-4"">
                    Globatt
                </div>
                <div class="border-2 border-[#005CAB] px-4 text-[#005CAB] text-xl py-4"">
                    Globatt
                </div>
                <div class="border-2 border-[#005CAB] px-4 text-[#005CAB] text-xl py-4"">
                    Globatt
                </div>
                <div class="border-2 border-[#005CAB] px-4 text-[#005CAB] text-xl py-4"">
                    Globatt
                </div>
                <div class="border-2 border-[#005CAB] px-4 text-[#005CAB] text-xl py-4"">
                    Globatt
                </div>
                <div class="border-2 border-[#005CAB] px-4 text-[#005CAB] text-xl py-4"">
                    Globatt
                </div>
                <div class="border-2 border-[#005CAB] px-4 text-[#005CAB] text-xl py-4"">
                    
                </div>
                <div class="border-2 border-[#005CAB] px-4 text-[#005CAB] text-xl py-4"">
                    Globatt
                </div>
            </div>
            <div class=" flex-1">
                <div class="border-2 border-[#005CAB] px-4 text-[#005CAB] text-xl py-4"">
                    Globatt
                </div>
                <div class="border-2 border-[#005CAB] px-4 text-[#005CAB] text-xl py-4"">
                    Pro
                </div>
                <div class="border-2 border-[#005CAB] px-4 text-[#005CAB] text-xl py-4"">
                    AAM
                </div>
                <div class="border-2 border-[#005CAB] px-4 text-[#005CAB] text-xl py-4"">
                    Globatt
                </div>
                <div class="border-2 border-[#005CAB] px-4 text-[#005CAB] text-xl py-4"">
                    Globatt
                </div>
                <div class="border-2 border-[#005CAB] px-4 text-[#005CAB] text-xl py-4"">
                    Globatt
                </div>
                <div class="border-2 border-[#005CAB] px-4 text-[#005CAB] text-xl py-4"">
                    Globatt
                </div>
                <div class="border-2 border-[#005CAB] px-4 text-[#005CAB] text-xl py-4"">
                    Globatt
                </div>
                <div class="border-2 border-[#005CAB] px-4 text-[#005CAB] text-xl py-4"">
                    Globatt
                </div>
                <div class="border-2 border-[#005CAB] px-4 text-[#005CAB] text-xl py-4"">
                    Globatt
                </div>
                <div class="border-2 border-[#005CAB] px-4 text-[#005CAB] text-xl py-4"">
                    Globatt
                </div>
                <div class="border-2 border-[#005CAB] px-4 text-[#005CAB] text-xl py-4"">
                    
                </div>
                <div class="border-2 border-[#005CAB] px-4 text-[#005CAB] text-xl py-4"">
                    Globatt
                </div>
            </div>
        </div>
    </div>


    <div class="similar">
        <div class="similar mt-16">
    
            <div class="owl-carousel owl-theme mt-10">
              <div class="item ">
                  <div class="brand-product  " style="height:280px; width:280px;">
                      <img src="{{asset('/images/system/1. GLOBATT_ACE_N50_GREEN.png')}}" alt="">
                    </div>
                    <div class="mx-auto">
                    <h3 class="text-center">Lucas Ultima Battery</h3>
                      <div class="flex justify-center">
                        <button class="border border-[#005CAB] text-[#005CAB] font-semibold px-3 py-1 hover:bg-[#005CAB] hover:text-white rounded-sm">View Details</button>
                      </div>
                    </div>
              </div>
              <div class="item ">
                  <div class="brand-product  " style="height:280px; width:280px;">
                      <img src="{{asset('/images/system/2. GLOBATT_RACE_N50_BLUE.png')}}" alt="">
                    </div>
                    <div class="mx-auto">
                    <h3 class="text-center">Lucas Ultima Battery</h3>
                      <div class="flex justify-center">
                        <button class="border border-[#005CAB] text-[#005CAB] font-semibold px-3 py-1 hover:bg-[#005CAB] hover:text-white rounded-sm">View Details</button>
                      </div>
                    </div>
              </div>
              <div class="item ">
                  <div class="brand-product  " style="height:280px; width:280px;">
                      <img src="{{asset('/images/system/3. GLOBATT_PACE_N50_BLACK.png')}}" alt="">
                    </div>
                    <div class="mx-auto">
                    <h3 class="text-center">Lucas Ultima Battery</h3>
                      <div class="flex justify-center">
                        <button class="border border-[#005CAB] text-[#005CAB] font-semibold px-3 py-1 hover:bg-[#005CAB] hover:text-white rounded-sm">View Details</button>
                      </div>
                    </div>
              </div>
              <div class="item ">
                  <div class="brand-product  " style="height:280px; width:280px;">
                      <img src="{{asset('/images/system/4. SUPERX_N50_GREEN.png')}}" alt="">
                    </div>
                    <div class="mx-auto">
                    <h3 class="text-center">Lucas Ultima Battery</h3>
                      <div class="flex justify-center">
                        <button class="border border-[#005CAB] text-[#005CAB] font-semibold px-3 py-1 hover:bg-[#005CAB] hover:text-white rounded-sm">View Details</button>
                      </div>
                    </div>
              </div>
              
    
          </div>
          </div>
    </div>
</div>

</div>  
@endsection
