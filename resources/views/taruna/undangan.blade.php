@extends('layout.base_layout')

@section('content')
<link rel="stylesheet" href="<?php echo asset('css/undangan.css')?>" type="text/css"> 
        <div class="opening">
            <div class="text-opening" >
                Dengan hormat disampaikan bahwa Politeknik Siber dan Sandi Negara akan menyelenggarakan Wisuda Taruna Politeknik Siber dan Sandi Negara Tahun Akademik 2021/2022. Sehubungan dengan hal tersebut, dengan ini kami mengundang Bapak/Ibu <span class="text_nama_ortu">{{$data_taruna->nama_ayah}}</span> untuk hadir pada :
            </div>
        </div>

        <div class="content-undangan">
            <div class="area-hari-tanggal">
                <div class="judul-hari-tanggal">Hari, Tanggal</div>
                <div class="hari-tanggal">Selasa, 27 September 2022</div>
            </div>
            <div class="area-waktu">
                <div class="judul-waktu">Waktu</div>
                <div class="waktu">09.00 WIB</div>
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
            @if( $data_taruna->konfirmasi_kehadiran == 'yes' )
            <div class="text-konfirmasi">Anda telah melakukan konfirmasi kehadiran</div>
            <form method="POST" action="{{ url('/invitation/taruna/batal_konfirmasi/'.$data_taruna->id)}}">
                    @csrf
                    @method('PUT')
                <button class="button2" type="submit">
                    Batal Konfirmasi
                </button>
            </form>
            @else
            <div class="text-konfirmasi">Harap melakukan konfirmasi kehadiran melalui tombol berikut</div>
            <form method="POST" action="{{ url('taruna/undangan/'.$data_taruna->id)}}">
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
            <div class="text-konfirmasi">Undangan berlaku hanya untuk 2 (dua) orang</div>
            <div class="text-konfirmasi">Undangan cetak harap dibawa ketika acara</div>
        </div>
    </div>

@endsection