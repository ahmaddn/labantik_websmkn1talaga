@extends('layouts.app')

@section('title', 'SMKN 1 Talaga')

@section('content')
    <div class="group-data-[sidebar-size=sm]:min-h-sm group-data-[sidebar-size=sm]:relative">
        <div class="relative min-h-screen group-data-[sidebar-size=sm]:min-h-sm bg-slate-50 dark:bg-zink-800">
            <div
                class="group-data-[sidebar-size=lg]:ltr:md:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:md:mr-vertical-menu group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md group-data-[sidebar-size=sm]:ltr:ml-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:mr-vertical-menu-sm pt-4 pb-[calc(theme('spacing.header')_*_0.8)] px-4 group-data-[navbar=bordered]:pt-6 group-data-[navbar=hidden]:pt-0 group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl group-data-[layout=horizontal]:px-0 group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:ltr:md:ml-auto group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:rtl:md:mr-auto group-data-[layout=horizontal]:md:pt-6 group-data-[layout=horizontal]:px-3 group-data-[layout=horizontal]:group-data-[navbar=hidden]:pt-4">
                <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">

                    <div class="flex flex-col gap-2 py-4 md:flex-row md:items-center print:hidden">
                        <div class="grow">
                            <h5 class="text-16">Index Berita</h5>
                        </div>
                        <ul class="flex items-center gap-2 text-sm font-normal shrink-0">
                            <li
                                class="relative before:content-['\ea54'] before:font-remix ltr:before:-right-1 rtl:before:-left-1  before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:text-slate-400 dark:text-zink-200">
                                <a href="#!" class="text-slate-400 dark:text-zink-200">Landing Page</a>
                            </li>
                            <li class="text-slate-700 dark:text-zink-100">
                                Index Berita
                            </li>
                        </ul>
                    </div>
                    <div class="grid grid-cols-1 gap-5 lg:grid-cols-12 mb-5">
                        <div class="relative dropdown">
                            <button type="button"
                                class="text-white dropdown-toggle btn bg-slate-500 border-slate-500 hover:text-white hover:bg-slate-600 hover:border-slate-600 focus:text-white focus:bg-slate-600 focus:border-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:border-slate-600 active:ring active:ring-slate-100 dark:ring-slate-400/10"
                                id="dropdownMenuForm" data-bs-toggle="dropdown">Filter <i data-lucide="sliders-horizontal"
                                    class="inline-block size-4 ltr:ml-1 rtl:mr-1"></i></button>

                            <ul class="absolute z-50 hidden p-5 mt-1 list-none bg-white rounded-md shadow-md ltr:text-left rtl:text-right dropdown-menu min-w-max dark:bg-zink-600"
                                aria-labelledby="dropdownMenuForm">
                                <form action="#!">
                                    <div class="mb-3">
                                        <label for="inputText" class="inline-block mb-2 text-base font-medium">Email
                                            <span class="text-red-500">*</span></label>
                                        <input type="email" id="inputText"
                                            class="form-input border-slate-200 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 disabled:border-slate-300 dark:bg-zink-600 dark:border-zink-500 dark:placeholder:text-zink-300"
                                            placeholder="Enter email" required="">
                                    </div>
                                    <div class="mb-4">
                                        <label for="inputText" class="inline-block mb-2 text-base font-medium">Password
                                            <span class="text-red-500">*</span></label>
                                        <input type="password" id="inputText"
                                            class="form-input border-slate-200 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 disabled:border-slate-300 dark:bg-zink-600 dark:border-zink-500 dark:placeholder:text-zink-300"
                                            placeholder="Password" required="">
                                    </div>
                                    <div class="text-right">
                                        <button type="submit"
                                            class="py-1 text-xs px-1.5 text-white btn bg-green-500 border-green-500 hover:text-white hover:bg-green-600 hover:border-green-600 focus:text-white focus:bg-green-600 focus:border-green-600 focus:ring focus:ring-green-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Sign
                                            In <i data-lucide="move-right" class="inline-block w-3 h-3 ml-1"></i></button>
                                    </div>
                                </form>
                            </ul>
                        </div>
                    </div><!--end grid-->


                    <div class="grid grid-cols-1 gap-x-5 md:grid-cols-2 lg:grid-cols-5 xl:grid-cols-7 mb-5">
                        @foreach ($news as $item)
                            <a href="{{ route('news.show', $item->id) }}"
                                class="card hover:shadow-lg transition-shadow duration-300 cursor-pointer">
                                <div class="card-body">
                                    <div class="relative overflow-hidden rounded-md group/gallery">
                                        @php
                                            $firstImgSrc = null;

                                            if (!empty($item->content)) {
                                                if (
                                                    preg_match('/<img[^>]+src="([^">]+)"/i', $item->content, $matches)
                                                ) {
                                                    $firstImgSrc = $matches[1]; // hanya ambil URL src
                                                }
                                            }
                                        @endphp

                                        <img src="{{ $firstImgSrc ?? asset('assets/images/default-news.png') }}"
                                            alt="news-image" class="rounded-md w-full h-48 object-cover">

                                        <div
                                            class="absolute inset-0 transition-all duration-300 ease-linear opacity-0 group-hover/gallery:opacity-50 bg-gradient-to-t from-gray-900 to-transparent">
                                        </div>
                                        <div
                                            class="absolute bottom-0 transition-all duration-300 ease-linear opacity-0 left-3 right-3 group-hover/gallery:opacity-100 group-hover/gallery:bottom-3">
                                            <h5 class="font-normal text-white">{{ $item->title }}</h5>
                                        </div>
                                    </div>

                                    <div class="mt-4">
                                        <!-- Header: Created at (kiri) dan Name (kanan) -->
                                        <div
                                            class="flex justify-between items-start mb-2 text-xs text-slate-500 dark:text-zink-200">
                                            <p>{{ $item->created_at->diffForHumans() }}</p>
                                            <p>
                                                @if ($item->created_by)
                                                    {{ '@' . $item->createdBy->name }}
                                                @endif
                                            </p>
                                        </div>

                                        <!-- Description di tengah -->
                                        <div class="px-4">
                                            <p
                                                class="mb-3 text-sm text-slate-600 dark:text-zink-300 text-justify leading-relaxed">
                                                {{ Str::limit(strip_tags($item->content), 100, '...') }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>




                    <div class="flex flex-col items-center mb-5 md:flex-row">
                        <div class="mb-4 grow md:mb-0">
                            <p class="text-slate-500 dark:text-zink-200">
                                Showing <b>{{ $news->firstItem() }}</b> to <b>{{ $news->lastItem() }}</b> of
                                <b>{{ $news->total() }}</b> Results
                            </p>
                        </div>
                        <ul class="flex flex-wrap items-center gap-2 shrink-0">
                            {{-- Previous Button --}}
                            <li>
                                <a href="{{ $news->previousPageUrl() }}"
                                    class="inline-flex items-center justify-center bg-white dark:bg-zink-700 h-8 px-3 transition-all duration-150 ease-linear border rounded border-slate-200 dark:border-zink-500 text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-100 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 {{ $news->onFirstPage() ? 'disabled cursor-not-allowed text-slate-400 dark:text-zink-300' : 'cursor-pointer' }}">
                                    <i class="mr-1 size-4 rtl:rotate-180" data-lucide="chevron-left"></i> Prev
                                </a>
                            </li>

                            {{-- Page Numbers --}}
                            @foreach ($news->getUrlRange(1, $news->lastPage()) as $page => $url)
                                <li>
                                    <a href="{{ $url }}"
                                        class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border rounded border-slate-200 dark:border-zink-500 text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-100 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 cursor-pointer {{ $page == $news->currentPage() ? 'active' : '' }} [&.active]:text-white dark:[&.active]:text-white [&.active]:bg-custom-500 dark:[&.active]:bg-custom-500 [&.active]:border-custom-500 dark:[&.active]:border-custom-500">
                                        {{ $page }}
                                    </a>
                                </li>
                            @endforeach

                            {{-- Next Button --}}
                            <li>
                                <a href="{{ $news->nextPageUrl() }}"
                                    class="inline-flex items-center justify-center bg-white dark:bg-zink-700 h-8 px-3 transition-all duration-150 ease-linear border rounded border-slate-200 dark:border-zink-500 text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-100 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 {{ !$news->hasMorePages() ? 'disabled cursor-not-allowed text-slate-400 dark:text-zink-300' : 'cursor-pointer' }}">
                                    Next <i class="ml-1 size-4 rtl:rotate-180" data-lucide="chevron-right"></i>
                                </a>
                            </li>
                        </ul>
                    </div>


                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <footer
                class="absolute bottom-0 left-0 right-0 w-full h-14 border-t dark:border-zink-600 py-3 flex items-center ltr:md:ml-[theme('spacing.vertical-menu')] rtl:md:mr-[theme('spacing.vertical-menu')] group-data-[sidebar-size=md]:ltr:md:ml-[theme('spacing.vertical-menu-md')] group-data-[sidebar-size=md]:rtl:md:mr-[theme('spacing.vertical-menu-md')] group-data-[sidebar-size=sm]:ltr:md:ml-[theme('spacing.vertical-menu-sm')] group-data-[sidebar-size=sm]:rtl:md:mr-[theme('spacing.vertical-menu-sm')] group-data-[layout=horizontal]:ltr:ml-0 group-data-[layout=horizontal]:rtl:mr-0">
                <div class="w-full px-4">
                    <div
                        class="grid items-center grid-cols-1 text-center lg:grid-cols-2 text-slate-400 dark:text-zink-200 ltr:lg:text-left rtl:lg:text-right">
                        <div>
                            <script>
                                document.write(new Date().getFullYear())
                            </script> SMKN 1 Talaga
                        </div>
                        <div class="hidden lg:block">
                            <div class="ltr:text-right rtl:text-left">
                                Design & Develop by Labantik x ICT SMKN 1 Talaga
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
@endsection
