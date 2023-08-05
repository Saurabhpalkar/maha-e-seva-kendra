<?php
include 'index.php';
?>
    <div class="container border col-5">
        <h3> Register User</h3>
        <hr>
        <form id="registerForm">
        <div class="form-group">
            <label for="fname">firstname</label>
            <input type="text" class="form-control" name="fname" id="fname">
        </div>

        <div class="form-group">
        <label for="age">Age</label>
            <input type="text"class="form-control" name="age" id="age">
        </div>
        <div class="form-group">
            <label for="dob">DOB</label>
            <input type="date" class="form-control" name="dob" id="dob">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email" id="email">
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="text" class="form-control" name="pass" id="pass">
        </div>
        <input type="submit" class="btn btn-primary" id="submitbtn">
    </form>
    </div>
<button id="btn">ok</button>
</body>
</html>

<script>
    $(document).ready(function(){
$('#btn').click(function(){
    alert()
})
        $('#submitbtn').submit(function(event){
            event.preventDefault()
        alert()
        var formdata = $('#registerForm').serialize();
        $.ajax({
            url : 'userInsert.php',
            data : formdata,
            type : 'POST',
            success:function(response){
                console.log(response)
            }
        })
    })
    })
</script>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> -->
