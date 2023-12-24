<?php
include 'include/connection.php';
include 'index.php'
?>

<div class=" col-10 col-sm-10 col-xl-10 col-xxl-10 col-md-10 " style="background-color: #red;">
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
        </fieldset>
        </div>
        <div class="col-12 form-group  details-container">
            <fieldset class="border">
                <legend class="bg-primary legend-heading">Applicant Details</legend>
                <div class="col-md-4 form-group">
                    <label for="">Salutation<span class="requied_filed">*</span> </label>
                    <select name="applicant_salutation" id="" class="form-control">
                        <option value=""></option>
                        <?php
                            $query = "SELECT DISTINCT salutation_val, salutation_txt FROM user";
                            $res = mysqli_query($connection, $query);
                            while($rows = mysqli_fetch_assoc($res)){
                                echo "<option value='".$rows['salutation_val']."'>".$rows['salutation_txt']."</option>";
                            }
                        ?>
                    </select>
                </div>
                <div class="col-md-4 form-group">
                    <label for="">Full Name(English)<span class="requied_filed">*</span> </label>
                    <input type="text" name="applicant_name" id="applicant_name" class="form-control">
                </div>
                <div class="col-md-4 form-group">
                    <label for="">Father's Name(English)<span class="requied_filed">*</span> </label>
                    <input type="text" name="father_name" id="father_name" class="form-control">
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
                <div class="col-md-4 form-group">
                    <label for="">Email ID<span class="requied_filed">*</span> </label>
                    <input type="email" name="applicant_email" id="applicant_email" class="form-control">
                </div>
                <div class="col-md-4 form-group">
                    <label for="">Occupation<span class="requied_filed">*</span> </label>
                    <select class="form-control" name="applicant_gender" id="applicant_gender">
                        <option value="1">1</option>
                        <option value="1">2</option>
                        <option value="1">3</option>
                    </select>
                </div>
                <div class="col-md-4 form-group">
                    <label for="">Aadhar No<span class="requied_filed">*</span> </label>
                    <input type="text" name="applicant_adhaar" id="applicant_adhaar" class="form-control">
                </div>
                <div class="col-md-4 form-group">
                    <label for="">Applicant Nationality<span class="requied_filed">*</span> </label>
                    <input type="text" name="applicant_natilanality" id="applicant_adhaar" class="form-control">
                </div>
                <div class="col-md-4 form-group">
                    <label for="">Residing at present address since?<span class="requied_filed">*</span> </label>
                    <select name="" id="" class="form-control">
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                    </select>
                </div>
                <div class="col-md-4 form-group">
                <input type="submit" name="" class="form- btn btn-success" id="">
                </div>
            </fieldset>
        </div>
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
</div>
</div>
<style>
    .legend-heading{
        padding: 1rem;
    }
    .requied_filed{
        color: red;
    }
    fieldset{
        background-color: white;
    }
</style>

<div class="col-12 col-sm-12 col-xl-12 col-xxl-12 col-md-12 " style="padding:0">
    <?php include 'include/footer.php' ?>
</div>
<script>
    //  $(document).ready(function() {
    //   $('#myform').submit(function(event) {
        // event.preventDefault();

    $(document).ready(function(){
        $('#myform').submit(function(e){
            e.preventDefault();
            var formData = new FormData(this);
            console.log(formData)
            var dropdownValue = $('select[name="certificate_types"] option:selected').val();
            var dropdownText = $('select[name="certificate_types"] option:selected').text();
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
              if(response.status === "wrong_extn"){
                alert("Invalid file extension. Allowed extensions are JPG, JPEG, PNG, PDF.")
              }else if(response.status==="success"){
                alert("Registration successful")
                window.location.href = 'login.php'
              }else{
                alert(response.message)
              }
            }
            
        })
    })
    })
</script>