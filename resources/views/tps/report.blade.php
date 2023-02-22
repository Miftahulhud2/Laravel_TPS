@extends("tps.tps")
@section('content')
@parent

@if ($confir == false)
    <form action="/tps/kode" method="POST">
        @csrf
        <div class="btn btn-secondary p-5" style="margin-left: 250px">
            <h2>Konfirmasi untuk Pengawas dan Saksi ditempat</h2>
            @foreach ($kode as $k)
                @if ($k->konfirmasi == 0)
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <label for="">{{ $k->status }} yang bernama {{ $k->nama }}</label>


                    <div class="input-group">
                        <input type="text" class="form-control" name="{{ $k->status }}" id="{{ $k->status }}" placeholder="{{ $k->status }}">
                    <a href="/tps/report/{{ $k->kode }}" class="btn btn-dark">kirimkode</a>
                    </div>

                @elseif ($k->kode != $k->konfirmasi)
                    <label for="">Kode Konfirmasi dari {{ $k->status }} yang bernama {{ $k->nama }} <strong style="color: red">Salah!!</strong></label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="{{ $k->status }}" id="{{ $k->status }}" placeholder="{{ $k->status }}"  required title="Harus diisi dahulu">
                        <a href="/tps/report/{{ $k->email }}" class="btn btn-dark">kirimkode</a>
                    </div>
                @endif
            @endforeach
            <input type="hidden" value="{{ $id }}" name="id">
            <button type="submit" class="btn btn-primary">submit</button>
        </div>
    </form>
@elseif ($confir == true)
    @if ($suara == 0)
        <form action="/tps/report" method="POST">
            @csrf
            <div class="d-flex flex justify-content-center">
                <div class="btn btn-secondary mx-auto mt-2" >
                    @if ($message = Session::get('error'))
                    <div class="alert alert-danger alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                    @endif
                    <input type="hidden" id="id" name="id" value="{{ $id }}">
                    <div class="row">
                        @for ($i = 1; $i < $datacalon+1 ; $i++)
                        <div class="col">

                            <center>
                                <img src="{{ asset('storage/'.$foto[$i-1]->foto) }}" style="width: 250px; height: 200px">
                            </center>
                            <input type="text" class="form-control" name="suara{{ $i }}" id="suara{{ $i }}" placeholder="Suara {{ $i }}" value="" onchange="suara1()" pattern="[0-9]+" required>


                        </div>
                        @endfor
                    </div>
                    <input type="text" class="form-control" name="suaratidaksah" id="suaratidaksah" placeholder="Suara Tidak Sah" style="margin-top:10px;" pattern="[0-9]+" required>
                    <button type="submit" class="btn btn-primary">submit</button>
                </div>
            </div>
        </form>


    @elseif ($suara != $hadir)
        <form action="/tps/report" method="POST">
            @csrf
            <div class="row">
                <div class="btn btn-secondary">
                    <p>data tidak sama</p>
                    <input type="hidden" id="id" name="id" value="{{ $id }}">
                    @for ($i = 1; $i < $datacalon+1 ; $i++)

                    <label for="floatingInput">Suara {{ $i }}</label>
                    <input type="text" class="form-control" name="suara{{ $i }}" id="suara{{ $i }}" placeholder="Suara {{ $i }}" value="" onchange="suara1()" pattern="[0-9]+" required>
                    {{-- @error('isi')
                        <p style="font-size: 13" class="text-danger">{{ $message }}</p>
                    @enderror --}}
                    @endfor

                    <label for="floatingInput">Suara Tidak Sah</label>
                    <input type="text" class="form-control" name="suaratidaksah" id="suaratidaksah" placeholder="Suara Tidak Sah" pattern="[0-9]+" required>
                    <button type="submit">submit</button>
                </div>

            </div>
        </form>
    @else


        <div class="alert alert-success alert-block">
            <strong>
                DATA TELAH DIMASUKAN!!
            </strong>


            @foreach ($tps as $tp)
            @if ($tutup == 1)

            <a href="/tps/report/cetak/{{ $tp->slug }}" class="btn btn-primary btn-sm" style="float: right">Cetak C1 TPS</a>

            <a href="/tps/report/suara/{{ $tp->slug }}" class="btn btn-primary btn-sm" style="float: right;margin-right: 20px">Cetak C1 suara</a>
            @endif

        </div>
        <div class="row" style="width: 99%">
            @if ($tp->jml_srt_rusak == 0)
            <form action="/tps/surat/{{ $tp->slug }}" method="POST">
                @csrf
                @if ($tutup == 0)

                    <div class="d-flex justify-content-end">
                        <div class="col-2">
                            <h5>
                                Data boleh Tidak diisi
                            </h5>
                        </div>


                        <div class="col-2">
                            @error('ssuara')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                            <input type="text" class="form-control" value="{{ $tp->jml_srt_rusak }}" placeholder="{{ $tp->jml_srt_rusak }}" id="ssuara" name="ssuara">
                        </div>
                        <button type="submit" class="btn btn-danger" style="margin-right: 10px;float: right;" id="tryMe">Jumlah Surat Suara Rusak</button>
                    </div>
                </form>
                @endif
                @endif
            </div>
            @endforeach
            @if ($jml_foto == null || $jml_foto < 5)


            </form>
            <form action="/tps/foto/" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" class="hidden" value="{{ $id }}" id="id" name="id">
                <div class="col-4 ml-2" style="background-color: ">
                    <h3 for="">LAPORAN FOTO</h3>
                    <img src="" alt='' class="img-preview1 img-fluid mg-2 col-sm-4">
                    <input type="text" class="form-control" name="isi" id="isi" placeholder="Masukan Diskripsi Gambar">
                    @error('isi')
                        <p style="font-size: 13" class="text-danger">{{ $message }}</p>
                    @enderror
                    <div class="d-flex justify-content-start">
                        <input type="file" class="form-control @error('foto') is-invalid @enderror" name="foto" id="foto" placeholder="Image" onchange="previewImage1()">

                        <button type="submit" class="btn btn-primary" >SIMPAN</button>
                    </div>
                </div>
            </form>
            @endif
        </div>
        @if ($l_foto =! null)
        <div class="row mt-2" style="width: 99%">
            @foreach ($bukti as $f)
            <div class="col-3 ml-2">
                <div class="card" style="width: 18rem;">
                    <figure class="img-responsive">
                        <center>
                            <p>{{ $f->isi }}</p>
                        <img src="{{ asset('storage/'.$f->foto) }}" style="width: 250px;height:250px;">
                        </center>
                    <span class="actions">
                        <form action="/foto/{{ $f->id }}" method="POST">
                            @csrf
                            @method('delete')
                            <center>
                            <button class="btn btn-warning bnt-action" type="submit" style="">Hapus</button>
                            </center>
                        </form>
                    </span>

                </figure>

                </div>
            </div>
            @endforeach

        </div>
        @endif
    @endif
@endif

<script>
function previewImage1() {
    const image1 = document.querySelector('#foto');
    const imgPreview1 = document.querySelector('.img-preview1');
    imgPreview1.style.display = 'block';
    const oFReader = new FileReader();
    oFReader.readAsDataURL(image1.files[0]);
    oFReader.onload = function(oFREvent) {
        imgPreview1.src = oFREvent.target.result;
    };
};
</script>


<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js" ></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script>
    toastr.options.progressBarColor = '#28a745';
    @if (session('success'))
        toastr.success('{{ session('success') }}')
    @endif
</script>
<script>
    function suara1(){
        var s1 = document.getElementById(suara1);
        console.log(s1)
    }
</script>
@stop
