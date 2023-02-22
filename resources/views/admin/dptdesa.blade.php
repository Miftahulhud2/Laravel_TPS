<!DOCTYPE html>
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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.1/font/bootstrap-icons.css">
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




    <div style="margin: 1%;">
        <h2>
            <button class="btn btn-outline-danger"  onclick="goBack()"><i class="bi bi-arrow-left-circle"></i></button>
            Daftar Pemilih Tetap

        </h2>
        @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
        {{ session()->forget('success') }}
        @endif
        @if(session('danger'))
        <div class="alert alert-danger">{{ session('danger') }}</div>
        {{ session()->forget('danger') }}
        @endif

        <a href="/admin/daftar-peserta-tetap/tambahdpt" style="text-decoration: none; color:white;" >
        <button class="btn btn-secondary">
            <i class="bi bi-clipboard-plus"></i>
            Tambah DPT
        </button>
        </a>




        <div class="row">
            <div class="col">&ensp;</div>
        </div>
    <table id="tabel-data" class="table table-striped table-bordered" width="90%" cellspacing="0" style="width: 95%">
        <thead>
            <tr>
                <th>Aksi</th>
                <th>KK</th>
                <th>NIK</th>
                <th style="width: 25%">Nama</th>
                <th style="width: 10%">Tempat Lahir</th>
                <th style="width: 11%">Tanggal Lahir</th>
                <th style="width: 5%">Umur</th>
                <th style="width: 15%">Status Perkawinan</th>
                <th style="width: 11%">Jenis Kelamin</th>
                <th>Jalan</th>
                <th style="width: 2%">Rt</th>
                <th style="width: 2%">Rw</th>
                <th style="width: 2%">JENIS DPT</th>
                <th style="width: 2%">KET</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Aksi</th>
                <th>KK</th>
                <th>NIK</th>
                <th style="width: 25%">Nama</th>
                <th style="width: 10%">Tempat Lahir</th>
                <th style="width: 11%">Tanggal Lahir</th>
                <th style="width: 5%">Umur</th>
                <th style="width: 15%">Status Perkawinan</th>
                <th style="width: 11%">Jenis Kelamin</th>
                <th>Jalan</th>
                <th style="width: 2%">Rt</th>
                <th style="width: 2%">Rw</th>
                <th style="width: 2%">JENIS DPT</th>
                <th style="width: 2%">KET</th>

            </tr>
        </tfoot>
        <tbody>
            @foreach ($dpts as $dpt)
            <tr>
                <td>
                    <div class="d-flex justify-content-start">
                        <a href="/admin/dpt/{{ $dpt->id }}/edit" class="badge bg-success border-0" style="text-decoration: none; padding: 6px 6px 6px 6px;">
                            <i class="bi bi-pencil-square"></i>
                        </a>
                        <form action="/admin/dpt/{{ $dpt->id }}/hapus" method="POST">
                            @csrf
                            @method('delete')
                            <button onclick="return confirm('Benar mau dihapus???')" id="tryMe" class="badge bg-danger border-0" style="text-decoration: none; padding: 6px 6px 6px 6px;">
                                <i class="bi bi-trash-fill"></i>
                            </button>
                        </form>
                    </div>
                </td>
                <td>{{ $dpt->kk }}</td>
                <td>{{ $dpt->nik }}</td>
                <td>{{ $dpt->nama }}</td>
                <td>{{ $dpt->tmp_lahir }}</td>
                <td style="width: 11%">{{ $dpt->tgl_lahir }}</td>
                <td>{{ $dpt->umur }}</td>
                <td>{{ $dpt->sts_kawin }}</td>
                <td>{{ $dpt->jns_kelamin }}</td>
                <td>{{ $dpt->jalan }}</td>
                <td>{{ $dpt->rt }}</td>
                <td>{{ $dpt->rw }}</td>
                <td>{{ $dpt->jns_dpt }}</td>
                <td>{{ $dpt->disabilitas }}</td>

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
<script>
    function goBack() {
        window.history.back();
    }
</script>

</body>
