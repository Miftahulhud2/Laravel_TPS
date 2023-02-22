@extends('admin.index')
@section('content')

<div class="row">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data TPS</h1>
        <a href="/admin/tps/tambahtps">
            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                TAMBAH TPS
              </button>
        </a>
    </div>
    @if(session('danger'))
        <div class="alert alert-danger">{{ session('danger') }}</div>
        {{ session()->forget('danger') }}
    @endif
    </div>
    <div class="card-group">
        @foreach ($tpss as $tps)

            <div class="col-sm-3">
                <a href="/admin/tps/{{ $tps->slug }}" style="text-decoration: none;">
                    <div class="cards">
                        <div class="card text-bg-secondary mb-3" style="max-width: 18rem;">
                            <div class="card-body">
                            <h1>{{ $tps->namatps }}</h1>
                            <h5 class="card-title">{{ $tps->provinsi }},{{ $tps->kabupaten }} {{ $tps->kecamatan }} {{ $tps->desa }},RT{{ $tps->rt }},RW{{ $tps->rw }}</h5>

                            </div>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach

    </div>
    <div class="d-flex justify-content-center">
        {{ $tpss->links() }}
    </div>
</div>

{{-- <a style="" >
    <div class="col-md-3">
        <div class="card">
            <div class="card text-bg-secondary mb-3" style="max-width: 18rem;">
                <h2>tps baru</h2>
                <i class="bi bi-plus-square"></i>
            </div>
        </div>
    </div>
    </a> --}}
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js" ></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
        @if (session('success'))
            toastr.success('{{ session('success') }}')
        @endif
    </script>
@endsection
