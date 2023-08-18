@extends('layouts.frontend.app',[
    'title' => 'Home',
])
@section('content')
<!-- ##### Hero Area Start ##### -->
<section class="hero-area bg-img bg-overlay-2by5" style="background-image: url({{ asset('img/bg') }}/bg.jpeg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <!-- Hero Content -->
                <div class="hero-content text-center">
                    <h2>Selamat Datang di Desa Neglasari</h2>
                   
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Hero Area End ##### -->

<div class="regular-page-area section-padding-100 mt-5 mb-4">
    <div class="col-lg-9 mx-auto">
        <div class="card">
            <div class="card-header">Sejarah Desa</div>
            <div class="card-body">
                <p class="lead">
                Desa Neglasari adalah Desa di Kabupaten Cianjur Utara yang terletak di Kecamatan Cikalongulon.
                Menurut Sejarahnya. Desa Neglasari adalah Desa hasil pemekaran dari Desa Gudang Tahun 1970-an
                Pada awal Tahun 1980-an nama Desa Neglasari adalah Desa Cibeureum.
                Desa Cibeureum mengalami pemekaran menjadi Desa Lembahsari dan Neglasari sampai sekarang.
                Desa Neglasari terdiri dari 3 Dusun, yaitu:
                </p>
               <ol>
                <li>Dusun I yang terdiri dari 3 RW dan 8 RT</li>
                <li>Dusun II yang terdiri dari 2 RW dan 8 RT</li>
                <li>Dusun III yang terdiri dari 2 RW dan 9 RT</li>
               </ol>
            </div>
        </div>
    </div>
</div>

@if($artikel->count() > 0)
<!-- ##### Artikel ##### -->
<section class="blog-area section-padding-50 mt-0 mb-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h3>Artikel Terbaru</h3>
                </div>
            </div>
        </div>

        <div class="row">
            
            @foreach($artikel as $art)
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            {{ $art->judul }}

                            
                        </div>
                        <div class="card-body">
                            <img src="{{ asset($art->getThumbnail()) }}" width="100%" style="height: 300px; object-fit: cover; object-position: center;">

                            <div class="card-text mt-3">
                                {!! Str::limit($art->deskripsi) !!}
                            </div>

                            <a href="{{ route('artikel.show',$art->slug) }}" class="btn btn-primary btn-sm">Selengkapnya</a>
                        </div>
                       
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row mt-3">
            <a href="{{ route('artikel') }}" class="alert alert-success alert-link mx-auto mt-3">Lihat Semua Artikel</a>
        </div>
    </div>
</section>
@endif

@stop