Downloaded from: justpaste.it/3mhiz
contactform.php source code
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="contact-form">
<h1>Say Hello</h1>
<h2>We are always ready to serve you!</h2>
</div>
<div class="contact-us">
<form id="contact-us" method="post" action="contact.php">
<input type="text" name="name" class="form-control" placeholder="Your name"
required>
<br>
<input type="text" name="mobile" class="form-control" placeholder="Your mobile
number">
<br>
<input type="email" name="email" class="form-control" placeholder="Your Email"
required>
<br>
<textarea name="message" class="form-control" cols="" rows="3" placeholder="Enter
your massege" required></textarea>
<br>
<input type="submit" class="form-control submit" value="SEND MASSEGE">
</form>
</div>
</body>
</html>