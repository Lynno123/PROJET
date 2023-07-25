<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="style.css">

  <style>

    *{
	margin: 0;
	padding: 0;
	outline: none;
	border: none;
	text-decoration: none;
	box-sizing: border-box;
  color: RGB(8, 143, 143);
}

body{
	background:#dfe9f5;
}

nav{
	position: absolute;
	top: 0;
	bottom: 0;
	height: 100%;
	left: 0;
	background: #fff;
	width: 80px;
	overflow: hidden;
	transition: width 0.2s linear;
	box-shadow: 0 20px 35px rgba(0, 0, 0, 0.1);
}
.logo {
	text-align: center;
	display: flex;
	transition: all 0.5s ease;
	 margin: 10px 0 0 5px;
}
.logo img{
	width: 60px;
	height: 60px;
	border-radius: 50%;
}
.logo span{
	font-weight: bold;
	padding-left: 15px;
	font-size: 20px;
	text-transform: lowercase;
}
a{
	position: relative;
	color: rgb(85, 83, 83);
	font-size: 14px;
	display: table;
	width: 300px;
	padding: 10px;
}

.fas{
	position: relative;
	width: 70px;
	height: 40px;
	top: 14px;
	font-size: 20px;
	text-align: center;
}

.nav-item{
	position: relative;
	top: 12px;
	margin-left: 10px;
}

a:hover{
	background: #eee;
}

nav:hover{
	width: 280px;
	transition: all 0.5s ease;
}

.logout{
	position: absolute;
	bottom: 0;
}

  </style>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
</head>
<body>
	<nav>
		<ul>
			<li>
				<a href="#" class="logo">
					<img src="../SIDEBAR/logo.png" alt="">
					<span class="nav-item">Mailaka</span>
				</a>
			</li>
			<li><a href="{{ route('branches') }}">
				<i class="fas fa-home"></i>
				<span class="nav-item">Home</span>
			</li>
			<li><a href="#">
				<i class="fas fa-user"></i>
				<span class="nav-item">Profile</span>
			</li>
			<li><a href="#">
				<i class="fas fa-regular fa-envelopes-bulk"></i>
				<span class="nav-item">Courrier</span>
			</li>
			<li><a href="#">
				<i class="fas fa-chart-bar"></i>
				<span class="nav-item">Analytics</span>
			</li>
			<li><a href="#" class="logout">
				<i class="fas fa-sign-out-alt"></i>
				<span class="nav-item">Log out</span>
			</li>
		</ul>
	</nav>
</body>
</html>