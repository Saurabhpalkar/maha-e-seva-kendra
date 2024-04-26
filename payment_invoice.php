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
            <tr><th colspan="2"><h3>INVOICE</h3></th></tr>
            <tr>
                <th>Application ID:</th>
                <td> <input type="text" class="" name="userDocTableID" id="userDocTableID" value="" > </td>
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
                <th>Payment Status</th>
                <td> <input type="text" name="payment_status" id="payment_status" class="" value="" > </td>
            </tr>
            <tr>
                <th>Application Date</th>
                <td> <?php echo date("d-m-Y") ?> </td>
            </tr>
           
        </table>
    </form>
</div>
<script>
    <?php
// if(isset($_GET['rozarpay_id'])) {
    ?>
        $(document).ready(function() {
            var rozarpay_id = <?php echo $_GET['rozarpay_id']; ?>;
            $.ajax({
                type: 'post',
                url: 'include/controller.php',
                data:{ rozarpay_id:rozarpay_id},
                success: function(response) {
                    httpResponse = JSON.parse(response);
                    // console.log(httpResponse)
                    if(httpResponse != false){
                        // console.log(httpResponse);
                        $("#userDocTableID").val(httpResponse.user_doc_id);
                        $("#cert_name").val(httpResponse.document_name);
                        $("#gov_fees").val(httpResponse.gov_fees);
                        $("#service_charge").val(httpResponse.service_charge);
                        $("#sgst").val(httpResponse.sgst);
                        $("#cgst").val(httpResponse.cgst);
                        $("#amt").val(httpResponse.amount);
                        $("#payment_status").val(httpResponse.payment_status);
                    }else{
                        console.log("error");
                    }
                }
            });
        });
    <?php
// }
?>

</script>