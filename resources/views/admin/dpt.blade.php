{{-- <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>{{ $title }}</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" />

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>
    <div class="header">

        <div class="logout">
            <div class="dropdown">
                <button class="dropbtn">{{ auth()->user()->name }}</button>
                <div class="dropdown-content">
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" >Log out</button>
                    </form>
                </div>
            </div>
        </div>
        <h2>Aplikasi Tempat Pemungutan Suara</h2>



        <div class="btn-group" >
            @if ($title == 'DASHBOARD')
            <a href="{{ url('admin') }}"><button class="ini">DASHBOARD</button></a>
            @else
            <a href="{{ url('admin') }}"><button class="button">DASHBOARD</button></a>
            @endif


            @if ($title == 'DATA CALON')
            <a href="{{ url('admin/datacalon') }}"><button class="ini">DATA CALON</button></a>
            @else
            <a href="{{ url('admin/datacalon') }}"><button class="button">DATA CALON</button></a>
            @endif

            @if ($title == 'DAFTAR PESERTA TETAP')
            <a href="{{ url('admin/daftar-peserta-tetap') }}"><button class="ini">DPT</button></a>
            @else
            <a href="{{ url('admin/daftar-peserta-tetap') }}"><button class="button">DPT</button></a>
            @endif

            @if ($title == 'TPS')
            <a href="{{ url('admin/tps') }}"><button class="ini">TPS</button></a>
            @elseif ($title == 'Tambah TPS')
            <a href="{{ url('admin/tps') }}"><button class="ini">TPS</button></a>
            @elseif ($title == 'Anggota TPS')
            <a href="{{ url('admin/tps') }}"><button class="ini">TPS</button></a>
            @elseif ($title == 'DATA REPORT')
            <a href="{{ url('admin/tps') }}"><button class="ini">TPS</button></a>
            @else
            <a href="{{ url('admin/tps') }}"><button class="button">TPS</button></a>
            @endif


            @if ($title == 'REKAP')
            <a href="{{ url('admin/rekap') }}"><button class="ini">REKAP</button></a>
            @else
            <a href="{{ url('admin/rekap') }}"><button class="button">REKAP</button></a>
            @endif
        </div>

    </div>





<div>
    <table id="tabel-data" class="table table-striped table-bordered" width="100%" cellspacing="0">
        <thead>
            <tr>

                <th>KK</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Umur</th>
                <th>Status Perkawinan</th>
                <th>Jenis Kelamin</th>
                <th>Provinsi</th>
                <th>Kabupaten</th>
                <th>Kecamatan</th>
                <th>Desa</th>
                <th>Rt</th>
                <th>Rw</th>
            </tr>
        </thead>
        <tfoot>
            <tr>

                <th>KK</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Umur</th>
                <th>Status Perkawinan</th>
                <th>Jenis Kelamin</th>
                <th>Provinsi</th>
                <th>Kabupaten</th>
                <th>Kecamatan</th>
                <th>Desa</th>
                <th>Rt</th>
                <th>Rw</th>
            </tr>
        </tfoot>
        <tbody>
            <tr>

                <td>Silas</td>
                <td>92028100</td>
                <td>2902930</td>
                <td>Demak</td>
                <td>09-08-2000</td>
                <td>22</td>
                <td>Belum kawin</td>
                <td>Laki-laki</td>
                <td>Jawa Tengah</td>
                <td>Semarang</td>
                <td>Sayung</td>
                <td>Dukuhan</td>
                <td>02</td>
                <td>03</td>
            </tr>
            <tr>

                <td>paijo</td>
                <td>92028100</td>
                <td>2902930</td>
                <td>Demak</td>
                <td>09-08-2000</td>
                <td>22</td>
                <td>Belum kawin</td>
                <td>Laki-laki</td>
                <td>Jawa Tengah</td>
                <td>Semarang</td>
                <td>Sayung</td>
                <td>Dukuhan</td>
                <td>02</td>
                <td>03</td>
            </tr>
            <tr>

                <td>Nama</td>
                <td>NIK</td>
                <td>KK</td>
                <td>Tempat Lahir</td>
                <td>Tanggal Lahir</td>
                <td>Umur</td>
                <td>Status Perkawinan</td>
                <td>Jenis Kelamin</td>
                <td>Provinsi</td>
                <td>Kabupaten</td>
                <td>Kecamatan</td>
                <td>Desa</td>
                <td>Rt</td>
                <td>Rw</td>
            </tr>
            @foreach ($dpt as $dp)
            <tr>

                <td>{{ $dp->kk }}</td>
                <td>{{ $dp->nik }}</td>
                <td>{{ $dp->nama }}</td>
                <td>{{ $dp->tmp_lahir }}</td>
                <td>{{ $dp->tgl_lahir }}</td>
                <td>{{ $dp->umur }}</td>
                <td>{{ $dp->sts_kawin }}</td>
                <td>{{ $dp->jns_kelamin }}</td>
                <td>{{ $dp->provinsi }}</td>
                <td>{{ $dp->kabupaten }}</td>
                <td>{{ $dp->kecamatan }}</td>
                <td>{{ $dp->desa }}</td>
                <td>{{ $dp->rt }}</td>
                <td>{{ $dp->rw }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>



<script>
$(document).ready(function(){
$('#tabel-data').DataTable({
    scrollY: '335px',
    scrollCollapse: true,
});
});
</script>

</body>



 --}}
@extends("admin.index")
@section('content')

<h1>
    List Daftar Pemilih Tetap
</h1>
<a href="/admin/daftar-peserta-tetap/tambahdpt" style="text-decoration: none; color:white;" >
    <button class="btn btn-secondary">
        <i class="bi bi-clipboard-plus"></i>
        Tambah DPT
    </button>
</a>

<div class="row">
    <div class="col">&ensp;</div>
</div>
@foreach ($dpt as $dp)
<div class="float-start">
    <a href="/admin/daftar-peserta-tetap/{{ $dp }}" class="btn btn-outline-secondary btn-lg ms-1">{{ $dp; }}</a>
</div>
@endforeach

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js" ></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script>
    @if (session('success'))
        toastr.success('{{ session('success') }}')
    @endif
</script>
@stop
