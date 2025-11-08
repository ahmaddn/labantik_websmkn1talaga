@extends('layouts.app')

@section('title', $news->title ?? 'Berita')

@section('content')


    <section class="py-16">
        <div class="container 2xl:max-w-[87.5rem] px-4 mx-auto">
            <div class="mx-auto xl:max-w-3xl">
                <div class="mb-4 text-sm text-slate-500">
                    @if ($news->category || $news->categories)
                        <span class="px-2 py-1 bg-sky-100 text-sky-600 rounded">
                            {{ $news->category->name ?? ($news->categories->name ?? 'Tanpa Kategori') }}
                        </span>
                    @endif
                    <span class="ml-2">{{ $news->created_at->format('d M Y') }} ·
                        {{ $news->created_at->diffForHumans() }}</span>
                </div>

                <h1 class="mb-6 text-3xl font-bold text-slate-800 dark:text-zink-100">{{ $news->title }}</h1>

                @php
                    $firstImg = null;
                    if (isset($news->content) && preg_match('/<img.+?>/i', $news->content, $matches)) {
                        $firstImg = $matches[0];

                        // Sanitize extracted <img> so inline width/height/style don't break layout
                        libxml_use_internal_errors(true);
                        $doc = new \DOMDocument();
                        $doc->loadHTML(mb_convert_encoding($firstImg, 'HTML-ENTITIES', 'UTF-8'));
                        $imgTag = $doc->getElementsByTagName('img')->item(0);
                        if ($imgTag) {
                            // remove width/height attributes
                            $imgTag->removeAttribute('width');
                            $imgTag->removeAttribute('height');

                            // clean style attribute (remove width/height declarations)
                            $style = $imgTag->getAttribute('style');
                            $style = preg_replace('/(width|height)\s*:\s*[^;]+;?/i', '', $style);
                            $style = trim($style);
                            if ($style === '') {
                                $imgTag->removeAttribute('style');
                            } else {
                                $imgTag->setAttribute('style', $style);
                            }

                            $firstImg = $doc->saveHTML($imgTag);
                        }
                        libxml_clear_errors();
                    }
                @endphp



                <div class="prose max-w-none text-slate-700 dark:text-zink-200">
                    {!! $news->content !!}
                </div>

                <div class="mt-8">
                    <a href="{{ $backUrl ?? route('news.index') }}"
                        class="inline-flex items-center gap-2 px-6 py-3 text-base font-medium text-white bg-custom-500 rounded">Kembali
                        ke Daftar Berita</a>
                </div>
            </div>
        </div>
    </section>


@endsection
