<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible"
		content="IE=edge">
	<meta name="viewport"
		content="width=device-width, 
				initial-scale=1.0">
	<title>Care.com</title>
	<link rel="stylesheet"
		href="dashstyle.css">
	<link rel="stylesheet"
		href="dashresponsive.css">
</head>

<body>

	<!-- for header part -->
	<header>

		<div class="logosec">
			<div class="logo">Care.com</div>
			<img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210182541/Untitled-design-(30).png"
				class="icn menuicn"
				id="menuicn"
				alt="menu-icon">
		</div>

		<div class="searchbar">
			<input type="text"
				placeholder="Search">
			<div class="searchbtn">
			<img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210180758/Untitled-design-(28).png"
					class="icn srchicn"
					alt="search-icon">
			</div>
		</div>

		<div class="message">
			<div class="circle"></div>
			<img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183322/8.png"
				class="icn"
				alt="">
			<div class="dp">
			<img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210180014/profile-removebg-preview.png"
					class="dpicn"
					alt="dp">
			</div>
		</div>

	</header>

	<div class="main-container">
		<div class="navcontainer">
			<nav class="nav">
				<div class="nav-upper-options">
					<div class="nav-option option1">
						<img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210182148/Untitled-design-(29).png"
							class="nav-img"
							alt="dashboard">
						<h3> <a href="dash.php">Dashboard</a></h3>
					</div>

					<div class="option2 nav-option">
						<img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183322/9.png"
							class="nav-img"
							alt="articles">
						<h3><a href="./cdetails.php"> Patient Details</a></h3>
					</div>

					<div class="nav-option option3">
						<img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183320/5.png"
							class="nav-img"
							alt="report">
                            <h3> <a href="pdetails.php">Caretaker-Details</a></h3>
					</div>

				

					

					<div class="nav-option logout">
						<img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183321/7.png"
							class="nav-img"
							alt="logout">
						<h3><a href="caretaker1/index.php
							">Logout</a></h3>
					</div>

				</div>
			</nav>
		</div>
		<div class="main">

			<div class="searchbar2">
				<input type="text"
					name=""
					id=""
					placeholder="Search">
				<div class="searchbtn">
				<img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210180758/Untitled-design-(28).png"
						class="icn srchicn"
						alt="search-button">
				</div>
			</div>

			

		

			<div class="report-container">
				<div class="report-header">
					<h1 class="recent-Articles">Caretaker Details</h1>
					<button class="view">View All</button>
				</div>

				<div class="report-body">
					<div class="report-topic-heading">
						<h3 class="t-op">Name</h3>
						<h3 class="t-op">Dept</h3>
						<h3 class="t-op">Phone</h3>
						<h3 class="t-op">Insert</h3>
						<h3 class="t-op">Delete</h3>
						<h3 class="t-op">Update</h3>

					</div>

					<div class="items">
						<div class="item1">
							<h3 class="t-op-nextlvl">Joju</h3>
							<h3 class="t-op-nextlvl">Childcare</h3>
							<h3 class="t-op-nextlvl">Phone</h3>
						<a href="index.php" style="text-decoration: none;"><button>	<h3 class="t-op-nextlvl label-tag label-tag-blue">Insert</h3></button></a>
							<button><h3 class="t-op-nextlvl label-tag label-tag-red">Delete</h3></button>
						<button>	<h3 class="t-op-nextlvl label-tag label-tag-yellow">Update</h3></button>
						</div>

						

					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="./index.js"></script>
</body>
</html>
