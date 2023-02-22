@extends("tps.tps")
@section('content')

<form method="POST" action="/tps/event/{{ $pencoblos->id }}/update">
    @csrf
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">


                    <h5 class="card-title">Edit Daftar Peserta Tetap</h5>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>KK</label>
                                <input type="text" class="form-control @error('kk') is-invalid @enderror" name="kk" placeholder="Nomor Kartu Keluarga" value="{{ old('kk', $pencoblos->kk) }}">
                                @error('kk')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>NIK</label>
                                <input type="text" class="form-control @error('nik') is-invalid @enderror" name="nik" placeholder="NIK" value="{{ old('nik', $pencoblos->nik) }}">
                                @error('nik')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" placeholder="Nama Lengkap" value="{{ old('nama', $pencoblos->nama) }}">
                                    @error('nama')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                              </div>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Status Perkawinan</label>
                                <div class="input-group mb-3">
                                    <select class="form-select  @error('sts_kawin') is-invalid @enderror" name="sts_kawin" placeholder="Status perkawinan" value="{{ old('sts_kawin', $pencoblos->sts_kawin) }}">
                                        <option selected value="Menikah">Menikah</option>
                                        <option value="Belum Menikah">Belum Menikah</option>
                                    </select>
                                    @error('sts_kawin')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tempat lahir</label>
                                <input type="text" class="form-control @error('tmp_lahir') is-invalid @enderror" name="tmp_lahir" placeholder="Tempat lahir" value="{{ old('tmp_lahir', $pencoblos->tmp_lahir) }}">
                                @error('tmp_lahir')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="date" class="form-control @error('tgl_lahir') is-invalid @enderror" name="tgl_lahir" placeholder="Tanggal lahir" value="{{ old('tgl_lahir', $pencoblos->tgl_lahir) }}">
                                @error('tgl_lahir')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <div class="input-group mb-1">
                                    <select class="form-select  @error('jns_kelamin') is-invalid @enderror" name="jns_kelamin" placeholder="Jenis Kelamin" value="{{ old('jns_kelamin', $pencoblos->jns_kelamin) }}">
                                        <option selected value="laki-laki">Laki-laki</option>
                                        <option value="perempuan">Perempuan</option>
                                    </select>
                                    @error('jns_kelamin')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Umur</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control @error('umur') is-invalid @enderror" name="umur" placeholder="Umur" value="{{ old('umur', $pencoblos->umur) }}">
                                    @error('umur')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror

                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Jenis Dafta Peserta</label>
                                <div class="input-group mb-1">
                                    <select class="form-select  @error('jns_dpt') is-invalid @enderror" name="jns_dpt" placeholder="Jenis Kelamin" value="{{ old('jns_dpt', $pencoblos->jns_dpt) }}">
                                        <option selected value="DPT">DAFTAR PESERTA TETAP</option>
                                        <option value="DPPh">DAFTAR PESERTA PINDAHAN</option>
                                        <option value="DPTb">DAFTAR PESERTA TAMBAHAN</option>
                                    </select>
                                    @error('jns_dpt')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Jenis Dafta Peserta</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" id="disabilitas" name="disabilitas">
                                    <label class="form-check-label" for="flexCheckDefault" >
                                    DISABILITAS
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <input type="hidden" id="provinsi" name="provinsi" class="form-control" value="{{ $provinsi }}">
                    <input type="hidden" id="kabupaten" name="kabupaten" class="form-control" value="{{ $kabupaten }}">
                    <input type="hidden" id="kecamatan" name="kecamatan" class="form-control" value="{{ $kecamatan }}">
                    <input type="hidden" id="desa" name="desa" class="form-control" value="{{ $desa }}">
                    <input type="hidden" id="jalan" name="jalan" class="form-control" value="{{ $jalan }}">
                    <input type="hidden" id="rt" name="rt" class="form-control" value="{{ $rt }}">
                    <input type="hidden" id="rw" name="rw" class="form-control" value="{{ $rw }}">

                    <div class="d-flex justify-content-end">
                            <a href="/tps/event" style="margin-right: 3px">
                                <button type="button" class="btn btn-danger">
                                    <i class="bi bi-arrow-left-circle"> Kembali</i>
                                </button>
                            </a>

                            <input type="submit" class="btn btn-primary" value="Simpan" id="tryMe">


                    </div>







</form>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js" ></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script>
    @if (session('success'))
        toastr.success('{{ session('success') }}')
    @endif
</script>
@endsection
