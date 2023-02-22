@extends('admin.index')
@section('content')
@foreach ( $tps as $tp)



    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="col-md-12">
                        <a href="/admin/tps">
                            <button type="button" class="btn btn-outline-danger">
                                <i class="bi bi-arrow-left-circle"> Kembali</i>
                            </button>
                        </a>

                        @if ($title == 'Rekap Laporan')
                        <a href="/admin/tps/{{ $tp->slug }}">
                            <button type="button" class="btn btn-secondary">
                                <span>Rekap Laporan</span>
                            </button>
                        </a>
                        @else
                        <a href="/admin/tps/{{ $tp->slug }}">
                            <button type="button" class="btn btn-outline-secondary">
                                <span>Rekap Laporan</span>
                            </button>
                        </a>
                        @endif

                        @if ($title == 'Pengurus')
                        <a href="/admin/tps/{{ $tp->slug }}/pengurus/">
                            <button type="button" class="btn btn-secondary">
                                <span>Pengurus</span>
                            </button>
                        </a>
                        @else
                        <a href="/admin/tps/{{ $tp->slug }}/pengurus/">
                            <button type="button" class="btn btn-outline-secondary">
                                <span>Pengurus</span>
                            </button>
                        </a>
                        @endif



                        @if ($title == 'Daftar Pemilih Tetap')
                        <a href="/admin/tps/{{ $tp->slug }}/daftar-pemilih-tetap/">
                            <button type="button" class="btn btn-secondary">
                                <span>Daftar Pemilih Tetap</span>
                            </button>
                        </a>
                        @else
                        <a href="/admin/tps/{{ $tp->slug }}/daftar-pemilih-tetap/">
                            <button type="button" class="btn btn-outline-secondary">
                                <span>Daftar Pemilih Tetap</span>
                            </button>
                        </a>
                        @endif

                        @if ($title == 'Lokasi')
                        <a href="/admin/tps/{{ $tp->slug }}/lokasi/">
                            <button type="button" class="btn btn-outline-secondary">
                                <span>Lokasi</span>
                            </button>
                        </a>
                        @else
                        <a href="/admin/tps/{{ $tp->slug }}/lokasi/">
                            <button type="button" class="btn btn-outline-secondary">
                                <span>Lokasi</span>
                            </button>
                        </a>
                        @endif

                        @endforeach

                        <div class="row">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.3690022023443!2d110.5062254742933!3d-6.965722768201752!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70f2b1f0f67fbb%3A0xc99c1e2cf116156b!2sJl.%20Dukuhan%20No.2%2C%20Krajan%20Selatan%2C%20Kalisari%2C%20Kec.%20Sayung%2C%20Kabupaten%20Demak%2C%20Jawa%20Tengah%2059563!5e0!3m2!1sen!2sid!4v1672757883216!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            <iframe src="https://www.google.com/maps/embed/v1/place?key=API_KEY&q=jawatengahdemaksayungkalisaridukuhanrt2rw3" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
@endsection
