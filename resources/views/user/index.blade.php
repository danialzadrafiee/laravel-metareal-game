<x-layout>
    @vite('/resources/js/user.index.js')
    <main class="flex bg-[#e9ecf1]  flex-col justify-center items-center w-screen h-screen">


        <inside class="flex justify-between items-center w-screen  relative overflow-hidden   bg-white">
            <left class="flex w-full   justify-center">
                <div class="w-max flex flex-col gap-2 ">
                    <p class="font-semibold  tracking-tight   text-black">
                        <span class="block text-2xl">Welcome to</span>
                        <span class="text-6xl text-[#c28569]">
                            Metareal
                        </span>
                    </p>
                    <p class=" tracking-[-0.01] w-[380px] text-left text-Grey">
                        where children can explore the excitement of strategic battles
                        while learning important skills! Join us now and start your adventure in a world full of
                        laughter and education.
                    </p>
                    <button action="btn_wc_login" class="bg-[#c28569] mt-4 text-white rounded-2xl w-max px-8 py-4">Start
                        journery</button>
                </div>

            </left>
            <right class="w-max flex-shrink-0 grow-0">
                <img src="{{ asset('image/login.jpg') }}" class="h-screen object-cover">
            </right>
        </inside>
    </main>
    <script src="{{ asset('web3-provider@1.7.1.minjs.js') }}"></script>
    @vite('/resources/js/user.index.js')


</x-layout>
