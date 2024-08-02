<x-layout>
    <div class="h-screen flex justify-center">
        <div class="flex items-center w-1/3">
            <div class="w-full rounded-md border border-slate-300 bg-white p-4 shadow-sm">
                <div class="border-b pb-8 font-bold text-black text-center text-2xl tracking-widest uppercase">
                    login
                </div>

                <form class="py-10" action="{{ route('Authenticate') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <input class="border w-full p-3" type="text" name="email" placeholder="E-Mail">
                    </div>
                    <div class="mb-6">
                        <input class="border w-full p-3" name="password" type="password" placeholder="**************">
                    </div>
                    <div class="flex">
                        <button
                            class="bg-sky-500 hover:bg-sky-700 w-full p-4 text-sm text-white uppercase font-bold tracking-wider">
                            Login
                        </button>
                    </div>
                </form>
                <div class="border px-10 py-6">
                    <div class="flex flex-row justify-start">
                        <span class="font-semibold text-black no-underline mr-2">Don't have an
                            account?</span>
                        <a href="{{ URL('/sign-up') }}"
                            class="font-bold text-sky-500 hover:text-sky-700 no-underline">Sign up!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
@if ($message = Session::get('error'))
    <script>
        Swal.fire({
            position: "top",
            toast: true,
            icon: 'error',
            title: '{{ $message }}',
            showConfirmButton: false,
            timer: 3000
        })
    </script>
@endif
