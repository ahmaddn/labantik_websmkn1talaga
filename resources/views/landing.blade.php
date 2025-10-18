@extends('layouts.app')

@section('title', 'SMKN 1 Talaga')

@section('content')
<!-- Hero Section -->
<section id="hero" class="position-relative w-100" style="height: 100vh;">
  <div class="position-absolute top-0 start-0 w-100 h-100" style="background: url('{{ asset('images/hero-smk.jpg') }}') center center / cover no-repeat; z-index: 1;"></div>
  <div class="position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(0, 0, 0, 0.55); z-index: 2;"></div>
  <div class="container h-100 d-flex flex-column justify-content-center align-items-center text-white text-center" style="z-index: 3; position: relative;">
    <h1 class="display-3 fw-bold mb-3">Selamat Datang di Website Resmi<br>SMKN 1 Talaga</h1>
    <p class="lead mb-4">Terwujudnya Civitas Akademika yang Religius, Vokasional, Entrepreneurship dan Profesional</p>
    <a href="#profil" class="btn btn-outline-light btn-lg rounded-pill px-4">Lihat Profil</a>
  </div>
</section>


<!-- Profil -->
<section id="profil" class="py-5 bg-light">
  <div class="container">
    <h2 class="text-center mb-4" style="color: #000;">Profil Sekolah</h2>
    <p class="text-center mx-auto" style="max-width: 800px; color: #000;">
      SMKN 1 Talaga merupakan sekolah menengah kejuruan yang memiliki dua kampus, didukung oleh tenaga pengajar profesional dan fasilitas lengkap untuk mendukung proses belajar mengajar berbasis teknologi dan industri.
    </p>
  </div>
</section>


<!-- Program Keahlian -->
<section id="program" class="py-5" style="background: linear-gradient(to right, #fdfbfb, #ebedee);">
  <div class="container">
    <h2 class="text-center text-gradient mb-5">Program Keahlian</h2>
    <div class="row g-4">
      @php
      $programs = [
      ['name' => 'Teknik Otomotif', 'desc' => 'Teknik Kendaraan Ringan dan Teknik Sepeda Motor.'],
      ['name' => 'TJKT', 'desc' => 'Teknik Komputer dan Jaringan.'],
      ['name' => 'PPLG', 'desc' => 'Pengembangan aplikasi dan gim.'],
      ['name' => 'Akuntansi', 'desc' => 'Akuntansi Keuangan Lembaga.'],
      ['name' => 'Pemasaran', 'desc' => 'Bisnis Retail.'],
      ];
      @endphp
      @foreach ($programs as $program)
      <div class="col-md-4">
        <div class="card shadow border-0 h-100">
          <div class="card-body text-center">
            <h5 class="fw-bold">{{ $program['name'] }}</h5>
            <p class="text-muted">{{ $program['desc'] }}</p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

<!-- Galeri Ekstrakurikuler -->
<section id="galeri" class="py-5 bg-white">
  <div class="container">
    <h2 class="text-center text-gradient mb-5">Galeri Ekstrakurikuler</h2>
    <div class="row g-4">
      @php
      $ekstrakurikulers = [
      ['name' => 'Paskibra', 'desc' => '.'],
      ['name' => 'Pramuka', 'desc' => '.'],
      ['name' => 'PMR', 'desc' => '.'],
      ['name' => 'Kompasta', 'desc' => '.'],
      ['name' => 'Realista', 'desc' => '.'],
      ['name' => 'Irma', 'desc' => '.'],
      ];
      @endphp
      @foreach ($ekstrakurikulers as $ekstrakurikuler)
      <div class="col-md-4">
        <div class="card shadow border-0 h-100">
          <div class="card-body text-center">
            <h5 class="fw-bold">{{ $ekstrakurikuler['name'] }}</h5>
            <p class="text-muted">{{ $ekstrakurikuler['desc'] }}</p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>


<!-- Kontak -->
<section id="kontak" class="py-5" style="background: linear-gradient(to right, #cfd9df, #e2ebf0);">
  <div class="container text-center">
    <h2 class="text-gradient mb-4">Kontak Kami</h2>
    <p>Kampus 1: Jalan Sekolah No. 20, Talagakulon</p>
    <p>Kampus 2: Jalan Talaga - Bantarujeg, Mekkarraharja</p>
    <p>Email: info@smkn1talaga.sch.id | Telp: (0233) 319238</p>
  </div>
</section>

@endsection

@push('styles')
<style>
  body {
    font-family: 'Segoe UI', sans-serif;
    color: #333;
    background-color: #f9fbfd;
  }

  .text-gradient {
    background: -webkit-linear-gradient(45deg, #4facfe, #00f2fe);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
  }

  .card {
    border-radius: 1rem;
    transition: all 0.3s ease-in-out;
  }

  .card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
  }
</style>
@endpush