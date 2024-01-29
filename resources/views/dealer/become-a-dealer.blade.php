@extends('front-layouts.app')
@section('content')
    <div class="h-[300px]" style="background-size: cover; background-position: center; background-repeat: no-repeat; background-image: url('{{asset("/images/system/dealer-banner.png")}}')">

    </div>

    <div class="bg-[#DDEBF6] py-20">
        <div class="container mx-auto px-[133px]">
            <h1 class="text-3xl text-[#005CAB] uppercase font-bold text-center pb-2">dealer  ENLISTMENT  FORM</h1>
            <p class="text-center">Input your Information for become a dealer</p>
            <div class="mt-12">
                <div class="w-full">
                    <form class=" px-8 pt-6 pb-8 mb-4">
                        <div class="flex justify-between gap-20">
                            <div class="flex-1 mb-4">
                                <input
                                    class="shadow appearance-none border border-[#005CAB] rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    id="username" type="text" placeholder="Full Name*" style="background:none;"/>
                            </div>
                            <div class="flex-1 mb-4">
                                <input
                                    class="shadow appearance-none border border-[#005CAB] rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    id="username" type="text" placeholder="Name of Company" style="background:none;"/>
                            </div>
                        </div>
                        <div class="flex justify-between gap-20">
                            <div class="flex-1 mb-4">
                                <input
                                    class="shadow appearance-none border border-[#005CAB] rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    id="username" type="text" placeholder="Phone Number*" style="background:none;"/>
                            </div>
                            <div class="flex-1 mb-4">
                                <input
                                    class="shadow appearance-none border border-[#005CAB] rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    id="username" type="text" placeholder="E-mail" style="background:none;"/>
                            </div>
                        </div>
                        <div class="flex justify-between gap-20">
                            <div class="flex-1 mb-4">
                                <input
                                    class="shadow appearance-none border border-[#005CAB] rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    id="username" type="text" placeholder="District*" style="background:none;"/>
                            </div>
                            <div class="flex-1 mb-4">
                                <input
                                    class="shadow appearance-none border border-[#005CAB] rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    id="username" type="text" placeholder="Thana" style="background:none;"/>
                            </div>
                        </div>
                        <div class="flex justify-between gap-20">
                            <div class="flex-1 mb-4">
                                <input
                                    class="shadow appearance-none border border-[#005CAB] rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    id="username" type="text" placeholder="ZIP Code" style="background:none;"/>
                            </div>
                        </div>


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

        </div>
    </div>
@endsection
