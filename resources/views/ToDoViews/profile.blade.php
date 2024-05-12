<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="website icon" type="png" href="{{"img/favicon.png"}}">
    <title>TaskMaster</title>
</head>
<body style="background-color: #F3F8FF">
<main class="container-fluid">
    <nav class="nav row pt-3">
        <div class="nav-item col-6">
            <a href="{{route("routeIndex")}}" class="nav-link" style="color: #7E30E1"><h3>TaskMaster</h3></a>
        </div>
        <div class="nav-item col-6 d-flex justify-content-end">
            <a href="{{route("routeProfile")}}" class="nav-link justify-content-end" style="color: #7E30E1"><h5>{{$name}}</h5></a>
        </div>
    </nav>

    <section class="mt-3 p-3">
        <div class="row">
            <div class="col-2 mt-5">
                <ul class="list-group">
                    <li class="list-group-item rounded-pill border-0 shadow" style="background-color: #7E30E1"><a href="{{route("routeAddTask")}}" class="text-light" style="text-decoration: none"><i class="fa-solid fa-list-check" style="color: #ffffff;"></i> Görev Ekle</a></li>
                    <li class="list-group-item mt-3 rounded-pill border-0 shadow"><a href="{{route("routeProfile")}}" class="text-dark" style="text-decoration: none"><i class="fa-solid fa-user" style="color: #7e30e1;"></i> Profil</a></li>
                    <li class="list-group-item mt-3 rounded-pill border-0 shadow"><a href="{{route("routeSettings")}}" class="text-dark" style="text-decoration: none"><i class="fa-solid fa-gear" style="color: #7e30e1;"></i> Ayarlar</a></li>
                </ul>
            </div>
            <div class="col-10 px-5">
                <h1 style="color: #7e30e1">Görevler</h1>
                <div class="row">
                    @foreach($taskArray as $item)
                        {!! $item !!}
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/e562692f21.js" crossorigin="anonymous"></script>
</body>
</html>
