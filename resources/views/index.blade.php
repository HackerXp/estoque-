<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CRUD</title>

    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                <span class="sr-only">Toogle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="{{route('produtos')}}">Home</a></li>
                <li><a href="#"></a></li>
            </ul>
        </div>
        <a class="navbar-brand" href="{{route('produtos')}}">Crud</a>

    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @yield('content')
        </div>
    </div>
</div>
</body>
<script src="{{ asset('/js/bootstrap.min.js') }}}"></script>
<script src=""></script>
</html>