<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Home</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Raleway:200');

    html, body {
      height: 100%;
    }
    body {


      height: 100%;

    }
    #box {

      display: flex;
      align-items: center;
      justify-content: center;
      width: 400px;
      height: 200px;
      color: white;
      font-family: 'Raleway';
      font-size: 2.5rem;
    }
    .gradient-border {
      --borderWidth: 3px;
      background: #eff3f5;

      position: relative;
      border-radius: var(--borderWidth);
    }
    .gradient-border:after {
      content: '';
      position: absolute;
      top: calc(-1 * var(--borderWidth));
      left: calc(-1 * var(--borderWidth));

      height: calc(100% + var(--borderWidth) * 2);
      width: calc(100% + var(--borderWidth) * 2);
      background: linear-gradient(60deg, #f79533, #f37055, #ef4e7b, #a166ab, #5073b8, #1098ad, #07b39b, #6fba82);
      border-radius: calc(2 * var(--borderWidth));
      z-index: -1;
      animation: animatedgradient 3s ease alternate infinite;
      background-size: 300% 300%;
    }


    @keyframes animatedgradient {
        0% {
            background-position: 0% 50%;
        }
        50% {
            background-position: 100% 50%;
        }
        100% {
            background-position: 0% 50%;
        }
    }




        body { font-family: sans-serif; }

    #main-menu .nav-bar { list-style:none; margin-top: 40px; }
    #main-menu .nav-bar li { display:inline; padding:0 10px; }

    #main-menu .nav-bar li a {
      text-decoration: none;
      padding-left: 25px;
      text-transform: uppercase;
      color: #333;
        text-shadow: 1px 1px 1px #ccc;
    }
    a{
      text-decoration: none;
      color: #333;
    }

    .nav-bar .nav-button-home a { background:url("https://www.cheesetoast.co.uk/cheesepress/wp-content/uploads/2012/08/home.gif") no-repeat 0px -2px transparent; }

    .nav-bar .nav-button-services a { background:url("https://www.cheesetoast.co.uk/cheesepress/wp-content/uploads/2012/08/services.gif") no-repeat 0px -2px transparent; }

    .nav-bar .nav-button-products a { background:url("https://www.cheesetoast.co.uk/cheesepress/wp-content/uploads/2012/08/products.gif") no-repeat 0px -2px transparent; }

    /* Icons courtesy of Thom : http://pixelb.in/assorted-pixel-perfect-14px-icon-set-286/ */
      </style>

</head>
<body>
    <div class="container mt-5">



        @yield('content')


    </div>


    <nav id="main-menu">
        <ul class="nav-bar">
             <li class="nav-button-home"><a href="home">Home</a></li>
             <li class="nav-button-SERVERS"><a href="{{ url('srvs') }}">SERVERS</a></li>
             <li class="nav-button-APPLICATION"><a href="#">PAYMENT</a></li>
             <li class="nav-button-GMAIL"><a href="#">LIST GMAIL</a></li>
        </ul>
    </nav>


    <div class="text-center text-white bg-dark">
      <h1 id="title">
        <i class="fa fa-comments" aria-hidden="true"></i>
        MEDIA PROSOFET</h1>
      <p>APPLICATION IT SUPPORT</p>
          <hr>
    </div>

    <div class="container">
      <div class="row">
        <div class="col gradient-border "  id="box">
         <a  href="#"  aria-disabled="true">Application</a>
        </div> &nbsp;&nbsp;&nbsp;&nbsp;
        <div class="col gradient-border"  id="box">
          <a href="{{ url('addprov') }}">Providers</a>
         </div> &nbsp;&nbsp;&nbsp;&nbsp;
         <div class="col gradient-border"  id="box">
          <a href="#">RDP</a>
         </div>
      </div>
    </div>
    <br>
    <div class="container">
      <div class="row">

          <div class="col gradient-border "  id="box">
            <a  href="#"  aria-disabled="true">Proxy</a>
           </div>

         &nbsp;&nbsp;&nbsp;&nbsp;

        <div class="col gradient-border"  id="box">
          <a href="#" >Anydesk</a>
        </div>

      </div>
    </div>
    <br><br>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>
</html>
