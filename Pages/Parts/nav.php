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
    <!-- Hamburger button for mobile -->
    <div class="hamburger" id="hamburger">
      <span></span>
      <span></span>
      <span></span>
    </div>

    <ul class="nav-menu" id="nav-menu">
      <li><a href="Home">Home</a></li>
      <li><a href="Cuisine">Cuisine</a></li>
      <li><a href="Menu">Menu</a></li>
      <li><a href="Wine">Wine Selection</a></li>
      <li><a href="Drinks">Drinks</a></li>
      <li><a href="Cigars">Cigars</a></li>
    </ul>
  </div>

  <span class="vert-line right-line"></span>

  <div class="events">
    <a href="Events"><img src="Images/events-svgrepo-com.svg" alt=""></a>
  </div>
</nav>

<script>
document.addEventListener("DOMContentLoaded", function() {
  const navbar = document.querySelector('.nav-bar');
  const hamburger = document.getElementById('hamburger');
  const navMenu = document.getElementById('nav-menu');
  const showAnimation = <?php echo $showAnimation ? 'true' : 'false'; ?>;

  // Desktop animation
  if (showAnimation) {
    navbar.classList.remove('show');
    setTimeout(() => navbar.classList.add('show'), 100);
  } else {
    navbar.classList.add('show');
  }

  // Mobile menu toggle
  hamburger.addEventListener('click', () => {
    navMenu.classList.toggle('active');
    hamburger.classList.toggle('open');
  });
});
</script>
