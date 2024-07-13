@extends('home.layouts.app')
@section('container')
    <section class="events">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2 class="event-title">Pengumuman</h2>
                </div>
                <div class="col-md-8">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item nav-tab1">
                            <a class="nav-link tab-list active" data-toggle="tab" href="#upcoming-events"
                                role="tab">Pengumuman Terbaru </a>
                        </li>
                    </ul>
                </div>
            </div>
            <br>
            <div class="row">
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="upcoming-events" role="tabpanel">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="event-date">
                                        <h4>05</h4> <span>07 - 2024</span>
                                    </div>
                                    <span class="event-time">06:23 WIB</span>
                                </div>
                                <div class="col-md-10">
                                    <div class="event-heading">
                                        <h3>PPDB</h3>
                                        <p>Kami mengundang calon peserta didik baru untuk bergabung dengan sekolah kami pada tahun ajaran 2024/2025. Berikut adalah informasi penting mengenai PPDB tahun 2024:
                                            <p><strong><h4><br>Jadwal PPDB</h4></strong></p>
                                            <p>Pendaftaran Online: 1 Maret 2024 - 30 April 2024</p>
                                            <p>Seleksi Administrasi: 1 Mei 2024 - 10 Mei 2024</p>
                                            <p>Pengumuman Hasil Seleksi: 15 Mei 2024 </p>
                                            <p>Daftar Ulang: 20 Mei 2024 - 30 Mei 2024</p>
                                            <p>Awal Tahun Ajaran Baru: 15 Juli 2024</p></br>

                                            <p><strong><h4>Persyaratan Pendaftaran Umum:</h4></strong></p>
                                            </p>1. Warga Negara Indonesia</p>
                                            <p>2. Berusia 4-5 tahun pada tanggal 1 Juli 2024 untuk jenjang TK A</p>
                                            <p>3. Berusia 5-6  tahun pada tanggal 1 Juli 2024 untuk jenjang TK B</p>

                                            <p><h4><strong><br>Dokumen:</p></h4></strong>
                                            <p>1. Fotokopi Akta Kelahiran</p>
                                            <p>2. Fotokopi Kartu Ke luarga</p>
                                            <p>3. Pas Foto ukuran 3x4 (3 lembar)</p>
                                            <p>4. Surat Keterangan Sehat dari Dokter</p>

                                            <p><h4><strong><br>Pendaftaran :</p></h4></strong>

                                            <p>1. Datang langsung ke sekolah pada jam kerja (Senin-Jumat, 08.00 - 15.00)</p>
                                            <p>2. Mengisi formulir pendaftaran yang disediakan di sekolah</p>
                                            <p>3. Menyerahkan dokumen-dokumen yang diperlukan</p>
                                            <p>4. Mendapatkan tanda terima pendaftaran</p>

                                            <p><h4><strong><br>Seleksi dan Pengumuman</p></strong></h4>
                                            <p>Seleksi dilakukan berdasarkan verifikasi dokumen dan kapasitas daya tampung sekolah.</p>
                                            <p>Hasil seleksi akan diumumkan melalui situs resmi sekolah dan papan pengumuman di sekolah.</p>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <hr class="event-underline">
                        </div>
                        {{-- <div class="col-md-12 text-center">
                            <div class="pagging text-center">
                                <nav>
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item"><span class="page-link"></span></li>
                                        <li class="page-item"><span class="page-link"></span><span
                                                class="sr-only">(current)</span></span></li>
                                        <li class="page-item"><span class="page-link"><span
                                                    aria-hidden="true">&raquo;</span></span></li>
                                        <li class="page-item"><span class="page-link"></span>Next</li>
                                        <li class="page-item"><span class="page-link"></span></li>
                                        <li class="page-item"><span class="page-link"></span></li>
                                    </ul>
                                </nav>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
