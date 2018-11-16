<html>
    <head>  <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <script src='https://www.google.com/recaptcha/api.js?hl=nl'></script>
</head>
<body>
<?php include 'index.php';?>
<div class="test"><form action="indexx.php" method="post">
Naam:<br> <input type="text" name="auteur" placeholder="Naam" required><br>
Titel:<br> <input type="text" name="title" placeholder="Titel" required><br>
    Bericht:<br> <textarea name="comment" rows="5" cols="20" placeholder="Bericht" required></textarea><br>
     <div class="g-recaptcha" data-sitekey="hier komt de site data key van google"></div>
<input type="submit" value="verstuur">
</form></div>
</body>
</html>