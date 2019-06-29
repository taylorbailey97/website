let url = window.location.pathname;
console.log(url);
switch (url) {
  case "/web/index.php":
    document.getElementById("home").classList.toggle("active");
    break;
  case "/web/gallery.php":
    document.getElementById("gallery").classList.toggle("active");
    break;
  case "/web/services.php":
    document.getElementById("services").classList.toggle("active");
    break;
  case "/web/schedule.php":
    document.getElementById("schedule").classList.toggle("active");
    break;
  case "/web/contact.php":
    document.getElementById("contact").classList.toggle("active");
    break;
  default:
    break;
}
