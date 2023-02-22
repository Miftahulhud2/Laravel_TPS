@extends('admin.index')
@section('content')

<div>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>
    <div class="tab-content tab-transparent-content">
        <div class="tab-pane fade show active" id="business-1" role="tabpanel" aria-labelledby="business-tab">
          <div class="row">
              <div class="col-xl-3 col-md-6 mb-4">
                  <div class="card border-left-secondary shadow h-100 py-2">
                      <a href="/admin/tps" style="text-decoration: none; color: black;">
                      <div class="card-body">
                          <div class="row no-gutters align-items-center">
                              <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                                            Jumlah TPS</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $tpss }}</div>
                                    </div>
                                    <div class="col-auto">
                                        <h1><i class="bi bi-shop-window"></i></h1>
                                    </div>
                                </div>
                            </div>
                        </a>
                        </div>
                    </div>



                    @foreach ($jml_suara as $suara => $jml)

                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-secondary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                                            {{ $suara }}</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            {{ $jml }}
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        @if ($suara == 'Suara Tidak Sah')
                                        <h1><i class="bi bi-save2"></i></h1>
                                        @else
                                            <h1><i class="bi bi-save"></i></h1>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach



                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-secondary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                                            Jumlah Suara Sah</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            {{ $suarasah }}
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <h1><i class="bi bi-save-fill"></i></h1>
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
                                        <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                                            Jumlah Seluruh Suara</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            {{ $jml_all_suara }}
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <h1><i class="bi bi-save2-fill"></i></h1>
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
                                        <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                                            Jumlah Hak Pengguna Suara</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            {{ $hadir }}
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <h1><i class="bi bi-person-check-fill"></i></h1>
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
                                        <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                                            Jumlah Daftar Pemilih </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            {{ $pencoblos }}
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <h1><i class="bi bi-person-fill"></i></h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                {{-- <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                        <div class="card border-info mb-3 " style="max-width: 20rem;">

                            <div class="card-body text-info">
                              <h1 class="card-title"><center>{{ $tpss }}</center></h1>
                              <h3 class="card-text"><center>TERSEDIA</center></h3>
                            </div>
                        </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                        <div class="card border-danger mb-3 " style="max-width: 20rem;">
                            <div class="card-header"><center><h1>SUARA 1</h1></center></div>
                            <div class="card-body text-danger">
                              <h1 class="card-title"><center>{{ $suara1 }}</center></h1>
                              <h3 class="card-text"><center>JUMLAH</center></h3>
                            </div>
                        </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                        <div class="card border-danger mb-3 " style="max-width: 20rem;">
                            <div class="card-header"><center><h1>SUARA 2</h1></center></div>
                            <div class="card-body text-danger">
                              <h1 class="card-title"><center>{{ $suara2 }}</center></h1>
                              <h3 class="card-text"><center>JUMLAH</center></h3>
                            </div>
                        </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                        <div class="card border-danger mb-3 " style="max-width: 20rem;">
                            <div class="card-header"><center><h1>SUARA</h1></center></div>
                            <div class="card-body text-danger">
                              <h1 class="card-title"><center>{{ $suara_tdk_sah }}</center></h1>
                              <h3 class="card-text"><center>TIDAK SAH</center></h3>
                            </div>
                        </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                        <div class="card border-danger mb-3 " style="max-width: 20rem;">
                            <div class="card-header"><center><h1>SUARA</h1></center></div>
                            <div class="card-body text-danger">
                              <h1 class="card-title"><center>{{ $suara }}</center></h1>
                              <h3 class="card-text"><center>SEMUA</center></h3>
                            </div>
                        </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                        <div class="card border-danger mb-3 " style="max-width: 20rem;">
                            <div class="card-header"><center><h1>PESERTA</h1></center></div>
                            <div class="card-body text-danger">
                              <h1 class="card-title"><center>{{ $hadir }}</center></h1>
                              <h3 class="card-text"><center>HADIR</center></h3>
                            </div>
                        </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                        <div class="card border-danger mb-3 " style="max-width: 20rem;">
                            <div class="card-header"><center><h1>PESERTA</h1></center></div>
                            <div class="card-body text-danger">
                              <h1 class="card-title"><center>{{ $pencoblos }}</center></h1>
                              <h3 class="card-text"><center>JUMLAH</center></h3>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
&nbsp;
{{-- <div class="card">
    <h2>SELAMAT DATANG DI admin</h2>
</div> --}}

@endsection


