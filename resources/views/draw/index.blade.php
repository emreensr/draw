<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Çekiliş Sayfası!</title>
</head>
<body>
<div class="container mt-5">
    <div class="mb-10 collapse show">
        <div class="card card-body shadow-lg rounded text-center">
            <form action="{{route('drawResult')}}"   method="POST">
                @csrf
            <div class="row" style="margin-left: auto; margin-right: auto;">
                <div class="col-12">
                    <h1>Çekilişin Adı</h1>
                    <input type="text" class="form-control mt-4" name="drawname" style="margin-left: auto; margin-right: auto; text-align:center;" placeholder="Çekilişin Adı" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="col-12 mt-4">
                    <label for="formGroupExampleInput" class="form-label" style="float: left;">Gönderiyi Beğendi Mi?</label>
                    <select class="form-select form-select-lg mb-3" name="post" aria-label=".form-select-lg example">
                    <option selected>Lütfen Seçiniz...</option>
                    <option value="1">Evet</option>
                    <option value="0">Hayır</option>
                </select>
                </div>
                <div class="col-12 mt-4">
                    <label for="formGroupExampleInput" class="form-label" style="float: left;">Bizi Takip Ediyor Mu?</label>
                    <select id="ddlViewBy" class="form-select form-select-lg mb-3"  name="follow" aria-label=".form-select-lg example">
                        <option selected>Lütfen Seçiniz...</option>
                        <option value="1">Evet</option>
                        <option value="0">Hayır</option>
                    </select>
                </div>
                <div class="col-12 mt-4">
                    <label for="formGroupExampleInput" class="form-label" style="float: left;"> 2 Kişiyi Etiketledi Mi?</label>
                    <select class="form-select form-select-lg mb-3" name="tag" aria-label=".form-select-lg example">
                    <option selected>Lütfen Seçiniz...</option>
                    <option value="1">Evet</option>
                    <option value="0">Hayır</option>
                </select>
                </div>
                </div>
                <div class="input-group flex-nowrap  mt-5">
                    <span class="input-group-text"  id="addon-wrapping">Kişi Sayısı</span>
                    <input type="number" class="form-control" name="winperson" placeholder="" aria-label="Username" aria-describedby="addon-wrapping">
                </div>
                <div class="col-12 mt-5 mb-5">
                    <button type="submit" class="btn btn-primary" style="float: right;">ÇEKİLİŞ YAP!</button>
                </div>
            </form>
            </div>
        </div>

        <div>
        </div>
    </div>





<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script>
    var e = document.getElementById("ddlViewBy");
    var strUser = e.value;
</script>
</body>
</html>
