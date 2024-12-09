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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script
        src="https://www.jqueryscript.net/demo/Image-Zoom-Viewer-Gallery-Plugin-jQuery-ezPlus/jquery.ez-plus.js"></script>
</head>
<body>
<div class="container">
    <div class="card mt-3">
        <div class="card-body">
            <h5 class="card-title">{{ $carOne['Model'] }}</h5>
            <div class="ZoomContainer">
                <div class="tintContainer">
                    <img id="zoom_01" src="/img/cars/{{ $carOne['Image'] }}"
                         data-zoom-image="/img/cars/{{ $carOne['Image'] }}" alt="image"/>
                    <script>$("#zoom_01").ezPlus({tint: true, tintColour: '#F90', tintOpacity: 0.5});</script>
                </div>
            </div>
            <p class="card-text">{{ $carOne['Image'] }}</p>
            <div class="ZoomContainer">
                <div class="tintContainer">
                    <img id="zoom_02" src="/img/cars/{{ $carTwo['Image'] }}"
                         data-zoom-image="/img/cars/{{ $carTwo['Image'] }}" alt="image"/>
                    <script>$("#zoom_02").ezPlus({tint: true, tintColour: '#F90', tintOpacity: 0.5});</script>
                </div>
            </div>
            <p class="card-text">{{ $carTwo['Image'] }}</p>
        </div>
    </div>
</div>
</body>
</html>
