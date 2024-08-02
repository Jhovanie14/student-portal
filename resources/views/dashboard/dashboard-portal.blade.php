<x-layout>

    <nav class="w-full">
        <div class="flex justify-between items-center bg-gray-400 p-3">
            <a href="#" class="text-black text-xl ml-2 font-bold uppercase">student portal</a>
            <div class="flex justify-center items-center" id="nav-menu">
                <a class="hidden md:flex flex-row items-center space-x-2 text-black p-2 hover:bg-gray-200" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8">
                        <path fill-rule="evenodd"
                            d="M18.685 19.097A9.723 9.723 0 0 0 21.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 0 0 3.065 7.097A9.716 9.716 0 0 0 12 21.75a9.716 9.716 0 0 0 6.685-2.653Zm-12.54-1.285A7.486 7.486 0 0 1 12 15a7.486 7.486 0 0 1 5.855 2.812A8.224 8.224 0 0 1 12 20.25a8.224 8.224 0 0 1-5.855-2.438ZM15.75 9a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z"
                            clip-rule="evenodd" />
                    </svg>
                    @auth
                        <h1 class="font-semibold text-lg text-gray-800"> {{ auth()->user()->name }}</h1>
                        <a href="{{ route('logout.perform') }}" class="text-red-800 p-2 underline">Logout</a>
                    @endauth
                </a>
                <a class="md:hidden flex flex-row text-black p-2 hover:bg-gray-200" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8">
                        <path fill-rule="evenodd"
                            d="M18.685 19.097A9.723 9.723 0 0 0 21.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 0 0 3.065 7.097A9.716 9.716 0 0 0 12 21.75a9.716 9.716 0 0 0 6.685-2.653Zm-12.54-1.285A7.486 7.486 0 0 1 12 15a7.486 7.486 0 0 1 5.855 2.812A8.224 8.224 0 0 1 12 20.25a8.224 8.224 0 0 1-5.855-2.438ZM15.75 9a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z"
                            clip-rule="evenodd" />
                    </svg>
                </a>

                {{-- <a href="#" class="text-black p-2 hover:bg-gray-200">Class schedule</a>
                <a href="#" class="text-black p-2 hover:bg-gray-200">SPR</a> --}}
            </div>
        </div>
    </nav>

    <div class="mx-auto max-w-6xl flex flex-col justify-center p-6">
        <div class="flex border rounded-md px-4 py-10 space-x-3">
            {{-- <span class="text-3xl font-bold text-black pb-3">
                        Welcome
                    </span> --}}
            <form action="{{ route('dashboard') }}" method="GET">

                <input class="border p-3" type="text" name="search" placeholder="Search Student"
                    value="{{ request('search') }}">
                <button type="submit" class=" bg-sky-400 self-center uppercase p-2">search</button>
            </form>
        </div>

        <div class="overflow-x-auto border shadow-md sm:rounded-lg">
            <table class="min-w-full divide-y divide-gray-300 table-fixed">
                <thead class="bg-gray-100">
                    <tr>
                        {{-- <th scope="col"
                            class="py-3 px-6 text-xs font-black tracking-wider text-left text-black uppercase">
                            Code
                        </th> --}}
                        {{-- <th scope="col"
                            class="py-3 px-6 text-xs font-black tracking-wider text-left text-black uppercase">
                            Title
                        </th> --}}
                        <th scope="col"
                            class="py-3 px-6 text-xs font-black tracking-wider text-left text-black uppercase">
                            Student Name
                        </th>
                        <th scope="col"
                            class="py-3 px-6 text-xs font-black tracking-wider text-left text-black uppercase">
                            Email
                        </th>
                        <th scope="col"
                            class="py-3 px-6 text-xs font-black tracking-wider text-left text-black uppercase">
                            View Subject
                        </th>
                    </tr>
                </thead>



                <tbody class="bg-gray-100 divide-y divide-gray-200 dark:divide-gray-300">
                    @foreach ($users as $user)
                        <tr class="hover:bg-gray-100 dark:hover:bg-gray-200">
                            {{-- <td class="py-4 px-6 text-sm font-normal text-gray-700 whitespace-nowrap ">7403</td> --}}
                            {{-- <td class="py-4 px-6 text-sm font-normal text-gray-700 whitespace-nowrap ">IT125</td> --}}
                            <td class="py-4 px-6 text-sm font-normal text-gray-700 whitespace-nowrap ">
                                {{ $user->name }}
                            </td>
                            <td class="py-4 px-6 text-sm font-normal text-gray-700 whitespace-nowrap ">
                                {{ $user->email }}</td>
                            {{-- <td class="py-4 px-6 text-sm font-normal text-gray-700 whitespace-nowrap ">M-Sa</td>
                        <td class="py-4 px-6 text-sm font-normal text-gray-700 whitespace-nowrap ">Sem</td>
                        <td class="py-4 px-6 text-sm font-normal text-gray-700 whitespace-nowrap ">130A-530E
                        </td>
                        <td class="py-4 px-6 text-sm font-normal text-gray-700 whitespace-nowrap ">-</td>
                        <td class="py-4 px-6 text-sm font-normal text-gray-700 whitespace-nowrap ">IT</td>
                        <td class="py-4 px-6 text-sm font-normal text-gray-700 whitespace-nowrap "><span
                                class="p-1.5 bg-green-400 rounded-xl"> Official</span></td> --}}
                            <td class="flex flex-row py-4 px-6 text-sm font-normal text-gray-700 whitespace-nowrap ">
                                <a class="mx-1" href="{{ route('dashboard.show', ['user' => $user->id]) }}">
                                    <svg class="w-8 h-8 text-gray-800 " aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                        viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-width="2"
                                            d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z" />
                                        <path stroke="currentColor" stroke-width="2"
                                            d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>
                                </a>
                                {{-- <a class="mx-1" href="">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-8 h-8 p-1.5 bg-red-500 rounded-xl">
                                    <path fill-rule="evenodd"
                                        d="M16.5 4.478v.227a48.816 48.816 0 0 1 3.878.512.75.75 0 1 1-.256 1.478l-.209-.035-1.005 13.07a3 3 0 0 1-2.991 2.77H8.084a3 3 0 0 1-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 0 1-.256-1.478A48.567 48.567 0 0 1 7.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 0 1 3.369 0c1.603.051 2.815 1.387 2.815 2.951Zm-6.136-1.452a51.196 51.196 0 0 1 3.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 0 0-6 0v-.113c0-.794.609-1.428 1.364-1.452Zm-.355 5.945a.75.75 0 1 0-1.5.058l.347 9a.75.75 0 1 0 1.499-.058l-.346-9Zm5.48.058a.75.75 0 1 0-1.498-.058l-.347 9a.75.75 0 0 0 1.5.058l.345-9Z"
                                        clip-rule="evenodd" />
                                </svg>

                            </a> --}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layout>
@if ($message = Session::get('success'))
    <script>
        Swal.fire({
            position: "top",
            toast: true,
            icon: 'success',
            title: '{{ $message }}',
            showConfirmButton: false,
            timer: 3000
        })
    </script>
@endif
