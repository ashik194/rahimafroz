@extends('front-layouts.app')
@section('content')
    <iframe width="100%" height="320"
            src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Rosemont+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
            frameborder="0" allowfullscreen>
    </iframe>
    <div class="bg-[#DDEBF6] py-20">
        <div class="container mx-auto px-[133px]">
            <h1 class="text-3xl text-[#005CAB] uppercase font-bold text-center pb-20">Contact Us</h1>
            <div>
                <div class="w-full">
                    <form class=" px-8 pt-6 pb-8 mb-4">
                        <div class="mb-4">
                            <input
                                class="shadow appearance-none border border-[#005CAB] rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="username" type="text" placeholder="Full Name*" style="background:none;"/>
                        </div>

                        <div class="flex justify-between gap-20">
                            <div class="flex-1 mb-4">
                                <input
                                    class="shadow appearance-none border border-[#005CAB] rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    id="username" type="text" placeholder="Full Name*" style="background:none;"/>
                            </div>
                            <div class="flex-1 mb-4">
                                <input
                                    class="shadow appearance-none border border-[#005CAB] rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    id="username" type="text" placeholder="Full Name*" style="background:none;"/>
                            </div>
                        </div>

                        <textarea id="message" rows="4"
                                  class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-[#005CAB] focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                  placeholder="Message" style="background:none;"></textarea>


                        <div class="py-6">
                            <p class="text-red-500 text-sm italic">Please type the characters you see in the image
                                for security purposes.</p>
                            <div class="flex justify-between gap-10 mt-2">
                                <div class="flex justify-between gap-10">
                                    <div>
                                        <input
                                            class="shadow appearance-none border border-[#005CAB] rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                                            id="password" type="password" placeholder="Enter the code shown"
                                            style="background:none;"/>

                                    </div>
                                    <div>
                                        <img src="{{asset('/images/system/captcha.png')}}" alt=""/>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <button class="bg-[#005CAB] text-white px-4 py-2 rounded-lg font-bold text-2xl uppercase">
                            Submit
                        </button>
                    </form>
                </div>

            </div>

            <div class="flex justify-between flex-wrap gap-10 mt-10">
                <div class="flex-1 rounded-md p-4" style="background: rgba(13, 114, 185, 0.25)">
                    <div class="flex gap-4">
                        <div class="w-[50px] mr-1">
                            <i class="fa-solid fa-map-marker text-2xl"></i>
                        </div>
                        <div>
                            <h1 class="text-lg font-bold text-[#005CAB]">Global Head Office</h1>
                            <p class="text-xs">
                                Rahimafrooz Storage Power Business: 705 West Nakhalpara, Tejgaon Dhaka -1205 Bangladesh.
                            </p>
                        </div>
                    </div>
                    <div class="flex gap-4 mt-2">
                        <div class="w-[50px]">
                            <i class="fa-solid fa-tty text-2xl"></i>
                        </div>
                        <div>
                            <h1 class="text-lg font-bold text-[#005CAB]">Phone / Fax</h1>
                            <p class="text-xs">
                                Customer Support: +880 2 9113696
                                +880 2 58153128
                            </p>
                        </div>
                    </div>
                    <div class="flex gap-4 mt-2">
                        <div class="w-[50px]">
                            <i class="fa-solid fa-envelope text-2xl"></i>
                        </div>
                        <div>
                            <h1 class="text-lg font-bold text-[#005CAB]">Email</h1>
                            <p class="text-xs">
                                battery@rahimafrooz.com
                            </p>
                        </div>
                    </div>
                </div>
                <div class="flex-1 rounded-md p-4" style="background: rgba(13, 114, 185, 0.25)">
                    <div class="flex gap-4">
                        <div class="w-[50px] mr-1">
                            <i class="fa-solid fa-map-marker text-2xl"></i>
                        </div>
                        <div>
                            <h1 class="text-lg font-bold text-[#005CAB]">India Office</h1>
                            <p class="text-xs">
                                Globatt India Pvt. Ltd: 1102, Ithum Tower 1 A-40, Sector 62, Noida - 201301 (U.P.), India
                            </p>
                        </div>
                    </div>
                    <div class="flex gap-4 mt-2">
                        <div class="w-[50px]">
                            <i class="fa-solid fa-tty text-2xl"></i>
                        </div>
                        <div>
                            <h1 class="text-lg font-bold text-[#005CAB]">Phone / Fax</h1>
                            <p class="text-xs">
                                Customer Support: +91 9650003663
                            </p>
                        </div>
                    </div>
                    <div class="flex gap-4 mt-2">
                        <div class="w-[50px]">
                            <i class="fa-solid fa-envelope text-2xl"></i>
                        </div>
                        <div>
                            <h1 class="text-lg font-bold text-[#005CAB]">Email</h1>
                            <p class="text-xs">
                                gipl@rahimafrooz.com
                            </p>
                        </div>
                    </div>
                </div>
                <div class="flex-1 rounded-md p-4" style="background: rgba(13, 114, 185, 0.25)">
                    <div class="flex gap-4">
                        <div class="w-[50px] mr-1">
                            <i class="fa-solid fa-map-marker text-2xl"></i>
                        </div>
                        <div>
                            <h1 class="text-lg font-bold text-[#005CAB]">EMEA Office (Europe Middle East & Africa)</h1>
                            <p class="text-xs">
                                Lebang Automotive FCO: 106, Techono-Hub 2, Silicon Oasis, PO Box-13667, Dubai UAE
                            </p>
                        </div>
                    </div>
                    <div class="flex gap-4 mt-2">
                        <div class="w-[50px]">
                            <i class="fa-solid fa-tty text-2xl"></i>
                        </div>
                        <div>
                            <h1 class="text-lg font-bold text-[#005CAB]">Phone / Fax</h1>
                            <p class="text-xs">
                                Customer Support: +97143440522-3
                            </p>
                        </div>
                    </div>
                    <div class="flex gap-4 mt-2">
                        <div class="w-[50px]">
                            <i class="fa-solid fa-envelope text-2xl"></i>
                        </div>
                        <div>
                            <h1 class="text-lg font-bold text-[#005CAB]">Email</h1>
                            <p class="text-xs">
                                lebang@rahimafrooz.com
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
