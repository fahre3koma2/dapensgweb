@extends('webprofil.main')

@section('title')
    Dapen SG - Tentang Kami
@endsection

@section('header')
    <section class="page-title" style="background-image:url({{ url('webprofil/images/background/1.jpg')}})">
        <div class="auto-container">
            <h1>Tentang Kami</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{url('/')}}">home</a></li>
                <li>About</li>
            </ul>
        </div>
    </section>
@endsection

@section('contents')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <span class="name-rog"><div class="hr-line"></div><h5>Tentang Kami</h5></span>
                <div class="promo-donate">
                    <div class="col-md-1 dv lv">
                        <span class="ic-love"></span>
                    </div>
                    <div class="col-md-10 lv">
                        <h3 class="th-name">Sejarah DPSG :</h3>
                        <p class="desctop">
                            Dana Pensiun ini merupakan kelanjutan dari Yayasan Dana Pensiun Karyawan PT Semen Gresik (Persero) yang dibentuk berdasarkan Akta Notaris Goesti Djohan Nomor 280 tanggal 27 Maret 1974 dengan nama Yayasan Dana Pensiun Karyawan PT Semen Gresik (Persero) yang telah mendapat persetujuan Menteri berdasarkan surat Nomor B 7774/DJM/111.5/12/1976 tanggal 18 Desember 1976, kemudian disesuaikan dengan Undang-undang Dana Pensiun dan peraturan pelaksanaannya, dengan nama Dana Pensiun Semen Gresik, dan telah disahkan berdasarkan Keputusan Menteri Keuangan Republik Indonesia Nomor: KEP – 003/KM.17/1999 tanggal 11 Januari 1999 dan terakhir disahkan berdasarkan Keputusan Dewan Komisioner Otoritas Jasa Keuangan Nomor: KEP – 2776/NB.1/2014  tanggal 20 Oktober 2014.
                        <br><br>
                        {{--  За пожертвование вы получаете монеты, за которые можно приобрести привилегии на наших серверах.</p>
                        <a href="#" class="love-donate"><span class="ic-loveb"></span> Пожертвовать</a>  --}}
                    </div>
                </div>
                <div class="promo-donate">
                    <div class="col-md-1 dv lv">
                        <span class="ic-g"></span>
                    </div>
                    <div class="col-md-10 lv">
                        <h3 class="th-name"></h3>
                        <p class="desctop">
                            Untuk menjalankan fungsi di Dana Pensiun Semen Gresik, ada struktur organisasi.
                            Di pimpin oleh 2 (dua) pengurus yaitu Direktur Utama dan Direktur. Direktur Utama Dana Pensiun Semen Gresik saat ini di pimpin oleh Ibu Nur Widjajanti, SE. dan Direktur Dana Pensiun Semen Gresik adalah Ibu Sudartini, SE.
                            Dana Pensiun Semen Gresik juga memiliki Dewan Pengawas yang terdiri dari Bapak Tigor Pangaribuan sebagai Ketua Dewan Pengawas, Bapak Budi Wahyudarsono, Bapak M. Soffan Heri sebagai Anggota Dewan Pengawas saat ini.

                            Untuk mencapai Visi dan Misi Dana Pensiun Semen Gresik maka di kelola oleh beberapa bagian atau unit. Beberapa unit yang ada di Dana Pensiun Semen Gresik adalah Unit Kepesertaan, Unit Investasi, Unit Akuntansi & Keuangan, Unit Legal, Unit Internal Audit, dan Unit Manajemen Risiko.
                        <br><br>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
