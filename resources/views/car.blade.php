<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="card mt-3">
        <div class="card-body">
            <h5 class="card-title">{{ $car['Make'] }} {{ $car['Model'] }} ({{ $car['Year'] }})</h5>
            <div class="row">
                @foreach($car as $key => $value)
                    <div class="col-md-4">
                        <p class="card-text"><strong>{{ $key }}</strong>: {{ $value }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
</body>
</html>
