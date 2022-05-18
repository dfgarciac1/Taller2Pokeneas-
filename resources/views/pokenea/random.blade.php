<html>

<head>
	<meta charset="utf-8">
	<title>Pokedex</title>
    <link rel="stylesheet" href="{{ url('/assets/css/main.css') }}">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Orbitron&display=swap');
	</style>
</head>

<body>
	<div id="container">
		<div id="pokedex">
			<div id="left">
				<div id="left-top">
					<div id="left-top-upper"></div>
					<div class="blue-button-xlarge"></div>
					<div class="top-button-small red-button"></div>
					<div class="top-button-small yellow-button"></div>
					<div class="top-button-small green-button"></div>
				</div>
				<div id="image-screen">
					<div id="pokemon-image-border">
						<div id="screen-top-lights">
							<div class="light-wrapper">
								<div class="led-small red-led"></div>
								<div class="led-small red-led"></div>
							</div>
						</div>
                        <img id="pokenea-image" src="{{ $pokenea['image']}}" alt="RANDOM NEA" style="width:320px;height:400px;">
						<div id="screen-bottom">
							<div class="led-med red-led"></div>
							<div class="speaker">
								<div></div>
								<div></div>
								<div></div>
								<div></div>
							</div>
						</div>
					</div>
				</div>
				<div id="long-leds">
					<div class="red-led led-long"></div>
					<div class="blue-led led-long"></div>
				</div>
				<div id="large-button-left" class="black-button button-large">
				</div>
				<div id="pokemon-name">
                <p class="card-text">{{('')}}{{ $pokenea["name"] }}</p>
				</div>
				<div id="d-pad" class="d-pad">
				</div>
			</div>
			<div id="right">
				<!-- 			<div id="right-top">
			</div> -->
				<div id="pokemon-details">
					<p id="pokemon-ability" class="detail-line">
                    <p class="card-text">{{('ability')}}: {{ $pokenea["ability"] }}</p>
					</p>
					<p id="pokemon-height" class="detail-line">
                    <p class="card-text">{{('height')}}: {{ $pokenea["height"] }}</p>
					</p>

				</div>

				<div id="num-pad">
					<div class="num-pad-button" id="num-pad-0">
					</div>
					<div class="num-pad-button" id="num-pad-1">
					</div>
					<div class="num-pad-button" id="num-pad-2">
					</div>
					<div class="num-pad-button" id="num-pad-3">
					</div>
					<div class="num-pad-button" id="num-pad-4">
					</div>
					<div class="num-pad-button" id="num-pad-5">
					</div>
					<div class="num-pad-button" id="num-pad-6">
					</div>
					<div class="num-pad-button" id="num-pad-7">
					</div>
					<div class="num-pad-button" id="num-pad-8">
					</div>
					<div class="num-pad-button" id="num-pad-9">

					</div>
				</div>
				<div id="search-box">
					<input type="number" id="pokemon-number" name="pokemon-number" min="1" max="807">
				</div>
				<div id="search-button">
				</div>
				<div id="navigation-buttons">
                    <p class="card-text">{{__('ID_CONTAINER')}}: {{ $docker_container}}</p>
				</div>
			</div>
		</div>
	</div>
</body>

</html>

</body>

</html>
