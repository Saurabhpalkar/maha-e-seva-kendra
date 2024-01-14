<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        span{
            color: red;
        }
        .d-flex .container{
            padding: 2rem;
            border: 1px solid lightgrey;
        }
    </style>
</head>
<body>
    <div class="container col-12 m-5 d-flex" style="justify-content: center;">
    <div class="container col-5 send-otp-div ">
        <form id="send_otp_form" action="">
            <h3>forgot password</h3>
            <div>
                <input type="text" class="form-control" id="email" name="email" placeholder="enter your email address">
                <span id="error1"></span>
            </div>
            <div>
                <button type="submit" class="btn btn-primary" id="otp" name="otp">Send OTP</button>
            </div>
        </form>
    </div>
    <div class="container col-5 verify-otp-div " style="display:none ;" >
        <form  id="verifyForm">
            <h3>verify password</h3>
            <div>
                <input type="text" class="form-control" id="otp" name="otp" placeholder="enter your otp">
                <span id="otp_error"></span>
            </div>
            <div>
                <button type="submit" class="btn btn-primary" id="verfiy-otp" name="verfiy-otp" >verify OTP</button>
            </div>
        </form>
    </div>
    <div class="container col-5 pass-div " style="display: none ;" >
        <form  id="cpass_form">
            <h3>Change Password</h3>
            <div class="form-group">
                <input type="text" class="form-control" id="cpass" placeholder="Enter Your New Password" name="cpass">
                <span id="cpass_error"></span>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary form">change password</button>
            </div>
        </form>
    </div>
    </div>
</body>
</html>
<script>
    $(document).ready(function(){
        // alert()
        $('#send_otp_form').submit(function(e){
            e.preventDefault();
            var formdata = $(this).serialize();
            $.ajax({
                type : 'POST',
                url : "send_otp.php",
                data : formdata,
                success: function(response){
                    console.log(response)
                    if(response === "success"){
                        $("#error1").html("validate")
                        $(".verify-otp-div").show()
                        $(".send-otp-div").hide()
                        alert("OTP has been sended on your email")
                    }else{
                        $("#error1").html("not validate")
                        $(".verify-otp-div").hide()
                        $(".send-otp-div").show()

                    }
                }
            })
        })

    $('#verifyForm').submit(function(e){
        e.preventDefault();
        formdata = $(this).serialize();
        $.ajax({
            url : 'verify_otp.php',
            data : formdata,
            type : "POST",
            success : function(response){
                console.log(response);
                if(response==="success"){
                    alert("OPT verification successfull")
                    $('.pass-div').show()
                    $('.verify-otp-div').hide()
                    window.location.href = "index.php";
                }else{
                    $('#otp_error').html("enter incorrect OTP");
                    $('.pass-div').hide()
                    $('.verify-otp-div').show()

                }
            }
        })
    })
    $('#cpass_form').submit(function(e){
        e.preventDefault();
        var cpass_expr  = /^[a-zA-Z0-9!@#$%^&*]{6,16}$/;
        var cpass = $('#cpass').val();
        if(!cpass_expr.test(cpass)){
            $('#cpass_error').html("password should contain atleast one number and one special character");
            return false;
        }
        formdata =$(this).serialize();
        console.log(formdata);

        $.ajax({
            url : "change_pass.php",
            data :formdata,
            type : "POST",
            success : function(response){
                // console.log(response)
                if(response === "success"){
                    alert("password change successfully........!");
                    window.location.href = "login.php";

                }else{
                    console.log("ERROR...!")
                }
            }
        })
    })
})
    
</script>