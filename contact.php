<!DOCTYPE html>
<html lang=en>
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv=X-UA-Compatible content="IE=edge">
		<meta name=viewport content="width=device-width,initial-scale=1">
		<link rel="stylesheet" href="backup.css" />
		<title>contact</title>
	
	</head>
	<body> 
		<div id="bloc_page">
		<header>
			<div id="logo">
			<img src="photos/logo.png" height="100" width="250">
			</div>
		<nav>
			<ul>
				<h4>
					<li><a href="index.php">Acceuil</a></li>
					<li><a href="contact.php">Contact</a></li>
					<li><a href="about.php">About</a></li>
				</h4>
			</ul>
		</nav>
		</header>
		
		
		<h1><strong> Contact</strong> </h1>
		<h4>For any enquiries, or just to say hello, get in touch</h4>
		<h5>phone : +509 42802513<br>
		   Adresse : #100, rue charbonniere prolongee, Delmas 33</h5>
		   
		  <form method="post" action="traitement.php">
			<p>
				<label for="Name">Name</label><br>
				<input type="text" name="Pseudo_pourPhP" id="Name" placeholder="Your name" required/><br>
				<label for="Last_Name">Last Name</label><br>
				<input type="text" name="Pseudo_pourPhP" id="Last_Name" placeholder="Your last name" required/><br>
				<label for="email">Your email</label><br>
				<input type="email" name="Pseudo_pourPhP" id="email" placeholder="Your email address" required/><br>
				<label for="Message">Message</label><br>
				<textarea rows="5" cols="100" id ="Message" placeholder="Enter a message" required/></textarea>
			</p>
			<input type="submit" value="Send" />
				
		  </form>
		
		
		 
		 
		 
		 
		 
		 
		 <footer>
		 <section>
			<center><br>Follow me on<br>
		 <a href="https://instagram.com/sedar_007" title="La page de sedar"target="_blank"><img src="photos/instagram.png" height="20" width="20"></a> <a href="https://www.facebook.com/adjysedar.desir" title="La page de sedar"target="_blank"><img src="photos/facebook.jpg" height="20" width="20"></a> <a href="https://twitter.com/sedar_007?s=09" title="La page de sedar"target="_blank"><img src="photos/twitter.jpg" height="20" width="20"></a><br>
			<a href="contact.html">Me contacter</a><br> <h5> Copyright @Sedar_007</h5></center></section>
		</footer>
		</div>
	</body>
</html>
