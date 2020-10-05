 <!DOCTYPE html>
  <html>

    <head>
      <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@600&display=swap" rel="stylesheet">
      <style>
          * {
            font-family: 'Sansita Swashed', cursive;
          }

          .nav-wrapper {
            padding-left: 50px;
          }

          body {
             display: flex;
             min-height: 100vh;
             flex-direction: column;
          }

          main {
             flex: 1 0 auto;
          }

          footer{
              margin-top: auto;
          }

          .navp {
              text-align: center;
          }



      </style>
      <meta charset="utf-8">
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="{{ asset('css/materialize.min.css') }}"  media="screen,projection"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <nav>
          <div class="nav-wrapper">
            <a href="/" class="brand-logo">Hotel Reservation System</a>
          </div>
      </nav>
              

    </head>

    <body>

      <div class="container">
          @yield('content')
      </div>


      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>

    </body>

    <footer class="page-footer">
          <div class="container">
            <div class="row">         
                <p class="navp">COPYRIGHT</p>
            </div>
          </div>
    </footer>
    
  </html>