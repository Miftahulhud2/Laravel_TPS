@extends("admin.index")
@section("content")
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="col-md-12">
                    <a href="/datalogin">
                        <button type="button" class="btn btn-outline-danger">
                            <i class="bi bi-arrow-left-circle"> Kembali</i>
                        </button>
                    </a>
                </div>
                <center>
                    <H1>Tambah Data TPS Baru</H1>
                </center>
                <div class="row">
                    <form action="/datalogin/tambahlogin" method="POST">
                        @csrf
                        <div class="container text-center">
                            <div class="row">
                              <div class="col">

                        <div class="col-md-12">
                            <label for="">NOMOR TPS</label>
                            <input class="form-control" type="text" id="id" name="id" value="{{ $tps }}" placeholder="" aria-label="default input example" readonly>
                            <label for="">NAMA TPS</label>
                            <input class="form-control" type="text" id="namatps" name="namatps" value="TPS {{ $tps }}" placeholder="Masukan Nama TPS" aria-label="default input example " readonly>
                            <input class="form-control form-control-sm" type="text" id="slug" name="slug" value="{{ $slug }}" placeholder="slug-tps" aria-label=".form-control-sm example" readonly>

                            <label>TEMPAT TPS</label>
                            <input class="form-control" type="text" id="tmp_tps" name="tmp_tps" placeholder="Masukan Tempat TPS" aria-label="default input example" required>
                            <label>NAMA KETUA PANITIA</label>
                            <input class="form-control" type="text" id="kt_anggota" name="kt_anggota" placeholder="Masukan Nama Ketua Panita TPS" aria-label="default input example" required>

                        </div>
                              </div>
                              <div class="col">
                                <div class="col-md-12">
                                    <label>NAME for login</label>
                                    <input class="form-control" type="text" id="name" name="name" placeholder="Masukan nama" aria-label="default input example" required>
                                    <label>EMAIL</label>
                                    <input class="form-control" type="email" id="email" name="email" placeholder="Masukan email" aria-label="default input example" required >
                                    <label for="inputPassword" class="">Password</label>
                                    <input type="password" class="form-control" id="password" name="password">
                                    <div class="from-group">
                                        <input type="submit" class="btn btn-primary" value="Simpan" id="tryMe">
                                    </div>
                                </div>
                              </div>
                            </div>
                    </form>
                    </div>
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
@endsection
