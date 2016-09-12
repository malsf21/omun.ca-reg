<nav class="navbar navbar-default">
  <a class="navbar-brand" href="index.php">OMUN Online Registration</a>
  <?php if (!(empty($_SESSION["school"]))){ ?>
  <div class="navbar-right">
    <a href="actions/logout.php">Logout</a>
  </div>
  <?php }?>
</nav>
