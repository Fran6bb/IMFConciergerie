<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Header </title>
    <link rel="stylesheet" href="css/style_header.css">
   </head>
<body>
<header>  
<nav>
    <div class="nav-content">
      <div class="logo">
        <a href="#">IMFConciergerie</a>
      </div>
      <ul class="nav-links">
        <li><a href="index.html">Acceuil</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Abonnements</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
	 <a href="formulaire.php"><figure><img src="images/login.png" alt="connexion" style="height: 40px; width: auto;"><figcaption></figcaption></figure>Login</a> 
    </div>
  </nav>
  
  </header>

  <script>
  let nav = document.querySelector("nav");
    window.onscroll = function() {
      if(document.documentElement.scrollTop > 20){
        nav.classList.add("sticky");
      }else {
        nav.classList.remove("sticky");
      }
    }
  </script>

</body>
</html>
