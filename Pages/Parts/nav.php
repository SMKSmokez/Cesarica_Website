<?php
session_start();

$requestUri = strtolower(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$requestUri = rtrim($requestUri, '/');

$isHomePage = ($requestUri === '/home');
$showAnimation = $isHomePage;
?>
<link rel="stylesheet" href="CSS/nav.css">

<nav class="nav-bar">
  <span class="vert-line left-line"></span>
  <div class="nav-inner">
    <ul class="nav-menu">
      <li><a href="Home">Home</a></li>
      <li><a href="Cuisine">Cuisine</a></li>
      <li><a href="Menu">Menu</a></li>
      <li><a href="Wine">Wine Selection</a></li>
      <li><a href="Drinks">Drinks</a></li>
      <li><a href="Cigars">Cigars</a></li>
    </ul>
  </div>
  <span class="vert-line right-line"></span>
  <div class="events"><a href="Events"><img src="Images/events-svgrepo-com.svg" alt=""></a></div>
</nav>

<script>
document.addEventListener("DOMContentLoaded", function() {
  const navbar = document.querySelector('.nav-bar');
  const showAnimation = <?php echo $showAnimation ? 'true' : 'false'; ?>;
  console.log('showAnimation:', showAnimation);

  if (showAnimation) {
    console.log('Animation will run: removing "show" and adding it after 100ms');
    navbar.classList.remove('show'); // start hidden
    setTimeout(() => {
      navbar.classList.add('show'); // slide down animation
      console.log('Added "show" class');
    }, 100);
  } else {
    console.log('Showing navbar immediately');
    navbar.classList.add('show'); // show immediately on other pages
  }
});
</script>
