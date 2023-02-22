<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">

    <meta charset="utf-8">


    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet" />
    <title>{{ $title }}</title>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('js/charts.js') }}"></script>
    <script src="../Chart.bundle.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" href="wizard.css">
    <script src="js/Chart.js"></script>

    <style>
    a{
        text-decoration: none
    }
    input[type=text]:focus {
        background-color: rgba(237, 255, 227, 0.986);
      }
    </style>

    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/formstep.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">


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
                <a href="{{ url('admin/tps') }}"><button class="ini2" disabled><del>TPS</del></button></a>
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




        <div class="isi">
            @yield('content')
            @yield('menu')
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    {{-- <script type="text/javascript" charset="utf8" src="/DataTables/datatables.js"></script>
    <script src="js/jquery-3.1.0.js"></script>
    <script src="js/jquery.dataTables.min.js"></script> --}}


</body>
</html>
