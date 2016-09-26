<nav class="navbar navbar-default">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">OMUN Online Registration</a>
    <ul class="nav navbar-nav navbar-right">
      <?php if (!(empty($_SESSION["school"]))){ ?>
      <li><a href="actions/logout.php">Logout</a></li>
      <?php } else{ ?>
      <li><a href="https://omun.ca">Back to OMUN</a></li>
      <?php } ?>
    </ul>
  </div>
</nav>
