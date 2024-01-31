@extends('front-layouts.app')
@section('content')
    <div class="h-[300px]" style="background-size: cover; background-position: center; background-repeat: no-repeat; background-image: url('{{asset("/images/system/battery-manage.png")}}')">

    </div>

    <div class="bg-[#DDEBF6] py-10">
        <div class="container mx-auto px-[133px]">
            <div class="my-4 ">
                <h1 class="text-3xl text-[#005CAB] font-bold text-center">Register For 24/7 Nation-Wide</h1>
                <h6 class="lg my-2 text-[#005CAB] text-2xl font-bold text-center">Paperless Warranty Service</h6>
            </div>
            <div class="mt-16">
                <div class="w-full">
                    <form class=" px-8 pt-6 pb-8 mb-4">
                        <div class="flex justify-between gap-20">
                            <div class="flex-1 mb-4">
                                <input
                                    class="shadow appearance-none border placeholder-[#DDEBF6] bg-[#0D72B9] text-white border-[#005CAB] rounded-lg w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                                    id="username" type="text" placeholder="Name" />
                            </div>
                            <div class="flex-1 mb-4">
                                <input
                                    class="shadow placeholder-[#DDEBF6] appearance-none border bg-[#0D72B9] text-white border-[#005CAB] rounded-lg w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                                    id="username" type="text" placeholder="Phone Number" />
                            </div>
                        </div>
                        <div class="flex justify-between gap-20">
                            <div class="flex-1 mb-4">
                                <input
                                    class="shadow appearance-none border bg-[#0D72B9] text-white placeholder-[#DDEBF6] border-[#005CAB] rounded-lg w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                                    id="username" type="text" placeholder="Product Serial Number" />
                            </div>
                            <div class="flex-1 mb-4">
                                <input
                                    class="shadow appearance-none border bg-[#0D72B9] text-white placeholder-[#DDEBF6] border-[#005CAB] rounded-lg w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                                    id="username" type="text" placeholder="Vehicle/Device/Application" />
                            </div>
                        </div>
                        <div class="flex justify-between gap-20">
                            <div class="flex-1 mb-4">
                                <input
                                    class="shadow appearance-none border bg-[#0D72B9] text-white placeholder-[#DDEBF6] border-[#005CAB] rounded-lg w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                                    id="username" type="text" placeholder="Purchas Date" />
                            </div>
                            <div class="flex-1 mb-4">
                                <input
                                    class="shadow appearance-none border bg-[#0D72B9] text-white placeholder-[#DDEBF6] border-[#005CAB] rounded-lg w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                                    id="username" type="text" placeholder="Purchas DLR" />
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
