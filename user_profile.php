<?php 
include 'index.php';

?>
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
            <center><h2 class="text-primary"> <b>Registration Form</b></h2></center>
            <div class="form-group">
                <label for="fullname">Full Name:</label>
                <input type="text" class="form-control" id="fullname" name="fullname">
                <span id="errormsg1" class="error"></span>
            </div>
            <div class="form-group">
                <label for="dob">Date of Birth:</label>
                <input type="date" class="form-control" id="dob" name="dob">
                <span id="errormsg2" class="error"></span>
            </div>
            <div class="form-group col-12 p-0" style="display: flex; justify-content:space-between">
                <div class="p-0 col-5">
                    <label for="gender">Gender:</label>
                    <select class="form-control" id="gender" name="gender">
                        <option value="">Select</option>
                        <option value="1">Male</option>
                        <option value="2">Female</option>
                        <option value="3">Other</option>
                    </select>
                    <span id="errormsg3" class="error"></span>
                </div>
                <div class="p-0 col-5">
                    <label for="user">User Type:</label>
                    <select class="form-control" id="user" name="user">
                        <option value="">Select</option>
                        <option value="1">Admin</option>
                        <option value="2">Client</option>
                    </select>
                    <span id="errormsg4" class="error"></span>
                </div>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email">
                <span id="errormsg6" class="error"></span>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="tel" class="form-control" id="phone" name="phone">
                <span id="errormsg7" class="error"></span>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password">
                <span id="errormsg8" class="error"></span>
            </div>
            <div class="form-group">
                <label for="cpassword">Confirm Password:</label>
                <input type="password" class="form-control" id="cpassword" name="cpassword">
                <span id="errormsg9" class="error"></span>
            </div>
            <div class="form-group">
                <label for="idProof">Identification Proof:</label>
                <input type="file" class="form-control-file" id="idProof" name="idProof" accept="image/*">
                <span id="errormsg10" class="error"></span>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary" id="register">UPDATE</button>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function(){
            var userid = <?php echo $_SESSION['userid']; ?>;
            var setdata = "setdata";
            $.ajax({
                url : 'user_profile_update.php',
                data : {userid: userid, setdata: setdata}, 
                type : 'POST',
                success: function(response) {
                    var httpResponse = JSON.parse(response);
                    console.log(httpResponse);
                    $('#fullname').val(httpResponse[0].firstname);
                    $('#dob').val(httpResponse[0].dob);
                    $('#gender').val(httpResponse[0].gender);
                    $('#user').val(httpResponse[0].usertype);
                    $('#email').val(httpResponse[0].email);
                    $('#phone').val(httpResponse[0].phoneNum);
                    $('#cpassword').val(httpResponse[0].password);
                    $('#password').val(httpResponse[0].password);
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });

            $('#registrationForm').submit(function(e) {
                e.preventDefault();
                var form_data = $(this).serialize(); 
                var userid = <?php echo $_SESSION['userid']; ?>;
                var update = "update";
                comfirmMsg = confirm("Are you sure want to update your data")
                if(comfirmMsg){
                $.ajax({
                    url : 'update_profile.php',
                    data : {userid: userid, form_data: form_data, update: update}, 
                    type : 'POST',
                    success: function(response) {
                      try {
                            var httpResponse = JSON.parse(response);
                     console.log(httpResponse)

                            if(httpResponse['success'] === "Data updated successfully"){
                              alert('Your profile updated successfully')
                              location.reload()
                            }else{
                              console.log("error");
                            }
                        } catch (error) {
                            console.error("Error parsing JSON:", error);
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error("AJAX error:", error);
                    }
                });
              }else{
                return false
              }
            });
        });
    </script>