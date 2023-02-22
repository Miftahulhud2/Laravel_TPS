<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Data Tables</title>

    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />

    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>

    <div class="header">

        <div class="logout">
            <div class="dropdown">
                {{-- <button class="dropbtn">{{ auth()->user()->name }}</button> --}}
                <div class="dropdown-content">
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" >Log out</button>
                    </form>
                </div>
            </div>
        </div>
        <h2>Aplikasi Tempat Pemungutan Suara</h2>


        {{-- <left>
            <button class="btn btn-outline-secondary">
                <i class="bi bi-box-arrow-right fa-2x"></i>
            </button>
        </left> --}}


        <div class="btn-group" >
            @if ($title == 'DASHBOARD')
            <a href="{{ url('admin') }}"><button class="ini">DASHBOARD</button></a>
            @else
            <a href="{{ url('admin') }}"><button class="button">DASHBOARD</button></a>
            @endif


            @if ($title == 'DATA CALON')
            <a href="{{ url('admin/datacalon') }}"><button class="ini">DATA CALON</button></a>
            @else
            <a href="{{ url('admin/datacalon') }}"><button class="button">DATA CALON</button></a>
            @endif


            @if ($title == 'TPS')
            <a href="{{ url('admin/tps') }}"><button class="ini">TPS</button></a>
            @elseif ($title == 'Tambah TPS')
            <a href="{{ url('admin/tps') }}"><button class="ini">TPS</button></a>
            @elseif ($title == 'Anggota TPS')
            <a href="{{ url('admin/tps') }}"><button class="ini">TPS</button></a>
            @elseif ($title == 'DATA REPORT')
            <a href="{{ url('admin/tps') }}"><button class="ini">TPS</button></a>
            @else
            <a href="{{ url('admin/tps') }}"><button class="button">TPS</button></a>
            @endif


            @if ($title == 'REKAP')
            <a href="{{ url('admin/rekap') }}"><button class="ini">REKAP</button></a>
            @else
            <a href="{{ url('admin/rekap') }}"><button class="button">REKAP</button></a>
            @endif
        </div>
    </div>


<div >
    <div class="row">
        <livewire:dropdowns>
    </div>

  <table id="tabel-data" class="table table-striped table-bordered" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </tfoot>
        <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
            </tr>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
            </tr>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
            </tr>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
            </tr>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
            </tr>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
            </tr>
            <tr>
                <td>Garrett Winters</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011/07/25</td>
                <td>$170,750</td>
            </tr>
            <tr>
                <td>Ashton Cox</td>
                <td>Junior Technical Author</td>
                <td>San Francisco</td>
                <td>66</td>
                <td>2009/01/12</td>
                <td>$86,000</td>
            </tr>
            <tr>
                <td>Cedric Kelly</td>
                <td>Senior Javascript Developer</td>
                <td>Edinburgh</td>
                <td>22</td>
                <td>2012/03/29</td>
                <td>$433,060</td>
            </tr>
            <tr>
                <td>Airi Satou</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>33</td>
                <td>2008/11/28</td>
                <td>$162,700</td>
            </tr>
            <tr>
                <td>Brielle Williamson</td>
                <td>Integration Specialist</td>
                <td>New York</td>
                <td>61</td>
                <td>2012/12/02</td>
                <td>$372,000</td>
            </tr>
            <tr>
                <td>Donna Snider</td>
                <td>Customer Support</td>
                <td>New York</td>
                <td>27</td>
                <td>2011/01/25</td>
                <td>$112,000</td>
            </tr>
        </tbody>
    </table>
</div>


  <script>
  $(document).ready(function(){
    $('#tabel-data').DataTable();
});
  </script>


</body>
</html>

