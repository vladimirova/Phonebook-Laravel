<html>
	<head>
		<title>Laravel</title>
		
		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

		<style>
			body {
				margin: 0;
				padding: 0;
				width: 100%;
				height: 100%;
				color: #0d1074;
				display: table;
				font-weight: 100;
				font-family: 'Lato';
			}

			.container {
				text-align: center;
				display: table-cell;
				vertical-align: middle;
			}

			.content {
				text-align: center;
				display: inline-block;
			}

			.title {
				font-size: 96px;
				margin-bottom: 40px;
			}

			.welcome {
				font-size: 24px;
                color: #152274;
                text-decoration: none;
                text-transform: uppercase;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="content">
				<div class="title">My Laravel Phonebook</div>
                <a class="Welcome" href="{{ url('/home') }}"> welcome</a>
			</div>
		</div>
	</body>
</html>
