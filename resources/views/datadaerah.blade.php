<!doctype html>
<html lang="en">
  <head>
    <title>INDONESIA REGION</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>


  </head>
  <body>
      <div class="container">
        <form >
            @csrf
        <div class="row mb-3">
            <label class="col-md-3 col-form-label" for="provinsi">Provinsi</label>
            <div class="col-md-9">

                <select class="form-control" name="provinsi" id="provinsi" required>
                    <option>==Pilih Salah Satu==</option>
                    @foreach ($provinces as $provinsi)
                        <option value="{{ $provinsi->id }}">
                            {{ $provinsi->name }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-md-3 col-form-label" >Kabupaten / Kota</label>
            <div class="col-md-9">
                <select class="form-control" id="kabupaten" required>
                    <option>==Pilih Salah Satu==</option>

                </select>
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-md-3 col-form-label" for="kecamatan">Kecamatan</label>
            <div class="col-md-9">
                <select class="form-control" name="kecamatan" id="kecamatan" required>
                    <option>==Pilih Salah Satu==</option>
                    {{-- @foreach ($districts as $district)
                        <option>
                            {{ $district->name }}
                        </option>
                    @endforeach --}}
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-md-3 col-form-label" for="desa">Desa</label>
            <div class="col-md-9">
                <select class="form-control" name="desa" id="desa" required>
                    <option>==Pilih Salah Satu==</option>
                    {{-- @foreach ($villages as $village)
                        <option>
                            {{ $village->name }}
                        </option>
                    @endforeach --}}
                </select>
            </div>
        </form>
        </div>
    </div>
    <script>
        $(function () {
            $.ajaxSetup({
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
        });
        $(function(){
            $('#provinsi').on('change', function(){
                let id_provinsi = $('#provinsi').val();

                $.ajax({
                    type : 'POST',
                    url  : "{{route('getkabupaten')}}",
                    data : {id_provinsi:id_provinsi},
                    cache : false,

                    succes: function(msg){
                        $('#kabupaten').html(msg);
                    },
                    error: function(data){
                        console.log('error:',data)
                    },
                })
            })
            // $('#kecamatan').on('change', function(){
            //     let id_kecamatan = $('#kecamatan').val();

            //     $.ajax({
            //         type : 'POST',
            //         url  : "{{route('getkecamatan')}}",
            //         data : {id_kecamatan:id_kecamatan},
            //         cache : false,

            //         succes: function(val){

            //             $('#kecamatan').html(val);

            //         },
            //         error: function(data){
            //             console.log('error:',data)
            //         },
            //     })
            // })
            // $('#desa').on('change', function(){
            //     let id_desa = $('#desa').val();

            //     $.ajax({
            //         type : 'POST',
            //         url  : "{{route('getdesa')}}",
            //         data : {id_desa:id_desa},
            //         cache : false,

            //         succes: function(val){

            //             $('#desa').html (val);
            //         },
            //         error: function(data){
            //             console.log('error:',data)
            //         },
            //     })
            // })
        })
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.js" integrity="sha256-BTlTdQO9/fascB1drekrDVkaKd9PkwBymMlHOiG+qLI=" crossorigin="anonymous"></script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

  </body>
</html>
