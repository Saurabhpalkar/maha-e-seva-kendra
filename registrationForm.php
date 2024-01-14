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

    .required-show {
      color: #F00;

    }

    .option2-container,
    .option1-container,
    .btn-container {
      display: none;
    }
  </style>
</head>

<body>
  <div>
    <form id="registrationForm" method="POST" enctype="multipart/form-data">
      <div>
        <div class="container col-6 form-group d-flex justify-content-around">
          <div class="col-3 form-group border p-5">
            <label for="option1">Option-1</label>
            <input type="radio" value="1" name="option" class="optionscheck form-control" id="option1">
            <span id="errormsg12"></span>
          </div>
          <div class="col-3 form-group border p-5">
            <label for="option2">Option-2</label>
            <input type="radio" value="2" name="option" class="optionscheck form-control" id="option2">
            <span id="errormsg13"></span>
          </div>
        </div>
        <div class="container col-4 form-group option1-container">
          <fieldset class="border p-3">
            <legend class="bg-success p-1 text-white form-group legend-heading">Email ID. & Username Verification</legend>
            <!-- <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4"> -->
            <!-- <form id=""> -->
            <div class=" form-group form-group">
              <label for="district1">District:</label>
              <select name="district1" class="form-control" id="district1">
                <option value="1">Maharashtra</option>
                <span id="errormsg14"></span>
              </select>
            </div>
            <div class=" form-group">
              <label for="email1">Email ID:</label>
              <input type="text" name="email1" class="form-control" id="email1" require>
              <span id="errormsg15"></span>
            </div>
            <div class=" form-group">
              <input type="button" name="send-otp" onclick="sendOtp()" id="send-otp" value="SEND OTP" class="btn btn-primary">
            </div>
            <input type="hidden" id="otp_check" value="">
            <div class=" form-group">
              <label for="otp">OTP:</label>
              <input type="text" name="otp" class="form-control" id="otp" require>
              <span id="errormsg16"></span>
            </div>
            <div class=" form-group">
              <label for="password1">Password:</label>
              <input type="password" name="password1" class="form-control" id="password1">
              <span id="errormsg17"></span>
            </div>
            <!-- <div class=" form-group">
              <label for="username1">Username:</label>
              <input type="text" name="username1" class="form-control" id="username1">
              <span id="errormsg18"></span>
            </div> -->

            <!-- </form> -->
            <!-- </div> -->
          </fieldset>

        </div>
      </div>

      <div class="container col-4 form-group option2-container">
        <fieldset class="border p-3">
          <legend class="bg-success p-1 text-white form-group legend-heading">Registration Form</legend>

          <div class="alert alert-danger all_errors d-none" role="alert">
            Fields marked with (*) are required
          </div>
          <div class=" form-group">
            <label for="salutation">salutation: <span class=required-show>*</span></label>
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
            <label for="fullname">Full Name : <span class=required-show>*</span></label>
            <input type="text" class="form-control" id="fullname" name="fullname">
            <span id="errormsg1"></span>
          </div>
          <div class="form-group">
            <label for="dob">Date of Birth: <span class=required-show>*</span></label>
            <input type="date" class="form-control" id="dob" name="dob">
            <span id="errormsg2"></span>
          </div>
          <div class="form-group col-12" style="padding:0px; display: flex; justify-content:space-between">
            <div class="p-0 col-5">
              <label for="gender">Gender: <span class=required-show>*</span></label>
              <select class="form-control" id="gender" name="gender">
                <option value="">Select</option>
                <option value="1">Male</option>
                <option value="2">Female</option>
                <option value="3">Other</option>
              </select>
              <span id="errormsg3"></span>
            </div>
            <div class="p-0 col-5">
              <label for="user">Usertype: <span class=required-show>*</span></label>
              <select class="form-control" id="user" name="user">
                <option value="">Select</option>
                <option value="1">Admin</option>
                <option value="2">Client</option>
              </select>
              <span id="errormsg4"></span>
            </div>
          </div>
          <div class="form-group">
            <label for="email">Email: <span class=required-show>*</span></label>
            <input type="email" class="form-control" id="email" name="email" require>
            <span id="errormsg6"></span>
          </div>
          <div class="form-group">
            <label for="phone">Phone Number: <span class=required-show>*</span></label>
            <input type="tel" class="form-control" id="phone" name="phone">
            <span id="errormsg7"></span>
          </div>
          <div class="form-group">
            <label for="password">Password: <span class=required-show>*</span></label>
            <input type="password" class="form-control" id="password" name="password">
            <span id="errormsg8"></span>
          </div>
          <div class="form-group">
            <label for="cpassword">Confirm Password: <span class=required-show>*</span></label>
            <input type="password" class="form-control" id="cpassword" name="cpassword">
            <span id="errormsg9"></span>
          </div>
          <div class="form-group">
            <label for="profile_photo">Profile Photo: <span class=required-show>*</span></label>
            <input type="file" class="form-control-file" id="profile_photo" name="profile_photo">
            <span id="errormsg11"></span>
          </div>
          <div class="form-group">
            <label for="idProof">Identification Proof: <span class=required-show>*</span></label>
            <input type="file" class="form-control-file" id="idProof" name="idProof">
            <span id="errormsg10"></span>
          </div>

        </fieldset>
      </div>
    <div class="container col-4 form-group btn-container">
      <div class="form-group">
        <button type="submit" class="btn btn-primary" id="register">Register</button>
      </div>
      <div class="form-group">
        <p>Already registered? <a href="login.php">Login here</a></p>
      </div>
    </div>
    </form>

  </div>
  <script>
    // send Otp function ============================
    function sendOtp(){
      var email = $('#email1').val()
      var registration_option1 = $("#send-otp").val();
      
      alert(registration_option1)
      $.ajax({
                type : 'POST',
                url : "send_otp.php",
                data : {email : email, registration_option1: registration_option1},
                success: function(response){
                  httpResponse = JSON.parse(response)
                    console.log(httpResponse.status)
                    if(response === "success"){
                        $("#errormsg15").html("validate")
                        // $(".verify-otp-div").show()
                        // $(".send-otp-div").hide()
                        alert("OTP has been sended on your email")
                      
                      }else if(httpResponse.status === "success"){
                        var otp_check = httpResponse.otp;
                        alert("OTP sended");
                        $('#otp_check').val(otp_check)
                      }else{
                        $("#errormsg15").html("not validate")
                        // $(".verify-otp-div").hide()
                        // $(".send-otp-div").show()

                    }
                }
            })
    }
    $(document).ready(function() {
      $('.optionscheck').change(function() {
        if ($(this).is(":checked")) {
          selectedOption = $(this).val();
          $('.btn-container').show()
          if (selectedOption == 2) {
            $('.option2-container').show()
            $('.option1-container').hide()
          } else {
            $('.option2-container').hide()
            $('.option1-container').show()
          }
        }
      })
      $('#registrationForm').submit(function(event) {
        event.preventDefault();
        if (selectedOption == 2) {

          var fullname = $('#fullname').val();
          var dob = $('#dob').val();
          var gender = $('#gender').val();
          var user = $('#user').val();
          var email = $('#email').val();
          // alert(email1)
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
        } else {
          var district1 = $('#district1').val();
          var email1 = $('#email1').val();
          var otp = $('#otp').val();
          var username1 = $('#username1').val();

          if (email1 === '') {
            $('#errormsg15').addClass('error').html('Please enter your email address');
            flag = 1;
          } else {
            $('#errormsg15').removeClass('error').html('');
          }
          
        
        }
        if (flag === 1) {
          // alert(selectedOption)

          $('.all_errors').css('display', 'block');
          // alert("Something went wrong. Please check the form for errors.");
        } else {
          otp = $('#otp').val()
          otp_check = $('#otp_check').val();
          if(otp !== otp_check){
            alert("incorrect otp");
            return false;
          }
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
              if (response.status === "wrong_extn") {
                alert("Invalid file extension. Allowed extensions are JPG, JPEG, PNG, PDF.")
              } else if (response.status === "success") {
                alert("Registration successful")
                window.location.href = 'login.php'
              } else if (response.status === "email exists") {
                alert("Email already Exists")
              } else {
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