<!DOCTYPE html>
<html>

<head>
  <title>Maha e Sea Kendra</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/cssFile.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<style>
    .error {
      color: #F00;
      background-color: #FFF;

    }

    #sidebarMenu {
      display: none;
    }
    .required-show{
      color: #F00;

    }
    </style>
    </head>

<body>

  <div class="container col-5 border">

    <form id="registrationForm" method="POST" enctype="multipart/form-data">
      <h2 class=""> Registration Form</h2>
      <hr>
      <div class="alert alert-danger all_errors d-none" role="alert">
        Fields marked with (*) are required
    </div>
    <div class=" form-group">
          <label for="salutation">salutation: <span  class= required-show>*</span></label>
          <select class="form-control" id="salutation" name="salutation">
            <option value="">Select</option>
            <option value="1">Mr.</option>
            <option value="2">Mrs.</option>
            <option value="3">Miss.</option>
            <option value="4">Other</option>
          </select>
          <span id="errormsg3"></span>
        </div>
      <div class="form-group">
        <label for="fullname">Full Name : <span  class= required-show>*</span></label>
        <input type="text" class="form-control" id="fullname" name="fullname">
        <span id="errormsg1"></span>
      </div>
      <div class="form-group">
        <label for="dob">Date of Birth: <span  class= required-show>*</span></label>
        <input type="date" class="form-control" id="dob" name="dob">
        <span id="errormsg2"></span>
      </div>
      <div class="form-group col-12" style="padding:0px; display: flex; justify-content:space-between">
        <div class="p-0 col-5">
          <label for="gender">Gender: <span  class= required-show>*</span></label>
          <select class="form-control" id="gender" name="gender">
            <option value="">Select</option>
            <option value="1">Male</option>
            <option value="2">Female</option>
            <option value="3">Other</option>
          </select>
          <span id="errormsg3"></span>
        </div>
        <div class="p-0 col-5">
          <label for="user">Usertype: <span  class= required-show>*</span></label>
          <select class="form-control" id="user" name="user">
            <option value="">Select</option>
            <option value="1">Admin</option>
            <option value="2">Client</option>
          </select>
          <span id="errormsg4"></span>
        </div>
      </div>
      <div class="form-group">
        <label for="email">Email: <span  class= required-show>*</span></label>
        <input type="email" class="form-control" id="email" name="email">
        <span id="errormsg6"></span>
      </div>
      <div class="form-group">
        <label for="phone">Phone Number: <span  class= required-show>*</span></label>
        <input type="tel" class="form-control" id="phone" name="phone">
        <span id="errormsg7"></span>
      </div>
      <div class="form-group">
        <label for="password">Password: <span  class= required-show>*</span></label>
        <input type="password" class="form-control" id="password" name="password">
        <span id="errormsg8"></span>
      </div>
      <div class="form-group">
        <label for="cpassword">Confirm Password: <span  class= required-show>*</span></label>
        <input type="password" class="form-control" id="cpassword" name="cpassword">
        <span id="errormsg9"></span>
      </div>
      <div class="form-group">
        <label for="idProof">Identification Proof: <span  class= required-show>*</span></label>
        <input type="file" class="form-control-file" id="idProof" name="idProof">
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

  <script>
    $(document).ready(function() {
      $('#registrationForm').submit(function(event) {
        event.preventDefault();

        var fullname = $('#fullname').val();
        var dob = $('#dob').val();
        var gender = $('#gender').val();
        var user = $('#user').val();
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

        if (dob === '') {
          $('#errormsg2').addClass('error').html('Please enter your date of birth.');
          flag = 1;
        } else {
          $('#errormsg2').removeClass('error').html('');
        }

        if (gender === '') {
          $('#errormsg3').addClass('error').html('Please select your gender.');
          flag = 1;
        } else {
          $('#errormsg3').removeClass('error').html('');
        }

        if (user === '') {
          $('#errormsg4').addClass('error').html('Please select your user type.');
          flag = 1;
        } else {
          $('#errormsg4').removeClass('error').html('');
        }

        if (email.trim() === '') {
          $('#errormsg6').addClass('error').html('Please enter your email address.');
          flag = 1;
        } else if (!emailRegex.test(email)) {
          $('#errormsg6').addClass('error').html('Please enter a valid email address.');
          flag = 1;
        } else {
          $('#errormsg6').removeClass('error').html('');
        }

        if (phone.trim() === '') {
          $('#errormsg7').addClass('error').html('Please enter your phone number.');
          flag = 1;
        } else if (!/^\d{10}$/.test(phone)) {
          $('#errormsg7').addClass('error').html('Mobile number should be 10 digits.');
          flag = 1;
        } else {
          $('#errormsg7').removeClass('error').html('');
        }

        if (password === '') {
          $('#errormsg8').addClass('error').html('Please enter your password.');
          flag = 1;
        } else {
          $('#errormsg8').removeClass('error').html('');
        }
        if (password !== cpassword) {
          $('#errormsg9').addClass('error').html('Password and confirm password should be the same.');
          flag = 1;
        } else {
          $('#errormsg9').removeClass('error').html('');
        }

        if (idProof === '') {
          $('#errormsg10').addClass('error').html('Please select your identification proof.');
          flag = 1;
        } else {
          $('#errormsg10').removeClass('error').html('');
        }

        if (flag === 1) {
          $('.all_errors').css('display', 'block');
          // alert("Something went wrong. Please check the form for errors.");
        } else {
          var formData = new FormData(this);
          var salutation_val = $('select[name="salutation"] option:selected').val();
          var salutation_txt = $('select[name="salutation"] option:selected').text();
          // console.log(formData);
          formData.append('salutation_val', salutation_val);
        formData.append('salutation_txt', salutation_txt);

          $.ajax({
            url: 'registration_insert.php',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            dataType: 'json',

            success: function(response) {
              // var httpResponse = JSON.parse('response');
              console.log(response.message);
              if(response.status === "wrong_extn"){
                alert("Invalid file extension. Allowed extensions are JPG, JPEG, PNG, PDF.")
              }else if(response.status==="success"){
                alert("Registration successful")
                window.location.href = 'login.php'
              }else{
                alert(response.message)
              }
              // console.log(httpResponse['status']);
              // if (response !== "Registration successful") {
              //   alert("Error occurred during registration.");
              // } else {
              //   alert("Registration successful!");
              // }
            },
            error: function() {
              alert('Error occurred while processing the registration.');
            }
          });
        }
      });
    });
  </script>
</body>
</html>
