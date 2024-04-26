<div class="d-flex col-10 container">
<?php if($_SESSION['usertype']=== "1"){ ?>
    <div class="form-group col-3" id="approveDiv"></div>
    <div class="form-group col-3" id="rejectDiv"></div>
    <?php }else{ ?>
    <div class="form-group col-3" id="update">
        <button  type="button" class="btn  btn-primary" name="update" id="btnUpdate">update</button>
    </div>
    <?php } ?>
</div>
<script>
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
        console.log(response);
        // Handle success response
      },
      error: function(xhr, status, error) {
        console.error(xhr.responseText);
        // Handle error response
      }
    });
  }
});

    // function updatefun(doc_id, doc_type, event){
    //     event.preventDefault();

    //     alert(doc_id)
    //     $.ajax({
    //         url: 'updateFormData.php',
    //         type: 'POST',
    //         data: {
    //             doc_id: doc_id,
    //             doc_type: doc_type
    //         },
    //         success: function(response) {
    //             httpResponse = JSON.parse(response)
    //         }
    //     })
    // }
</script>