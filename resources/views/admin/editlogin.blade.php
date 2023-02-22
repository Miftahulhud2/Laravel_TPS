@extends("admin.index")
@section("content")
<form id="wizard-form" action="/admin/tps/tambahtps" method="POST" enctype="multipart/form-data">
    @csrf
    <fieldset id="step1">
        <!-- form fields here -->
        <legend> AKUN TPS</legend>
        <div class="card">
            @foreach ($tps as $t)
            <input type="hidden" value="{{ $t->id }}" id="id" name="id">
            <table border="0" width="70%" cellspacing="7">
                <tr height="70px">
                    <td style="width: 200px; height: 10px;" cellspacing="7">
                        <div class="tulisan" style="margin-left: 10px">
                            NAMA
                        </div>
                    </td>
                    <td class="tulisan">
                        :
                    </td>
                    <td colspan="5" style="margin: 50px">
                        <input type="text" class="form-control" id="namatps"
                        name="namatps" placeholder="NAMA TPS" value="{{ $t->namatps }}">
                    </td>
                </tr>
                <tr height="70px">
                    <td style="width: 200px;">
                        <div class="tulisan" style="margin-left: 10px">
                            EMAIL
                        </div>
                    </td>
                    <td class="tulisan">
                        :
                    </td>
                    @foreach ($user as $u)

                    <td colspan="5">
                        <input type="email" class="form-control" id="emailtps"
                            name="emailtps" value="{{ $u->email }}" >
                        </td>
                    @endforeach
                </tr>
                <tr height="70px">
                    <td style="width: 200px;">
                        <div class="tulisan" style="margin-left: 10px">
                            PASSWORD
                        </div>
                    </td>
                    <td class="tulisan">
                        :
                    </td>
                    <td colspan="5">
                        <input type="password" class="form-control" id="password"
                        name="password">
                    </td>
                </tr>
                <tr height="50px">
                    <td style="width: 200px;">
                        <div class="tulisan" style="margin-left: 10px">
                            ALAMAT
                        </div>
                    </td>
                    <td class="tulisan">
                        :
                    </td>
                    <td style="width: 350px">
                        <input type="text" class="form-control" id="provinsi"
                        name="provinsi" placeholder="provinsi" value="{{ $t->provinsi }}">
                    </td>
                    <td colspan="4">
                        <input type="text" class="form-control" id="kabupaten"
                        name="kabupaten" placeholder="kabupaten" value="{{ $t->kabupaten }}">
                    </td>
                </tr>
                <tr height="50px">
                    <td></td>
                    <td></td>
                    <td>
                        <input type="text" class="form-control" id="kecamatan"
                        name="kecamatan" placeholder="kecamatan" value="{{ $t->kecamatan }}">
                    </td>
                    <td colspan="4">
                        <input type="text" class="form-control" id="desa"
                        name="desa" placeholder="desa" value="{{ $t->desa }}">
                    </td>
                </tr>
                <tr height="50px">
                    <td></td>
                    <td></td>
                    <td>
                        <input type="text" class="form-control" id="jalan"
                            name="jalan" placeholder="jalan" value="{{ $t->jalan }}">
                    </td>
                    <td style="width: 100px" colspan="1">
                        <input type="text" class="form-control" id="rt"
                            name="rt" placeholder="rt" value="{{ $t->rt }}">
                    </td>
                    <td style="width: 100px">
                        <input type="text" class="form-control" id="rw"
                        name="rw" placeholder="rw" value="{{ $t->rw }}">
                    </td>
                    <td>

                    </td>
                </tr>

            </table>
            @endforeach

            <div class="row">
                <div class="d-flex justify-content-start">
                    <button type="button" id="next-step1">Next</button>
                </div>
            </div>
        </div>


    </fieldset>
    <fieldset id="step2" style="display:none">
        <legend>PETUGAS TPS</legend>
        <!-- form fields here -->
        <div class="card">
            @foreach ($pengurus as $pp)


            <table border="0" width="70%">
                <tr height="70px">
                    <td style="width: 200px;">
                        <div class="tulisan" style="margin-left: 10px">
                            KETUA PANITIA
                        </div>
                    </td>
                    <td>
                        <div class="tulisan" style="margin-left: 10px">
                        :
                        </div>
                    </td>
                    <td>
                        <input type="text" class="form-control" id="ketua"
                        name="ketua" placeholder="ketua">
                    </td>
                    <td style="width: 250px">
                        <input class="form-control" type="file" id="ft_ketua" name="ft_ketua">
                    </td>
                </tr>
                <tr height="49px">
                    <td style="width: 200px;">
                        <div class="tulisan" style="margin-left: 10px">
                            ANGGOTA
                        </div>
                    </td>
                    <td>
                        <div class="tulisan" style="margin-left: 10px">
                        :
                        </div>
                    </td>
                    <td>
                        <input type="text" class="form-control" id="anggota1"
                        name="anggota1" placeholder="Anggota 1">
                    </td>
                    <td style="width: 250px">
                        <input class="form-control" type="file" id="ft_anggota1" name="ft_anggota1">
                    </td>
                </tr>
                <tr height="49px">
                    <td style="width: 200px;">
                        <div class="tulisan" style="margin-left: 10px">

                        </div>
                    </td>
                    <td>
                        <div class="tulisan" style="margin-left: 10px">

                        </div>
                    </td>
                    <td>
                        <input type="text" class="form-control" id="anggota2"
                        name="anggota2" placeholder="Anggota 2">
                    </td>
                    <td style="width: 250px">
                        <input class="form-control" type="file" id="ft_anggota2" name="ft_anggota2">
                    </td>
                </tr>
                <tr height="49px">
                    <td style="width: 200px;">
                        <div class="tulisan" style="margin-left: 10px">

                        </div>
                    </td>
                    <td>
                        <div class="tulisan" style="margin-left: 10px">

                        </div>
                    </td>
                    <td>
                        <input type="text" class="form-control" id="anggota3"
                        name="anggota3" placeholder="Anggota 3">
                    </td>
                    <td style="width: 250px">
                        <input class="form-control" type="file" id="ft_anggota3" name="ft_anggota3">
                    </td>
                </tr>
                <tr height="49px">
                    <td style="width: 200px;">
                        <div class="tulisan" style="margin-left: 10px">

                        </div>
                    </td>
                    <td>
                        <div class="tulisan" style="margin-left: 10px">

                        </div>
                    </td>
                    <td>
                        <input type="text" class="form-control" id="anggota4"
                        name="anggota4" placeholder="Anggota 4">
                    </td>
                    <td style="width: 250px">
                        <input class="form-control" type="file" id="ft_anggota4" name="ft_anggota4">
                    </td>
                </tr>
                <tr height="49px">
                    <td style="width: 200px;">
                        <div class="tulisan" style="margin-left: 10px">

                        </div>
                    </td>
                    <td>
                        <div class="tulisan" style="margin-left: 10px">

                        </div>
                    </td>
                    <td>
                        <input type="text" class="form-control" id="anggota5"
                        name="anggota5" placeholder="Anggota 5">
                    </td>
                    <td style="width: 250px">
                        <input class="form-control" type="file" id="ft_anggota5" name="ft_anggota5">
                    </td>
                </tr>
                <tr height="49px">
                    <td style="width: 200px;">
                        <div class="tulisan" style="margin-left: 10px">

                        </div>
                    </td>
                    <td>
                        <div class="tulisan" style="margin-left: 10px">

                        </div>
                    </td>
                    <td>
                        <input type="text" class="form-control" id="anggota6"
                        name="anggota6" placeholder="Anggota 6">
                    </td>
                    <td style="width: 250px">
                        <input class="form-control" type="file" id="ft_anggota6" name="ft_anggota6">
                    </td>
                </tr>
            </table>

            @endforeach


            <div class="d-flex justify-content-start">

                <button type="button" id="prev-step2">Prev</button>

                <button type="button" id="next-step2">Next</button>
            </div>
        </div>
    </fieldset>
    <fieldset id="step3" style="display:none">
        <legend>PENGAWAS DAN SAKSI</legend>
        <!-- form fields here -->
        <div class="card">
            <div class="input-group">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="pengawas"
                        name="pengawas">
                    <label for="floatingInput">Pengawas</label>

                </div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="emailpengawas"
                        name="emailpengawas">
                    <label for="floatingInput">Email address Pengawas</label>

                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" type="file" id="ft_pengawas" name="ft_pengawas">

                </div>
            </div>
        </div>

        @for ($i = 0; $i < $datacalon; $i++)
        <div class="input-group">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="namasaksi{{ $i+1 }}"
                    name="namasaksi{{ $i+1 }}">
                <label for="floatingInput">Saksi {{ $i+1 }}</label>

            </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="emailsaksi{{ $i+1 }}"
                    name="emailsaksi{{ $i+1 }}">
                <label for="floatingInput">Email address</label>

            </div>
            <div class="form-floating mb-3">
                <input class="form-control" type="file" id="ft_saksi{{ $i }}" name="ft_saksi{{ $i }}">

            </div>
        </div>


        @endfor


        <button type="button" id="prev-step3">Prev</button>
        <button type="submit">Submit</button>
    </fieldset>
</form>

<script>
    document.getElementById('next-step1').addEventListener('click', function() {
        document.getElementById('step1').style.display = 'none';
        document.getElementById('step2').style.display = 'block';
    });
    document.getElementById('prev-step2').addEventListener('click', function() {
        document.getElementById('step2').style.display = 'none';
        document.getElementById('step1').style.display = 'block';
    });
    document.getElementById('next-step2').addEventListener('click', function() {
        document.getElementById('step2').style.display = 'none';
        document.getElementById('step3').style.display = 'block';
    });
    document.getElementById('prev-step3').addEventListener('click', function() {
        document.getElementById('step3').style.display = 'none';
        document.getElementById('step2').style.display = 'block';
    });
</script>


<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js" ></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script>
    @if (session('success'))
        toastr.success('{{ session('success') }}')
    @endif
</script>
@endsection
