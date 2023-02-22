<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak Laporan Suara</title>
    <style>
        th{
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h4>RINCIAN HASIL PENGHITUNGAN PEROLEHAN SUARA DI TEMPAT PEMUNGUTAN SUARA</h4>
    <h4>DALAM {{ $judul->nama_acara }}</h4>

    <table border="1">

        <tr>
            <td style="width: 220px">
                Tempat Pemungutan Suara (TPS)
            </td>
            <td style="width: 180px">:
                {{ $tps->namatps }}
            </td>

            <td>
                Desa/Kelurahan *)
            </td>
            <td style="width: 180px">: {{ $tps->desa }}</td>
        </tr>
        <tr>
            <td>Kecamatan</td>
            <td>: {{ $tps->kecamatan }}</td>

            <td>
                Kabupaten/Kota*)
            </td>
            <td style="width: 180px">: {{ $tps->kabupaten }}</td>

        </tr>
        <tr>
            <td>Provinsi</td>
            <td style="width: 180px">: {{ $tps->provinsi }}</td>
        </tr>

    </table>



    <table border="1">
        <thead>
            <tr>
                <th style="text-align: center; height: 50px" colspan="2">NOMOR URUT DAN NAMA CALON</th>
                <th style="text-align: center; height: 50px; width:100px">SUARA SAH</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datacalon->zip($sah) as $data)
                <tr>
                    <td style="text-align: center; height: 50px; width:80px">{{ $loop->iteration }}</td>
                    <td style="text-align: center; height: 50px; width:350px">{{ $data[0]->nama }}</td>
                    <td style="text-align: center; height: 50px">{{ $data[1] }}</td>
                </tr>
            @endforeach
            <tr>
                <td style="text-align: center; height: 50px" colspan="2">JUMLAH SELURUH SUARA SAH</td>
                <td style="text-align: center; height: 50px">{{ $sumsah }}</td>
            </tr>
            <tr>
                <td style="text-align: center; height: 50px" colspan="2">JUMLAH SELURUH SUARA TIDAK SAH</td>
                <td style="text-align: center; height: 50px">{{ $sumtidaksah }}</td>
            </tr>
        </tbody>
    </table>


    <center>
        <h4>KELOMPOK PENYELENGGARA PEMUNGUTAN SUARA</h4>
    </center>
    <table border="1">
        <tr style="text-align: center">
            <td style="width: 110px; text-align: center">1.</td>
            <td style="width: 110px; text-align: center">2.</td>
            <td style="width: 110px; text-align: center">3.</td>
            <td style="width: 110px; text-align: center">4.</td>
            <td style="width: 110px; text-align: center">5.</td>
            <td style="width: 110px; text-align: center">6.</td>
            <td style="width: 110px; text-align: center">7.</td>
        </tr>
        <tr style="text-align: center">
            <td style="text-align: center">Ketua</td>
            <td style="text-align: center">Anggota</td>
            <td style="text-align: center">Anggota</td>
            <td style="text-align: center">Anggota</td>
            <td style="text-align: center">Anggota</td>
            <td style="text-align: center">Anggota</td>
            <td style="text-align: center">Anggota</td>
        </tr>
        <tr style="height: 60px;text-align:center; vertical-align: bottom;">
            @foreach ($pengurus as $p)
                <td style="text-align: center; height: 50px; vertical-align: bot;">{{ $p->nama }}</td>
            @endforeach
        </tr>
    </table>
    <center><h4>SAKSI CALON</h4></center>
    <table border="1">
        <tr style="text-align: center">
            @foreach ($saksi as $sa)
                <td style="width: 197px; text-align: center">{{ $loop->iteration }}</td>
            @endforeach
        </tr>
        <tr style="text-align: center">
            @foreach ($saksi as $sa)
                <td style="text-align: center;vertical-align: bot;">{{ $sa->status }}</td>
            @endforeach
        </tr>
        <tr style="height: 60px;text-align:center; vertical-align: bottom;">
            @foreach ($saksi as $sa)
                <td style="text-align: center; height: 50px; vertical-align: bot;">{{ $sa->nama }}</td>
            @endforeach
        </tr>

    </table>
<p>*) Coret yang tidak perlu</p>

</body>
</html>


