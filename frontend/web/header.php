<link rel="stylesheet" href="./styles/styles.css">
<header>
  <div class="mast">
    <div class="brand">
        <a href="./index.php"><img class="logo" src="./images/test_flowers.png" alt="flowers" href="index.php"/></a>
      <a href="./index.php">
        <h1>Nails</h1>
        <p>BY BAILEY</p>
      </a>
    </div>
    <script>
      function showMenu() {
        document.getElementById("nav").classList.toggle("show");
      }
    </script>
    <div class="menu" onclick="showMenu()">
      <div class="bar"></div>
      <div class="bar"></div>
      <div class="bar"></div>
    </div>
  </div>
  <ul class="header-nav" id="nav">
    <li class="" id="home"><a href="index.php">Home</a></li>
    <li class="" id="gallery"><a href="gallery.php">Gallery</a></li>
    <li class="" id="services"><a href="services.php">Services</a></li>
    <li class="" id="schedule"><a href="schedule.php">Schedule</a></li>
    <li class="" id="contact"><a class="Contact" href="contact.php">Contact</a></li>
  </ul>
  <script src="./scripts/path.js"></script>
</header>