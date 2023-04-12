<x-layout>

    <main class="flex bg-[#e9ecf1]  flex-col justify-center items-center w-screen h-screen">
        <inside
            class="flex justify-between items-center w-screen h-screen relative overflow-hidden  rounded-[28px] bg-white">

            <left class="flex w-full   justify-center">
                <div class="w-max flex flex-col gap-6 ">

                    <form class="flex flex-col gap-6" method="POST" action="{{ route('user.store') }}">
                        <input type="hidden" value="{{ $wallet }}" name="wallet">
                        @csrf
                        <row class="flex flex-col gap-2">
                            <h2 class="text-3xl font-bold">Create your account</h2>
                            <p class="opacity-60">Are you ready to enter the world of funny land?</p>
                        </row>
                        <row class="grid grid-cols-2 gap-6">
                            <label class="relative bg-[#f5f7f9]  rounded-2xl flex-col flex px-8 py-4">
                                <span class="text-[#666666] text-sm  ">Firstname</span>
                                <input type="text" placeholder="John" required name="first_name"
                                    class="placeholder:opacity-50 bg-transparent border-none outline-transparent ring-0 focus:ring-0 px-0">
                            </label>
                            <label class="relative bg-[#f5f7f9]  rounded-2xl flex-col flex px-8 py-4">
                                <span class="text-[#666666] text-sm  ">Lastname</span>
                                <input type="text" placeholder="Doe" required name="last_name"
                                    class=" placeholder:opacity-50 bg-transparent border-none outline-transparent ring-0 focus:ring-0 px-0">
                            </label>
                        </row>
                        <row>
                            <label class="relative bg-[#f5f7f9]  rounded-2xl flex-col flex px-8 py-4">
                                <span class="text-[#666666] text-sm  ">Email</span>
                                <input type="email" required placeholder="Example@gmail.com" name="email"
                                    class="placeholder:opacity-50 bg-transparent border-none outline-transparent ring-0 focus:ring-0 px-0">
                            </label>
                        </row>
                        <row>
                            <label class="flex items-center gap-2">
                                <input type="checkbox"
                                    class="bg-[#f5f7f9] border-gray-200 w-4 h-4 rounded  focus:ring-0 active:ring-0 ring-0 text-[#c28569] "
                                    required>
                                <span class="opacity-70">I accept the terms and conditions</span>
                            </label>
                            <span class="text-sm opacity-50"></span>
                        </row>

                        <button
                            class="rounded-full bg-[#c28569] text-xl w-max flex items-center gap-3 py-4 px-8 text-white">
                            Let's Start the game
                        </button>


                    </form>





                </div>

            </left>
            <right class="w-max flex-shrink-0 grow-0">
                <img src="{{ asset('image/login.jpg') }}" class="h-screen w-full object-cover">
            </right>
        </inside>
    </main>

    <script src="{{ asset('libs/js/web3-provider@1.7.1.minjs.js') }}"></script>

</x-layout>
