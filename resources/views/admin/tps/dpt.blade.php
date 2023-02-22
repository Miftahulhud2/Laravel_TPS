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



    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <style>
        a{
            text-decoration: none
        }
    </style>
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


        {{-- <left>
            <button class="btn btn-outline-secondary">
                <i class="bi bi-box-arrow-right fa-2x"></i>
            </button>
        </left> --}}


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

            @if ($judul === 0)
                <a href="{{ url('admin/tps') }}"><button class="ini2" disabled>
                    <del>
                    TPS
                    </del>
                </button></a>
            @else
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

            @endif

        @if ($judul === 0)
            <a href="{{ url('admin/rekap') }}"><button class="ini2" disabled><s>REKAP</s></button></a>
        @else
            @if ($title == 'REKAP')
            <a href="{{ url('admin/rekap') }}"><button class="ini">REKAP</button></a>
            @else
            <a href="{{ url('admin/rekap') }}"><button class="button">REKAP</button></a>
            @endif
        @endif
        </div>
    </div>
    @foreach ( $tps as $tp)



    <div class="row" style="margin: 1%">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="col-md-12">

                        <a href="/admin/tps">
                            <button type="button" class="btn btn-outline-danger">
                                <i class="bi bi-arrow-left-circle"> Kembali</i>
                            </button>
                        </a>

                        @if ($title == 'Rekap Laporan')
                        <a href="/admin/tps/{{ $tp->slug }}">
                            <button type="button" class="btn btn-secondary">
                                <span>Rekap Laporan</span>
                            </button>
                        </a>
                        @else
                        <a href="/admin/tps/{{ $tp->slug }}">
                            <button type="button" class="btn btn-outline-secondary">
                                <span>Rekap Laporan</span>
                            </button>
                        </a>
                        @endif

                        @if ($title == 'Pengurus')
                        <a href="/admin/tps/{{ $tp->slug }}/pengurus/">
                            <button type="button" class="btn btn-secondary">
                                <span>Pengurus</span>
                            </button>
                        </a>
                        @else
                        <a href="/admin/tps/{{ $tp->slug }}/pengurus/">
                            <button type="button" class="btn btn-outline-secondary">
                                <span>Pengurus</span>
                            </button>
                        </a>
                        @endif



                        @if ($title == 'Daftar Pemilih Tetap')
                        <a href="/admin/tps/{{ $tp->slug }}/daftar-pemilih-tetap/">
                            <button type="button" class="btn btn-secondary">
                                <span>Daftar Pemilih Tetap</span>
                            </button>
                        </a>
                        @else
                        <a href="/admin/tps/{{ $tp->slug }}/daftar-pemilih-tetap/">
                            <button type="button" class="btn btn-outline-secondary">
                                <span>Daftar Pemilih Tetap</span>
                            </button>
                        </a>
                        @endif

                        @if ($title == 'Foto')
                        <a href="/admin/tps/{{ $tp->slug }}/foto/">
                            <button type="button" class="btn btn-outline-secondary">
                                <span>Foto</span>
                            </button>
                        </a>
                        @else
                        <a href="/admin/tps/{{ $tp->slug }}/foto/">
                            <button type="button" class="btn btn-outline-secondary">
                                <span>Foto</span>
                            </button>
                        </a>
                        @endif

                        @endforeach



                        <div>
                            <a href="/admin/daftar-peserta-tetap/tambahdpt" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                TAMBAH DAFTAR PEMILIH TETAP
                            </a>

                        </div>


                              {{--  --}}








<div>


    <table id="tabel-data" class="table table-striped table-bordered" width="90%" cellspacing="0" style="width: 95%">
        <thead>
            <tr>
                <th>KK</th>
                <th>NIK</th>
                <th>Nama</th>
                <th style="width: 10%">Tempat Lahir</th>
                <th style="width: 11%">Tanggal Lahir</th>
                <th style="width: 5%">Umur</th>
                <th style="width: 15%">Status Perkawinan</th>
                <th style="width: 11%">Jenis Kelamin</th>
                <th>Jalan</th>
                <th style="width: 2%">Rt</th>
                <th style="width: 2%">Rw</th>

            </tr>
        </thead>
        <tfoot>
            <tr>

                <th>KK</th>
                <th>NIK</th>
                <th>Nama</th>
                <th style="width: 10%">Tempat Lahir</th>
                <th style="width: 11%">Tanggal Lahir</th>
                <th style="width: 5%">Umur</th>
                <th style="width: 15%">Status Perkawinan</th>
                <th style="width: 11%">Jenis Kelamin</th>
                <th>Jalan</th>
                <th style="width: 2%">Rt</th>
                <th style="width: 2%">Rw</th>

            </tr>
        </tfoot>
        <tbody>
            @foreach ($dpts as $dpt)
            <tr>
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

            </tr>
            @endforeach
        </tbody>
    </table>
</div>

  <script>
  $(document).ready(function(){
    $('#tabel-data').DataTable({
        scrollY: '250px',
        scrollCollapse: true,
    });
});
  </script>


</body>
</html>

