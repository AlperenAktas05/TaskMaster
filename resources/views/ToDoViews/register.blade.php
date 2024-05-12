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
            <a href="{{route("routeLogin")}}" class="nav-link justify-content-end" style="color: #7E30E1"><h5>Giriş Yap</h5></a>
        </div>
    </nav>

    <section class="mt-5 py-3">
        <div class="row">
            <div class="col-4 offset-4">
                <form action="{{route("routeSubmitRegister")}}" method="post" class="mb-5 shadow p-5 rounded">
                    @csrf
                    <h1 class="mb-5">Kayıt Ol</h1>
                    <div class="input-group input-group-lg mb-3">
                        <input type="text" class="form-control" placeholder="Ad" aria-label="Username" aria-describedby="basic-addon1" name="name" autocomplete="off" required>
                    </div>

                    <div class="input-group input-group-lg mb-3">
                        <input type="text" class="form-control" placeholder="Soyad" aria-label="Username" aria-describedby="basic-addon1" name="surname" autocomplete="off" required>
                    </div>

                    <div class="input-group input-group-lg mb-3">
                        <input type="email" class="form-control" placeholder="E-Posta" aria-label="Username" aria-describedby="basic-addon1" name="email" autocomplete="off" required>
                    </div>

                    <div class="input-group input-group-lg mb-2">
                        <input type="password" class="form-control" placeholder="Parola" aria-label="Username" aria-describedby="basic-addon1" name="password" required>
                    </div>

                    <div class="mt-5 text-center">
                        <button type="submit" class="btn text-light px-5 py-3 text-center" style="background-color: #7E30E1">Kayıt Ol</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
