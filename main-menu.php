<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Site.test</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
	  <li class="nav-item active">
        <a class="nav-link" href="/">Главная</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="subjects.php">Предметы</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="groups.php">Группы</a>
    </li>
    </ul>

    <div class="dropdown">
      <button style="min-width: 160px;" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php print_r($_SESSION['auth']); ?>
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="/login/logout.php">Выйти</a>
      </div>
    </div>

  </div>
</nav>
