@extends("admin.index")
@section('content')
<h2>
    <button class="btn btn-outline-danger"  onclick="goBack()"><i class="bi bi-arrow-left-circle"></i></button>
    List Daftar Pemilih Tetap Kecamatan
</h2>

<a href="/admin/daftar-peserta-tetap/tambahdpt" style="text-decoration: none; color:white;" >
    <button class="btn btn-secondary">
        <i class="bi bi-clipboard-plus"></i>
        Tambah DPT
    </button>
</a>
<div class="row">
    <div class="col">&ensp;</div>
</div>

@foreach ($pro as $pr)
<div class="float-start">
    <a href="{{ $kec }}/{{ $pr }}" class="btn btn-outline-secondary btn-lg ms-1">{{ $pr; }}</a>
</div>
@endforeach
<script>
    function goBack() {
        window.history.back();
    }
</script>
@stop
