@extends("admin.index")
@section('content')

<form action="/admin/daftar-peserta-tetap/tambahdpt1" method="POST">
    @csrf
    <div class="row">
        <div class="col" style="height: 550px">

            <div class="bg-secondary rounded h-100 p-4">
                <h2 style="color: white">TAMBAH DATA DAFTAR PESERTA TETAP</h2>
                <div class="form-floating">
                    <div class="input-group">
                        <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="kk"
                                name="kk">
                                @error('kk')
                                <span class="error" style="color: red">{{ $message }}</span>
                                @enderror
                            <label for="floatingInput">NOMOR KARTU KELUARGA</label>
                        </div>

                        <div class="form-floating mb-3" style="margin-left:15px">
                        <input type="text" class="form-control" id="nik"
                                name="nik">
                                @error('nik')
                                <span class="error" style="color: red">{{ $message }}</span>
                                @enderror
                            <label for="floatingInput">NOMOR INDUK KEPENDUDUKAN</label>
                        </div>
                    </div>
                    <div class="input-group">
                        <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="nama"
                                name="nama">
                                @error('nama')
                                <span class="error" style="color: red">{{ $message }}</span>
                                @enderror
                            <label for="floatingInput">NAMA LENGKAP</label>
                        </div>

                        <div class="form-floating mb-3" style="margin-left:15px">
                        <input type="text" class="form-control" id="umur"
                                name="umur">
                                @error('umur')
                                <span class="error" style="color: red">{{ $message }}</span>
                                @enderror
                            <label for="floatingInput">UMUR</label>
                        </div>
                    </div>
                    <div class="input-group">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="tmp_lahir"
                                    name="tmp_lahir">
                                @error('tmp_lahir')
                                <span class="error" style="color: red">{{ $message }}</span>
                                @enderror
                                <label for="floatingInput">TEMPAT KELAHIRAN</label>
                        </div>

                        <div class="form-floating mb-3" style="margin-left:15px">
                        <input type="date" class="form-control" id="tgl_lahir"
                                name="tgl_lahir">
                                @error('tgl_lahir')
                                <span class="error" style="color: red">{{ $message }}</span>
                                @enderror
                            <label for="floatingInput">TANGGAL LAHIR</label>
                        </div>
                    </div>
                    {{-- <div class="input-group"> --}}
                        <div class="row" style="width: 99%">
                            <div class="col-3">

                                <div class="form-floating mb-3">
                                    <select class="form-select" id="sts_kawin" name="sts_kawin" aria-label="Floating label select example">
                                        <option value="Belum Menikah">Belum Menikah</option>
                                        <option value="Sudah Menikah">Sudah Menikah</option>

                                    </select>
                                    <label for="floatingSelect">STATUS PENIKAHAN</label>
                                </div>

                            </div>

                            <div class="col-3">

                                <div class="form-floating mb-3" style="margin-left:15px">
                                    <select class="form-select" id="jns_kelamin" name="jns_kelamin" aria-label="Floating label select example">
                                        <option value="laki-laki">LAKI-LAKI</option>
                                        <option value="perempuan">PEREMPUAN</option>
                                    </select>
                                    <label for="floatingSelect">JENIS KELAMIN</label>
                                </div>

                            </div>

                            <div class="col-5">

                                <div class="form-floating mb-3" style="margin-left:15px">
                                    <select class="form-select" id="jns_dpt" name="jns_dpt" aria-label="Floating label select example">
                                        <option value="DPT">DAFTAR PESERTA TETAP (DPT)</option>
                                        <option value="DPPh">DAFTAR PESERTA PINDAHAN (DPPh)</option>
                                        <option value="DPTb">DAFTAR PESERTA TAMBAHAN (DPTb)</option>
                                    </select>
                                    <label for="floatingSelect">JENIS PESERTA</label>
                                </div>

                            </div>

                            <div class="col-1">

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" id="disabilitas" name="disabilitas">
                                    <label class="form-check-label" for="flexCheckDefault" style="color: wheat">
                                    DISABILITAS
                                    </label>
                                  </div>

                            </div>
                        </div>


                    {{-- </div> --}}

                    <div class="row g-2">
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="provinsi" name="provinsi">
                                @error('provinsi')
                                <span class="error" style="color: red">{{ $message }}</span>
                                @enderror
                                <label for="floatingInput">provinsi</label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="kabupaten" name="kabupaten">
                                @error('kabupaten')
                                <span class="error" style="color: red">{{ $message }}</span>
                                @enderror
                                <label for="floatingInput">kabupaten</label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="kecamatan" name="kecamatan">
                                @error('kecamatan')
                                <span class="error" style="color: red">{{ $message }}</span>
                                @enderror
                                <label for="floatingInput">kecamatan</label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="desa" name="desa">
                                @error('desa')
                                <span class="error" style="color: red">{{ $message }}</span>
                                @enderror
                                <label for="floatingInput">desa/kelurahan</label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="jalan" name="jalan">
                                @error('jalan')
                                <span class="error" style="color: red">{{ $message }}</span>
                                @enderror
                                <label for="floatingInput">jalan</label>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="rt" name="rt">
                                @error('rt')
                                <span class="error" style="color: red">{{ $message }}</span>
                                @enderror
                                <label for="floatingInput">rt</label>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="rw" name="rw">
                                @error('rw')
                                <span class="error" style="color: red">{{ $message }}</span>
                                @enderror
                                <label for="floatingInput">rw</label>
                            </div>
                        </div>
                    </div>



                    <div class="mt-1 float-end" >
                        <button class="btn btn-danger btn-lg"  onclick="goBack()">
                            <span class="bi bi-arrow-left-circle"> BATAL</span>
                        </button>
                        <button type="submit" class="btn btn-primary btn-lg" value="Simpan" id="tryMe">Simpan</button>


                    </div>


                </div>


            </div>
        </div>
    </div>
</form>


<script>
    function goBack() {
        window.history.back();
    }
</script>
@stop


