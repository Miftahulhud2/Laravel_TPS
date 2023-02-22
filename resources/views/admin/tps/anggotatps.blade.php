@extends('admin.index')
@section('content')


<br class="container">

<div class="row">




    <h4>ANGGOTA TPS</h4>
    <div class="col-2">
      <label for="fname">NAMA KETUA</label>
    </div>
    <div class="input-group col">
        <input class="form-control" type="text" id="namatps" name="namatps" value="" placeholder="Masukan Nama Ketua Anggota" aria-label="default input example ">
        <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">

    </div>
</div>
</br>

<div class="row">
    <div class="col-2">
        <label for="">NAMA ANGGOTA</label>
    </div>
    <div class="input-group col">
        <input class="form-control" type="text" id="namatps" name="namatps" value="" placeholder="Masukan Nama Anggota" aria-label="default input example ">
        <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">

    </div>
</div>
<div class="row">
    <div class="col-2">
        <label for=""></label>
    </div>
    <div class="input-group col">
        <input class="form-control" type="text" id="namatps" name="namatps" value="" placeholder="Masukan Nama Anggota" aria-label="default input example ">
        <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">

    </div>
</div>
<div class="row">
    <div class="col-2">
        <label for=""></label>
    </div>
    <div class="input-group col">
        <input class="form-control" type="text" id="namatps" name="namatps" value="" placeholder="Masukan Nama Anggota" aria-label="default input example ">
        <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">

    </div>
</div>
<div class="row">
    <div class="col-2">
        <label for=""></label>
    </div>
    <div class="input-group col">
        <input class="form-control" type="text" id="namatps" name="namatps" value="" placeholder="Masukan Nama Anggota" aria-label="default input example ">
        <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">

    </div>
</div>
<div class="row">
    <div class="col-2">
        <label for=""></label>
    </div>
    <div class="input-group col">
        <input class="form-control" type="text" id="namatps" name="namatps" value="" placeholder="Masukan Nama Anggota" aria-label="default input example ">
        <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">

    </div>
</div>

</br>
<div class="row">
<h4>PENGAWAS DAN SAKSI</h4>
<div class="row">
    <div class="col-2">
        <label for="">PENGAWAS</label>
    </div>
    <div class="col">
        <div class="form-floating">
            <input type="text" class="form-control" placeholder="" id="pengawas" aria-label="Server">
            <label for="pengawas">NAMA PENGAWAS</label>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-2">
        <label for="">SAKSI</label>
    </div>
    <div class="col">
        <div class="form-floating">
            <input type="text" class="form-control" placeholder="" id="saksi" aria-label="Server">
            <label for="saksi">NAMA SAKSI</label>
        </div>
    </div>
    <div class="col">
        <div class="form-floating">
            <input type="text" class="form-control" placeholder="" id="email" aria-label="Server">
            <label for="email">EMAIL</label>
        </div>
    </div>


</div>

&ensp;
</div>
<div class="">
    <a href="/admin/tps/anggotatps">
        <button class="btn btn-secondary float-right">
        BERIKUTNYA
        <i class="bi bi-arrow-right"></i>
        </button>
    </a>
    &ensp;
    <a href="/admin/tps/tambahtps">
        <button class="btn btn-secondary float-right">
            <i class="bi bi-arrow-left"></i>
        SEBELUMNYA
        </button>
    </a>
</div>
</div>


</br>



@endsection
