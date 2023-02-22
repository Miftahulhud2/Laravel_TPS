<?php
$koneksi    = mysqli_connect("localhost", "root", "", "atps");
$ss         = mysqli_query($koneksi, "SELECT SUM(jml_suara) AS sum, suara FROM suara GROUP BY suara");
$row        = mysqli_fetch_assoc($ss);
?>


<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com-->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="{{ asset('js/chart.js') }}"></script>
    <style type="text/css">
        .grafik {
            width: 20%;
            margin: 15px auto;
        }
    </style>


    <title>ATPS</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/beranda.css') }}" />
  </head>
  <body>

    <section class="container">
      <img src="img/abu.jpg" alt="" class="image" />
      <header>APLIKASI TPS</header>
      {{-- @if ($data == true) --}}
      {{-- <p>
        DATA SUARA SAAT INI
      </p> --}}
      {{-- @endif --}}
      <!-- view file -->
      <div class="row">
        <div class="col">
            <canvas id="pie-chart"></canvas>

        </div>
      </div>


        {{-- <div class="grafik">
            <canvas id="doughnutchart" width="10" height="10"></canvas>
        </div> --}}
      {{-- <div class="time-content">
        <div class="time days">
          <span class="number"></span>
          <span class="text">days</span>
        </div>
        <div class="time hours">
          <span class="number"></span>
          <span class="text">hours</span>
        </div>
        <div class="time minutes">
          <span class="number"></span>
          <span class="text">minutes</span>
        </div>
        <div class="time seconds">
          <span class="number"></span>
          <span class="text">seconds</span>
        </div>
      </div> --}}




    <p>LOGIN PETUGAS</p>
    @if (session('loginerror'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ session('loginerror') }}
      </div>
    @endif

    <div class="form-signin">

      <main class="input-box">
          <form action="/beranda" method="POST">
              @csrf
              <div class="form-floating">
                  <label for="email">Email</label>
                  <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" id="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                  @error('email')
                      <div class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </div>
                  @enderror

              </div>
              <div class="form-floating">
                  <label for="password">Password</label>
                  <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" id="password" required autocomplete="current-password">

                  @error('password')
                      <div class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </div>
                  @enderror

              </div>
              <button class="btn-primary" type="submit">LOGIN</button>
          </form>
      </>
    </div>

    </section>


    <script src="js/beranda.js"></script>
    <script>
        var ctx = document.getElementById('pie-chart').getContext('2d');
        var chart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: <?php echo json_encode(array_keys($data)) ?>,
                datasets: [{
                    data: <?php echo json_encode(array_values($data)) ?>,
                    backgroundColor: ['#ff6384', '#4bc0c0', '#ffcd56', '#457ba1']
                }]
            }
        });
    </script>











  </body>
</html>
