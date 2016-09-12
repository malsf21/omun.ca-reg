<nav class="navbar navbar-default">
  <a class="navbar-brand" href="index.php">OMUN Online Registration</a>
  <?php if (!(empty($_SESSION["school"]))){ ?>
  <ul class="nav navbar-nav navbar-right">
    <li><a href="actions/logout.php">Logout</a></li>
  </ul>
  <?php }?>
</nav>
