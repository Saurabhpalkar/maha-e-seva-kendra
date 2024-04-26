<?php
include 'index1.php'
?>

<div class="col-md-12 col-sm-12 col-lg-12 col-xl-12">
  <div class=" border">
    <form id="myform">
      <div class=" col-12 d-flex flex-wrap  justify-content-center">
        <div class=" col-12">
          <h2 class="mt-4 form-group text-primary text-center "><b>Birth Certificate Form</b> </h2>
          <hr>
        </div>
        <div class="form-group  col-5">
          <label for="child_name">Child's Name:</label>
          <input type="text" id="child_name" name="child_name" class="form-control" required>
        </div>
        <div class="form-group col-5">
          <label for="father_name">Father's Name:</label>
          <input type="text" id="father_name" name="father_name" class="form-control" required>
        </div>
        <div class="form-group col-5">
          <label for="mother_name">Mother's Name:</label>
          <input type="text" id="mother_name" name="mother_name" class="form-control" required>
        </div>

        <div class="form-group col-5">
          <label for="surname">Surname:</label>
          <input type="text" id="surname" name="surname" class="form-control" required>
        </div>
        <div class="form-group col-5">
          <label for="place_of_birth">Place of Birth:</label>
          <input type="text" id="place_of_birth" name="place_of_birth" class="form-control" required>
        </div>
        <div class="form-group col-5">
          <label for="hospital_name">Hospital Name:</label>
          <input type="text" id="hospital_name" name="hospital_name" class="form-control" required>
        </div>
        <div class="form-group col-5">
          <label for="registration_date">Registration Date:</label>
          <input type="date" id="registration_date" name="registration_date" class="form-control" required>
        </div>
        <div class="form-group col-5">
          <label for="state">State:</label>
          <select name="state" id="state" class="form-control" onchange="getDistrictName(this.value)">
            <option value="">--select</option>
          </select>
          <span class="error-message state-error"></span>
        </div>
        <div class="form-group col-5">
          <label for="district">District:</label>
          <select name="district" id="district" onchange="getCityName(this.value)" class="form-control">
            <option value="">--select</option>
            <option value="1">Ratnagiri</option>
          </select>
        </div>
        <!-- <div class="form-group col-5">
          <label for="taluka">taluka:</label>
          <select name="taluka" id="Taluka" class="form-control">
            <option value="1">Guhagar</option>

          </select>
        </div> -->


        <div class="form-group col-5">
          <label for="city">City:</label>
          <select name="city" id="city" class="form-control">
            <option value="">--select</option>
          </select>
          <span class="error-message city-error"></span>
        </div>
        <div class="form-group col-5">
          <!-- <center> -->
          <button type="submit" name="submit" value="birth" id="submit-btn" class="btn btn-primary col-12  form-group submit-btn" style="margin-top: 24px;">Submit</button>

          <!-- </center> -->
        </div>
        <input type="hidden" name="doc_id" id="doc_id">
        <input type="hidden" name="doc_type" id="doc_type">
        <?php //include "btns_module.php" ?>
    </form>
  </div>
  <?php if ($_SESSION['usertype'] === 1) { ?>
    <div class="d-flex col-10 container appRejDiv">
      <div class="form-group col-3" id="approveDiv"></div>
      <div class="form-group col-3" id="rejectDiv"></div>
    </div>
  <?php } ?>
</div>
</div>

<div class="col-12 col-sm-12 col-xl-12 col-xxl-12 col-md-12 " style="padding:0">
<div class="d-flex col-10 container">
<?php if($_SESSION['usertype']=== "1"){ ?>
    <div class="form-group col-3" id="approveDiv"></div>
    <div class="form-group col-3" id="rejectDiv"></div>
    <?php }else{ 
      if($_GET){
      ?>
    <div class="form-group col-3" id="update">
        <button  type="button" class="btn  btn-primary" name="update" id="btnUpdate">update</button>
    </div>
    <?php }} ?>
</div>
<?php //include 'include/footer.php' ?>
</div>
<!-- </div>
</div>
</div>
</div> -->

<?php
// include 'include/footer.php'
?>
<script>
  function getDistrictName(stateid, statename) {
    $.ajax({
      url: 'getDistrictNames.php',
      type: 'POST',
      data: {
        stateid: stateid
      },
      success: function(response) {
        $('#district').empty()
        httpResponse = JSON.parse(response)
        console.log(response)

        if (httpResponse.hasOwnProperty('error')) {
          $('#district').append('<option value="">No record found</option>')
          // alert("record not found")

        } else {
          $('#district').append('<option value="">--select one--</option>')

          for (var i = 0; i < httpResponse.length; i++) {
            $('#district').append('<option value="' + httpResponse[i].district_val + '">' + httpResponse[i].district_name + '</option>')
          }
          $('#district').val(statename)
        }
      }
    })
  }

  function getCityName(districtid) {
    $.ajax({
      url: 'getCityNames.php',
      type: 'POST',
      data: {
        districtid: districtid
      },
      success: function(response) {
        $('#city').empty()
        httpResponse = JSON.parse(response)
        // console.log(response)

        if (httpResponse.hasOwnProperty('error')) {
          $('#city').append('<option value="">No record found</option>')
          // alert("record not found")

        } else {
          $('#city').append('<option value="">--select one--</option>')

          for (var i = 0; i < httpResponse.length; i++) {
            $('#city').append('<option value="' + httpResponse[i].cityValue + '">' + httpResponse[i].cityName + '</option>')
          }
          $('#city').val(statename)
        }
      }
    })
  }
  $(document).ready(function() {
    $('#myform').submit(function(e) {
      e.preventDefault();
      var birthFormdata = $(this).serialize()
      var submitbtn = $('#submit-btn').val()
      birthFormdata += '&submitbtn=' + submitbtn;
      var birth_fees = 100;
      $.ajax({
        url: 'birthCertificateInsert.php',
        data: birthFormdata,
        type: 'POST',
        success: function(response) {
          var httpresponse = JSON.parse(response);
          if (httpresponse.success == true) {
            var userDocTableID = httpresponse.id
            var document_value = 1;
            alert('Successfully applied for birth certificate');
            var url = "razarpay.php?birth_fees=" + encodeURIComponent(birth_fees) + "&userDocTableID=" + encodeURI(userDocTableID) + "&document_value=" + encodeURI(document_value);
            // alert(url)
            window.location.href = url;
          } else {
            alert('Oops! Something went wrong. Please check your form and try again.');
          }
        }
      })
    })
    <?php
    if ($_GET) {
    ?>
      var doc_id = '<?php echo $_GET['doc_id']; ?>';
      var doc_type = '<?php echo $_GET['doc_type']; ?>';
      var getCertificateData = "birthCert";

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
          // console.log(httpResponse[0].firstname)
            $('#child_name').val(httpResponse[0].firstname)
            $('#father_name').val(httpResponse[0].middlename)
            $('#mother_name').val(httpResponse[0].mother_name)
            $('#surname').val(httpResponse[0].lastname)
            $('#place_of_birth').val(httpResponse[0].place_of_birth)
            $('#hospital_name').val(httpResponse[0].hospital_name)
            $('#state').val(httpResponse[0].state_val).prop('selected', true)
            $('#district').val(httpResponse[0].district).prop('selected', true)
            $('#taluka').val(httpResponse[0].Taluka).prop('selected', true)
            $('#state').val(httpResponse[0].state_val).prop('selected', true)
            $('#city').val(httpResponse[0].city_value).prop('selected', true)
            $('#registration_date').val(httpResponse[0].dob)
            $('#doc_id').val(doc_id)
            $('#doc_type').val(doc_type)
            $('#approveDiv').html('<button id="approveBtn" onclick= approveBtnFun("' + httpResponse[0].user_doc_id + '") class="btn btn-primary col-12">Approve</button>')
            $('#rejectDiv').html('<button id="rejectBtn" onclick= rejectBtnFun("' + httpResponse[0].user_doc_id + '")  class="btn btn-danger col-12">Reject</button>')

          } else {
            alert('something went wrong')
          }
        }
      })
    <?php
    }
    ?>
    var statebtn = "state"
    $.ajax({
      url: 'getStateNames.php',
      type: 'POST',
      data: {
        statebtn: statebtn
      },
      success: function(response) {
        if (response === "error") {
          alert("record not found")
        } else {
          httpResponse = JSON.parse(response)
          // $('#state').empty()

          for (var i = 0; i < httpResponse.length; i++) {
            $('#state').append('<option value="' + httpResponse[i].stateValue + '">' + httpResponse[i].stateName + '</option>')
            // console.log(response)
          }
        }
      }
    })

  })

  function crudOperation(doc_id, btnClick) {
    //    alert(doc_id)
    //    alert(btnClick)
    $.ajax({
      url: 'approveRejectView.php',
      data: {
        doc_id,
        btnClick
      },
      type: 'POST',
      success: function(response) {
        var httpResponse = JSON.parse(response)
        // console.log(httpResponse.msg)
        if (httpResponse.msg ==true)  {
          if (btnClick === 'approve') {
            alert("Birth certificate has been APPROVE")
          } else if (btnClick === 'reject') {
            alert("Birth certificate has been RJECTED")

          }
        }
      }
    })
  }

  function viewdata(doc_id) {
    // btnClick = 'view';
    window.location.href = "birthCertificate.php?doc_id=" + doc_id;
    // crudOperation(doc_id, btnClick);
  }

  function approveBtnFun(doc_id) {
    btnClick = 'approve'
    crudOperation(doc_id, btnClick);
  }

  function rejectBtnFun(doc_id) {
    btnClick = 'reject'
    crudOperation(doc_id, btnClick);

  }
  $(document).ready(function(){
  $("#btnUpdate").click(function() {
    // alert()
    var formData = $("#myform").serialize();
    submitForm(formData);
  });

  function submitForm(formData) {
    $.ajax({
    url: 'updateFormData.php',
      type: 'POST',
      data: formData,
      success: function(response) {
        var httpResponse = JSON.parse(response);
        
        if(httpResponse.success == true){
          alert(httpResponse.message);
        }
      },
      error: function(xhr, status, error) {
        console.error(xhr.responseText);
      }
    });
  }
});
  // var url = new URL(window.location.href);
  // // console.log(url.searchParams);
  // url.searchParams.forEach(
  //   function(val, key){
  //     console.log(val);
  //     console.log(key);
  //   }
  // )

  // console.log(url);
</script>