@extends('layouts.app')

@section('title', 'SMKN 1 Talaga')

@section('content')
    @include('partials.navbar')

    {{-- Hero Section --}}
    <section class="relative py-24 xl:py-32 pb-16 xl:pb-20" id="home">
        <div class="absolute top-0 left-0 size-64 bg-custom-500 opacity-10 blur-3xl"></div>
        <div class="absolute bottom-0 right-0 size-64 bg-purple-500/10 blur-3xl"></div>
        <div class="container 2xl:max-w-[87.5rem] px-4 mx-auto">
            <div class="grid items-center grid-cols-12 gap-5 2xl:grid-cols-12">
                <div class="col-span-12 xl:col-span-5 2xl:col-span-5">
                    <h1 class="mb-4 !leading-normal lg:text-5xl 2xl:text-6xl dark:text-zinc-100" data-aos="fade-right"
                        data-aos-delay="300">
                        Selamat Datang di Website Resmi SMKN 1 Talaga
                    </h1>
                    <p class="text-lg mb-7 text-slate-500 dark:text-zinc-400" data-aos="fade-right" data-aos-delay="600">
                        SMKN 1 Talaga adalah Sekolah Menengah Kejuruan Negeri di Talaga, Majalengka, Jawa Barat yang
                        membekali siswa dengan keterampilan praktis melalui pembelajaran berbasis kompetensi dan magang
                        industri untuk mencetak lulusan siap kerja atau berwirausaha.
                    </p>
                    <div class="flex items-center gap-2" data-aos="fade-right" data-aos-delay="800">
                        <a href="#section-profil"
                            class="px-8 py-3 text-white border-0 text-15 btn bg-gradient-to-r from-custom-500 to-purple-500 hover:text-white hover:from-purple-500 hover:to-custom-500">
                            Lihat Profil
                            <i data-lucide="arrow-down-from-line"
                                class="inline-block align-middle size-4 rtl:mr-1 ltr:ml-1"></i>
                        </a>
                    </div>
                </div>
                <div class="col-span-12 xl:col-span-7 2xl:col-start-8 2xl:col-span-6">
                    <div class="relative mt-10 xl:mt-0">
                        <div class="absolute text-center -top-20 xl:-right-40 lg:text-[10rem] 2xl:text-[14rem] text-slate-100 dark:text-zinc-800/60 font-tourney"
                            data-aos="zoom-in-down" data-aos-delay="1400">
                            SMKN 1 Talaga
                        </div>
                        <img src="{{ asset('assets/images/offer.png') }}" alt="Offer"
                            class="absolute h-40 left-10 xl:-left-10 top-32" data-aos="fade-down-right" data-aos-delay="900"
                            data-aos-easing="linear">
                        <div class="relative" data-aos="zoom-in" data-aos-delay="500">
                            <img src="{{ asset('assets/images/product-home.png') }}" alt="SMKN 1 Talaga" class="mx-auto">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @php
        $visionMenu = $menus->firstWhere('slug', 'section-visimisi');
        $profileMenu = $menus->firstWhere('slug', 'section-profil');
        $programMenu = $menus->firstWhere('slug', 'section-program');
        $newsMenu = $menus->firstWhere('slug', 'section-berita');
        $extrakurikulerMenu = $menus->firstWhere('slug', 'section-galeri');
    @endphp

    {{-- Profil Sekolah --}}
    @if ($profileMenu && $profiles->isNotEmpty())
        @foreach ($profiles as $p)
            @if ($p->menu && $p->menu->id === $profileMenu->id)
                <section class="relative py-24 xl:py-32 pb-16 xl:pb-20" id="{{ $p->menu->slug }}">
                    <div class="container 2xl:max-w-[87.5rem] px-4 mx-auto">
                        <div class="mx-auto text-center xl:max-w-3xl">
                            <h1 class="mb-6 leading-normal capitalize">
                                Profil
                                <span
                                    class="relative inline-block px-2 mx-2 before:block before:absolute before:-inset-1 before:-skew-y-6 before:bg-sky-50 dark:before:bg-sky-500/20 before:rounded-md before:backdrop-blur-xl">
                                    <span class="relative text-sky-500">SMKN 1 Talaga</span>
                                </span>
                            </h1>
                            <p class="text-lg text-slate-500 dark:text-zink-200">{{ $p->content }}</p>
                        </div>
                    </div>
                </section>
            @endif
        @endforeach
    @endif

    {{-- Visi & Misi --}}
    @if ($visionMenu && $visionmissions->isNotEmpty())
        @foreach ($visionmissions as $v)
            @if ($v->menu && $v->menu->id === $visionMenu->id)
                <section class="relative py-24 xl:py-32 pb-16 xl:pb-20" id="{{ $v->menu->slug }}">
                    <div class="container 2xl:max-w-[87.5rem] px-4 mx-auto">
                        <div class="mx-auto text-center xl:max-w-3xl">
                            <h1 class="mb-0 leading-normal capitalize">Visi & Misi</h1>
                        </div>
                        <div class="grid grid-cols-1 gap-5 mt-12 md:grid-cols-2">
                            {{-- Visi --}}
                            <div class="p-8 rounded-md bg-gradient-to-b from-slate-100 to-white dark:from-zinc-800 dark:to-zinc-900"
                                data-aos="fade-up" data-aos-easing="linear">
                                <h4 class="text-custom-500 font-bold mb-4 text-xl">Visi</h4>
                                <p class="text-slate-600 dark:text-zinc-300">
                                    {{ $v->vision ?? 'Belum ada visi.' }}
                                </p>
                            </div>

                            {{-- Misi --}}
                            <div class="p-8 rounded-md bg-gradient-to-b from-slate-100 to-white dark:from-zinc-800 dark:to-zinc-900"
                                data-aos="fade-up" data-aos-easing="linear">
                                <h4 class="text-custom-500 font-bold mb-4 text-xl">Misi</h4>
                                @if ($v->mission)
                                    <ol
                                        class="list-decimal list-outside pl-4 ms-8 ps-2 space-y-2 text-slate-600 dark:text-zinc-300">
                                        @foreach (preg_split("/\r\n|\r|\n/", $v->mission) as $misi)
                                            @php
                                                $cleanMisi = preg_replace('/^\s*\d+\.\s*/', '', trim($misi));
                                            @endphp
                                            @if ($cleanMisi !== '')
                                                <li>{{ $cleanMisi }}</li>
                                            @endif
                                        @endforeach
                                    </ol>
                                @else
                                    <p class="text-slate-600 dark:text-zinc-300">Belum ada misi.</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </section>
            @endif
        @endforeach
    @endif

    {{-- Berita Sekolah --}}
    @if ($newsMenu && $news->isNotEmpty())
        <section id="{{ $newsMenu->slug }}" class="relative py-24 xl:py-32 pb-16 xl:pb-20 bg-slate-50 dark:bg-zink-700/40">
            <div class="container 2xl:max-w-[87.5rem] px-4 mx-auto">
                <div class="mx-auto text-center xl:max-w-3xl mb-8">
                    <h2 class="mb-0 leading-normal capitalize text-gradient">
                        {{ $newsMenu->name ?? 'Berita Sekolah' }}
                    </h2>
                </div>

                <div class="grid grid-cols-1 gap-6">
                    @foreach ($news as $item)
                        <div class="transition-all duration-300 ease-linear card hover:-translate-y-2 dark:bg-zink-600"
                            data-aos="fade-up" data-aos-easing="linear">
                            <div class="flex gap-4 p-4">
                                {{-- Thumbnail --}}
                                <div class="shrink-0">
                                    <div
                                        class="relative mb-0 overflow-hidden transition-all duration-300 ease-linear rounded-md group/gallery card hover:-translate-y-2">
                                        @php
                                            $firstImg = null;
                                            if (
                                                isset($item->content) &&
                                                preg_match('/<img[^>]+>/i', $item->content, $matches)
                                            ) {
                                                $imgSrc = null;
                                                if (preg_match('/src=["\']([^"\']+)["\']/i', $matches[0], $srcMatch)) {
                                                    $imgSrc = $srcMatch[1];
                                                }
                                                $firstImg = $imgSrc;
                                            }
                                        @endphp

                                        <div class="relative overflow-hidden rounded-md group/gallery">
                                            <div
                                                style="width:150px; height:150px; display:flex; align-items:center; justify-content:center; overflow:hidden;">
                                                @if ($firstImg)
                                                    <img src="{{ $firstImg }}" alt="{{ $item->title }}"
                                                        style="max-width:100%; max-height:100%; object-fit:cover;"
                                                        class="rounded-md"
                                                        onerror="this.src='{{ asset('assets/images/default-news.png') }}'">
                                                @else
                                                    <img src="{{ asset('assets/images/default-news.png') }}"
                                                        alt="Default news"
                                                        style="max-width:100%; max-height:100%; object-fit:contain;"
                                                        class="rounded-md">
                                                @endif
                                            </div>

                                            <div
                                                class="absolute inset-0 transition-all duration-300 ease-linear opacity-0 group-hover/gallery:opacity-50 bg-gradient-to-t from-gray-900 to-transparent">
                                            </div>
                                            <div
                                                class="absolute bottom-0 transition-all duration-300 ease-linear opacity-0 left-3 right-3 group-hover/gallery:opacity-100 group-hover/gallery:bottom-3">
                                                <h5 class="font-normal text-white">
                                                    <a href="{{ route('news.show', $item->id) }}">{{ $item->title }}</a>
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- Content --}}
                                <div class="grow">
                                    <a href="{{ route('news.show', $item->id) }}"
                                        class="text-slate-800 dark:text-zink-50 hover:text-custom-500">
                                        @if ($item->categories)
                                            <span
                                                class="px-2.5 py-0.5 text-xs inline-block font-medium rounded border bg-sky-100 border-sky-200 text-sky-500 dark:bg-sky-500/20 dark:border-sky-500/20 mb-2">
                                                {{ $item->categories->name ?? 'Tanpa Kategori' }}
                                            </span>
                                        @endif
                                        <h6 class="mb-2 text-lg font-semibold">{{ $item->title }}</h6>
                                        <p class="text-sm text-slate-500 dark:text-zink-200 mb-2">
                                            {{ Str::limit(strip_tags($item->content), 150, '...') }}
                                        </p>
                                        <p class="text-xs text-slate-400 dark:text-zink-300">
                                            {{ $item->created_at->diffForHumans() }}
                                        </p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                {{-- Tombol Lihat Semua Berita --}}
                <div class="flex justify-center mt-8">
                    <a href="{{ route('news.index') }}"
                        class="inline-flex items-center gap-2 px-6 py-3 text-base font-medium text-white transition-all duration-200 ease-linear bg-custom-500 border border-custom-500 rounded hover:bg-custom-600 hover:border-custom-600 focus:bg-custom-600 focus:border-custom-600">
                        Lihat Semua Berita
                        <i data-lucide="arrow-right" class="size-4"></i>
                    </a>
                </div>
            </div>
        </section>
    @endif

    {{-- Program Keahlian --}}
    @if ($programMenu && $expertiseConcentrations->isNotEmpty())
        <section id="{{ $programMenu->slug }}"
            class="relative py-24 xl:py-32 pb-16 xl:pb-20 bg-gradient-to-r from-slate-50 to-slate-100 dark:from-zink-700/40 dark:to-zink-600/40">
            <div class="container 2xl:max-w-[87.5rem] px-4 mx-auto">
                <div class="mx-auto text-center xl:max-w-3xl mb-14">
                    <h1 class="mb-0 leading-normal capitalize">Program Keahlian</h1>
                </div>
                <div class="grid grid-cols-1 gap-5 md:grid-cols-2 xl:grid-cols-3">
                    @foreach ($expertiseConcentrations as $e)
                        @if ($e->menu === $programMenu->slug)
                            <div class="p-5 rounded-md bg-white shadow-md dark:bg-zink-600 transition-all duration-300 ease-linear hover:-translate-y-2"
                                data-aos="fade-up" data-aos-easing="linear">
                                <div class="flex items-center gap-4">
                                    <div class="shrink-0">
                                        <div
                                            class="flex items-center justify-center w-12 h-12 rounded-full bg-custom-100 dark:bg-custom-500/20">
                                            <i data-lucide="graduation-cap" class="size-6 text-custom-500"></i>
                                        </div>
                                    </div>
                                    <div class="grow">
                                        <h5 class="text-base font-semibold text-slate-800 dark:text-zink-50">
                                            {{ $e->name }}
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    {{-- Ekstrakurikuler --}}
    @if ($extrakurikulerMenu && $extrakurikulers->isNotEmpty())
        <section class="relative py-24 xl:py-32" id="{{ $extrakurikulerMenu->slug }}">
            <div class="container 2xl:max-w-[87.5rem] px-4 mx-auto">
                <div class="mx-auto mb-8 text-center xl:max-w-3xl">
                    <h1 class="mb-0 leading-normal capitalize">{{ $extrakurikulerMenu->name ?? 'Ekstrakurikuler' }}</h1>
                </div>

                {{-- Swiper --}}
                <div class="pb-6 swiper feedback-slider">
                    <div class="swiper-wrapper">
                        @foreach ($extrakurikulers as $item)
                            <div class="swiper-slide">
                                <div class="p-5 text-center" data-aos="fade-up" data-aos-easing="linear">
                                    <div class="mx-auto rounded-full size-20 bg-custom-500/10">
                                        @if (!empty($item->photo))
                                            <img src="{{ asset('storage/' . $item->photo) }}" alt="{{ $item->name }}"
                                                class="rounded-full size-20 object-cover"
                                                onerror="this.src='{{ asset('assets/images/default-extrakurikuler.png') }}'">
                                        @else
                                            <img src="{{ asset('assets/images/default-extrakurikuler.png') }}"
                                                alt="{{ $item->name }}" class="rounded-full size-20 object-cover">
                                        @endif
                                    </div>
                                    <p class="mt-6 text-16">"{{ $item->description }}"</p>
                                    <h6 class="mt-4 mb-1 text-3xl">{{ $item->name }}</h6>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
    @endif

    @include('partials.footer')
@endsection
