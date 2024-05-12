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

            <section class="p-5">
                <div class="row shadow mt-3 rounded">
                    <div class="col-6 p-5">
                        <h1 class="text-center" style="color: #7E30E1">TaskMaster</h1>
                        <p class="mt-5">TaskMaster ile günlük görevlerinizi kolayca yönetin. Kendinize görevler ekleyin, onları tamamlayın ve işlerinizin üzerinde kontrolünüzü sağlayın.</p>
                        <ul type="square">
                            <li>Görevlerinizi düzenli olarak kontrol edin ve güncelleyin.</li>
                            <li>Öncelikli görevlerinizi belirleyin ve onlara öncelik verin.</li>
                            <li>Görevlerinizi tamamladıkça işlerinizin üzerindeki yükü hafifletin.</li>
                        </ul>
                        <div class="text-center">
                            <a href="{{route("routeLogin")}}" class="btn text-light mt-5 px-5 py-3" style="background-color: #7E30E1">Giriş Yap</a>
                        </div>
                    </div>
                    <div class="col-6 p-5">
                        <img src="{{"img/homepage.png"}}" class="w-100">
                    </div>
                </div>
            </section>
        </main>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
