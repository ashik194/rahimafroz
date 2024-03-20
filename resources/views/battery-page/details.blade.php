@extends('front-layouts.app')
@section('content')

<div class="bg-[#DDEBF6] pb-20 pt-6" style="background-size: cover; background-position: center; background-repeat: no-repeat;background-image:url('http://127.0.0.1:8000/images/system/rahim-afroz-patern-2.png')">
<div class="container mx-auto mt-4">
    <nav class="flex" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
          <li class="inline-flex items-center">
            <a href="#" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
              {{-- <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
              </svg> --}}
              Home
            </a>
          </li>
          <li>
            <div class="flex items-center">
              <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
              </svg>
              <a href="#" class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white uppercase">Globatt</a>
            </div>
          </li>
        </ol>
    </nav>
      
      <div class="flex justify-between gap-10">
        <div class="product-image flex-1">

            <div class="font-[sans-serif] ">
                <div class="p-6 lg:max-w-7xl max-w-4xl mx-auto">
                  {{-- <div class="grid items-start grid-cols-1 lg:grid-cols-5 gap-12 shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] p-6"> --}}
                  <div class="grid items-start grid-cols-1 lg:grid-cols-5 gap-5 p-6">
                    <div class="lg:col-span-5 w-full lg:sticky top-0 text-center">
                      {{-- <div class="px-4 py-10 rounded-xl shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] relative"> --}}
                      <div class="px-4 py-10 rounded-xl  relative">
                        <img src="{{asset('/images/system/1. GLOBATT_ACE_N50_GREEN.png')}}" alt="Product" class="w-4/5 rounded object-cover" />
                        {{-- <button type="button" class="absolute top-4 right-4">
                          <svg xmlns="http://www.w3.org/2000/svg" width="20px" fill="#ccc" class="mr-1 hover:fill-[#333]" viewBox="0 0 64 64">
                            <path d="M45.5 4A18.53 18.53 0 0 0 32 9.86 18.5 18.5 0 0 0 0 22.5C0 40.92 29.71 59 31 59.71a2 2 0 0 0 2.06 0C34.29 59 64 40.92 64 22.5A18.52 18.52 0 0 0 45.5 4ZM32 55.64C26.83 52.34 4 36.92 4 22.5a14.5 14.5 0 0 1 26.36-8.33 2 2 0 0 0 3.27 0A14.5 14.5 0 0 1 60 22.5c0 14.41-22.83 29.83-28 33.14Z" data-original="#000000"></path>
                          </svg>
                        </button> --}}
                      </div>
                      <div class="mt-6 flex flex-wrap justify-center gap-6 mx-auto">
                        <div class="rounded-xl p-4 shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)]">
                          <img src="{{asset('/images/system/1. GLOBATT_ACE_N50_GREEN.png')}}" alt="Product2" class="w-24 cursor-pointer" />
                        </div>
                        <div class="rounded-xl p-4 shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)]">
                          <img src="{{asset('/images/system/1. GLOBATT_ACE_N50_GREEN.png')}}" alt="Product2" class="w-24 cursor-pointer" />
                        </div>
                        <div class="rounded-xl p-4 shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)]">
                          <img src="{{asset('/images/system/1. GLOBATT_ACE_N50_GREEN.png')}}" alt="Product2" class="w-24 cursor-pointer" />
                        </div>
                        <div class="rounded-xl p-4 shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)]">
                          <img src="{{asset('/images/system/1. GLOBATT_ACE_N50_GREEN.png')}}" alt="Product2" class="w-24 cursor-pointer" />
                        </div>
                      </div>
                    </div>
                    
                  </div>
                  
                  
                </div>
              </div>
        </div>



        <div class="product-details flex-1">
            <div class="lg:col-span-2">
                <h2 class="text-3xl font-extrabold text-[#005CAB]">GLOBATT</h2>
                <div class="mt-6">
                  <p class="flex gap-2 items-center my-4">
                    <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                      </svg>
                    <span>Warranty: s</span>
                  </p>
                  <p class="flex gap-2 items-center my-4">
                    <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                      </svg>
                    <span>Capacity: s</span>
                  </p>
                  <p class="flex gap-2 items-center my-4">
                    <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                      </svg>
                    <span>Battery Voltage: s</span>
                  </p>
                  <p class="flex gap-2 items-center my-4">
                    <span>MRP: <span class="text-[#005CAB] font-bold"> ৳ 14, 740.00</span></span>
                  </p>

                </div>
                
                
                <div class="mt-16">
                  <button type="button" class="min-w-[200px] px-4 py-3 bg-[#005CAB] hover:bg-[#111] text-white text-sm font-bold rounded uppercase">Buy now</button>
                  <button type="button" class="min-w-[200px] px-4 py-3 bg-[#005CAB] hover:bg-[#111] text-white text-sm font-bold rounded uppercase">Add to Cart</button> <br>
                  <button type="button" class="min-w-[200px] px-4 py-3 bg-[#005CAB] hover:bg-[#111] text-white text-sm font-bold rounded mt-4">Find Dealer</button>
                  {{-- <button type="button" class="min-w-[200px] px-4 py-2.5 border border-[#333] bg-transparent hover:bg-gray-50 text-[#333] text-sm font-bold rounded">Add to cart</button> --}}
                </div>

                <div class="mt-20 flex flex-wrap gap-4">
                  <div class="flex items-center">
                    <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                      <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
                    </svg>
                    <span class="mx-6 text-xl">Zero Maintenance</span>
                  </div>
                  <div class="flex items-center">
                    <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                      <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
                    </svg>
                    <span class="mx-6 text-xl">24 Months Warranty</span>
                  </div>
                  <div class="flex items-center">
                    <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                      <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
                    </svg>
                    <span class="mx-6 text-xl">Free Shipping</span>
                  </div>
                </div>
              </div>
        </div>
      </div>

      <div class="product-information">
        <h1 class="text-2xl font-bold">Product Information</h1>
        <div class="flex flex-wrap gap-4">
          <h4>Details</h4>
          <h4>Additional Information</h4>
        </div>
        <div class="grid grid-cols-2 gap-4">
          <div class="pt-4 border border-l-0 border-b-0 border-t-[#005CAB] border-r-[#005CAB]">
            <h1 class="text-3xl">GLOBATT</h1>
            <ul class="mt-6 space-y-4 text-[#333] px-8">
              <li class="text-md font-semibold">Brand <span class="ml-4 float-right">GLOBATT</span></li>
              <li class="text-md font-semibold">Series <span class="ml-4 float-right">ACE</span></li>
              <li class="text-md font-semibold">Item Code <span class="ml-4 float-right">N50ZL</span></li>
              <li class="text-md font-semibold">Product Dimensions<span class="ml-4 float-right"></span></li>
              <li class="text-md font-semibold">Voltage (V) <span class="ml-4 float-right">12</span></li>
              <li class="text-md font-semibold">Ref. Amphere Hour (AH) <span class="ml-4 float-right">100</span></li>
              <li class="text-md font-semibold">Cold Cranking Ability (CCA) <span class="ml-4 float-right">600</span></li>
              <li class="text-md font-semibold">Total Warranty Months<span class="ml-4 float-right">24</span></li>
              <li class="text-md font-semibold">Country Origin <span class="ml-4 float-right">Bangladesh</span></li>
            </ul>
          </div>
          
          <div class="pt-4 border border-r-0 border-b-0 border-t-[#005CAB] border-l-[#005CAB]">
            <div class="mt-20 px-2 sm:px-8">
              <div class="flex items-center">
                <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                  <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
                </svg>
                <span class="mx-6 text-xl">Zero Maintenance</span>
              </div>
              <div class="flex items-center">
                <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                  <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
                </svg>
                <span class="mx-6 text-xl">24 Months Warranty</span>
              </div>
              <div class="flex items-center">
                <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                  <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
                </svg>
                <span class="mx-6 text-xl">Free Shipping</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="similar mt-16">
        <h1 class="text-2xl font-bold">Similar Product</h1>

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

      <div class="static-text mt-20">
        <div>
          <h4 class="text-3xl text-[#005CAB]">Best Price Commercial Vehicle</h4>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum reiciendis, commodi perferendis nulla incidunt deleniti itaque! Amet vero suscipit culpa ullam soluta? Quia ipsa error, aspernatur dolor voluptates temporibus doloremque!</p>
        </div>

        <div class="flex justify-center brochure mt-10">
          <button class="uppercase px-10 py-2 text-3xl font-bold text-white bg-[#005CAB]">Download E-Brochure</button>
        </div>
        
        <div class="ordered-list mt-10">
          <ol>
            <li class="flex flex-wrap gap-4 items-center">
              <svg height="40" width="40" xmlns="http://www.w3.org/2000/svg">
                <circle r="10" cx="20" cy="20" fill="black" />  
              </svg> 
              Total Warranty Includes pro-rata</li>
            <li class="flex flex-wrap gap-4 items-center">
              <svg height="40" width="40" xmlns="http://www.w3.org/2000/svg">
                <circle r="10" cx="20" cy="20" fill="black" />  
              </svg> 
              Total Warranty Includes pro-rata</li>
            <li class="flex flex-wrap gap-4 items-center">
              <svg height="40" width="40" xmlns="http://www.w3.org/2000/svg">
                <circle r="10" cx="20" cy="20" fill="black" />  
              </svg> 
              Total Warranty Includes pro-rata</li>
            <li class="flex flex-wrap gap-4 items-center">
              <svg height="40" width="40" xmlns="http://www.w3.org/2000/svg">
                <circle r="10" cx="20" cy="20" fill="black" />  
              </svg> 
              Total Warranty Includes pro-rata</li>
          </ol>
        </div>
      </div>

</div>

</div>  
@endsection
