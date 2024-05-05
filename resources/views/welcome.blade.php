@extends('layout.app')

@section('content')
    <!-- Page content -->
    <div class="container home-profil">
        <div class="row">

            <!-- Main content -->
            <div role="main" class="col-9 top-content">
                <div class="row">
                    <div class="col-3">
                        <img class="w-100" src="{{ Vite::asset('resources/images/IMG20240602.jpeg') }}" alt="">
                    </div>
                    <div class="deskripsi col-9">
                        <h1>Junanda <br> Deyastusesa</h1>
                        <p class="pt-2">Saya Juna mahasiswa Telkom University Surabaya yang tertarik dalam dunia kreativitas dan
                            teknologi. Saya memiliki keahlian Desain Grafis, UI / UX dan Coding, selain itu, saya senang
                            aktif berpartisipasi dalam kegiatan kemahasiswaan serta berkompetisi dalam berbagai lomba
                            seperti Web Desain, Blog, dan Dll.</p>
                    </div>

                    <div class="data-diri row pt-5">
                        <h3>Data Diri</h3>
                        <div class="col-6 pt-3">
                            <div class="pb-3">
                                <p class="mb-1">Nama Lengkap</p>
                                <h5>Junanda Deyastusesa</h5>
                            </div>
                            <div class="pb-3">
                                <p class="mb-1">Tempat, tanggal lahir</p>
                                <h5>Ngawi, 20 Juni 2003</h5>
                            </div>
                            <div class="pb-3">
                                <p class="mb-1">Email</p>
                                <h5>junandadeyastusesa@gmail.com</h5>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="pb-3">
                                <p class="mb-1">Jenis Kelamin</p>
                                <h5>Laki laki</h5>
                            </div>
                            <div class="pb-3">
                                <p class="mb-1">No Telp</p>
                                <h5>0821 3228 1285</h5>
                            </div>
                            <div class="pb-3">
                                <p class="mb-1">Alamat</p>
                                <h5>Ds. Watualang Rt 01, Rw 02, Kab. Ngawi</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="kemampuan container py-3 rounded-4">
                    <h3 class="pt-3 ps-3">Kemampuan</h3>
                    <ul class="list-group">
                        <li class="list-group-item bg-transparent border-0">
                            <p class="mb-2">Desain Grafis</p>
                            <div class="progress rounded-5">
                                <div class="progress-bar rounded-4" style="width: 85%">85%</div>
                            </div>
                        </li>
                        <li class="list-group-item bg-transparent border-0">
                            <p class="mb-2">UI / UX</p>
                            <div class="progress rounded-5">
                                <div class="progress-bar rounded-4" style="width: 80%">80%</div>
                            </div>
                        </li>
                        <li class="list-group-item bg-transparent border-0">
                            <p class="mb-2">Web Desain</p>
                            <div class="progress rounded-5">
                                <div class="progress-bar rounded-4" style="width: 75%">75%</div>
                            </div>
                        </li>
                        <li class="list-group-item bg-transparent border-0">
                            <p class="mb-2">Editing Video</p>
                            <div class="progress rounded-5">
                                <div class="progress-bar rounded-4" style="width: 80%">80%</div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
@endsection
