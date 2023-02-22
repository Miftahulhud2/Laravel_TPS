@extends("admin.index")
@section('content')
@parent
<!-- Donut Chart -->

@foreach ( $tps as $tp)



    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                        {{ session()->forget('success') }}
                        @endif
                        @if(session('danger'))
                        <div class="alert alert-danger">{{ session('danger') }}</div>
                        {{ session()->forget('danger') }}
                    @endif


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
                        <a href="/admin/rekap/{{ $tp->slug }}/reset" class="btn btn-info" style="text-decoration: none" onclick="return confirm('Benar mau direset???')" id="tryMe">
                            RESET
                        </a>
                        <form action="/admin/rekap/{{ $tp->slug }}/hapus" method="POST" class="d-inline">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button class="btn btn-danger" onclick="return confirm('Benar mau dihapus???')" id="tryMe">
                                HAPUS
                            </button>
                        </form>

                        @endforeach

                                                    {{-- <input type="hidden" value="{{ $tp->suara_id }}">
                                                    <a href="/tps/{{ $tp->slug }}/edit">
                                                    <button class="btn btn-danger border-0 ">
                                                        EDIT DATA SUARA
                                                    </button>
                                                    </a> --}}
                        <h3>Laporan Data {{ $namatps }}</h3>
                        <h4>di lokasi
                            @foreach ($tps as $tp)
                            jl.
                            {{ $tp->jalan }}
                            desa
                            {{ $tp->desa }}
                            rt :
                            {{ $tp->rt }}
                            rw :
                            {{ $tp->rw }}
                            kecamatan :
                            {{ $tp->kecamatan }}
                            kabupaten
                            {{ $tp->kabupaten }}
                            @endforeach
                            yang dikelola/diketuai oleh Pak
                            {{ $ketua->nama }}
                        </h4>
                        @if ($tutup == 0)


                        <form action="/admin/surat/{{ $tp->slug }}">
                            @csrf
                                <div class="d-flex justify-content-end">
                                    <div class="col-2">
                                        @error('ssuara')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                        <input type="text" class="form-control" value="" placeholder="{{ $tp->jml_srt_suara }}" id="ssuara" name="ssuara">
                                    </div>
                                    <button type="submit" class="btn btn-primary" style="margin-right: 10px;float: right;" id="tryme">Jumlah Surat Suara</button>
                                </div>
                            </form>
                        @endif
                        {{-- <h4>KEHADIRAN PESERTA PEMILU</h4>
                        <p>{{ $hadir }} dari {{ $dpt }} Peserta yang telah hadir dipemilu</p> --}}
                </div>

                <div class="card-body">
                    <div class="row">

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-secondary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                                                Nama TPS</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                {{ $namatps }}
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <h1><i class="bi bi-shop-window"></i></h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @foreach ($suara as $su)
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-secondary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                                                Jumlah {{ $su->suara }}</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $su->jml_suara }}</div>
                                        </div>
                                        <div class="col-auto">
                                            @if ($su->suara == 'Suara Tidak Sah')
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
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $sah }}</div>
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
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $jumlah }}</div>
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
                                                Jumlah Daftar Pemilih Tetap</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                {{ $dpt }}
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <h1><i class="bi bi-person-check-fill"></i></h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        {{-- <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                            <div class="card border-danger mb-3 " style="max-width: 20rem;">
                            <div class="card-header"><center><h1>BUKTI</h1></center></div>
                            <div class="card-body text-danger">
                                <h1 class="card-title">

                                    <img src="{{ asset('storage/') }}" class="img-thumbnail"  alt="...">

                            </div> --}}
                        </div>


                </div>
            </div>
        </div>
    </div>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js" ></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
        @if (session('success'))
            toastr.success('{{ session('success') }}')
        @endif
    </script>
@stop
