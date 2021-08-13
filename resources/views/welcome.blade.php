
<!DOCTYPE html>
<html>
<head>
    <title>Creative Colorlib SignUp Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf_token" content="{{ csrf_token() }}" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Custom Theme files -->
    <link href="{{asset('css/styleInscrit.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('css/navbar.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('css/boite_com.css')}}" rel="stylesheet" type="text/css"  />
    <!-- //Custom Theme files -->
    <!-- web font -->
    <link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
    <!-- //web font -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    @yield('head')
</head>
<body>
<nav class="navbar navbar-expand-custom navbar-mainbg">
    <a class="navbar-brand navbar-logo" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars text-white"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <div class="hori-selector"><div class="left"></div><div class="right"></div></div>
            <li class="nav-item">
                <a class="nav-link" href="javascript:void(0);"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="javascript:void(0);"><i class="far fa-address-book"></i>Address Book</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="javascript:void(0);"><i class="far fa-clone"></i>Components</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="javascript:void(0);"><i class="far fa-calendar-alt"></i>Calendar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="javascript:void(0);"><i class="far fa-chart-bar"></i>Charts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="javascript:void(0);"><i class="far fa-copy"></i>Documents</a>
            </li>
        </ul>
    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-sm-8">
                <div class="form-icon">
                    <span><i class="icon icon-user"></i></span>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control item" id="commande" placeholder="Commande">
                </div>
                <div class="form-group">
                    <button id="action" type="button" class="btn btn-block create-account">Action</button>
                </div>
        </div>


    <div class="col-sm-4">
        @yield('content')
    </div>
    <div class="col-sm-4">
        One of three columns
    </div>
</div>
</div>




<script type="text/javascript" src="{{asset('js/navbar.js')}}"></script>
<script type="text/javascript" src="{{asset('js/commande.js')}}"></script>
<script type="text/javascript" src="{{asset('js/board.js')}}"></script>
<script>

   /* $('#action').click(function (){
        commande = $("#commande").val();
        com_effect()
            $.ajax({
                url: '/',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')},
                type: 'post',
                data: {
                    liste_joueurs: Joueurs,
                },
                success: function(response)
                {
                    console.log(response);
                }
            });

        });*/
  //console.log(traitement_changer());
  initialiser_grille();
  integ_mot({'mot': 'mot', 'ligne': 3, 'colonne': 6, 'direction': 'h'});
</script>
</body>
</html>
