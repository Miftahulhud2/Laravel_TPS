@extends('admin.index')
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
                            <button type="button" class="btn btn-secondary">
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
    @if ($foto->isEmpty())
        <div class="alert alert-danger alert-block" style="margin-top: 20px">
            <strong>
                DATA BELUM DIMASUKAN!!
            </strong>
        </div>
        <div class="d-flex mt-2">
                @else
                    @foreach ($foto as $f)
                    <div class="col-3 ml-2">
                        <div class="card" style="width: 18rem;">
                            <center>
                                <img src="{{ asset('storage/'.$f->foto) }}" style="width: 250px;height:250px;">
                            </center>
                            <h6>{{ $f->isi }}</h6>
                        </div>
                    </div>
                    @endforeach
    @endif

     </div>
</div>
@stop
