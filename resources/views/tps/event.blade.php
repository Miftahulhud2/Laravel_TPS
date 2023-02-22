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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/tps.css') }}">
</head>
<Body style="margin-right: 8px">
    <div class="header">
        <div class="logout">
            <div class="dropdown">
                <button class="dropbtn">
                    @foreach ($tps as $t)
                    {{ $t->namatps }}
                    @endforeach
                </button>
                <div class="dropdown-content">
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" >Log out</button>
                    </form>
                </div>
            </div>
        </div>
        <h2>
            Aplikasi Tempat Pemungutan Suara
            <p style="font-size: 15px; color: rgb(219, 219, 219)">jalan {{ $jalan }} {{ $desa }} Rt:{{ $rt }} Rw:{{ $rw }},{{ $kecamatan }} {{ $kabupaten }} {{ $provinsi }}</p>
        </h2>
        <div class="btn-group">
            <a href="{{ url('tps/tentang') }}" ><button class="button">TENTANG</button></a>

            @if ($title == "ANGGOTA")
            <a href="{{ url('tps/anggota') }}"><button class="ini">ANGGOTA</button></a>
                @else
                    <a href="{{ url('tps/anggota') }}"><button class="button">ANGGOTA</button></a>
            @endif

            @if ($title == 'EVENT')
            <a href="{{ url('tps/event') }}"><button class="ini">EVENT</button></a>
            @else
            <a href="{{ url('tps/event') }}"><button class="button">EVENT</button></a>
            @endif

            <a href="{{ url('tps/report') }}"><button class="button">REPORT</button></a>
        </div>

    </div>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
        {{ session()->forget('success') }}
        @endif
        @if(session('danger'))
        <div class="alert alert-danger">{{ session('danger') }}</div>
        {{ session()->forget('danger') }}
        @endif
    @if ($tutup == 0)
    <h2>Data Daftar Pemilih Tetap</h2>
    <a href="/tps/event/tambahdptbaru" style="text-decoration: none; color:white;" >
        <button class="btn btn-secondary">
            <i class="bi bi-clipboard-plus"></i>
            TAMBAH DPT BARU
        </button>
    </a>







<div class="row" style="margin-right: 1px">
    <div class="col" >
        <table id="tabel-data" class="table table-striped table-bordered" width="90%"  cellspacing="0">
            <thead>
                <tr>
                    <th width="65px">Aksi</th>
                    <th width="10px">Kehadiran</th>
                    <th>No KK</th>
                    <th>No NIK</th>
                    <th>Nama Lengkap</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Status Perkawinan</th>
                    <th>Jenis Kelamin</th>
                    <th >Umur</th>
                    <th>DPT</th>
                    <th>KET</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th width="65px">Aksi</th>
                    <th width="10px">Kehadiran</th>
                    <th>No KK</th>
                    <th>No NIK</th>
                    <th>Nama Lengkap</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Status Perkawinan</th>
                    <th>Jenis Kelamin</th>
                    <th >Umur</th>
                    <th>DPT</th>
                    <th>KET</th>
                </tr>
            </tfoot>
            <tbody>
            @foreach ($pencoblos as $p)
              <tr>
                    <td width="65px">
                        <a class="btn btn-warning btn-sm" href="/tps/event/{{ $p->id }}">
                            <i class="bi bi-pen"></i>
                        </a>

                        <form action="/tps/event/delete/{{ $p->id }}" method="POST" class="d-inline">
                            @csrf
                            @method('delete')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('hapus data ini?')">
                            <i class="bi bi-trash"></i>
                        </button>
                        </form>
                    </td>
                    <td width="10px">
                        <form action="/tps/event" method="POST">
                        @csrf
                        @if ($p->hadir == 0)
                        <button type="submit" class="btn btn-outline-secondary" id="id" name='id'value="{{ $p->id }}"><s>HADIR</s>
                        </button>
                        @else
                            <button type="submit" class="btn btn-secondary" id="id" name='id'value="{{ $p->id }}">HADIR
                            </button>

                            @endif
                        </form>
                    </td>
                    <td>{{ $p->kk }}</td>
                    <td>{{ $p->nik }}</td>
                    <td>{{ $p->nama }}</td>
                    <td>{{ $p->tmp_lahir }}</td>
                    <td>{{ $p->tgl_lahir }}</td>
                    <td>{{ $p->sts_kawin }}</td>
                    <td>{{ $p->jns_kelamin }}</td>
                    <td >{{ $p->umur }}</td>
                    <td>
                        @if ($p->jns_dpt == 'DPT')
                            DPT
                        @elseif ($p->jns_dpt == 'DPPh')
                            DPPh
                            @else
                                DPTb
                        @endif
                    </td>
                    <td>
                        @if ($p->disabilitas == 1)
                            Disabilitas
                            @else

                        @endif
                    </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>


  </div>

    @else
        <div style="margin: 5px 5px 2px 2px; background-color: white">
            <div class="alert alert-success alert-block">
                <strong>
                    DATA TELAH DIMASUKAN!!
                </strong>
            </div>
        </div>


    @endif



        <script>
        $(document).ready(function(){
          $('#tabel-data').DataTable({
              scrollY: '230px',
              scrollCollapse: true,
          });
      });
        </script>



</body>
</html>

