<html>
<head>
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/fontawesome-free/css/all.min.css' ) }}">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">



    {{--  --}}

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" />

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>




    <link rel="stylesheet" href="{{ asset('css/tps.css') }}">

</head>
<Body>
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
            @if ($title == "DASHBOARD")
                <a href="{{ url('tps/tentang') }}" ><button class="ini">DASHBOARD</button></a>
                @else
                    <a href="{{ url('tps/tentang') }}" ><button class="button">DASHBOARD</button></a>
            @endif

            @if ($title == "ANGGOTA")
            <a href="{{ url('tps/anggota') }}"><button class="ini">ANGGOTA</button></a>
                @else
                    <a href="{{ url('tps/anggota') }}"><button class="button">ANGGOTA</button></a>
            @endif

            @if ($title == 'TAMBAH DPT BARU')
            <a href="{{ url('tps/event') }}"><button class="ini">EVENT</button></a>
                @else
                <a href="{{ url('tps/event') }}"><button class="button">EVENT</button></a>
            @endif

            @if ($title == "REPORT")
                <a href="{{ url('tps/report') }}"><button class="ini">REPORT</button></a>
                @else
                    <a href="{{ url('tps/report') }}"><button class="button">REPORT</button></a>
            @endif
        </div>
        <ul class="navbar-nav ms-auto">
            <li></li>
        </ul>
    </div>

            @yield('content')

    </div>

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
</Body>
</html>
