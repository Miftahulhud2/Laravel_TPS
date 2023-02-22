<html>
    <head>
        <title>C1</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
        <h4>
            ALAT BANTU REKAPITULASI HASIL PERHITUNGAN SUARA DARI SETIAP TPS DALAM WILAYAH DESA/KELURAHAN DI TINGKAT KECAMATAN
        </h4>
        <h4>
            DALAM {{ $judul->nama_acara }}
        </h4>
        <table border="1">
            {{-- @foreach ($tpss as $tp) --}}
            <tr>
                <td>
                    Kelurahan/Desa
                </td>
                <td style="width: 180px">: {{ $daerah[3] }}</td>
            </tr>
            <tr>
                <td>Kecamatan</td>
                <td>: {{ $daerah[2] }}</td>
            </tr>
            <tr>
                <td>
                    Kabupaten/Kota
                </td>
                <td style="width: 180px">: {{ $daerah[1] }}</td>
            </tr>
            <tr>
                <td>Provinsi</td>
                <td style="width: 180px">: {{ $daerah[0] }}</td>
            </tr>
            {{-- @endforeach --}}
        </table>
        <h2></h2>

        <table border="1">
            <thead>
                <tr style="height: 50px">
                    <th style="text-align: center">NO.</th>
                    <th style="text-align: center" colspan="2">URAIAN</th>
                    <th style="text-align: center" colspan="{{ $no }}">RINCIAN</th>

                </tr>
                <tr>
                    <td style="text-align: center">A.</td>
                    <td style="text-align: center" colspan="2">DATA PEMILIH DAN PENGGUNAAN HAK PILIH</td>
                    @foreach ($datatps as $tps)
                        <td style="text-align: center;width:50px">{{ $tps->namatps }}</td>
                    @endforeach
                    <td style="text-align: center;width:50px">JUMLAH AKHIR</td>

                </tr>
                <tr style="color: blue; text-align:center;">
                    @for ($i = 1; $i < $nomor+2; $i++)
                        <td style="text-align: center">{{ $i }}</td>
                    @endfor
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td rowspan="16"  style="vertical-align: Top;text-align: center;">A.1</td>
                    <td colspan="2" style="height: 40px">DATA PEMILIH</td>

                </tr>
                <tr>
                    <td style="height: 40px" rowspan="3">1. Pemilih dalam DPT (Model A3-KWK)</td>
                    <td style="text-align: center">LK</td>
                    @foreach ($dpts_lk as $dpt)
                        <td style="text-align: center">{{ $dpt }}</td>
                    @endforeach

                </tr>
                <tr>
                    <td style="text-align: center">PR</td>
                    @foreach ($dpts_pr as $dpt)
                        <td style="text-align: center">{{ $dpt }}</td>
                    @endforeach
                </tr>
                <tr>
                    <td style="text-align: center">JUM</td>
                    @foreach ($dpts as $dpt)
                        <td style="text-align: center">{{ $dpt }}</td>
                    @endforeach
                </tr>
                <tr>
                    <td style="height: 40px" rowspan="4">2. Pemilih dalam DPPh (Model A3-KWK)</td>
                </tr>
                <tr>
                    <td style="text-align: center">LK</td>
                    @foreach ($dpph_lk as $dpt)
                        <td style="text-align: center">{{ $dpt }}</td>
                    @endforeach
                </tr>
                <tr>
                    <td style="text-align: center">PR</td>
                    @foreach ($dpph_pr as $dpt)
                        <td style="text-align: center">{{ $dpt }}</td>
                    @endforeach
                </tr>
                <tr>
                    <td style="text-align: center">JUM</td>
                    @foreach ($dpphs as $dpt)
                        <td style="text-align: center">{{ $dpt }}</td>
                    @endforeach
                </tr>
                <tr>
                    <td style="height: 40px" rowspan="4">3. Pemilih dalam DPTb/KTP-el/Surat Keterangan (Model A3-KWK)</td>
                </tr>
                <tr>
                    <td style="text-align: center">LK</td>
                    @foreach ($dptb_lk as $dpt)
                        <td style="text-align: center">{{ $dpt }}</td>
                    @endforeach
                </tr>
                <tr>
                    <td style="text-align: center">PR</td>
                    @foreach ($dptb_pr as $dpt)
                        <td style="text-align: center">{{ $dpt }}</td>
                    @endforeach
                </tr>
                <tr>
                    <td style="text-align: center">JUM</td>
                    @foreach ($dptb_s as $dpt)
                        <td style="text-align: center">{{ $dpt }}</td>
                    @endforeach
                </tr>
                <tr>
                    <td style="height: 40px" rowspan="4">4. Jumlah Pemilih (1 + 2 + 3 )</td>
                </tr>
                <tr>
                    <td style="text-align: center">LK</td>
                    @foreach ($pencoblos_lk as $dpt)
                        <td style="text-align: center">{{ $dpt }}</td>
                    @endforeach
                </tr>
                <tr>
                    <td style="text-align: center">PR</td>
                    @foreach ($pencoblos_pr as $dpt)
                        <td style="text-align: center">{{ $dpt }}</td>
                    @endforeach
                </tr>
                <tr>
                    <td style="text-align: center">JUM</td>
                    @foreach ($pencoblos_s as $dpt)
                        <td style="text-align: center">{{ $dpt }}</td>
                    @endforeach
                </tr>
                <tr>
                    <td style="text-align: center;vertical-align:top;" rowspan="17">A.2</td>
                    <td colspan="2">PENGGUNA HAK PILIH</td>
                </tr>
                <tr>
                    <td  rowspan="4">1. Pengguna hak pilih dalam DPT</td>
                </tr>
                <tr>
                    <td style="text-align: center">LK</td>
                    @foreach ($hadir_dpt_lk as $dpt)
                        <td style="text-align: center">{{ $dpt }}</td>
                    @endforeach
                </tr>
                <tr>
                    <td style="text-align: center">PR</td>
                    @foreach ($hadir_dpt_pr as $dpt)
                        <td style="text-align: center">{{ $dpt }}</td>
                    @endforeach
                </tr>
                <tr>
                    <td style="text-align: center">JUM</td>
                    @foreach ($hadir_dpt_jum as $dpt)
                        <td style="text-align: center">{{ $dpt }}</td>
                    @endforeach
                </tr>
                <tr>
                    <td  rowspan="4">2. Pengguna hak pilih dalam DPPh</td>
                </tr>
                <tr>
                    <td style="text-align: center">LK</td>
                    @foreach ($hadir_dpph_lk as $dpt)
                        <td style="text-align: center">{{ $dpt }}</td>
                    @endforeach
                </tr>
                <tr>
                    <td style="text-align: center">PR</td>
                    @foreach ($hadir_dpph_pr as $dpt)
                        <td style="text-align: center">{{ $dpt }}</td>
                    @endforeach
                </tr>
                <tr>
                    <td style="text-align: center">JUM</td>
                    @foreach ($hadir_dpph_jum as $dpt)
                        <td style="text-align: center">{{ $dpt }}</td>
                    @endforeach
                </tr>
                <tr>
                    <td  rowspan="4">3. Pengguna hak pilih dalam
                        DPTb/pengguna KTP-el/
                        Surat Keterangan</td>
                </tr>
                <tr>
                    <td style="text-align: center">LK</td>
                    @foreach ($hadir_dptb_lk as $dpt)
                        <td style="text-align: center">{{ $dpt }}</td>
                    @endforeach
                </tr>
                <tr>
                    <td style="text-align: center">PR</td>
                    @foreach ($hadir_dptb_pr as $dpt)
                        <td style="text-align: center">{{ $dpt }}</td>
                    @endforeach
                </tr>
                <tr>
                    <td style="text-align: center">JUM</td>
                    @foreach ($hadir_dptb_jum as $dpt)
                        <td style="text-align: center">{{ $dpt }}</td>
                    @endforeach
                </tr>
                <tr>
                    <td rowspan="4">4. Jumlah seluruh pengguna Hak Pilih (1+2+3)</td>
                </tr>
                <tr>
                    <td style="text-align: center">LK</td>
                    @foreach ($hadir_s_lk as $dpt)
                        <td style="text-align: center">{{ $dpt }}</td>
                    @endforeach
                </tr>
                <tr>
                    <td style="text-align: center">PR</td>
                    @foreach ($hadir_s_pr as $dpt)
                        <td style="text-align: center">{{ $dpt }}</td>
                    @endforeach
                </tr>
                <tr>
                    <td style="text-align: center">JUM</td>
                    @foreach ($hadir_s_jum as $dpt)
                        <td style="text-align: center">{{ $dpt }}</td>
                    @endforeach
                    <td style="text-align: center">{{ $hadir_s_jums }}</td>
                </tr>
                <tr>
                    <td style="text-align: center;vertical-align:top;">B.</td>
                    <td colspan="2">DATA PEMILIH DISABILITAS/PENYANDANG CACAT</td>
                </tr>
                <tr>
                    <td rowspan="4" style="vertical-align: center; text-align:center;">1</td>
                    <td rowspan="4">Pemilih disabilitas/penyandang cacat</td>
                </tr>
                <tr>
                    <td style="text-align: center">LK</td>
                    @foreach ($disabilitas_lk as $dpt)
                        <td style="text-align: center">{{ $dpt }}</td>
                    @endforeach
                </tr>
                <tr>
                    <td style="text-align: center">PR</td>
                    @foreach ($disabilitas_pr as $dpt)
                        <td style="text-align: center">{{ $dpt }}</td>
                    @endforeach
                </tr>
                <tr>
                    <td style="text-align: center">JUM</td>
                    @foreach ($disabilitas_jum as $dpt)
                        <td style="text-align: center">{{ $dpt }}</td>
                    @endforeach
                </tr>
                <tr>
                    <td rowspan="4" style="vertical-align: center; text-align:center;">2</td>
                    <td rowspan="4">Pemilih disabilitas/penyandang cacat yang menggunakan hak pilih</td>
                </tr>
                <tr>
                    <td style="text-align: center">LK</td>
                    @foreach ($h_disabilitas_lk as $dpt)
                        <td style="text-align: center">{{ $dpt }}</td>
                    @endforeach
                </tr>
                <tr>
                    <td style="text-align: center">PR</td>
                    @foreach ($h_disabilitas_pr as $dpt)
                        <td style="text-align: center">{{ $dpt }}</td>
                    @endforeach
                </tr>
                <tr>
                    <td style="text-align: center">JUM</td>
                    @foreach ($h_disabilitas_jum as $dpt)
                        <td style="text-align: center">{{ $dpt }}</td>
                    @endforeach
                </tr>
                <tr>
                    <td style="text-align: center;vertical-align:top;">C.</td>
                    <td colspan="2">DATA PENGGUNAAN SURAT SUARA</td>
                </tr>
                <tr>
                    <td style="vertical-align: center; text-align:center;">1</td>
                    <td colspan="2">Jumlah surat suara yang diterima termasuk cadangan 2,5% (2+3+4)</td>
                    @foreach ($jml_srt_suara as $dpt)
                        @foreach ($dpt as $dp)
                            <td style="text-align: center">{{ $dp->jml_srt_suara }}</td>
                        @endforeach
                    @endforeach
                    <td style="text-align: center">{{ $jml_srt_suaras }}</td>
                </tr>
                <tr>
                    <td style="vertical-align: center; text-align:center;">2</td>
                    <td colspan="2">Jumlah surat suara dikembalikan oleh pemilih karena rusak dan/atau keliru coblos</td>
                    @foreach ($jml_srt_rusak as $dpt)
                        @foreach ($dpt as $dp)
                            <td style="text-align: center">{{ $dp->jml_srt_rusak }}</td>
                        @endforeach
                    @endforeach
                    <td style="text-align: center">{{ $jml_srt_rusaks }}</td>
                </tr>
                <tr>
                    <td style="vertical-align: center; text-align:center;">3</td>
                    <td colspan="2">Jumlah surat suara yang tidak digunakan termasuk sisa surat suara cadangan</td>
                        @foreach ($jml_srt_tdk_dgnk as $dpt)
                            <td style="text-align: center">{{ $dpt }}</td>
                        @endforeach
                    <td style="text-align: center">{{ $jml_srt_tdk_dgnks }}</td>
                </tr>
                <tr>
                    <td style="vertical-align: center; text-align:center;">4</td>
                    <td colspan="2">Jumlah surat suara yang digunakan </td>
                    @foreach ($hadir_s_jum as $dpt)
                        <td style="text-align: center">{{ $dpt }}</td>
                    @endforeach
                    <td style="text-align: center">{{ $hadir_s_jums }}</td>
                </tr>
                <tr>
                    <td style="text-align: center;vertical-align:top;">D.</td>
                    <td colspan="2">RINCIAN PEROLEHAN SUARA PASANGAN CALON</td>
                </tr>
                @foreach ($datacalon as $data)
                    <tr>
                        <td style="vertical-align: center; text-align:center;">{{ $loop->iteration }}</td>
                        <td colspan="2">{{ $data->nama }}</td>
                        @foreach ($s_calons['suara'.$loop->iteration] as $d)
                            <td style="text-align: center">{{ $d }}</td>
                        @endforeach
                    </tr>
                @endforeach
                <tr>
                    <td style="vertical-align: center; text-align:center;">E.</td>
                    <td colspan="2">JUMLAH SELURUH SUARA SAH UNTUK SELURUH PASANGAN PASLON</td>
                    @foreach ($sah_jum as $dpt)
                        <td style="text-align: center">{{ $dpt }}</td>
                    @endforeach
                </tr>
                <tr>
                    <td style="vertical-align: center; text-align:center;">F.</td>
                    <td colspan="2">JUMLAH SUARA TIDAK  SAH</td>
                    @foreach ($tidaksah_jum as $dpt)
                        <td style="text-align: center">{{ $dpt }}</td>
                    @endforeach
                </tr>
                <tr>
                    <td style="vertical-align: center; text-align:center;">G.</td>
                    <td colspan="2">JUMLAH SELURUH SUARA SAH DAN SUARA TIDAK SAH (E + F)</td>
                    @foreach ($seluruh_suara as $dpt)
                        <td style="text-align: center">{{ $dpt }}</td>
                    @endforeach
                </tr>
            </tbody>
        </table>

    </body>
</html>
