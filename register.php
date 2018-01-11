
<?php include 'partials/header.php'; ?>
  <!-- Navbar -->
  <div class="navbar-fixed">
    <nav class="teal">
      <div class="nav-wrapper">
        <a href="index.php" class="nav-back"><i class="material-icons">arrow_back</i></a>
        <a href="#!" class="main-brand hide-on-med-and-down">Register</a>
        <a href="#!" class="brand-logo hide-on-med-and-up">Register</a>
      </div>
    </nav>
  </div>

  <!-- Main Body -->
  <div class="container center-align">
    <br><br>
    <div class="row">
      <div class="col s12 m6 offset-m3">
        <form action="includes/signup.php" method="post" class="col s12">
          <div class="row">
            <div class="input-field">
              <i class="material-icons prefix">person</i>
              <input id="username" type="text" name="user_name" class="validate">
              <label for="username">Username</label>
            </div>
            <div class="input-field">
              <i class="material-icons prefix">mail</i>
              <input id="email" type="email" name="user_email" class="validate">
              <label for="username">Email</label>
            </div>
            <div class="input-field">
              <i class="material-icons prefix">lock</i>
              <input id="password" type="password" name = "user_password" autocomplete="off" class="validate">
              <label for="password">Password</label>
            </div>
            <br>
          </div>
          <div class="row center-align">
            <div class="input-field">
              <button type="submit" name="register" class="btn btn-large  wide-btn teal waves-effect waves light">Sign up</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="reg-btn teal lighten-3 center-align waves-effect">
    <a class="btn-flat btn-large white-text" href="login.php">Sign in</a>
  </div>
<?php include 'partials/footer.php'; ?>
