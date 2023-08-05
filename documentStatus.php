<?php 
include 'index.php';
?>

<div class="container col-12">
    <h1>User Requests</h1>
    <div class="fluid-container">
        <table class="table-bordered table table-hover" id= "userRequest">
            <thead class="bg-primary">
            <tr>
                <th>sr no.</th>
                <th>Name</th>
                <th>document_name</th>
                <th>status</th>
                <th>View</th>
                <th>Print</th>
                <th>Download</th>
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
            url : 'userDocsApply.php',
            type: 'POST',
            success  : function(response){
                // console.log(response)
                var htttpResponse = JSON.parse(response);
                // console.log(htttpResponse.length);
                if(htttpResponse.length>0){
                // console.log(htttpResponse)
                var userRequest =  $('#userRequest')
                // userRequest.empty();
                var a = 1
                for(var i = 0 ; i<htttpResponse.length; i++){
                    var  row = $('<tr> ');
                    row.append('<td>' +    a++  + '</td>' )
                    row.append('<td>' +    htttpResponse[i]['firstname']  + '</td>' )
                    row.append('<td>' +    htttpResponse[i]['document_name']  + '</td>' )
                    row.append('<td>' +    htttpResponse[i]['status'] + '</td>' )
                    row.append('<td>  <button  onclick="viewdata('+htttpResponse[i]['allDocid']+')"  name="view" id="view" class="btn btn-success" >VIEW</button></td>')
                    row.append('<td>  <button  onclick="printDataFun()"  name="print" id="print" class="btn btn-primary" >PRINT</button></td>')
                    row.append('<td>  <button  onclick="downloadData('+htttpResponse[i]['id']+')"  name="download" id="download" class="btn btn-warning" >DOWNLOAD</button></td>')
                    
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
function viewdata(id){
    // alert(id)
    $.ajax({
            url : 'viewApprovedDoc.php',
            type: 'POST',
            data : id,
            success  : function(response){
                // console.log(response)
                var htttpResponse = JSON.parse(response);
                // console.log(htttpResponse.length);
                if(htttpResponse.length>0){
                console.log(htttpResponse)
                // var userRequest =  $('#userRequest')
                // userRequest.empty();
                // var a = 1
                // for(var i = 0 ; i<htttpResponse.length; i++){
                //     var  row = $('<tr> ');
                //     row.append('<td>' +    a++  + '</td>' )
                //     row.append('<td>' +    htttpResponse[i]['firstname']  + '</td>' )
                //     row.append('<td>' +    htttpResponse[i]['document_name']  + '</td>' )
                //     row.append('<td>' +    htttpResponse[i]['status'] + '</td>' )
                //     row.append('<td>  <button  onclick="viewdata('+htttpResponse[i]['id']+')"  name="view" id="view" class="btn btn-success" >VIEW</button></td>')
                //     row.append('<td>  <button  onclick="printDataFun()"  name="print" id="print" class="btn btn-primary" >PRINT</button></td>')
                //     row.append('<td>  <button  onclick="downloadData('+htttpResponse[i]['id']+')"  name="download" id="download" class="btn btn-warning" >DOWNLOAD</button></td>')
                    
                //     userRequest.append(row)
                    

                //     // row.append('<td>' +    htttpResponse + '</td>' )
                //     // row.append( 

                // }
                }else{
                    console.log("no record fount")
                }
                
                $('.print-data').html(`
                    <h3>FORM NO.7</h3>
    <p> <b>(See Rule 8)</b></p>
    <h2><b>BIRTH CERTIFICATE</b></h2>
    <p><b>(Issued under Section 17)</b></p>
    <hr>

    <div class="form-group">
        <p>This is to certify that the following information has been taeken from the original record of birth, which is the
            register for (local areas) of Tahashil <span class="child_name">`+htttpResponse[0]['child_name']+`</span> of District `+htttpResponse[0]['child_name']+` of State of Maharashtra.</p>
            <div class=" d-flex flex-fluid justify-content-between mt-4">
                <div class="">
                    <ul class="list-unstyled text-left">
                        <li>Name:<span class="child_name">`+htttpResponse[0]['child_name']+`</span> </li>
                        <li>Sex: </li>
                        <li>Date of Birth:<span id="place_of_birth"> `+htttpResponse[0]['place_of_birth']+`</span> </li>
                        <li>Place of Birth: <span class="place_of_birth">`+htttpResponse[0]['place_of_birth']+`</span> </li>
                        <li>Name of Father: <span class="firstname">`+htttpResponse[0]['firstname']+`</span></li>
                    </ul>
                </div>
                <div class="mt-4">
                <ul class="list-unstyled text-left">
                        <li>Name of Mother: <span class="mother_name">`+htttpResponse[0]['mother_name']+` </span></li>
                        <li>Permanent Address of parents:<span class="firstname">`+htttpResponse[0]['firstname']+` </span></li>
                        <li>Registration No.:<span class="registration_date"> `+htttpResponse[0]['registration_date']+`</span></li>
                        <li>Date Of Registration:<span class="registration_date"> `+htttpResponse[0]['registration_date']+`</span></li>
                    </ul>
                </div>
            </div>
            <div class=" d-flex justify-content-between mt-4">
                <p>Date:<span class="registration_date"> `+htttpResponse[0]['registration_date']+`</span></p>
                <div>
                <p>Signature of Issuing Authority Seal :<span class="child_name"> `+htttpResponse[0]['child_name']+`</span></p>
                <p><span class="child_name">`+htttpResponse[0]['child_name']+`</span></p>
                </div>
            </div>
        </div>
`);
            }
        })
        
}

    function printDataFun() {
        place_of_birth = $('#place_of_birth').text()
        child_name = $('.child_name').text()
        registration_date = $('.registration_date').text()
        firstname = $('.firstname').text()
        mother_name = $('.mother_name').text()
        // alert(place_of_birth)
            var printData = window.open();

            printData.document.write('<html><head><title>Print</title>');
            printData.document.write('<style>');
            printData.document.write(`
                body { font-family: Arial, sans-serif; line-height: 1.6; }
                .container { text-align: center; width: 100%; padding: 15px; border: 1px solid #ccc; }
            `);
            printData.document.write('</style></head><body>');

            // Insert the entire HTML structure with inline styles
            var data = `<div class="container  text-center col-sm-6 col-xl-6 col-md-96 col-xxl-6 border" style="width:auto; padding:3rem">
                <h3 style="margin-bottom: 10px;">FORM NO.7</h3>
                <p style="margin-bottom: 5px;"> <b>(See Rule 8)</b></p>
                <h2 style="margin-bottom: 15px;"><b>BIRTH CERTIFICATE</b></h2>
                <p><b>(Issued under Section 17)</b></p>
                <hr>

                <div class="form-group">
                    <p>This is to certify that the following information has been taken from the original record of birth, which is the
                        register for (local areas) `+firstname+` of Tahashil `+child_name+` of District `+child_name+` of State of Maharashtra.</p>
                        <div  style="display:flex; justify-content: space-between; margin-top:4rem">
                            <div style="text-align: left;">
                                <ul style="list-style: none; padding: 0; margin: 0;">
                                    <li>Name: `+child_name+`</li>
                                    <li>Sex: </li>
                                    <li>Date of Birth: `+place_of_birth+` </li>
                                    <li>Place of Birth: `+place_of_birth+`</li>
                                    <li>Name of Father: `+firstname+`</li>
                                </ul>
                            </div>
                            <div class="mt-4" style="text-align: left;">
                                <ul style="list-style: none; padding: 0; margin: 0;">
                                    <li>Name of Mother: `+mother_name+` </li>
                                    <li>Permanent Address of parents: </li>
                                    <li>Registration No.: `+firstname+` </li>
                                    <li>Date Of Registration: `+place_of_birth+` </li>
                                </ul>
                            </div>
                        </div>
                        <div style="display:flex; justify-content: space-between;margin-top:4rem">
                            <p>Date: `+place_of_birth+`</p>
                            <p>Signature of Issuing Authority Seal</p>
                        </div>
                    </div>
            </div>`;

            printData.document.write(data);

            printData.document.write('</body></html>');
            printData.print();
        }
    </script>

<div class="container print-data text-center col-sm-6 col-xl-6 col-md-96 col-xxl-6 border align-items-center">
    
</div>