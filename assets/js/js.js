<script>
function myFunction() {
  var x = document.getElementById("menu");
  if (x.className === "menu-item") {
    x.className += " responsive";
  } else {
    x.className = "menu-item";
  }
}
</script>