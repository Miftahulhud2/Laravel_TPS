@extends('tps.tps')
@section('content')
@parent
<div class="row mr-1 ml-1" >
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard {{ $judul->nama_acara }}</h1>
    </div>

    <div class="tab-content tab-transparent-content ml-1">
        <div class="tab-pane fade show active" id="business-1" role="tabpanel" aria-labelledby="business-tab">
            <div class="row">
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-secondary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight text-secondary text-uppercase mb-1">
                                        NAMA TPS</div>
                                    <div class="h5 mb-0 font-weight text-gray-800">
                                        @foreach ($tps as $t)
                                        {{ $t->namatps }}
                                        @endforeach
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <h1><i class="bi bi-shop-window"></i></h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-secondary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight text-secondary text-uppercase mb-1">
                                        JUMLAH HAK PEMILIH SUARA
                                    </div>
                                    <div class="h5 mb-0 font-weight text-gray-800">
                                        {{ $hadir }}
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <h1><i class="bi bi-shop-window"></i></h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-secondary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight text-secondary text-uppercase mb-1">
                                        JUMLAH DAFTAR PEMILIH
                                    </div>
                                    <div class="h5 mb-0 font-weight text-gray-800">
                                        {{ $pencoblos }}
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <h1><i class="bi bi-shop-window"></i></h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-secondary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight text-secondary text-uppercase mb-1">
                                        KETUA KPPS
                                    </div>
                                    <div class="h5 mb-0 font-weight text-gray-800">
                                        @foreach ($ketua as $ke)
                                        {{ $ke->nama }}
                                        @endforeach
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <h1><i class="bi bi-shop-window"></i></h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row gx-2"
                {{-- style="background-color:#898989;" --}}
                >
                    <center>
                        <h3>
                            Daftar Calon
                        </h3>
                    </center>
                    <div class="d-flex justify-content-center">
                        @foreach ($datacalon as $ca)
                            <div class="col-4">

                                <div class="card">

                                    <div class="project">
                                        <center>
                                            <span class="display-6">Pasangan Nomer {{ $loop->iteration }}</span>
                                        </center>
                                        <figure class="img-responsive">
                                            <center>
                                                <img src="{{ asset('storage/'.$ca->foto) }}" style="width: 250px;">
                                            </center>
                                            <figcaption>
                                                <span class="project-price"></span>
                                                <center>
                                                    <span class="h6">{{ $ca->nama }}</span>
                                                </center>
                                            </figcaption>

                                        </figure>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>



            </div>
        </div>
    </div>




</div>




</div>
@stop

