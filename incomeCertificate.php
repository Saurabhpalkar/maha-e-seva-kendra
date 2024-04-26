<?php
include 'include/connection.php';
include 'index1.php'
?>
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
<div class=" col-12 col-sm-12 col-xl-12 col-xxl-12 col-md-12 ">
    <center class="form-group ">
        <h2 class="text-success"><b> Income Certificate </b> </h2>
        <p class="text-danger">(*) Indicates all fields are required</p>

    </center>



    <!--------------- domicile Certificate Insert------------------------------ -->
    <div class=" col-12 col-sm-12 col-xl-12 col-xxl-12 col-md-12">
        <form id="myform" action="" method="POST">
            <div class="col-12 form-group  details-container">
                <fieldset class="border">
                    <legend class="bg-primary legend-heading">Applicant Details</legend>
                    <div class="col-md-2 form-group">
                        <label for="">Salutation<span class="requied_filed">*</span> </label>
                        <select name="applicant_salutation" id="" class="form-control">
                            <option value="">select</option>
                            <?php
                            $query = "SELECT * FROM salutation_table";
                            $res = mysqli_query($connection, $query);
                            while ($rows = mysqli_fetch_assoc($res)) {
                                echo "<option value='" . $rows['id'] . "'>" . $rows['salutation'] . "</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col-md-3 form-group">
                        <label for="">First Name<span class="requied_filed">*</span> </label>
                        <input type="text" name="applicant_name" id="applicant_name" class="form-control">
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="">Father's Name(English)<span class="requied_filed">*</span> </label>
                        <input type="text" name="father_name" id="father_name" class="form-control">
                    </div>
                    <div class="col-md-3 form-group">
                        <label for="applicant_lname">Middle Name<span class="requied_filed">*</span> </label>
                        <input type="text" name="applicant_lname" id="applicant_lname" class="form-control">
                    </div>

                    <div class="col-md-4 form-group">
                        <label for="">Date of Birth<span class="requied_filed">*</span> </label>
                        <input type="date" name="applicant_dob" id="applicant_dob" class="form-control">
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="">Age<span class="requied_filed">*</span> </label>
                        <input type="number" name="applicant_age" id="applicant_age" class="form-control">
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="">Mobile Number<span class="requied_filed">*</span> </label>
                        <input type="number" name="applicant_num" id="applicant_num" class="form-control">
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="">Gender : <span class="requied_filed">*</span> </label>
                        <select class="form-control" name="applicant_gender" id="applicant_gender">
                            <option value="">--Select one--</option>
                            <option value="1">Male</option>
                            <option value="1">Female</option>
                            <option value="1">Other </option>
                        </select>
                    </div>
                    <!-- <div class="col-md-4 form-group">
                        <label for="">Email ID<span class="requied_filed">*</span> </label>
                        <input type="email" name="applicant_email" id="applicant_email" class="form-control">
                    </div> -->
                    <div class="col-md-4 form-group">
                        <label for="applicant_occupation">Occupation<span class="requied_filed">*</span> </label>
                        <select class="form-control" name="applicant_occupation" id="applicant_occupation">
                            <option value="">Select Occupation</option>
                            <option value="1">Teacher</option>
                            <option value="2">Doctor</option>
                            <option value="3">Lawyer</option>
                            <option value="4">Engineer</option>
                            <option value="5">Accountant</option>
                            <option value="6">Architect</option>
                            <option value="7">Software Developer</option>
                            <option value="8">Salesperson</option>
                            <option value="9">Consultant</option>
                            <option value="10">Nurse</option>
                            <option value="11">Electrician</option>
                            <option value="12">Carpenter</option>
                            <option value="13">Plumber</option>
                            <option value="14">Mechanic</option>
                            <option value="15">Farmer</option>
                            <option value="16">Waiter/Waitress</option>
                            <option value="17">Receptionist</option>
                            <option value="18">Chef</option>
                            <option value="19">Artist</option>
                            <option value="20">Musician</option>
                            <option value="21">Retail Worker</option>
                            <option value="22">Manager</option>
                            <option value="23">Entrepreneur</option>
                            <option value="24">Hairdresser</option>
                            <option value="25">Beautician</option>
                            <option value="26">Tailor</option>
                            <option value="27">Photographer</option>
                            <option value="28">Journalist</option>
                            <option value="29">Librarian</option>
                            <option value="30">Police Officer</option>
                            <option value="31">Firefighter</option>
                            <option value="32">Paramedic</option>
                            <option value="33">Security Guard</option>
                            <option value="34">Delivery Driver</option>
                            <option value="35">Taxi Driver</option>
                            <option value="36">Pilot</option>
                            <option value="37">Flight Attendant</option>
                            <option value="38">Actor/Actress</option>
                            <option value="39">Dancer</option>
                            <option value="40">Athlete</option>
                        </select>
                    </div>
                </fieldset>
            </div>
            <div class="col-12 form-group  addr-container">
                <fieldset class="border">
                    <legend class="bg-primary legend-heading">Applicant Address</legend>
                    <div class="col-md-4 form-group">
                        <label for="applicant_addr">Address <span class="requied_filed">*</span> </label>
                        <input type="text" name="applicant_addr" id="applicant_addr" class="form-control">
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="applicant_street">Street<span class="requied_filed">*</span> </label>
                        <input type="text" name="applicant_street" id="applicant_street" class="form-control">
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="section">Section<span class="requied_filed">*</span> </label>
                        <input type="text" name="section" id="section" class="form-control">
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="landmark">Building<span class="requied_filed">*</span> </label>
                        <input type="text" name="building" id="building" class="form-control">
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="">Landmark<span class="requied_filed">*</span> </label>
                        <input type="text" name="landmark" id="landmark" class="form-control">
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="state">state<span class="requied_filed">*</span> </label>
                        <select class="form-control" name="state" id="state">
                            <option value="">-select one-</option>

                        </select>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="district">District<span class="requied_filed">*</span> </label>
                        <select class="form-control" name="district" id="district">
                            <option value="">--select one--</option>
                        </select>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="taluka">Taluka<span class="requied_filed">*</span> </label>
                        <select class="form-control" name="taluka" id="taluka">
                            <option value="">--select one--</option>
                        </select>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="village">Village<span class="requied_filed">*</span> </label>
                        <select class="form-control" name="village" id="village">
                            <option value="">--select one--</option>
                        </select>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="pincode">Pincode<span class="requied_filed">*</span> </label>
                        <input type="text" name="pincode" id="pincode" class="form-control">
                    </div>
                    <!-- <div class="col-md-4 form-group">
                        <input type="submit" name="" class="form- btn btn-success" id="">
                    </div> -->
                </fieldset>
            </div>
            <div class="col-12 form-group  addr-container">
                <fieldset class="border">
                    <legend class="bg-primary legend-heading">Upload Photograph</legend>
                    <!-- <div class="col-md-12 form-group d-flex"></div> -->
                    <div class="col-md-4 form-group">
                        <div class="form-control form-group">
                            <p>The size of photograph should fall between 5KB to 20kb</p>
                        </div>
                        <div class="form-control form-group">Photograph should format should be JPEG</div>
                        <div class="form-control form-group"></div>
                    </div>
                    <div class="col-md-4 form-group">
                        <div class="form-group">
                            <img src="" style="width: 160px; height: 200px;" alt="">
                        </div>
                        <input type="file" class="form-control" name="yourPhoto" id="yourPhoto">
                    </div>
                    <div class="col-md-4 form-group">
                    </div>
                </fieldset>
            </div>
            <div class=" col-12 col-sm-12 col-xl-12 col-xxl-12 col-md-12 ">
                <div class="col-12 col-sm-12 col-xl-12 col-xxl-12 col-md-12 form-group identity-container p-0">
                    <fieldset class="border">
                        <legend class="bg-primary legend-heading">Proof of Identity (Any-1)</legend>
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
                            <?php
                            $identityProofs = ['PAN Card', 'Passport', 'RSBY Card', 'Adhar Card', 'Voter ID Card', 'Driving License'];

                            foreach ($identityProofs as $key => $identityProof) {
                                $checkboxName = strtolower(str_replace(' ', '_', $identityProof));
                                $fileInputName = 'file_' . $checkboxName;
                            ?>
                                <div class="col">
                                    <label>
                                        <?php echo ($key + 1) . ') ' . $identityProof; ?>
                                        <input type="checkbox" name="<?php echo $checkboxName . '_addr'; ?>" class="form-group identity-checkbox">
                                    </label>
                                    <input type="file" name="<?php echo $fileInputName . '_addr'; ?>" id="<?php echo $fileInputName . '_addr' ?>" class="form-control file-input" style="display: none;">
                                </div>
                            <?php } ?>
                        </div>
                    </fieldset>
                </div>
                <div class="col-12 col-sm-12 col-xl-12 col-xxl-12 col-md-12 p-0 form-group address-container">
                    <fieldset class="border">
                        <legend class="bg-primary legend-heading">Proof of Address (Any-1)</legend>
                        <div class="container">
                            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
                                <?php
                                $proofs = [
                                    'PAN Card', 'Passport', 'RSBY Card', 'Adhar Card', 'Voter ID Card', 'Driving License'
                                ];

                                foreach ($proofs as $key => $proof) {
                                    $checkboxName = strtolower(str_replace(' ', '_', $proof));
                                    // var_dump($checkboxName);
                                    $fileInputName = 'file_' . $checkboxName;

                                ?>


                                    <div class="col">
                                        <label>
                                            <?php echo ($key + 1) . ') ' . $proof; ?>
                                            <input type="checkbox" name="<?php echo $checkboxName; ?>" class="form-group proof-checkbox">
                                        </label>
                                        <input type="file" name="<?php echo $fileInputName; ?>" id="<?php echo $fileInputName ?>" class="form-control file-input" style="display: none;">
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </fieldset>
                </div>
                <div class="form-group">
                    <p>truseted <input type="checkbox" name="" id=""> i accept</p>
                </div>
                <div class="col-md-12 form-group">
                    <div class="col-md-2">
                        <input type="submit" value="REGISTER" class="btn btn-success" name="" id="submit_btn">
                    </div>
                    <div class="col-md-2">
                        <input type="button" value="BACK" class="btn btn-success" name="" id="">
                    </div>
                </div>
                <div id="error-message" class="alert alert-danger error-message col-md-12" role="alert" style="display: none;"></div>
            </div>
        </form>
    </div>
</div>
</div>
</div>
</div>




<div class="col-12 col-sm-12 col-xl-12 col-xxl-12 col-md-12 " style="padding:0">
    <?php include 'include/footer.php' ?>
</div>
<script>
    $(document).ready(function() {
        // $state = $(this).val();
        var state_names = "state_names";
        $.ajax({
            url: "include/controller.php",
            data: {
                state_names: state_names
            },
            type: "POST",
            success: function(data) {
                var response = JSON.parse(data);
                $.each(response, function(index, row) {
                    var option = $('<option>');
                    option.val(row.id).text(row.stateName)
                    $('#state').append(option);
                    // console.log(row.stateName);
                })
                $("#state").change(function() {
                    var state_id = $(this).val();
                    // alert($state_id);
                    $.ajax({
                        url: "include/controller.php",
                        data: {
                            state_id: state_id
                        },
                        type: "POST",
                        success: function(data) {
                            var response = JSON.parse(data);
                            console.log(response)
                            $('#district').empty();
                            if (response.length > 0) {
                                $('#district').append("<option value=''>--select one--</option>");
                                $.each(response, function(index, row) {
                                    var option = $('<option>');
                                    option.val(row.id).text(row.district_name)
                                    $('#district').append(option);
                                    // console.log(row.stateName);
                                })
                            } else {
                                var option = $('<option>');
                                option.val("").text("No record found")
                                $('#district').append(option);
                            }
                            village
                            $("#district").change(function() {
                                var district_id = $(this).val();
                                // alert($state_id);
                                $.ajax({
                                    url: "include/controller.php",
                                    data: {
                                        district_id: district_id
                                    },
                                    type: "POST",
                                    success: function(data) {
                                        var response = JSON.parse(data);
                                        console.log(response)
                                        $('#taluka').empty();
                                        if (response.length > 0) {
                                            $('#taluka').append("<option value=''>--select one--</option>");
                                            $.each(response, function(index, row) {
                                                var option = $('<option>');
                                                option.val(row.id).text(row.taluka_name)
                                                $('#taluka').append(option);
                                                // console.log(row.stateName);
                                            })
                                        } else {
                                            var option = $('<option>');
                                            option.val("").text("No record found")
                                            $('#taluka').append(option);
                                        }
                                        $("#taluka").change(function() {
                                            var taluka_id = $(this).val();
                                            // alert($state_id);
                                            $.ajax({
                                                url: "include/controller.php",
                                                data: {
                                                    taluka_id: taluka_id
                                                },
                                                type: "POST",
                                                success: function(data) {
                                                    var response = JSON.parse(data);
                                                    console.log(response)
                                                    $('#village').empty();
                                                    if (response.length > 0) {
                                                        $('#village').append("<option value=''>--select one--</option>");
                                                        $.each(response, function(index, row) {
                                                            var option = $('<option>');
                                                            option.val(row.id).text(row.cityName)
                                                            $('#village').append(option);
                                                            // console.log(row.stateName);
                                                        })
                                                    } else {
                                                        var option = $('<option>');
                                                        option.val("").text("No record found")
                                                        $('#village').append(option);
                                                    }
                                                }
                                            })
                                        })
                                    }
                                })
                            })
                        }
                    })
                })
            }
        })


        // })
        // $("#state").change(function(){

        // $(document).ready(function () {
        $('.identity-checkbox').change(function() {
            var checkboxName = $(this).attr('name');
            var fileInput = $('.file-input[name="file_' + checkboxName + '"]');
            var filevalue = $("#fileInput").val();
            // alert(filevalue);
            if ($(this).is(':checked')) {
                // alert()
                if (fileInput.show()) {
                    // alert("")
                }
            } else {
                fileInput.hide();
            }
        });
        // });
        // $(document).ready(function() {
        $('.proof-checkbox').change(function() {
            var checkboxName = $(this).attr('name');
            var fileInput = $('.file-input[name="file_' + checkboxName + '"]');

            if ($(this).is(':checked')) {
                if (fileInput.show()) {
                    // alert("required")
                    return false;
                }
            } else {
                fileInput.hide();
            }
        });
        // });
        $('#myform').submit(function(e) {
            e.preventDefault();
            // if (!validateForm()) {
            //     return ;
            // }

            var formData = new FormData(this);
            var submit_btn = $('#submit_btn').val()
            formData.append('submit_btn', submit_btn)
            $.ajax({
                url: 'incomeCertificateinsert.php',
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                dataType: 'json',

                success: function(response) {
                    console.log(response);
                    var birth_fees = 200;
                    var document_value = 2;
                    var userDocTableID =  response.id
                    if(response.success=== true){
                        alert("You have successfully applied for income certificate");
                        var url = "razarpay.php?birth_fees=" + encodeURIComponent(birth_fees) + "&userDocTableID=" + encodeURI(userDocTableID) + "&document_value=" + encodeURI(document_value);
                                window.location.href = url;
                    }else{
                        console.log("somethings wrong please check")
                    }
                    // if (response.status === "wrong_extn") {
                    //     alert("Invalid file extension. Allowed extensions are JPG, JPEG, PNG, PDF.")
                    // } else if (response.status === "success") {
                    //     alert("Registration successful")
                    //     // window.location.href = 'login.php'
                    // } else {
                    //     alert(response.message)
                    // }
                }
            });
        });

        // Function to validate the form
        function validateForm() {
            var isValid = true;
            $(".error-message").text("").hide();

            // if ($(".proof-checkbox:checked").length === 0) {
            //     $(".error-message").text("Please select at least one proof of address.").show();
            //     isValid = false;
            // }

            // var photoInput = $("#yourPhoto");
            // if (photoInput.length > 0 && photoInput[0].files.length === 0) {
            //     $(".error-message").text("Please upload a photograph.").show();
            //     isValid = false;
            // }
                
            // Validate at least one proof of identity is selected
            if ($(".identity-checkbox:checked").length === 0) {
                $(".error-message").text("Please select at least one proof of identity.").show();
                isValid = false;
            }

            // Validate at least one proof of address is selected
            // if ($(".proof-checkbox:checked").length === 0) {
            //     $(".error-message").text("Please select at least one proof of address.").show();
            //     isValid = false;
            // }
            // // Validate other form fields
            // if ($('#applicant_name').val() === '') {
            //     $(".error-message").text('Please enter the applicant name.');
            //     isValid = false;
            // }

            // // // Validate file uploads
            // if ($('input[name="yourPhoto"]').is(':visible') && $('input[name="yourPhoto"]').get(0).files.length === 0) {
            //     $(".error-message").text('Please upload a photograph.');
            //     isValid = false;
            // }
            // if ($('#father_name').val() === '') {
            //     $(".error-message").text('Please enter the applicant father name.');
            //     isValid = false;
            // }
            // if ($('#applicant_lname').val() === '') {
            //     $(".error-message").text('Please enter the applicant last name.');
            //     isValid = false;
            // }
            // if ($('#applicant_dob').val() === '') {
            //     $(".error-message").text('Please enter the applicant DOB.');
            //     isValid = false;
            // }
            // if ($('#applicant_age').val() === '') {
            //     $(".error-message").text('Please enter the applicant age.');
            //     isValid = false;
            // }
            // if ($('#applicant_num').val() === '') {
            //     $(".error-message").text('Please enter the applicant mobile number.');
            //     isValid = false;
            // }

            // if ($('#applicant_gender option:selected').val() === '') {
            //     $(".error-message").text('Please enter the applicant gender.');
            //     isValid = false;
            // }
            // if ($('#applicant_occupation option:selected').val() === '') {
            //     $(".error-message").text('Please select the applicant occupation.');
            //     isValid = false;
            // }
            // if ($('#applicant_addr').val() === '') {
            //     $(".error-message").text('Please enter the applicant address.');
            //     isValid = false;
            // }
            // if ($('#applicant_street').val() === '') {
            //     $(".error-message").text('Please enter the applicant street name.');
            //     isValid = false;
            // }
            // if ($('#section').val() === '') {
            //     $(".error-message").text('Please enter the section name.');
            //     isValid = false;
            // }
            // if ($('#building').val() === '') {
            //     $(".error-message").text('Please enter the building name.');
            //     isValid = false;
            // }
            // if ($('#landmark').val() === '') {
            //     $(".error-message").text('Please enter the landmark name.');
            //     isValid = false;
            // }
            // if ($('#district option:selected').val() === '') {
            //     $(".error-message").text('Please select the district name.');
            //     isValid = false;
            // }
            // if ($('#taluka option:selected').val() === '') {
            //     $(".error-message").text('Please select the your taluka name.');
            //     isValid = false;
            // }
            // if ($('#village option:selected').val() === '') {
            //     $(".error-message").text('Please select the your village name.');
            //     isValid = false;
            // }

            return isValid;
        }

        // Show/hide file upload based on checkbox
        $('input[type="checkbox"]').change(function() {
            var checkboxName = $(this).attr('name');
            var fileInput = $('input[name="' + checkboxName.replace('_', '') + '"]');

            if ($(this).is(':checked')) {
                fileInput.show();
            } else {
                fileInput.hide();
            }
        });
    });
</script>