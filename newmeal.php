<?php include 'partials/header.php'; ?>
  <!-- Navbar -->
  <div class="navbar-fixed">
    <nav class="teal">
      <div class="nav-wrapper">
        <a href="home.php" class="nav-back hide-on-med-and-up"><i class="material-icons">arrow_back</i></a>
        <a href="#!" class="main-brand hide-on-med-and-down">New Meal</a>
        <a href="#!" class="brand-logo hide-on-med-and-up">New Meal</a>
        <ul class="main-nav hide-on-med-and-down">
          <li><a href="#">Account</a></li>
          <li><a href="#">Messages</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="index.php">Log out</a></li>
        </ul>
      </div>
    </nav>
  </div>

  <!-- Main Body Content -->
  <div class="container">
    <br><br>
    <div class="row">
      <div class="col s12 m6 offset-m3">
        <form class="col s12" action="newmeal.php" method="post">
          <!-- meal name option -->
          <div class="row">
            <div class="input-field col s12">
              <input id="meal_name" type="text" class="validate">
              <label for="meal_name">Meal name</label>
            </div>
          </div>
          <!-- meal type option -->
          <div class="row">
            <div class="input-field col s12">
              <input id="meal_type" type="text" class="validate">
              <label for="meal_type">Meal type</label>
            </div>
          </div>
          <!-- date option -->
          <div class="row">
            <div class="input-field col s12">
              <input type="text" id="meal_date" class="datepicker">
              <label for="meal_date">Meal date</label>
            </div>
          </div>
          <!-- food item option -->
          <div class="row">
            <div class="input-field col s12">
              <input id="food_type" type="text" class="validate">
              <label for="food_type">Food item</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <button class="btn btn-large wide-btn waves-effect waves-light" type="submit" name="action">Save Meal
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
<?php include 'partials/footer.php'; ?>
