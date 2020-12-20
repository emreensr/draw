<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Admin Sayfası!</title>
</head>
<body>
<div class="container mt-5">
    <div class="mb-10 collapse show">
        <div class="card card-body shadow-lg rounded text-center">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1>Kullanıcı Kayıt</h1>
                    </div>
                    <div style="margin: 0px 300px 0px 300px;">
                        <form action="{{route('userStore')}}"   method="POST">
                            @csrf
                            <div class="col-12">
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="formGroupExampleInput" class="form-label" style="float: left;">Kullanıcı Adı</label>
                                        <input type="text"  name="username" class="form-control" id="formGroupExampleInput" placeholder="Kullanıcı Adı">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mt-5">
                                <div class="form-check form-switch">
                                    <input type="hidden" name="follow" value="0" />
                                    <input class="form-check-input" name="follow"  value="1" type="checkbox" id="flexSwitchCheckDefault">
                                    <label class="form-check-label" for="flexSwitchCheckDefault" style="float: left;">Bizi Takip Ediyor Mu?</label>
                                </div>
                                <div class="form-check form-switch mt-3">
                                    <input type="hidden" name="post" value="0" />
                                    <input class="form-check-input" name="post" value="1" type="checkbox" id="flexSwitchCheckDefault">
                                    <label class="form-check-label" for="flexSwitchCheckDefault" style="float: left;">Gönderiyi Beğendi Mi?</label>
                                </div>
                                <div class="form-check form-switch mt-3">
                                    <input type="hidden" name="tag" value="0" />
                                    <input class="form-check-input" name="tag" value="1" type="checkbox" id="flexSwitchCheckDefault">
                                    <label class="form-check-label" for="flexSwitchCheckDefault" style="float: left;">2 Kişiyi Etiketledi Mi?</label>
                                </div>
                            </div>
                            <div class="col-12 mt-5 mb-5">
                                <div class="col-6">
                                    <button type="submit" class="btn btn-primary" style="float: right;">Kaydet</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>
</html>
