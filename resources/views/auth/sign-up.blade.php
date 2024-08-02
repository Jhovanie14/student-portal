<x-layout>
    <div class="h-screen flex justify-center">
        <div class="flex items-center w-1/3">
            <div class="w-full rounded-md border border-slate-300 bg-white p-4 shadow-sm">
                <div class="border-b pb-8 font-bold text-black text-center text-2xl tracking-widest uppercase">
                    Register
                </div>

                <form class="py-10" action="{{ route('Registration') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <input class="border w-full p-3" type="text" name="name" placeholder="Full name">
                    </div>
                    <div class="mb-3">
                        <input class="border w-full p-3" type="text" name="email" placeholder="E-Mail">
                    </div>
                    <div class="mb-8">
                        <input class="border w-full p-3" name="password" type="password" placeholder="**************">
                    </div>
                    <div class="flex">
                        <button
                            class="bg-sky-500 hover:bg-sky-700 w-full p-4 text-sm text-white uppercase font-bold tracking-wider">
                            Sign up
                        </button>
                    </div>
                </form>
                <div class="border px-10 py-6">
                    <div class="flex flex-row justify-start">
                        <span class="font-semibold text-black no-underline mr-2">Already have an
                            account?</span>
                        <a href="{{ URL('/') }}"
                            class="font-bold text-sky-500 hover:text-sky-700 no-underline">Sign in!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
