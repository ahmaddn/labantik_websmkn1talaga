<nav class="fixed inset-x-0 top-0 z-50 flex items-center justify-center h-20 py-3 [&.is-sticky]:bg-white dark:[&.is-sticky]:bg-zinc-900 border-b border-slate-200 dark:border-zinc-800 [&.is-sticky]:shadow-lg [&.is-sticky]:shadow-slate-200/25 dark:[&.is-sticky]:shadow-zinc-700/30 navbar"
    id="navbar">
    <div class="container 2xl:max-w-[87.5rem] px-4 mx-auto flex items-center self-center w-full">
        <div class="shrink-0">
            <a href="#!">
                <img src="{{ asset('assets/images/logosmk.png') }}" alt="" class="block h-12 dark:hidden">
                <img src="{{ asset('assets/images/logosmk.png') }}" alt="" class="hidden h-12 dark:block">
            </a>
        </div>
        <div class="mx-auto">
            <ul id="navbar7"
                class="absolute inset-x-0 z-20 items-center hidden py-3 mt-px bg-white shadow-lg md:mt-0 dark:bg-zinc-800 dark:md:bg-transparent md:z-0 navbar-menu rounded-b-md md:shadow-none md:flex top-full ltr:ml-auto rtl:mr-auto md:relative md:bg-transparent md:rounded-none md:top-auto md:py-0">
                <li>
                    <a href="#home"
                        class="block md:inline-block px-4 md:px-3 py-2.5 md:py-0.5 text-15 font-medium text-slate-800 transition-all duration-300 ease-linear hover:text-custom-500 [&.active]:text-custom-500 dark:text-zinc-200 dark:hover:text-custom-500 dark:[&.active]:text-custom-500 active">Home</a>
                </li>
                @foreach ($menus as $m)
                    <li><a class="block md:inline-block px-4 md:px-3 py-2.5 md:py-0.5 text-15 font-medium text-slate-800 transition-all duration-300 ease-linear hover:text-custom-500 [&.active]:text-custom-500 dark:text-zinc-200 dark:hover:text-custom-500 dark:[&.active]:text-custom-500"
                            href="#{{ $m->slug }}">
                            {{ $m->name }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</nav>
