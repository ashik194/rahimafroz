@extends('front-layouts.app')
@section('content')
    <div class="h-[400px]" style="background-size: cover; background-position: center; background-repeat: no-repeat; background-image: url('{{asset("/images/system/battery-manage.png")}}')">

    </div>

    <div class="bg-[#DDEBF6] py-10">
        <div class="container mx-auto px-[133px]">
            <div class="my-4 ">
                <h1 class="text-4xl text-[#005CAB] font-bold text-center">Register For 24/7 Nation-Wide</h1>
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

            <div class="mt-16 px-8">
                <h1 class="text-3xl text-[#005CAB]">Check Battery Status: </h1>
                <form class=" pt-6 pb-8 mb-4">
                    <div class="flex justify-between gap-10">
                        <div class="flex-1 mb-4">
                            <input
                                class="shadow appearance-none border placeholder-[#DDEBF6] bg-[#0D72B9] text-white border-[#005CAB] rounded-lg w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                                id="username" type="text" placeholder="Mobile" />
                        </div>
                        <div class="flex-1 mb-4">
                            <input
                                class="shadow placeholder-[#DDEBF6] appearance-none border bg-[#0D72B9] text-white border-[#005CAB] rounded-lg w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                                id="username" type="text" placeholder="Serial" />
                        </div>
                        <div>
                            <button class="bg-[#0D72B9] text-white px-12 py-2 rounded-lg text-xl ">
                                Search
                            </button>
                        </div>
                    </div>
                </form>
            </div>


            

            <div class="px-8">
                <div class="flex justify-center items-start my-2">
                  <div class="w-full my-1">
                    <ul class="flex flex-col">
                      <li class="bg-[#0D72B9] text-white my-2 shadow-lg" x-data="accordion(1)">
                        <h2
                          @click="handleClick()"
                          class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
                        >
                          <span>Maintenance Guideline</span>
                          <svg
                            :class="handleRotate()"
                            class="fill-current text-white h-6 w-6 transform transition-transform duration-500"
                            viewBox="0 0 20 20"
                          >
                            <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                          </svg>
                        </h2>
                        <div
                          x-ref="tab"
                          :style="handleToggle()"
                          class="border-l-2 border-white overflow-hidden max-h-0 duration-500 transition-all"
                        >
                          <p class="p-3 text-white">
                            Shipping time is set by our delivery partners, according to the delivery method chosen by you. Additional details can be found in the order confirmation
                          </p>
                        </div>
                      </li>
                      <li class="bg-[#0D72B9] text-white my-2 shadow-lg" x-data="accordion(2)">
                        <h2
                          @click="handleClick()"
                          class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
                        >
                          <span>Warranty Policy</span>
                          <svg
                            :class="handleRotate()"
                            class="fill-current text-white h-6 w-6 transform transition-transform duration-500"
                            viewBox="0 0 20 20"
                          >
                            <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                          </svg>
                        </h2>
                        <div
                          class="border-l-2 border-white overflow-hidden max-h-0 duration-500 transition-all"
                          x-ref="tab"
                          :style="handleToggle()"
                        >
                          <p class="p-3 text-white">
                            Once shipped, you’ll get a confirmation email that includes a tracking number and additional information regarding tracking your order.
                          </p>
                        </div>
                      </li>
                      <li class="bg-[#0D72B9] text-white my-2 shadow-lg" x-data="accordion(3)">
                        <h2
                          @click="handleClick()"
                          class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
                        >
                          <span>Emergency Service/Call Center</span>
                          <svg
                            :class="handleRotate()"
                            class="fill-current text-white h-6 w-6 transform transition-transform duration-500"
                            viewBox="0 0 20 20"
                          >
                            <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                          </svg>
                        </h2>
                        <div
                          class="border-l-2 border-white overflow-hidden max-h-0 duration-500 transition-all"
                          x-ref="tab"
                          :style="handleToggle()"
                        >
                          <p class="p-3 text-white">
                            We allow the return of all items within 30 days of your original order’s date. If you’re interested in returning your items, send us an email with your order number and we’ll ship a return label.
                          </p>
                        </div>
                      </li>
                      <li class="bg-[#0D72B9] text-white my-2 shadow-lg" x-data="accordion(4)">
                        <h2
                          @click="handleClick()"
                          class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
                        >
                          <span>Request For Service Contract</span>
                          <svg
                            :class="handleRotate()"
                            class="fill-current text-white h-6 w-6 transform transition-transform duration-500"
                            viewBox="0 0 20 20"
                          >
                            <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                          </svg>
                        </h2>
                        <div
                          class="border-l-2 border-white overflow-hidden max-h-0 duration-500 transition-all"
                          x-ref="tab"
                          :style="handleToggle()"
                        >
                          <p class="p-3 text-white">
                            Changes to an existing order can be made as long as the order is still in “processing” status. Please contact our team via email and we’ll make sure to apply the needed changes. If your order has already been shipped, we cannot apply any changes to it. If you are unhappy with your order when it arrives, please contact us for any changes you may require.
                          </p>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
            </div>



        </div>
    </div>

    <script>
        document.addEventListener('alpine:init', () => {
          Alpine.store('accordion', {
            tab: 0
          });
          
          Alpine.data('accordion', (idx) => ({
            init() {
              this.idx = idx;
            },
            idx: -1,
            handleClick() {
              this.$store.accordion.tab = this.$store.accordion.tab === this.idx ? 0 : this.idx;
            },
            handleRotate() {
              return this.$store.accordion.tab === this.idx ? 'rotate-180' : '';
            },
            handleToggle() {
              return this.$store.accordion.tab === this.idx ? `max-height: ${this.$refs.tab.scrollHeight}px` : '';
            }
          }));
        })
      </script>
@endsection
