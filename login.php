<!DOCTYPE html>
<html>
<head>
  <title>Maha e Sea Kendra</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/cssFile.css">
  <script src="js/js.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <style></style>
</head>
<body>
  <div class="container col-4 d-flex border" style="justify-content: center;">
    <div class="container col-12">
      <h2 class="mt-5">Login</h2>
      <form id="loginForm">
        <div class="form-group">
          <label for="username">Username:</label>
          <input type="text" class="form-control" id="username" name="username" required>
        </div>
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
        <a href="fogot_password.php">Forgot Password</a>
      </form>
      <div class="form-group">
        <p>New User? <a href="registrationForm.php">Register here</a></p>
      </div>
    </div>
  </div>
</body>
</html>

<script>
   $(document).ready(function() {
    $('#loginForm').submit(function(event) {
      event.preventDefault(); 

      var formData = $(this).serialize();

      $.ajax({
        url: 'login_process.php',
        type: 'POST',
        data: formData,
        success: function(response) {
          console.log(response);
          if (response === 'success') {
          alert('Login successful');
          window.location.href = 'dashboard.php';
        } else {
          alert('Login failed');
        }
        }
      });
    });
  });
</script>
