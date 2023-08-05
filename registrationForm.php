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
  <style>
    .error {
      color: #F00;
      background-color: #FFF;

    }

    #sidebarMenu {
      display: none;
    }
  </style>
  <div class="container col-5 border">

    <form id="registrationForm" method="POST">
      <h2 class=""> Registration Form</h2>
      <div class="form-group">
        <label for="fullname">Full Name:</label>
        <input type="text" class="form-control" id="fullname" name="fullname">
        <span id="errormsg1"></span>
      </div>
      <div class="form-group">
        <label for="dob">Date of Birth:</label>
        <input type="date" class="form-control" id="dob" name="dob">
        <span id="errormsg2"></span>
      </div>
      <div class="form-group col-12" style="display: flex; justify-content:space-between">
        <div class="p-0 col-5">
          <label for="gender">Gender:</label>
          <select class="form-control" id="gender" name="gender">
            <option value="">Select</option>
            <option value="1">Male</option>
            <option value="2">Female</option>
            <option value="3">Other</option>
          </select>
          <span id="errormsg3"></span>
        </div>
        <div class="p-0 col-5">
          <label for="user">Usertype:</label>
          <select class="form-control" id="user" name="user">
            <option value="">Select</option>
            <option value="1">Admin</option>
            <option value="2">Client</option>
          </select>
          <span id="errormsg4"></span>
        </div>
      </div>
      <!-- <div class="form-group">
        <label for="address">Address:</label>
        <textarea class="form-control" id="address" name="address" rows="4" ></textarea>
        <span id="errormsg5"></span>
      </div> -->
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email">
        <span id="errormsg6"></span>
      </div>
      <div class="form-group">
        <label for="phone">Phone Number:</label>
        <input type="tel" class="form-control" id="phone" name="phone">
        <span id="errormsg7"></span>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control" id="password" name="password">
        <span id="errormsg8"></span>
      </div>
      <div class="form-group">
        <label for="password">Confirm Password:</label>
        <input type="password" class="form-control" id="cpassword" name="cpassword">
        <span id="errormsg9"></span>
      </div>
      <div class="form-group">
        <label for="idProof">Identification Proof:</label>
        <input type="file" class="form-control-file" id="idProof" name="idProof" accept="image/*">
        <span id="errormsg10"></span>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary" id="register">Register</button>
      </div>
      <div class="form-group">
        <p>Already registered? <a href="login.php">Login here</a></p>
      </div>
    </form>
  </div>

</body>

</html>
<script>
  $(document).ready(function() {
    $('#registrationForm').submit(function(event) {
      event.preventDefault();

      // var form = $(this);
      // var formData = form.serialize(); 

      var fullname = $('#fullname').val();
      var dob = $('#dob').val();
      var gender = $('#gender').val();
      var user = $('#user').val();
      //   var address = $('#address').val();
      var email = $('#email').val();
      var phone = $('#phone').val();
      var password = $('#password').val();
      var cpassword = $('#cpassword').val();
      var idProof = $('#idProof').val();
      var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      var flag = 0;

      if (fullname.trim() === '') {
        $('#errormsg1').addClass('error').html('Please enter your full name.');
        flag = 1;
      } else {
        $('#errormsg1').removeClass('error').html('');
      }

      //   if (dob === '') {
      //     $('#errormsg2').addClass('error').html('Please enter your date of birth.');
      //     flag = 1;
      //   } else {
      //     $('#errormsg2').removeClass('error').html('');
      //   }

      //   if (gender === '') {
      //     $('#errormsg3').addClass('error').html('Please select your gender.');
      //     flag = 1;
      //   } else {
      //     $('#errormsg3').removeClass('error').html('');
      //   }

      //   if (user === '') {
      //     $('#errormsg4').addClass('error').html('Please select your user type.');
      //     flag = 1;
      //   } else {
      //     $('#errormsg4').removeClass('error').html('');
      //   }

      // //   if (address.trim() === '') {
      // //     $('#errormsg5').addClass('error').html('Please enter your address.');
      // //     flag = 1;
      // //   } else {
      // //     $('#errormsg5').removeClass('error').html('');
      // //   }

      //   if (email.trim() === '') {
      //     $('#errormsg6').addClass('error').html('Please enter your email address.');
      //     flag = 1;
      //   } else if (!emailRegex.test(email)) {
      //     $('#errormsg6').addClass('error').html('Please enter a valid email address.');
      //     flag = 1;
      //   } else {
      //     $('#errormsg6').removeClass('error').html('');
      //   }

      //   if (phone.trim() === '') {
      //     $('#errormsg7').addClass('error').html('Please enter your phone number.');
      //     flag = 1;
      //   } else if (!/^\d{10}$/.test(phone)) {
      //     $('#errormsg7').addClass('error').html('Mobile number should be 10 digits.');
      //     flag = 1;
      //   } else {
      //     $('#errormsg7').removeClass('error').html('');
      //   }

      //   if (password === '') {
      //     $('#errormsg8').addClass('error').html('Please enter your password.');
      //     flag = 1;
      //   } else {
      //     $('#errormsg8').removeClass('error').html('');
      //   }

      //   if (password !== cpassword) {
      //     $('#errormsg9').addClass('error').html('Password and confirm password should be the same.');
      //     flag = 1;
      //   } else {
      //     $('#errormsg9').removeClass('error').html('');
      //   }

      //   if (idProof === '') {
      //     $('#errormsg10').addClass('error').html('Please select your identification proof.');
      //     flag = 1;
      //   } else {
      //     $('#errormsg10').removeClass('error').html('');
      //   }

      if (flag === 1) {
        alert("Something went wrong. Please check the form for errors.");
      } else {
        
          var formData = $(this).serialize(); // Serialize the form data

          $.ajax({
            url: 'registration_insert.php', // Replace with the PHP file path
            type: 'POST',
            data: formData,
            success: function(response) {
              console.log(response);
              if (response !== "Registration successful") {
                alert("Error occurred during registration.");
              } else {
                alert("Registration successful!");
                // Perform any additional actions or redirect to a success page
              }
            },
            error: function() {
              alert('Error occurred while processing the registration.');

            }
          });
      }
    });
  });
</script>