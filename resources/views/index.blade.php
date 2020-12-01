@extends('layouts.frontend')

@section('content')

    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="{{ asset('frontend/img/profile-2.png') }}" 
                    alt="profile-foto" width="256px;">
                    <div class="intro-text">
                        <span class="name">SELAMAT DATANG</span>
                        <hr class="star-light">
                        <span class="skills">
                            Pengembangan Media Pembelajaran Interaktif Berbasis <br/>
                            <i>Discovery Learning</i> Untuk Meningkatkan Pemahaman <br/>
                            Konsep Siswa Pada Materi Bangun Ruang Kelas V SD
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>MENU</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 portfolio-item">
                    <a href="{{ route('materi.index') }}" class="portfolio-link">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                                <h3>MATERI</h3>
                            </div>
                        </div>
                        <img src="{{ asset('frontend/img/portfolio/cabin.png') }}" class="img-responsive" alt="">
                    </a>
                </div>

                <div class="col-sm-6 portfolio-item">
                    <a href="{{ route('permainan.index') }}" class="portfolio-link"  id="evaluasi">
                        <div class="caption portfolio-link">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                                <h3>EVALUASI</h3>
                            </div>
                        </div>
                        <img src="{{ asset('frontend/img/portfolio/tasks.jpg') }}" class="img-responsive" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection
