<html>

<head>
	<script src="jquery.js"></script>
	<style>
		#test1 {
			border: 5px solid;
			height: 200px;
			width: 300px;

			float: left;
			margin: 10px;
			font-size: 35px;
		}

		#test2 {
			border: 5px solid;
			height: 200px;
			width: 300px;

			padding: 10px;
			display: inline-block;
			margin: 10px;
			font-size: 35px;

		}

		#test2:hover {
			color: white;
			background: orange;
			border: 5px dotted;
		}
	</style>
</head>

<body>
	<h1>welcome to jquery program</h1>
	<div class="test">
		<p>my first jqury program and </p>
	</div>

	<div class="test">
		<p>jquery syntex and basic concept</p>
	</div>
	<ul id="list">
		<li>orange</li>
		<li>blue</li>
		<li class="test">white</li>
		<li>pink</li>
		<li>green</li>
	</ul>

	<script>
		$(document).ready(function() {
			//$('li:gt(2)').css("border","1px solid");
			$('.test').css("border", "1px solid");

		});
	</script>
</body>

</html>