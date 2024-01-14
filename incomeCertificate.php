<?php
include 'include/connection.php';
include 'index.php'
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
<div class=" col-10 col-sm-10 col-xl-10 col-xxl-10 col-md-10 " style="background-color: #red;">
    <center class="form-group ">
        <h2 class="text-success"><b> Income Certificate </b> </h2>
    </center>

    <div id="error-message" class="alert alert-danger" style="display: none;"></div>


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
                            $query = "SELECT DISTINCT salutation_val, salutation_txt FROM user";
                            $res = mysqli_query($connection, $query);
                            while ($rows = mysqli_fetch_assoc($res)) {
                                echo "<option value='" . $rows['salutation_val'] . "'>" . $rows['salutation_txt'] . "</option>";
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
                            <option value="1">1</option>
                            <option value="1">2</option>
                            <option value="1">3</option>
                        </select>
                    </div>
                    <!-- <div class="col-md-4 form-group">
                        <label for="">Email ID<span class="requied_filed">*</span> </label>
                        <input type="email" name="applicant_email" id="applicant_email" class="form-control">
                    </div> -->
                    <div class="col-md-4 form-group">
                        <label for="applicant_occupation">Occupation<span class="requied_filed">*</span> </label>
                        <select class="form-control" name="applicant_occupation" id="applicant_occupation">
                            <option value="1">1</option>
                            <option value="1">2</option>
                            <option value="1">3</option>
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
                        <label for="district">District<span class="requied_filed">*</span> </label>
                        <select class="form-control" name="district" id="district">
                            <option value="1">1</option>
                            <option value="1">2</option>
                            <option value="1">3</option>
                        </select>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="taluka">Taluka<span class="requied_filed">*</span> </label>
                        <select class="form-control" name="taluka" id="taluka">
                            <option value="1">1</option>
                            <option value="1">2</option>
                            <option value="1">3</option>
                        </select>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="village">Village<span class="requied_filed">*</span> </label>
                        <select class="form-control" name="village" id="village">
                            <option value="1">1</option>
                            <option value="1">2</option>
                            <option value="1">3</option>
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
                        sad
                    </div>
                </fieldset>
            </div>
            <div class=" col-12 col-sm-12 col-xl-12 col-xxl-12 col-md-12 ">
            <div class="col-12 form-group identity-container">
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
                                    <input type="checkbox" name="<?php echo $checkboxName.'_addr'; ?>" class="form-group identity-checkbox">
                                </label>
                                <input type="file" name="<?php echo $fileInputName.'_addr'; ?>" class="form-control file-input" style="display: none;">
                            </div>
                        <?php } ?>
                    </div>
                </fieldset>
            </div>
                <div class="col-12 form-group address-container">
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
                                        <input type="file" name="<?php echo $fileInputName; ?>" class="form-control file-input" style="display: none;">
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </fieldset>
                </div>
                <div class="form-group">
                    <p>truseted <input type="checkbox" name="" id=""> i accept</p>
                </div>
                <div class="form-group">
                    <input type="submit" value="REGISTER" class="btn btn-success" name="" id="submit_btn">
                </div>
                <div>
                    <input type="button" value="BACK" class="btn btn-success" name="" id="">
                </div>
            </div>
        </form>
    </div>
</div>
</div>
</div>




<div class="col-12 col-sm-12 col-xl-12 col-xxl-12 col-md-12 " style="padding:0">
    <?php include 'include/footer.php' ?>
</div>
<script>
    $(document).ready(function() {
        // $(document).ready(function () {
        $('.identity-checkbox').change(function () {
            var checkboxName = $(this).attr('name');
            var fileInput = $('.file-input[name="file_' + checkboxName + '"]');

            if ($(this).is(':checked')) {
                fileInput.show();
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
                fileInput.show();
            } else {
                fileInput.hide();
            }
        });
    // });
        $('#myform').submit(function(e) {
            e.preventDefault();
            // if (!validateForm()) {
            //     return;
            // }

            var formData = new FormData(this);
            var submit_btn = $('#submit_btn').val()
            formData.append('submit_btn',submit_btn)
            $.ajax({
                url: 'incomeCertificateinsert.php',
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                dataType: 'json',

                success: function(response) {
                    console.log(response.message);
                    if (response.status === "wrong_extn") {
                        alert("Invalid file extension. Allowed extensions are JPG, JPEG, PNG, PDF.")
                    } else if (response.status === "success") {
                        alert("Registration successful")
                        // window.location.href = 'login.php'
                    } else {
                        alert(response.message)
                    }
                }
            });
        });

        // Function to validate the form
        function validateForm() {
            // Add your form validation logic here
            // Return true if the form is valid, otherwise return false

            // Example validation (you can customize this based on your requirements)
            var isValid = true;
            $("#error-message").text("").hide();

            if ($(".proof-checkbox:checked").length === 0) {
        $("#error-message").text("Please select at least one proof of address.").show();
        isValid = false;
      }

      var photoInput = $("#yourPhoto");
      if (photoInput.length > 0 && photoInput[0].files.length === 0) {
        $("#error-message").text("Please upload a photograph.").show();
        isValid = false;
      }

      // Validate at least one proof of identity is selected
      if ($(".identity-checkbox:checked").length === 0) {
        $("#error-message").text("Please select at least one proof of identity.").show();
        isValid = false;
      }

      // Validate at least one proof of address is selected
      if ($(".proof-checkbox:checked").length === 0) {
        $("#error-message").text("Please select at least one proof of address.").show();
        isValid = false;
      }
            // Validate other form fields
            // if ($('#applicant_name').val() === '') {
            //     alert('Please enter the applicant name.');
            //     isValid = false;
            // }

            // // Validate file uploads
            // if ($('input[name="yourPhoto"]').is(':visible') && $('input[name="yourPhoto"]').get(0).files.length === 0) {
            //     alert('Please upload a photograph.');
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