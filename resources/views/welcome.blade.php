<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Pic Resizer</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.css">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">

</head>
<body>


	<div class="ui  top fixed menu">

		<div class="item">
			<h1 class="header">Pics Resizer</h1>
		</div>

	</div>

	<br>
	<br>
	<br>
	<br>
	<br>

		<img class="ui centered rounded  massive bordered image" src="https://unsplash.it/1920/1080?image=1067">


	<br>
	<br>
	<br>

	<div class="ui two column centered grid">
		<div class="ui  huge action input">
			<input type="text" value="http://ww.short.url/c0opq">
			<button class="ui teal right labeled icon button">
				<i class="copy icon"></i>
				Copy
			</button>
		</div>
	</div>










<script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>
