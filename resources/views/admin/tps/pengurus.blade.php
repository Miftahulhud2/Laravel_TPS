@extends("admin.index")
@section('content')

@foreach ( $tps as $tp)



    <div class="row">
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

                        <div class="row">
                            <div class="col">
                                <h5>Kelompok Penyelenggara Pemungutan Suara</h5>
                                <div class="d-flex justify-content-start">
                                    @foreach ($penguruss as $pengurus)
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
                                <div class="col">
                                    <h5>Pengawas dan Saksi </h5>
                                    <div class="d-flex justify-content-start">
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





                </div>
            </div>
        </div>
    </div>
</div>


@endsection
