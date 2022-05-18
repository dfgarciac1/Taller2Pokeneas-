<html>

<head>
    <meta charset="utf-8">
    <title>Pokedex</title>
    <link rel="stylesheet" href="{{ url('/assets/css/image.css') }}">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Orbitron&display=swap');
    </style>
</head>

<body>
    <div class="container">
    <p class="card-text">{{__('ID_CONTAINER')}}: {{ $docker_container}}</p>

        <div class="card">
            <div class="face face1">
                <div class="content">
                    <span class="stars"></span>
                    <h2 class="java">{{('')}}{{ $pokenea["phrase"] }}</p>
                    </h2>
                    <p class="java">..........</p>
                </div>
            </div>
            <div class="face face2">
                <img id="pokenea-image" src="{{ $pokenea['image']}}" alt="RANDOM NEA" style="width:320px;height:350px;">
            </div>
        </div>
    </div>
    </div>
</body>

</html>
