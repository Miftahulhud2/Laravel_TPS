@extends("admin.index")
@section("content")
<table class="table table-hover">
    <thead>
      <tr>
        <th>NO</th>
        <th>PROVINSI</th>
        <th>KABUPATEN</th>
        <th>KECAMATAN</th>
        <th>DESA</th>
        {{-- <th>TEMPAT TPS</th> --}}
        <th>LAPORAN DATA</th>

      </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $user->provinsi }}</td>
            <td>{{ $user->kabupaten }}</td>
            <td>{{ $user->kecamatan }}</td>
            <td>{{ $user->desa }}</td>
            {{-- <td>jalan {{ $user->jalan }} {{ $user->desa }} Rt:{{ $user->rt }} Rw:{{ $user->rw }},{{ $user->kecamatan }} {{ $user->kabupaten }} {{ $user->provinsi }}</td> --}}
            <td>
                    <a href="/admin/rekap/{{ $user->slug }}/cetak" class="badge bg-success border-0" style="text-decoration: none">
                        REKAP DATA SUARA
                    </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{-- <a href="/admin/tps/tambahtps">
<button class="btn btn-primary">
    <strong class="bi bi-plus-circle">TAMBAH</strong>
</button>
</a> --}}
<div class="d-flex justify-content-center">
    {{ $users->links() }}
</div>




<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js" ></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script>
    @if (session('success'))
        toastr.success('{{ session('success') }}')
    @endif
</script>
@endsection
