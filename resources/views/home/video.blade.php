<div class="relative w-full" style="padding-top: 42.25%;">
    <video class="absolute top-0 left-0 w-full h-[100%] object-cover" autoplay loop>
        <source src="{{asset("/images/system/Company-Milestone.mp4")}}">
    </video>
    {{-- <div class="absolute top-0 right-[15%]" id="videoUpFull">
        <div class="w-[400px] bg-[#0D72B9] h-full">
            <div class="flex justify-end">
                <div class="w-20 flex items-center justify-center gap-4 bg-[#DDEBF6]">
                    <div>
                        <i class="fa-regular fa-clone text-2xl cursor-pointer" id="maximum"></i>
                        <i class="fa-solid fa-window-minimize text-2xl hidden cursor-pointer" id="minimum"></i>
                    </div>
                    <div>
                        <i class="fa-solid fa-close text-2xl cursor-pointer" id="videoUpClose"></i>
                    </div>
                </div>
            </div>
            <div class="px-8 pb-2 transition-all duration-300" id="minAbout">
                <h1 class="text-center text-4xl font-bold text-white ">About</h1>
                <p class="text-xl text-white">Rahimafrooz was founded in 1954 as a pioneer in the Bangladeshi ....</p>
            </div>
            <div class="hidden px-8 py-6 transition-all duration-300" id="maxAbout">
                <h1 class="text-center text-6xl font-bold text-white my-10">About</h1>
                <p class="text-xl text-white">Rahimafrooz was founded in 1954 as a pioneer in the Bangladeshi battery industry. Rahimafrooz Storage Power Business (RSPB) is the core business of the Group, with leadership in the local and some international markets.  As the leading supplier of lead acid batteries in Bangladesh with the latest technology of batteries, RSPB serves the most extensive network of dealers and retailers. </p>
                <div class="w-full mt-6 flex justify-end">
                    <a href="/about/rahimafrooz" class="rounded px-4 py-2 bg-white text-blue-700 text-2xl font-bold">More Details</a>
                </div>
            </div>
        </div>
    </div> --}}
</div>

{{-- <script>
    var videoUp = document.getElementById("maximum");
    var videoDown = document.getElementById("minimum");
    var minAbout = document.getElementById("minAbout");
    var maxAbout = document.getElementById("maxAbout");
    var videoUpClose = document.getElementById("videoUpClose");
    var videoUpFull = document.getElementById("videoUpFull");

videoUp.addEventListener('click', () => {
    minAbout.classList.add("hidden");
    maxAbout.classList.remove("hidden");
    videoUp.classList.add("hidden");
    videoDown.classList.remove("hidden");
});
videoDown.addEventListener('click', () => {
    minAbout.classList.remove("hidden");
    maxAbout.classList.add("hidden");
    videoUp.classList.remove("hidden");
    videoDown.classList.add("hidden");
});
videoUpClose.addEventListener('click', () => {
    videoUpFull.classList.add("hidden")
})
</script> --}}
