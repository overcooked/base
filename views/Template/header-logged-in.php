<nav class="navbar navbar-default" id="header-bar">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">

      <!-- Responsive Menu Toggle -->
      <button type="button" class="navbar-toggle collapsed" id="header-collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <!-- Brand Logo -->
      <a class="navbar-brand" href="/index.php">
        <img class="img-responsive" id="header-logo" src="/public/assets/images/overcooked-logo.svg" alt="Overcooked Logo">
      </a>

      <!-- For the placeholder typing script -->
      <script>
        var strings = new Array("Search for food!", "Canned goods", "Fresh fruit", "Boxed pasta");
        var typingSpeed = 150;
        var deleteSpeed = 150;
        var isLoop = true;
        var waitTime = 3000;
        var isPlaceholder = true;
      </script>

      <!-- Search Bar -->
      <form class="navbar-form navbar-left" id="header-search">
        <div class="input-group">
          <span class="input-group-addon" id="search-icon">
            <span class="ss-icon">search</span>
          </span>
          <input type="text" class="form-control" id="header-search-input">
        </div>
      </form>

    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <ul class="nav navbar-nav navbar-right">
        <li><a href="/post.php" class="btn btn-default navbar-btn" id="header-post-btn">Post</a></li>

        <li class="dropdown">
          <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Profile <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href='/profile.php'>Profile</a></li>
            <li><a href='/update.php'>Update Info</a></li>
            <li><a href='/changepassword.php'>Change Password</a></li>
            <li role="separator" class="divider"></li>
            <li><a href='/logout.php'>Logout</a></li>
          </ul>
        </li>

      </ul>

    </div> <!-- /.navbar-collapse -->
  </div> <!-- /.container-fluid -->
</nav>
