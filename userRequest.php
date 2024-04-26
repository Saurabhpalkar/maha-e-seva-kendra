<?php 
include 'index1.php';
?>

<div class="container col-md-10" >
    <h1 class="text-center text-primary"><b>USER REQUESTS</b></h1>
    <div class="fluid-container"style="display: flex; ">
        <table class="table-bordered table" id= "userRequest">
            <thead>
            <tr>
                <th>sr no.</th>
                <th>Name</th>
                <th>document_name</th>
                <th>status</th>
                <th>View</th>
                <th>Approve</th>
                <th>Reject</th>
            </tr>
            </thead>
        </table>
            </div>
</div>
</div>
</div>
</div>
<script>
    $(document).ready(function(){
        $.ajax({
            url : 'userRequestFetch.php',
            type: 'POST',
            success  : function(response){
                // console.log(response)
                var htttpResponse = JSON.parse(response);
                // console.log(htttpResponse.length);
                if(htttpResponse.length>0){
                console.log(htttpResponse)
                var userRequest =  $('#userRequest')
                // userRequest.empty();
                for(var i = 0 ; i<htttpResponse.length; i++){
                    var  row = $('<tr> ');
                    row.append('<td>' +    i + 1  + '</td>' )
                    row.append('<td>' +    htttpResponse[i]['firstname']  + '</td>' )
                    row.append('<td>' +    htttpResponse[i]['document_name']  + '</td>' )
                    row.append('<td>' +    htttpResponse[i]['status'] + '</td>' )
                    row.append('<td>  <button  onclick="viewdata('+htttpResponse[i]['id']+','+htttpResponse[i]['document_value']+')"  name="view" id="view" class="btn btn-success" >VIEW</button></td>')
                    row.append('<td>  <button onclick="approveBtn('+htttpResponse[i]['id']+')" name="approve" id="approve" class="btn btn-primary">APPROVE</button></td>')
                row.append('<td>  <button  onclick="rejectBtn('+htttpResponse[i]['id']+')"  name="REJECT" id="reject" class="btn btn-danger">REJECT</button></td>')
                userRequest.append(row)

                    // row.append('<td>' +    htttpResponse + '</td>' )
                    // row.append( 

                }
                }else{
                    console.log("no record fount")
                }
            }
        })
    })
    function crudOperation(doc_id, btnClick){
    //    alert(doc_id)
    //    alert(btnClick)
       $.ajax({
        url: 'approveRejectView.php',
        data : {doc_id, btnClick},
        type: 'POST',
        success: function(response){
            // console.log(response)
            if(response === "success"){
                if(btnClick === 'approve'){
                    alert("Birth certificate has been APPROVE")
                }else if(btnClick === 'reject'){
                    alert("Birth certificate has been RJECTED")

                }
            }
        }
       })
    }

    function viewdata(doc_id, doc_type ){
        // btnClick = 'view';
        if(doc_type==1){
            window.location.href = "birthCertificate.php?doc_id="+doc_id + "&doc_type="+doc_type;
        }else if(doc_type == 2){
            window.location.href = "birthCertificate.php?doc_id="+doc_id + "&doc_type="+doc_type;
        }else if(doc_type == 3){
            window.location.href = "domicileCeretificate.php?doc_id="+ doc_id + "&doc_type="+doc_type;
        }else if(doc_type == 4){
            window.location.href = "domicileCeretificate.php?doc_id="+ doc_id + "&doc_type="+doc_type;
        }else if(doc_type == 5){
            window.location.href = "birthCertificate.php?doc_id="+ doc_id + "&doc_type="+doc_type;
        }else if(doc_type == 6){
            window.location.href = "birthCertificate.php?doc_id="+ doc_id + "&doc_type="+doc_type;
        }else if(doc_type == 7){
            window.location.href = "birthCertificate.php?doc_id="+ doc_id + "&doc_type="+doc_type;
        }
        
        // crudOperation(doc_id, btnClick);
    }

    function approveBtn(doc_id){
        btnClick = 'approve'
        crudOperation(doc_id, btnClick);
    }

    function rejectBtn(doc_id){
        btnClick = 'reject'
        crudOperation(doc_id, btnClick);

    }
</script>
