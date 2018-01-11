<?php include 'partials/header.php'; ?>
  <!-- Navbar -->
  <div class="navbar-fixed">
    <nav class="teal">
      <div class="nav-wrapper">
        <a href="home.php" data-activates="side-nav" class="nav-back button-collapse left"><i class="material-icons">menu</i></a>
        <a href="#!" class="main-brand hide-on-med-and-down">Carb Ninja</a>
        <a href="#!" class="brand-logo hide-on-med-and-up">Carb Ninja</a>
        <ul class="main-nav hide-on-med-and-down">
          <li><a href="#">Account</a></li>
          <li><a href="#">Messages</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="includes/logout.php">Log out</a></li>
        </ul>
      </div>
    </nav>
  </div>
  <ul class="side-nav" id="side-nav">
    <ul class="hide-on-med-and-down">
      <li><a href="#">Account</a></li>
      <li><a href="#">Messages</a></li>
      <li><a href="about.php">About</a></li>
      <li><a href="includes/logout.php">Log out</a></li>
    </ul>
    <div class="nav-card-panel teal z-depth-0">
      <i class="large material-icons teal-text text-darken-4">account_circle</i><br>
      <span class="white-text">Menu</span>
    </div>
    <li><a href="#"><i class="material-icons teal-text">person</i>Account</a></li>
    <li><a href="#"><i class="material-icons teal-text">message</i>Messages</a></li>
    <li><a href="about.php"><i class="material-icons teal-text">info_outline</i>About</a></li>
    <li><a href="index.php"><i class="material-icons teal-text">exit_to_app</i>Log out</a></li>
  </ul>

  <!-- Main Body -->
  <div class="container">
    <br>
    <div class="row center-align">
      <p class="flow-text">Welcome to Carb Ninja</p>
      <div class="grey-text">
        <div class="col s12 m6 offset-m3">
          <div class="input-field">
            <input placeholder="Search foods" id="search" type="search" class="validate">
          </div>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col s12 m6 offset-m3">
          <a href="newmeal.php" class="btn btn-large wide-btn waves-effect waves-light">New Meal <i class="material-icons right">chevron_right</i></a>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col s12 m6 offset-m3">
          <a href="viewmeal.php" class="btn btn-large wide-btn waves-effect waves-light">View Meals<i class="material-icons right">chevron_right</i></a>
        </div>
      </div>
    </div>
  </div>
<?php include 'partials/footer.php'; ?>
