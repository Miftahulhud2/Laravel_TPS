@extends('tps.tps')
@section('content')
@parent

<div class="row" style="width: 90%;">
    <div class="card" style="width: 90%;">
        <h2>ANGGOTA KPPS SERTA PENGAWAS DAN SAKSI</h2>
        <div class="col">
            <h5>Kelompok Penyelenggara Pemungutan Suara</h5>
            {{-- <p>Kelompok Penyelenggara Pemungutan Suara (KPPS) adalah kelompok yang dibentuk oleh Panitia Pemungutan Suara untuk melaksanakan pemungutan suara di tempat pemungutan suara.Terdiri dari 1 Ketua dan 6 Anggota yang biasanya tinggal diarea sekitar TPS.
            </p> --}}
            <div class="d-flex align-items-start">
                @foreach ($anggotas as $pengurus)
                   {{-- {{ $pengurus->foto }} --}}

                  <div class="card text-center w-9" style="width: 9rem;">
                    <h5 class="card-title">{{ $pengurus->status }}</h5>
                    @if ($pengurus->foto == null)
                    <img src="{{ asset('img/pengurus/default.png') }}" class="card-img-top" alt="...">
                        @else
                        <center>
                            <img src="{{ asset('storage/'.$pengurus->foto) }}" class="card-img-top" alt="..." style="height: 120px; width: 100px;">

                        </center>

                    @endif
                    <div class="card-body">
                        <p class="card-text">
                            {{ $pengurus->nama }}
                        </p>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
        <div class="col">
            <h5>Pengawas Dan Saksi</h5>
            {{-- <p>
                Saksi merupakan kepentingan dari masing-masing caleg,juga tersedia pengawasas Pemilu disetiap TPS yang tugas dan fungsinya mengawasi agar tidak ada kecurangan dalam pelaksanaan pemilu.
            </p> --}}
                <div class="d-flex align-items-start">
                    @foreach ($saksis as $saksi)
                   {{-- {{ $saksi->foto }} --}}

                  <div class="card text-center w-9" style="width: 9rem;">
                    <h5 class="card-title">{{ $saksi->status }}</h5>
                    @if ($saksi->foto == null)
                    <img src="{{ asset('img/pengurus/default.png') }}" class="card-img-top" alt="...">
                    @else
                    <center>
                        <img src="{{ asset('storage/'.$saksi->foto) }}" class="card-img-top" alt="..." style="height: 120px; width: 100px;">

                    </center>
                    @endif
                    <div class="card-body">
                        <p class="card-text">
                            {{ $saksi->nama }}
                        </p>
                    </div>
                </div>
                @endforeach
                </div>

        </div>
    </div>

</div>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
@stop
