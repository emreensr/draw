<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Kazananlar Sayfası!</title>
</head>
<body>
<div class="container mt-5">
    <div class="mb-10 collapse show">
        <div class="card card-body shadow-lg rounded text-center">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Çekiliş Adı</th>

                    <th scope="col">Kazananlar</th>

                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>  @php echo $drawname; @endphp</td>
                    <td>  @php echo $result; @endphp</td>
                </tr>
                </tbody>
            </table>
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
