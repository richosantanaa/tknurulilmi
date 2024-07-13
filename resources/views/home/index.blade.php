@extends('home.layouts.app')
@section('container')
<section>
    <div class="slider_img layout_two">
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                @foreach ($slider as $key => $slider)
                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                        <img class="d-block" src="/assets/img/slider/{{ $slider->gambar }}"
                             alt="Slide {{ $key + 1 }}" style="width: 100%; height: 600px;">
                        <div class="carousel-caption d-md-block">
                            <div class="slider_title">
                                <h1>{{ $slider->nama_slider }}</h1>
                                <h4>{!! nl2br(e($slider->deskripsi)) !!}</h4>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                <i class="icon-arrow-left fa-slider" aria-hidden="true"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                <i class="icon-arrow-right fa-slider" aria-hidden="true"></i>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>

<!--//END HEADER -->
<!--============================= ABOUT =============================-->
<section class="clearfix about about-style2" style="padding: 45px 0;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h2>Selamat Datang di Sistem Informasi TK Nurul Ilmi Palembang!</h2>
                <p style="text-align: justify;">Di TK Nurul Ilmi Palembang, kami percaya bahwa setiap anak memiliki potensi yang luar biasa. Dengan dukungan lingkungan yang mendukung kreativitas dan inovasi, kami berusaha untuk mengasah setiap potensi tersebut melalui berbagai program pendidikan yang menyenangkan dan bermakna.</p>
            </div>
            <div class="col-md-4">
                <img src="assets/img/guru.jpeg" class="img-fluid about-img" alt="Gambar Selamat Datang" style="border-radius: 0; width: 100%; height: 100%; object-fit: cover;">
            </div>
        </div>
    </div>
</section>

<!--============================= SEPARATOR =============================-->

<hr style="border: 1px solid #ccc; margin: 50px 0;">

<!--============================= MAP =============================-->
<section class="map" style="padding: 45px 0;">
    <div class="container">
    <h2 style="margin-top: 0.5px; margin-bottom: 20px;"><strong>Lokasi Kami</strong></h2>
        <div class="row">
            <div class="col-md-12">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3377.337853811065!2d104.69919167414557!3d-3.0070084399262367!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3b9f6dadb1e815%3A0x60ea248d68713041!2sTK.%20Nurul%20Ilmi!5e1!3m2!1sid!2sid!4v1701973263518!5m2!1sid!2sid"
                    width="100%" height="650" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>

<!--//END MAP -->
<!--============================= EVENTS =============================-->
{{-- <section class="event">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="event-img2">
                    <div class="row">
                        <div class="col-sm-3"> <img src="/assets/img/announcement-icon.png" class="img-fluid"
                                alt="event-img">
                        </div><!-- // end .col-sm-3 -->
                        <div class="col-sm-9">
                            <h3><a href="#">PPDB</a></h3>
                            <span>17-07-2001</span>
                            <p>Kami mengundang calon peserta didik baru untuk bergabung dengan sekolah kami pada tahun ajaran 2024/2025. Berikut adalah informasi penting mengenai PPDB tahun 2024:</p>
                        </div><!-- // end .col-sm-7 -->
                    </div><!-- // end .row -->
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-md-12">
                        <div class="event_date">
                            <div class="event-date-wrap">
                                <p>02</p>
                                <span>07-2024</span>
                            </div>
                        </div>
                        <div class="date-description">
                            <h3><a href="">PPDB</a></h3>
                            <p>Kami mengundang calon peserta didik baru untuk bergabung dengan sekolah kami pada tahun ajaran 2024/2025. Berikut adalah informasi penting mengenai PPDB tahun 2024:</p>
                            <hr class="event_line">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!--//END EVENTS -->
@endsection
