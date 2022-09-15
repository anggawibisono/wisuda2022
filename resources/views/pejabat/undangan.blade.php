@extends('layout.base_layout_pejabat')

@section('content')
<link rel="stylesheet" href="<?php echo asset('css/undangan.css')?>" type="text/css"> 
        <div class="opening">
            <div class="text-opening" >
                Dengan hormat disampaikan bahwa Politeknik Siber dan Sandi Negara akan menyelenggarakan Wisuda Taruna Politeknik Siber dan Sandi Negara Tahun Akademik 2021/2022. Sehubungan dengan hal tersebut, dengan ini kami mengundang Bapak/Ibu <span class="text_nama_ortu">{{$data_pejabat->nama_pejabat}}</span> untuk hadir pada :
            </div>
        </div>

        <div class="content-undangan">
            <div class="area-hari-tanggal">
                <div class="judul-hari-tanggal">Hari, Tanggal</div>
                <div class="hari-tanggal">Selasa, 4 Oktober 2022</div>
            </div>
            <div class="area-waktu">
                <div class="judul-waktu">Waktu</div>
                <div class="waktu">08.00 WIB</div>
            </div>
            <div class="area-lokasi">
                <div class="judul-lokasi">Lokasi</div>
                <div>
                <a href="https://goo.gl/maps/gZfeDFDGsQojvgMfA" class="lokasi" style="text-decoration: none;">Auditorium Roebiono Kertopati BSSN</a>
                </div>
                <a href="https://goo.gl/maps/gZfeDFDGsQojvgMfA" class="alamat" style="text-decoration: none;">Jl. Raya Muchtar No.70, Bojongsari Lama, Kec. Bojongsari, Kota Depok, Jawa Barat 16516</a>
            </div>
            <div class="area-pakaian">
                <div class="judul-pakaian">Pakaian</div>
                <div class="pakaian">Pria : Pakaian Sipil Lengkap</div>
                <div class="pakaian">Wanita : Pakaian Nasional (Daerah) </div>
            </div>
        </div>
        <div class="area-konfirmasi">
            @if( $data_pejabat->konfirmasi_kehadiran == 'yes' )
            <div class="text-konfirmasi">Anda telah melakukan konfirmasi kehadiran</div>
            <form method="POST" action="{{ url('/invitation/pejabat/batal_konfirmasi/'.$data_pejabat->id)}}">
                    @csrf
                    @method('PUT')
                <button class="button2" type="submit">
                    Batal Konfirmasi
                </button>
            </form>
            @else
            <div class="text-konfirmasi">Harap melakukan konfirmasi kehadiran melalui tombol berikut</div>
            <form method="POST" action="{{ url('pejabat/undangan/'.$data_pejabat->id)}}">
                    @csrf
                    <input type="hidden" name="_method" value="PATCH">
                <button class="button1" type="submit">
                    Konfirmasi Kehadiran
                </button>
            </form>
            @endif
        </div>
        <div class="area-konfirmasi">
            <div class="text-konfirmasi">Harap Hadir 30 menit sebelum acara dimulai</div>
        </div>
    </div>

@endsection