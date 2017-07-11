 <html>
<head>
    <!-- <title>@yield("title")</title> -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style type="text/css">
        .navbar{
            background: lightskyblue; 
        }
        .footer {
            background: #555;
            color: white;
        }
        .footer p{
            margin: 5pt;
        }
    </style>

</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <p class="navbar-brand" href="#" style="margin: 0pt; font-size: 22pt;">Aposenta Fácil</p>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Opções <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <!-- @if (Auth::guest())
                <li><a href="/auth/login">Login</a></li>
                <li><a href="/auth/register">Register</a></li>
            @else
                <li>{{ Auth::user()->name }} </li>
                <li><a href="/auth/logout">Logout</a></li>
            @endif -->
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Sair</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="container-fluid">

<div class="row-fluid">
    <h3 class="page-header"><!-- @yield('titulo-secao') --></h3>
    <div class="col-md-12">
        @yield('conteudo')
    </div>
</div>

</div>

<div class="container-fluid footer">
    <p class="text-center">Cicero's Team &copy <br> Todos os direitos reservados.</p>
</div>

</body>
</html>
