<!DOCTYPE html>
<html>
<head>
	<title>jQuery</title>

	<style>
		body{ width: 600px; margin:0 auto;  }
		.para{ width: 600px; margin:0 auto; border:1px solid #999; margin-top: 5px;background: linear-gradient(to bottom, #33ccff 0%, #ff99cc 100%); padding: 10px; min-height: 300px; padding-top:20px; }

		.ui-menu { width: 150px; }

	</style>
<link rel="stylesheet" href="js/jquery-ui.min.css">
<script src="js/jquery.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/main.js"></script>
</head>
<body>


	<hr>
	Real use of jQuery - Menu Widget
	<hr>

	<div class="para">

		<ul id="menu">
			<li>Web Design
				<ul>
					<li>HTML</li>
					<li>CSS</li>
					<li>Bootstrp</li>
				</ul>
			</li>

			<li>Web Development
				<ul>
					<li>PHP
						<ul>
							<li>Laravel</li>
							<li>Codignator</li>
						</ul>
					</li>
					<li>JAVA</li>
					<li>Python</li>
				</ul>
			</li>
			<li class="ui-state-disabled">SEO</li>
			<li>Blogging</li>
		</ul>

		
		
	</div>

</body>
</html>