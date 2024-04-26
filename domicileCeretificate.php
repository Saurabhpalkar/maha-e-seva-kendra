<?php
include 'include/connection.php';
include 'index1.php';
?>

<!-- <div class=" col-12 col-sm-12 col-xl-12 col-xxl-12 col-md-12 "> -->
   



    <!--------------- domicile Certificate Insert------------------------------ -->
    <div class=" col-12 col-sm-12 col-xl-12 col-xxl-12 col-md-12">
    <center class="form-group ">
        <h2 class="text-success"><b> Age Nationality And Domicile Certificate </b> </h2>
    </center>
        <form id="myform" action="" method="POST">
            <div class="col-12 form-group ">
                <fieldset class="border " style="padding: 3rem 1rem;background: white;">

                    <label for="">Certificate Name <span class="requied_filed">*</span> </label>
                    <select class="form-control" name="certificate_types" id="certificate_types">
                        <option value="2">Age Domical Certificate</option>
                        <option value="3">Nationality Certifiacte</option>
                        <option value="4">Domical Certifiacte</option>
                    </select>
                    <span class="error-msg1 alert-danger" role="alert"></span>
                </fieldset>
            </div>
            <div class="col-12 form-group  details-container">
                <fieldset class="border">
                    <legend class="bg-primary legend-heading">Applicant Details</legend>
                    <div class="col-md-4 form-group">
                        <label for="">Salutation<span class="requied_filed">*</span> </label>
                        <select name="applicant_salutation" id="applicant_salutation" class="form-control">
                            <option value="">--select--</option>
                            <?php
                            $query = "SELECT * FROM salutation_table";
                            $res = mysqli_query($connection, $query);
                            while ($rows = mysqli_fetch_assoc($res)) {
                                echo "<option value='" . $rows['id'] . "'>" . $rows['salutation'] . "</option>";
                            }
                            ?>
                        </select>
                        <span class="error-msg2 alert-danger" role="alert"></span>

                    </div>
                    <div class="col-md-4 form-group">
                        <label for="">Full Name(English)<span class="requied_filed">*</span> </label>
                        <input type="text" name="applicant_name" id="applicant_name" class="form-control">
                        <span class="error-msg3 alert-danger" role="alert"></span>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="">Father's Name(English)<span class="requied_filed">*</span> </label>
                        <input type="text" name="father_name" id="father_name" class="form-control">
                        <span class="error-msg4 alert-danger" role="alert"></span>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="">Date of Birth<span class="requied_filed">*</span> </label>
                        <input type="date" name="applicant_dob" id="applicant_dob" class="form-control">
                        <span class="error-msg5 alert-danger" role="alert"></span>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="">Age<span class="requied_filed">*</span> </label>
                        <input type="number" name="applicant_age" id="applicant_age" class="form-control">
                        <span class="error-msg6 alert-danger" role="alert"></span>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="">Mobile Number<span class="requied_filed">*</span> </label>
                        <input type="number" name="applicant_num" id="applicant_num" class="form-control">
                        <span class="error-msg7 alert-danger" role="alert"></span>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="">Gender : <span class="requied_filed">*</span> </label>
                        <select class="form-control" name="applicant_gender" id="applicant_gender">
                            <option value="">--select--</option>
                            <option value="1">male</option>
                            <option value="2">female</option>
                            <!-- <option value="1"></option> -->
                        </select>
                        <span class="error-msg8 alert-danger" role="alert"></span>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="">Email ID<span class="requied_filed">*</span> </label>
                        <input type="email" name="applicant_email" id="applicant_email" class="form-control">
                        <span class="error-msg9 alert-danger" role="alert"></span>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="occupation">Occupation<span class="requied_filed">*</span> </label>
                        <select class="form-control" name="occupation" id="occupation">
                            <option value="">--select--</option>
                            <option value="1">Farmer</option>
                            <option value="2">Car pentor</option>
                            <option value="2">developer</option>
                        </select>
                        <span class="error-msg10 alert-danger" role="alert"></span>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="">Aadhar No<span class="requied_filed">*</span> </label>
                        <input type="text" name="applicant_adhaar" id="applicant_adhaar" class="form-control">
                        <span class="error-msg11 alert-danger" role="alert"></span>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="">Applicant Nationality<span class="requied_filed">*</span> </label>
                        <input type="text" name="applicant_natilanality" id="applicant_nation" class="form-control">
                        <span class="error-msg12 alert-danger" role="alert"></span>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="">Residing at present address since?<span class="requied_filed">*</span> </label>
                        <select name="" id="" class="form-control">
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                        </select>
                        <span class="error-msg13 alert-danger" role="alert"></span>
                    </div>
                    <div class="col-md-4 form-group submit-btn">
                        <input type="submit" name="submit" class="form- btn btn-success" value="submit" id="submit_btn">
                    </div>
                    <?php include "btns_module.php"; ?>

                </fieldset>
            </div>
            <input type="hidden" name="doc_id" id="doc_id">
            <input type="hidden" name="doc_type" id="doc_type">

            <!-- <div class="col-10 form-group  Address-container">
            <fieldset class="border">
                <legend class="bg-primary legend-heading">Applicant Address</legend>
            </fieldset>
        </div>
        <div class="col-10 form-group  Beneficiary-container">
            <fieldset class="border">
                <legend class="bg-primary legend-heading">Beneficiary Details</legend>
            </fieldset>
        </div>
        <div class="col-10 form-group  Birth-container">
            <fieldset class="border">
                <legend class="bg-primary legend-heading">Birth Details</legend>
               
            </fieldset>
        </div>
        <div class="col-10 form-group  details-container">
            <fieldset class="border">
                <legend class="bg-primary legend-heading">
                Education Details of Beneficiary </legend>
            </fieldset>
        </div>
        <div class="col-10 form-group  details-container">
            <fieldset class="border">
                <legend class="bg-primary legend-heading">
                Has beneficiary migrated from a different state? (Yes/No)
             </legend>
            </fieldset>
        </div>
        <div class="col-10 form-group  details-container">
            <fieldset class="border">
                <legend class="bg-primary legend-heading">
                Whether applicant is beneficiary of government scheme in other district? If yes, provide the details of the place
            </legend>
            </fieldset>
        </div>
        <div class="col-10 form-group  details-container">
            <fieldset class="border">
                <legend class="bg-primary legend-heading">
                Certificate </legend>
            </fieldset>
        </div>
        <div class="col-10 form-group  details-container">
            <fieldset class="border">
                <legend class="bg-primary legend-heading">
                Agreement </legend>
            </fieldset>
        </div> -->
        </form>
    </div>
<!-- </div> -->
</div>
</div>
</div>
<style>
    .legend-heading {
        padding: 1rem;
    }

    .requied_filed {
        color: red;
    }

    fieldset {
        background-color: white;
    }
</style>

<div class="col-12 col-sm-12 col-xl-12 col-xxl-12 col-md-12" style="padding:0">
    <?php include 'include/footer.php' ?>
</div>
<script>
    $('.btn-continue').click(function() {
        alert()
        $('.d-none').show
    })
    //  $(document).ready(function() {
    //   $('#myform').submit(function(event) {
    // event.preventDefault();


    $(document).ready(function() {
        function formValidation() {
            var isValid = true;
            var certificateType = $('#certificate_types option:selected').val();
            if (certificateType === '') {
                isValid = false;
                $('#certificate_types').addClass('is-invalid');
                $('.error-msg1').text('Please select your document type');
            } else {
                $('#certificate_types').removeClass('is-invalid');
                $('.error-msg1').text('');
            }


            // Check if salutation is selected
            var salutation = $('#applicant_salutation option:selected').val();
            if (salutation == '') {
                isValid = false;
                $('.error-msg2').addClass('is-invalid');
                $('.error-msg2').text('Please select your salutation');

            } else {
                $('.error-msg2').removeClass('is-invalid');
                $('.error-msg2').text('');

            }

            // Check if applicant name is filled out
            var applicantName = $('#applicant_name').val();
            if (applicantName == '') {
                isValid = false;
                $('#applicant_name').addClass('is-invalid');
                $('.error-msg3').text('Please enter a valid name');
            } else {
                $('#applicant_name').removeClass('is-invalid');
                $('.error-msg3').text('');

            }

            // Check if father's name is filled out
            var fatherName = $('#father_name').val();
            if (fatherName == '') {
                isValid = false;
                $('#father_name').addClass('is-invalid');
                $('.error-msg4').text('Please enter a valid name');
            } else {
                $('#father_name').removeClass('is-invalid');
                $('.error-msg4').text('');
            }

            // Check if date of birth is filled out
            var dob = $('#applicant_dob').val().trim();
            if (dob == '') {
                isValid = false;
                $('#applicant_dob').addClass('is-invalid');
                $('.error-msg5').text('Please enter a valid DOB');

            } else {
                $('#applicant_dob').removeClass('is-invalid');
                $('.error-msg5').text('');
            }

            // Check if age is filled out and is a number
            var age = $('#applicant_age').val();
            if (age == '' || isNaN(age)) {
                isValid = false;
                $('#applicant_age').addClass('is-invalid');
                $('.error-msg6').text('Please enter a valid age');

            } else {
                $('#applicant_age').removeClass('is-invalid');
                $('.error-msg6').text('');
            }

            // Check if mobile number is filled out and is a valid format
            // var nameRegex = /^[a-zA-Z\s]*$/;
            //     return nameRegex.test(name);
            var mobileNumber = $('#applicant_num').val().trim();
            if (mobileNumber == '' || !isValidMobileNumber(mobileNumber)) {
                isValid = false;
                $('#applicant_num').addClass('is-invalid');
                $('.error-msg7').text('Please enter a valid name 10 digit numbers');
            } else {
                $('#applicant_num').removeClass('is-invalid');
                $('.error-msg7').text('');
            }

            // Check if gender is selected
            var gender = $('#applicant_gender').val(); // Using .val() directly gets the selected value

            if (gender === '') {
                isValid = false;
                $('#applicant_gender').addClass('is-invalid');
                $('.error-msg8').text('Please select your gender');
            } else {
                $('#applicant_gender').removeClass('is-invalid');
                $('.error-msg8').text('');
            }


            // Check if email is filled out and valid
            var email = $('#applicant_email').val().trim();
            if (email == '') {
                isValid = false;
                $('#applicant_email').addClass('is-invalid');
                $('.error-msg9').text('This field is required');

            } else if (!isValidEmail(email)) {
                isValid = false;
                $('#applicant_email').addClass('is-invalid').next('.invalid-feedback').text('Please enter a valid email address');
                $('.error-msg9').text('Please enter a valid name');
            } else {
                $('#applicant_email').removeClass('is-invalid');
                $('.error-msg9').text('');
            }

            var occupation = $('#occupation option:selected').val();
            if (occupation === '') {
                isValid = false;
                $('#occupation').addClass('is-invalid');
                $('.error-msg10').text('Please select your occupation');
            } else {
                $('#occupation').removeClass('is-invalid');
                $('.error-msg10').text('');
            }


            // Check if Aadhar number is filled out and is a valid format
            var aadharNumber = $('#applicant_adhaar').val().trim();
            if (aadharNumber == '' || !isValidAadharNumber(aadharNumber)) {
                isValid = false;
                $('#applicant_adhaar').addClass('is-invalid');
                $('.error-msg11').text('Please enter a valid adhar number');
            } else {
                $('#applicant_adhaar').removeClass('is-invalid');
                $('.error-msg11').text('');
            }

            // Check if nationality is filled out
            var nationality = $('#applicant_nation').val().trim();
            if (nationality == '') {
                isValid = false;
                $('#applicant_nation').addClass('is-invalid');
                $('.error-msg12').text('This field is required');
            } else {
                $('#applicant_nation').removeClass('is-invalid');
                $('.error-msg12').text('');
            }

            // Check if residing since is selected
            // var residingSince = $('#residing_since').val();
            // if (residingSince == '') {
            //     isValid = false;
            //     $('#residing_since').addClass('is-invalid');
            //     $('.error-msg13').text('This field is required');
            // } else {
            //     $('#residing_since').removeClass('is-invalid');
            //     $('.error-msg13').text('');
            // }

            return isValid;
        }

        // function isValidName(name) {
        //     var nameRegex = /^[a-zA-Z\s]*$/;
        //     return nameRegex.test(name);
        // }

        function isValidMobileNumber(mobileNumber) {
            var mobileRegex = /^[0-9]{10}$/;
            return mobileRegex.test(mobileNumber);
        }

        function isValidEmail(email) {
            var emailRegex = /\S+@\S+\.\S+/;
            return emailRegex.test(email);
        }

        function isValidAadharNumber(aadharNumber) {
            var aadharRegex = /^\d{12}$/;
            return aadharRegex.test(aadharNumber);
        }

        $('#myform').submit(function(e) {
            e.preventDefault();

            // Perform form validation
            var isValidForm = formValidation();

            if (isValidForm) {
                var formData = new FormData(this);
                var dropdownValue = $('#certificate_types option:selected').val();
                var dropdownText = $('#certificate_types option:selected').text();
                var submit_btn = $('#submit_btn').val();
                formData.append('submit_btn', submit_btn);
                formData.append('dropdown_value', dropdownValue);
                formData.append('dropdown_text', dropdownText);
                $.ajax({
                    url: 'domicileCertInsert.php',
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    dataType: 'json',
                    success: function(response) {
                        console.log(response.message);
                        if (response.status === "wrong_extn") {
                            alert("Invalid file extension. Allowed extensions are JPG, JPEG, PNG, PDF.");
                        } else if (response.status === "success") {
                            alert("Registration successful");
                            window.location.href = 'login.php';
                        } else {
                            alert(response.message);
                        }

                    }

                })
            }
        })
        <?php
        if ($_GET) {
        ?>
            var doc_id = '<?php echo $_GET['doc_id']; ?>';
            var doc_type = '<?php echo $_GET['doc_type']; ?>';
            var getCertificateData = "domicile";
            $('.submit-btn').hide()
            $.ajax({
                data: {
                    doc_id: doc_id,
                    getCertificateData: getCertificateData
                },
                url: 'viewBirthCertData.php',
                type: 'POST',
                success: function(response) {
                    // console.log(response)
                    var httpResponse = JSON.parse(response)
                    if (httpResponse.length > 0) {
                        console.log(httpResponse)
                        // console.log(httpResponse[0].child_name)
                        $('#applicant_name').val(httpResponse[0].firstname)
                        $('#father_name').val(httpResponse[0].middlename)
                        $('#applicant_dob').val(httpResponse[0].mother_name)
                        $('#applicant_age').val(httpResponse[0].age)
                        $('#applicant_num').val(httpResponse[0].phoneNum)
                        $('#applicant_email').val(httpResponse[0].email)
                        $('#applicant_adhaar').val(httpResponse[0].adhar_card_num).prop('selected', true)
                        $('#applicant_nation').val(httpResponse[0].nationality).prop('selected', true)
                        $('#registration_date').val(httpResponse[0].email)
                        // $('#approveDiv').html('<button id="approveBtn" onclick= approveBtnFun("' + httpResponse[0].allDocid + '") class="btn btn-primary col-12">Approve</button>')
                        // $('#rejectDiv').html('<button id="rejectBtn" onclick= rejectBtnFun("' + httpResponse[0].allDocid + '")  class="btn btn-danger col-12">Reject</button>')
                        $('#doc_id').val(doc_id)
                        $('#doc_type').val(doc_type)

                        // $('#btnUpdate').attr('onclick', 'updatefun()');

                    } else {
                        alert('something went wrong')
                    }
                }
            })
        <?php
        }
        ?>
    })
</script>