@extends('admin.index')
@section('content')
<!-- Button trigger modal -->

<form action="/admin/judul" method="POST">
    @csrf
    <div class="row">
        <div class="col">
            @if ($jdl->sts_acara == 0)
                <input class="form-control" type="text" id="nama_acara" name="nama_acara" value="{{ $jdl->nama_acara }}"  aria-label="default input example">
            @else
                <input class="form-control" type="text" id="nama_acara" name="nama_acara" value="{{ $jdl->nama_acara }}"  aria-label="default input example" readonly>
            @endif
        </div>
        <div class="col">
            @if ($jdl->sts_acara == 0)
                <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">SUBMIT</button>
            </form>
            @else
                <a href="/admin/datacalon/ganti" class="btn btn-warning" onclick="return confirm('Data Semua TPS akan Terhapus???')" id="tryMe">GANTI</a>
            @endif
        </div>
    </div>


@if ($jdl->sts_acara == 0)


<button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Tambah Data Calon
  </button>

  <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 h5 class="modal-title" id="exampleModalLabel">DATA CALON BARU</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/admin/datacalon" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="row">
                            <div class="col-2">
                                <label for="">NAMA CALON</label>
                            </div>
                            <div class="col">
                                <input class="form-control" type="text" id="nama" name="nama" value="" placeholder="Masukan Nama Ketua" aria-label="default input example ">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-2">
                                <label for="">FOTO</label>
                            </div>
                            <div class="col">
                                <img src="" alt='' class="img-preview1 img-fluid mg-2 col-sm-4">
                                <input type="file" class="form-control @error('foto') is-invalid @enderror" name="foto" id="foto" placeholder="Image" onchange="previewImage1()">
                            </div>
                        </div>
                        &ensp;
                        <div class="row justify-content-md-center">
                            <div class="col-md-auto">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">BATAL</button>
                                <button type="submit" class="btn btn-primary">SIMPAN</button>
                            </div>
                        </div>
                    </div>

                    </form>

                </div>
            </div>
        </div>

@endif
        &ensp;
<div class="row">
@foreach ($calon as $ca)
    <div class="col">
        <div class="project">
            <figure class="img-responsive">
                <img src="{{ asset('storage/'.$ca->foto) }}">
                <figcaption>
                    <span class="project-details">Pasangan Nomer {{ $loop->iteration }}</span>
                    <span class="project-price"></span>
                    <span class="project-creator">{{ $ca->nama }}</span>
                </figcaption>
                @if ($jdl->sts_acara == 0)
                <span class="actions">
                    <form action="/admin/datacalon/{{ $ca->id }}" method="POST">
                        @csrf
                        @method('delete')
                        <button class="btn btn-warning bnt-action" type="submit" >Hapus</button>

                    </form>
                </span>
                @endif
            </figure>
        </div>
    </div>
@endforeach
</div>
  {{-- <div class="row g-1">



          @foreach ($calon as $ca)
          <div class="cards">


          <div class="first bg-white p-4 text-center">
             <center><h3>PASANGAN NOMER {{ $ca->id }}</h4></center>
              <img src="{{ asset('storage/'.$ca->foto) }}"  height="200" width="200"/>

              <h5>{{ $ca->nama }}</h5>
             <p class="line1">{{ $ca->foto }}</p>

          </div>

           </div>

          @endforeach
    </div> --}}

  {{-- <div class="row g-0"> --}}









    {{-- <div class="CARD" style="padding: 20px 20px 20px 20px">
        <div class="container px-4 text-center">
            <div class="row gx-5">
              <div class="col">
               <div class="p-3 border bg-light">
                <h5>NAMA CALON 1</h5>
                <input type="hidden" name="oldimage1" value="{{ $data->foto1 }}">
                        <img src="{{ asset('storage/'.$data->foto1) }}" alt='' class="img-preview1 img-fluid mg-2 col-sm-4">
                        <input type="file" class="form-control @error('foto1') is-invalid @enderror" name="foto1" id="foto1" placeholder="Image" onchange="previewImage1()">

                        <label for="">KETUA</label>
                        <input type="text" class="form-control" placeholder="NAMA CALON" name="nm_calon1" id="nm_calon1" value="{{ old('nm_calon1', $data->nm_calon1) }}">
                        <label for="">WAKIL/PENDAMPING</label>
                        <input type="text" class="form-control" placeholder="NAMA WAKIL CALON" name="nm_w_calon1" id="nm_w_calon1" value="{{ old('nm_w_calon1', $data->nm_w_calon1) }}">
               </div>
              </div>


              <div class="col">
                <div class="p-3 border bg-light">
                    <h5>NAMA CALON 2</h5>
                    <input type="hidden" name="oldimage2" value="{{ $data->foto2 }}">
                        <img src="{{ asset('storage/'.$data->foto2) }}" alt='' class="img-preview2 img-fluid mg-2 col-sm-4">
                        <input type="file" class="form-control @error('foto2') is-invalid @enderror" name="foto2" id="foto2" placeholder="Image" onchange="previewImage2()">


                        <label for="">KETUA</label>
                        <input type="text" class="form-control" placeholder="NAMA CALON" name="nm_calon2" id="nm_calon2" value="{{ old('nm_calon2', $data->nm_calon2) }}">
                        <label for="">WAKIL/PENDAMPING</label>
                        <input type="text" class="form-control" placeholder="NAMA WAKIL CALON" name="nm_w_calon2" id="nm_w_calon2" value="{{ old('nm_w_calon2', $data->nm_w_calon2) }}">
                    </div>
                </div>
                <div>
                    <input type="hidden" name="id" value="{{ $data->id }}">
                    <center>
                        <button type="submit" class="btn btn-primary" id="tryMe">Simpan</button>
                    </center>
                </div>
            </div>
          </div> --}}


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
    @if (session('success'))
        toastr.success('{{ session('success') }}')
    @endif
</script>
@endsection
