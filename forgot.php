<?php include 'partials/header.php'; ?>
  <!-- Navbar -->
  <div class="navbar-fixed">
    <nav class="teal">
      <div class="nav-wrapper">
        <a href="index.php" class="nav-back"><i class="material-icons">arrow_back</i></a>
        <a href="#!" class="main-brand hide-on-med-and-down">Forgot Password</a>
        <a href="#!" class="brand-logo hide-on-med-and-up">Forgot Password</a>
      </div>
    </nav>
  </div>
  <!-- Main Body -->
  <div class="container center-align">
    <br><br>
    <div class="row">
      <div class="col s12 m6 offset-m3">
        <p class="flow-text">Please enter the email address for your account</p>
        <br>
        <form action="forgot.php" method="post" class="col s12">
          <div class="row">
            <div class="input-field">
              <i class="material-icons prefix">mail</i>
              <input id="username" type="text" class="validate">
              <label for="username">Email</label>
            </div>
            <br>
          </div>
          <div class="row center-align">
            <div class="input-field">
              <a href="login.php" class="btn btn-large  wide-btn teal waves-effect waves light">Reset Password</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

<?php include 'partials/footer.php'; ?>
