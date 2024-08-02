<x-layout>

    <nav class="w-full">
        <div class="flex justify-between items-center bg-gray-400 p-3">
            <a href="{{ route('dashboard') }}" class="text-black text-xl ml-2 font-bold uppercase">student portal</a>
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
        <div class="flex flex-row items-center space-x-2 pb-2">
            <a href="{{ route('dashboard') }}">
                <svg class="w-8 h-10 text-gray-800 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 12h14M5 12l4-4m-4 4 4 4" />
                </svg>
            </a>
            <span class="font-semibold text-xl">Go Back</span>
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
                            Subject
                        </th>
                        <th scope="col"
                            class="py-3 px-6 text-xs font-black tracking-wider text-left text-black uppercase">
                            Grade
                        </th>
                        {{-- <th scope="col"
                            class="py-3 px-6 text-xs font-black tracking-wider text-left text-black uppercase">
                            Delete
                        </th> --}}
                    </tr>
                </thead>



                <tbody class="bg-gray-100 divide-y divide-gray-200 dark:divide-gray-300">
                    @forelse ($grades as $grade)
                        <tr class="hover:bg-gray-100 dark:hover:bg-gray-200">
                            {{-- <td class="py-4 px-6 text-sm font-normal text-gray-700 whitespace-nowrap ">7403</td> --}}
                            {{-- <td class="py-4 px-6 text-sm font-normal text-gray-700 whitespace-nowrap ">IT125</td> --}}
                            <td class="py-4 px-6 text-sm font-normal text-gray-700 whitespace-nowrap ">
                                {{ $user->name }}
                            </td>
                            <td class="py-4 px-6 text-sm font-normal text-gray-700 whitespace-nowrap ">
                                {{ $grade->subject }}
                            </td>
                            <td class="py-4 px-6 text-sm font-normal text-gray-700 whitespace-nowrap ">
                                {{ $grade->grade }}

                            </td>
                            {{-- <td>
                                <form action="{{ route('dashboard.delete', ['id' => $grade->id]) }}" method="POST">
                                    @csrf
                                    <button class="text-red-400">delete</button>
                                </form>
                            </td> --}}
                        </tr>
                    @empty
                        <td class="py-4 px-6 text-sm font-normal text-gray-700 whitespace-nowrap ">
                            No records Found
                        </td>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-layout>
