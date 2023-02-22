<html>
    <head>
        <title>C1</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
        <h4>
            SERTIFIKAT HASIL PENGHITUNGAN PEROLEHAN SUARA DI TEMPAT PEMUNGUTAN SUARA DALAM
        </h4>
        <h4>
            {{ $judul }}
        </h4>
        <table border="1">
            @foreach ($tpss as $tp)
            <tr>
                <td style="width: 220px">
                    Tempat Pemungutan Suara (TPS)
                </td>
                <td style="width: 180px">:
                    {{ $tp->namatps }}
                </td>

                <td>
                    Desa/Kelurahan *)
                </td>
                <td style="width: 180px">: {{ $tp->desa }}</td>
            </tr>
            <tr>
                <td>Kecamatan</td>
                <td>: {{ $tp->kecamatan }}</td>

                <td>
                    Kabupaten/Kota*)
                </td>
                <td style="width: 180px">: {{ $tp->kabupaten }}</td>

            </tr>
            <tr>
                <td>Provinsi</td>
                <td style="width: 180px">: {{ $tp->provinsi }}</td>
            </tr>
            @endforeach
        </table>
        <h4>
            I. DATA PEMILIH DAN PENGGUNAAN HAK PILIH
        </h4>
        <table border="1">
            <thead>
                <tr style="height: 50px">
                    <th style="text-align: center">NO</th>
                    <th style="text-align: center">URAIAN</th>
                    <th style="text-align: center">LAKI-LAKI</th>
                    <th style="text-align: center">PEREMPUAN</th>
                    <th style="text-align: center">JUMLAH</th>
                </tr>
                <tr style="color: blue; text-align:center;">
                    <td style="text-align: center">1</td>
                    <td style="text-align: center">2</td>
                    <td style="text-align: center">3</td>
                    <td style="text-align: center">4</td>
                    <td style="text-align: center">5</td>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td rowspan="5"  style="vertical-align: Top;">A</td>
                    <td colspan="4" style="height: 40px">Data Pemilih</td>

                </tr>
                <tr>
                    <td style="height: 40px">1. Pemilih terdaftar dalam Daftar Pemilih Tetap (DPT)</td>
                    <td style="text-align: center">{{ $dpt_lk }}</td>
                    <td style="text-align: center">{{ $dpt_pr }}</td>
                    <td style="text-align: center">{{ $dpt_jum }}</td>
                </tr>

                <tr>
                    <td style="height: 40px">2. Pemilih terdaftar dalam Daftar Pemilih Pindahan (DPPh)</td>
                    <td style="text-align: center">{{ $dpph_lk }}</td>
                    <td style="text-align: center">{{ $dpph_pr }}</td>
                    <td style="text-align: center">{{ $dpph_jum }}</td>
                </tr>
                <tr>
                    <td style="height: 50px; width:500px;">3. Pemilih terdaftar dalam Daftar Pemilih Tambahan (DPTb)/pengguna KTP atau identitas kependudukan lainnya</td>
                    <td style="text-align: center">{{ $dptb2_lk }}</td>
                    <td style="text-align: center">{{ $dptb2_pr }}</td>
                    <td style="text-align: center">{{ $dptb2_jum }}</td>
                </tr>
                <tr>
                    <td style="height: 40px">4. Jumlah Pemilih (1 + 2 + 3 )</td>
                    <td style="text-align: center">{{ $dpt_jum_lk }}</td>
                    <td style="text-align: center">{{ $dpt_jum_pr }}</td>
                    <td style="text-align: center">{{ $dpt_jum_s }}</td>
                </tr>
                <tr>
                    <td rowspan="5" style="vertical-align: Top;">B</td>
                    <td colspan="4" style="height: 40px">Pengguna Hak Pilih</td>
                </tr>
                <tr>
                    <td style="height: 40px">1. Pengguna hak pilih dalam Daftar Pemilih Tetap(DPT)</td>
                    <td style="text-align: center">{{ $hadirdpt_lk }}</td>
                    <td style="text-align: center">{{ $hadirdpt_pr }}</td>
                    <td style="text-align: center">{{ $hadirdpt_jum }}</td>
                </tr>

                <tr>
                    <td style="height: 40px">2. Pengguna hak pilih dalam Daftar Pemilih Pindahan(DPPh)</td>
                    <td style="text-align: center">{{ $hadirdpph_lk }}</td>
                    <td style="text-align: center">{{ $hadirdpph_pr }}</td>
                    <td style="text-align: center">{{ $hadirdpph_jum }}</td>
                </tr>
                <tr>
                    <td style="height: 40px">3. Pengguna hak pilih dalam Daftar Pemilih Tambahan-2 (DPTb-2)/pengguna KTP atau identitas kepedudukan lainnya</td>
                    <td style="text-align: center">{{ $hadirdptb2_lk }}</td>
                    <td style="text-align: center">{{ $hadirdptb2_pr }}</td>
                    <td style="text-align: center">{{ $hadirdptb2_jum }}</td>
                </tr>
                <tr>
                    <td style="height: 40px">4 . Jumlah Seluruh Pengguna Hak Pilih (1 + 2 + 3 )</td>
                    <td style="text-align: center">{{ $jml_hadirin_lk }}</td>
                    <td style="text-align: center">{{ $jml_hadirin_pr }}</td>
                    <td style="text-align: center">{{ $jml_hadirin_jum }}</td>
                </tr>
            </tbody>
        </table>
        <h4>II. DATA PENGGUNAAN SURAT SUARA</h4>
        <table border="1" >
            <tr style="height: 50px">
                <th style="text-align: center">NO</th>
                <th style="text-align: center; width: 700px">URAIAN</th>
                <th style="text-align: center">JUMLAH</th>
            </tr>
            <tr style="color: blue; text-align:center">
                <td style="text-align: center">1</td>
                <td style="text-align: center">2</td>
                <td style="text-align: center">3</td>
            </tr>
            <tr>
                <td style="text-align: center">1</td>
                <td style="height: 40px">Jumlah surat suara yang diterima termasuk cadangan 2,5% (2 + 3 + 4)</td>
                <td style="text-align: center">{{ $jml_srt_suara }}</td>
            </tr>
            <tr>
                <td style="text-align: center">2</td>
                <td style="height: 40px">Jumlah surat suara dikembalikan oleh pemilih karena rusak/keliru coblos</td>
                <td style="text-align: center">{{ $jml_srt_rusak }}</td>
            </tr>
            <tr>
                <td style="text-align: center">3</td>
                <td style="height: 40px">Jumlah surat suara yang tidak digunakan</td>
                <td style="text-align: center">{{ $jml_srt_tdk_dgnk }}</td>
            </tr>
            <tr>
                <td style="text-align: center">4</td>
                <td style="height: 40px">Jumlah surat suara yang digunakan</td>
                <td style="text-align: center">{{ $jml_hadirin_jum }}</td>
            </tr>
        </table>
        <h4>III. DATA SUARA SAH DAN TIDAK SAH</h4>
        <table border="1">
            <tr style="height: 50px">
                <th style="text-align: center">NO</th>
                <th style="width: 700px; text-align: center">URAIAN</th>
                <th style="text-align: center">JUMLAH</th>
            </tr>
            <tr style="color: blue; text-align:center">
                <td style="text-align: center">1</td>
                <td style="text-align: center">2</td>
                <td style="text-align: center">3</td>
            </tr>
            <tr>
                <td style="text-align: center">1</td>
                <td style="height: 40px">Jumlah Suara Sah Seluruh Calon</td>
                <td style="text-align: center">{{ $sah }}</td>
            </tr>
            <tr>
                <td style="text-align: center">2</td>
                <td style="height: 40px">Jumlah Suara Tidak Sah</td>
                <td style="text-align: center">{{ $tidaksah }}</td>
            </tr>
            <tr>
                <td style="text-align: center">3</td>
                <td style="height: 40px">Jumlah Suara Sah dan Tidak Sah (1 + 2)</td>
                <td style="text-align: center">{{ $jum_suara }}</td>
            </tr>
        </table>
        <h4>IV. DATA PEMILIH DISABILITAS/PENYANDANG CACAT</h4>
        <table border="1">
            <tr style="height: 50px">
                <th style="text-align: center">NO</th>
                <th style="width: 500px; text-align: center;">URAIAN</th>
                <th style="text-align: center">LAKI-LAKI</th>
                <th style="text-align: center">PEREMPUAN</th>
                <th style="text-align: center">JUMLAH</th>
            </tr>
            <tr style="color: blue; text-align:center;">
                <td style="text-align: center">1</td>
                <td style="text-align: center">2</td>
                <td style="text-align: center">3</td>
                <td style="text-align: center">4</td>
                <td style="text-align: center">5</td>
            </tr>
            <tr>
                <td style="text-align: center">1</td>
                <td style="height: 40px">Jumlah Pemilih disabilitas/penyandang cacat</td>
                <td style="text-align: center">{{ $disabilitaslk }}</td>
                <td style="text-align: center">{{ $disabilitaspr }}</td>
                <td style="text-align: center">{{ $disabilitasjum }}</td>
            </tr>
            <tr>
                <td style="text-align: center">2</td>
                <td style="height: 40px">Jumlah Pemilih disabilitas/penyandang cacat yang menggunakan hak pilih</td>
                <td style="text-align: center">{{ $h_disabilitaslk }}</td>
                <td style="text-align: center">{{ $h_disabilitaspr }}</td>
                <td style="text-align: center">{{ $h_disabilitasjum }}</td>
            </tr>
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
