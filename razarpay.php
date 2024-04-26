<?php
include 'include/connection.php';
include 'index1.php';
if (!$_SESSION) {
    header("location:home.php");
}
?>
<style>
    input{
        border: none;
        outline: none;
    }
    .container_div{    
        display: flex;
        justify-content: center;
    }
   
</style>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<div class="container a col-md-10 container_div">
    <form id="myform">
        <table class="table table-bordered table-striped table-responsive">
            <tr><th colspan="2"><h3>MAKE PAYMENT</h3></th></tr>
            <tr>
                <th>Application ID:</th>
                <td> <input type="text" class="" name="userDocTableID" id="userDocTableID" value="<?php echo $_GET['userDocTableID'] ?>" > </td>
            </tr>
            <tr>
                <th>Service Name</th>
                <td> <input type="text" name="cert_name" id="cert_name"> </td>
            </tr>
            <tr>
                <th>Applicant Name</th>
                <td> <input type="text" name="name" value="saurabh" id="name"/><br /><br /></td>
            </tr>
            <tr>
                <th>Government Fees</th>
                <td> <input type="text" id="gov_fees" name="gov_fees" value="" class="" > </td>
            </tr>
            <tr>
                <th>Service Charges</th>
                <td> <input type="text" id="service_charge" name="service_charge" class="" value="" > </td>
            </tr>
            <tr>
                <th>SGST</th>
                <td> <input type="text" id="sgst" name="sgst" class="" value="" > </td>
            </tr>
            <tr>
                <th>CGST</th>
                <td> <input type="text" id="cgst" name="cgst" class="" value="" > </td>
            </tr>
            <tr>
                <th>Total Amount(INR)</th>
                <td> <input type="text" name="amt" id="amt" class="" value="" > </td>
            </tr>
            <tr>
                <th>Apllication Date</th>
                <td> <?php echo date("d-m-Y") ?> </td>
            </tr>
            <tr>
                <td colspan="2"><input type="button" name="btn" id="btn" class="btn btn-success" value="Pay Now" onclick="pay_now()" /></td>
            </tr>
        </table>
    </form>
</div>
<script>
    function pay_now() {
        var userDocTableID = $("#userDocTableID").val();
        var formdata = $("#myform").serialize()
        // var name = jQuery('#name').val();
        var amt = jQuery('#amt').val();

        jQuery.ajax({
            type: 'post',
            url: 'razorpay_payment_process.php',
            data: formdata,
            success: function(result) {
                var options = {
                    "key": "rzp_test_3rkAfUShbWU1JE",
                    "amount": amt * 100,
                    "currency": "INR",
                    "name": "MAHA-E-SEVA",
                    "description": "Test Transaction",
                    "image": "https://image.freepik.com/free-vector/logo-sample-text_355-558.jpg",
                    "handler": function(response) {
                        jQuery.ajax({
                            type: 'post',
                            url: 'razorpay_payment_process.php',
                            data: "payment_id=" + response.razorpay_payment_id + "&userDocTableID=" + userDocTableID,
                            success: function(response) {
                                // console.log(response)
                                var httpResponse = JSON.parse(response);
                                // console.log(httpResponse.id)
                                // alert()
                                  window.location.href="payment_invoice.php?rozarpay_id="+httpResponse.id;
                                alert("payment success")

                            }
                        });
                    }
                };
                var rzp1 = new Razorpay(options);
                rzp1.open();
            }
        });


    }
    <?php
if(isset($_GET['document_value'])) {
    ?>
        $(document).ready(function() {
            var document_value = <?php echo $_GET['document_value']; ?>;
            $.ajax({
                type: 'post',
                url: 'include/controller.php',
                data:{ document_value:document_value},
                success: function(response) {
                    httpResponse = JSON.parse(response);
                    if(httpResponse != false){
                        // console.log(httpResponse);
                        // $("#userDocTableID").val(httpResponse.);
                        $("#cert_name").val(httpResponse.name);
                        // $("#name").val(httpResponse.);
                        $("#gov_fees").val(httpResponse.gov_fees);
                        $("#service_charge").val(httpResponse.service_charge);
                        $("#sgst").val(httpResponse.sgst);
                        $("#cgst").val(httpResponse.cgst);
                        $("#amt").val(httpResponse.amount);
                    }else{
                        console.log("error");
                    }
                }
            });
        });
    <?php
}
?>

</script>