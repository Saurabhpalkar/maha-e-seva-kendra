<?php
include 'include/connection.php';
include 'index1.php';
if(!$_SESSION){
    header("location:home.php");
}
?>
<div class=" col-5 col-sm-5 col-xl-5 col-xxl-5 col-md-5 form-group" style="background-color: #red;">
    <!-- <div class="  col-5 col-sm-5 col-xl-5 col-xxl-5 col-md-5 "> -->
        <select class="form-control" name="select_doc" id="select_doc">
            <option value="">-select any one-</option>
            <option value="1">Birth Certificate</option>
            <option value="2">Income Certificate</option>
            <option value="3">Age Domical Certificate</option>
            <option value="4">Nationality Certificate</option>
            <option value="5">Domicile  Certificate</option>
            <!-- <option value="2">Non-Creamy Certificate</option> -->
        </select>
    <!-- </div> -->
    
    
</div>

<div class=" col-10 col-sm-10 col-xl-10 col-xxl-10 col-md-10 domicile-div" style="display: none;">
    <div class="form-group col-12 col-sm-12 col-xl-12 col-xxl-12 col-md-12 container text-white bg-success">
        <h3>Certificate Name :- Income Certificate</h3>
    </div>
    <div class="form-group col-12 col-sm-12 col-xl-12 col-xxl-12 col-md-12 container text-white bg-danger">
        <h3>Required Documents</h3>
    </div>
    <div class=" col-12 col-sm-12 col-xl-12 col-xxl-12 col-md-12 ">
        <div class="col-12 form-group  details-container">
            <fieldset class="border">
                <legend class="bg-primary legend-heading">Proof of Identity (Any-1)</legend>
                <div class="container">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
                        <div class="col">
                            <p>1) PAN Card</p>
                        </div>
                        <div class="col">
                            <p>2) Passport</p>
                        </div>
                        <div class="col">
                            <p>3) RSBY Card</p>
                        </div>
                        <div class="col">
                            <p>4) Adhar Card</p>
                        </div>
                        <div class="col">
                            <p>5) Voter ID Card</p>
                        </div>
                        <div class="col">
                            <p>6) Driving License</p>
                        </div>
                        <div class="col">
                            <p>7) Photo Of Applicant</p>
                        </div>
                        <div class="col">
                            <p>8) Signature Of Applicant</p>
                        </div>
                    </div>
                </div>
            </fieldset>

        </div>
    </div>
    
    <div class=" col-12 col-sm-12 col-xl-12 col-xxl-12 col-md-12 ">
        <div class="col-12 form-group  details-container">
            <fieldset class="border">
                <legend class="bg-primary legend-heading">Proof of Address (Any-1)</legend>
                <div class="container">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
                        <div class="col">
                            <p>1) Water Bill</p>
                        </div>
                        <div class="col">
                            <p>2) Passport</p>
                        </div>
                        <div class="col">
                            <p>3) Ration Card</p>
                        </div>
                        <div class="col">
                            <p>4) Adhar Card</p>
                        </div>
                        <div class="col">
                            <p>5) Voter ID Card</p>
                        </div>
                        <div class="col">
                            <p>6) Driving License</p>
                        </div>
                        <div class="col">
                            <p>7) Electricity Bill</p>
                        </div>
                        <div class="col">
                            <p>8) Property Tax Receipt</p>
                        </div>
                    </div>
                </div>
            </fieldset>

        </div>
    </div>
    <div class=" col-12 col-sm-12 col-xl-12 col-xxl-12 col-md-12 ">
        <div class="col-12 form-group  details-container">
            <fieldset class="border">
                <legend class="bg-primary legend-heading">Residence Proof(Any-1)</legend>
                <div class="container">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
                        <div class="col">
                            <p>1) Residence Proof by Talathi</p>
                        </div>
                        <div class="col">
                            <p>2) Residence Proof by Gram Sevak</p>
                        </div>
                        <div class="col">
                            <p>3) Residence Proof by Bill Collector</p>
                        </div>
                    </div>
                </div>
            </fieldset>
        </div>
    </div>
    <div class=" col-12 col-sm-12 col-xl-12 col-xxl-12 col-md-12 ">
        <div class="col-12 form-group  details-container">
            <fieldset class="border">
                <legend class="bg-primary legend-heading">Age Proof (In Case of Minor) (Any -1)</legend>
                <div class="container">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
                        <div class="col">
                            <p>1)  SFC Certificate</p>
                        </div>
                        <div class="col">
                            <p>2) Birth Certificate</p>
                        </div>
                        <div class="col">
                            <p>3) Bonafide Certificate</p>
                        </div>
                        <div class="col">
                            <p>4) School Leaving Certificate</p>
                        </div>
                        <div class="col">
                            <p>5) Extract from primary school entry</p>
                        </div>
                    </div>
                </div>
            </fieldset>
        </div>
    </div>
    <div class=" col-12 col-sm-12 col-xl-12 col-xxl-12 col-md-12 ">
        <div class="col-12 form-group  details-container">
            <fieldset class="border">
                <legend class="bg-primary legend-heading">Mondatory Documents</legend>
                <div class="container">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
                        <div class="col">
                            <p>1) Other</p>
                        </div>
                        <div class="col">
                            <p>2) Self-Declaration</p>
                        </div>
                    </div>
                </div>
            </fieldset>
        </div>
    </div>
    <div class="container col-12 col-sm-12 col-xl-12 col-xxl-12 col-md-12 ">
        <div class="col-md-6 form-group  details-container d-flex">
            <div class="col-md-3 form-group certifiacate_links ">
            </div>
            <div class="col-md-3 form-group  ">
                <button class="btn btn-success btn-print" onclick="printYourDocument()">PRINT</button>
            </div>
            <div class="col-md-3 form-group  ">
                <a href="dashboard.php" class="btn btn-warning">BACK</a>
            </div>
        </div>
    </div>
    </div>
    <script>
    
    function printYourDocument() {
    var printWindow = window.open();
    printWindow.document.write(`
        <html>
            <head>
                <title>Print Form</title>
                <style type="text/css">
                    .main-div{
                        display:flex;
                        justify-content: space-between
                    }  
                </style>
            </head>
            <body>
                <div class="container text-center " style="display: block;">
                    <hr>
                    <div class="row">
                    <div class=" col-12 col-sm-12 col-xl-12 col-xxl-12 col-md-12 main-div">
                        <div class=" col-12 col-sm-12 col-xl-12 col-xxl-12 col-md-12 sub-div">
                            <div class="col-12 form-group  details-container">
                                <fieldset class="border">
                                    <legend class="bg-primary legend-heading">Proof of Identity (Any-1)</legend>
                                    <div class="container">
                                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
                                            <div class="col">
                                                <p>1) PAN Card</p>
                                            </div>
                                            <div class="col">
                                                <p>2) Passport</p>
                                            </div>
                                            <div class="col">
                                                <p>3) RSBY Card</p>
                                            </div>
                                            <div class="col">
                                                <p>4) Adhar Card</p>
                                            </div>
                                            <div class="col">
                                                <p>5) Voter ID Card</p>
                                            </div>
                                            <div class="col">
                                                <p>6) Driving License</p>
                                            </div>
                                            <div class="col">
                                                <p>7) Photo Of Applicant</p>
                                            </div>
                                            <div class="col">
                                                <p>8) Signature Of Applicant</p>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                        <div class=" col-12 col-sm-12 col-xl-12 col-xxl-12 col-md-12 sub-div">
                            <div class="col-12 form-group  details-container">
                                <fieldset class="border">
                                    <legend class="bg-primary legend-heading">Proof of Address (Any-1)</legend>
                                    <div class="container">
                                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
                                            <div class="col">
                                                <p>1) Water Bill</p>
                                            </div>
                                            <div class="col">
                                                <p>2) Passport</p>
                                            </div>
                                            <div class="col">
                                                <p>3) Ration Card</p>
                                            </div>
                                            <div class="col">
                                                <p>4) Adhar Card</p>
                                            </div>
                                            <div class="col">
                                                <p>5) Voter ID Card</p>
                                            </div>
                                            <div class="col">
                                                <p>6) Driving License</p>
                                            </div>
                                            <div class="col">
                                                <p>7) Electricity Bill</p>
                                            </div>
                                            <div class="col">
                                                <p>8) Property Tax Receipt</p>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>

                            </div>
                        </div>
                        <div class=" col-12 col-sm-12 col-xl-12 col-xxl-12 col-md-12 sub-div">
                            <div class="col-12 form-group  details-container">
                                <fieldset class="border">
                                    <legend class="bg-primary legend-heading">Residence Proof(Any-1)</legend>
                                    <div class="container">
                                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
                                            <div class="col">
                                                <p>1) Residence Proof by Talathi</p>
                                            </div>
                                            <div class="col">
                                                <p>2) Residence Proof by Gram Sevak</p>
                                            </div>
                                            <div class="col">
                                                <p>3) Residence Proof by Bill Collector</p>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                        <div class=" col-12 col-sm-12 col-xl-12 col-xxl-12 col-md-12 sub-div">
                            <div class="col-12 form-group  details-container">
                                <fieldset class="border">
                                    <legend class="bg-primary legend-heading">Age Proof (In Case of Minor) (Any -1)</legend>
                                    <div class="container">
                                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
                                            <div class="col">
                                                <p>1)  SFC Certificate</p>
                                            </div>
                                            <div class="col">
                                                <p>2) Birth Certificate</p>
                                            </div>
                                            <div class="col">
                                                <p>3) Bonafide Certificate</p>
                                            </div>
                                            <div class="col">
                                                <p>4) School Leaving Certificate</p>
                                            </div>
                                            <div class="col">
                                                <p>5) Extract from primary school entry</p>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                        <div class=" col-12 col-sm-12 col-xl-12 col-xxl-12 col-md-12 ">
                            <div class="col-12 form-group  details-container">
                                <fieldset class="border">
                                    <legend class="bg-primary legend-heading">Mondatory Documents</legend>
                                    <div class="container">
                                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
                                            <div class="col">
                                                <p>1) Other</p>
                                            </div>
                                            <div class="col">
                                                <p>2) Self-Declaration</p>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                        </div>
                        <hr>
                    </div>
                </div>
                
              
            </body>
        </html>
    `);
    printWindow.print()
}

</script>
    
<script>
    $('#select_doc').change(function(){
        select_doc =$('#select_doc').val();
        $('.certifiacate_links').empty()
        if(select_doc == 1){
            $('.domicile-div').show()
            $('.certifiacate_links').append('  <a href="incomeCertificate.php" class=" btn btn-primary btn-print">CONTINUE</a>')
            // window.location.href = 'incomeRequiredDoc.php'
            // alert(select_doc)
        }
        else if(select_doc == 2){
            $('.domicile-div').show()

            $('.certifiacate_links').append('<a href="birthCertificate.php" class=" btn btn-primary btn-print">CONTINUE</a>')

            // alert(select_doc)
            // window.location.href = 'incomeRequiredDoc.php'

        }
        else if(select_doc == 3){
            // window.location.href = 'incomeRequiredDoc.php'
            // alert(select_doc)
        }
        else if(select_doc == 4){
            // alert(select_doc)
        }
        else{
            alert("please selec your document type");
        }
    })
    // $ ('.btn-continue').click(function(){
    //     select_doc =$('#select_doc').val();
    //     if(select_doc == 1){
    //         window.location.href = 'incomeCeretificate.php'
    //     }
    //     else if(select_doc == 2){
    //     }
    //     else if(select_doc == 3){
    //     }
    //     else if(select_doc == 4){
    //         window.location.href = 'domicileCeretificate.php'
    //     }
    //     else{
    //         alert("please selec your document type");
    //     }
    // })
    function printYourDocument() {
    var printWindow = window.open();
    printWindow.document.write(`
        <html>
            <head>
                <title>Print Form</title>
                <style type="text/css">
                    .main-div{
                        display:flex;
                        justify-content: space-between
                    }  
                </style>
            </head>
            <body>
                <div class="container text-center " style="display: block;">
                    <hr>
                    <div class="row">
                    <div class=" col-12 col-sm-12 col-xl-12 col-xxl-12 col-md-12 main-div">
                        <div class=" col-12 col-sm-12 col-xl-12 col-xxl-12 col-md-12 sub-div">
                            <div class="col-12 form-group  details-container">
                                <fieldset class="border">
                                    <legend class="bg-primary legend-heading">Proof of Identity (Any-1)</legend>
                                    <div class="container">
                                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
                                            <div class="col">
                                                <p>1) PAN Card</p>
                                            </div>
                                            <div class="col">
                                                <p>2) Passport</p>
                                            </div>
                                            <div class="col">
                                                <p>3) RSBY Card</p>
                                            </div>
                                            <div class="col">
                                                <p>4) Adhar Card</p>
                                            </div>
                                            <div class="col">
                                                <p>5) Voter ID Card</p>
                                            </div>
                                            <div class="col">
                                                <p>6) Driving License</p>
                                            </div>
                                            <div class="col">
                                                <p>7) Photo Of Applicant</p>
                                            </div>
                                            <div class="col">
                                                <p>8) Signature Of Applicant</p>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                        <div class=" col-12 col-sm-12 col-xl-12 col-xxl-12 col-md-12 sub-div">
                            <div class="col-12 form-group  details-container">
                                <fieldset class="border">
                                    <legend class="bg-primary legend-heading">Proof of Address (Any-1)</legend>
                                    <div class="container">
                                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
                                            <div class="col">
                                                <p>1) Water Bill</p>
                                            </div>
                                            <div class="col">
                                                <p>2) Passport</p>
                                            </div>
                                            <div class="col">
                                                <p>3) Ration Card</p>
                                            </div>
                                            <div class="col">
                                                <p>4) Adhar Card</p>
                                            </div>
                                            <div class="col">
                                                <p>5) Voter ID Card</p>
                                            </div>
                                            <div class="col">
                                                <p>6) Driving License</p>
                                            </div>
                                            <div class="col">
                                                <p>7) Electricity Bill</p>
                                            </div>
                                            <div class="col">
                                                <p>8) Property Tax Receipt</p>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>

                            </div>
                        </div>
                        <div class=" col-12 col-sm-12 col-xl-12 col-xxl-12 col-md-12 sub-div">
                            <div class="col-12 form-group  details-container">
                                <fieldset class="border">
                                    <legend class="bg-primary legend-heading">Residence Proof(Any-1)</legend>
                                    <div class="container">
                                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
                                            <div class="col">
                                                <p>1) Residence Proof by Talathi</p>
                                            </div>
                                            <div class="col">
                                                <p>2) Residence Proof by Gram Sevak</p>
                                            </div>
                                            <div class="col">
                                                <p>3) Residence Proof by Bill Collector</p>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                        <div class=" col-12 col-sm-12 col-xl-12 col-xxl-12 col-md-12 sub-div">
                            <div class="col-12 form-group  details-container">
                                <fieldset class="border">
                                    <legend class="bg-primary legend-heading">Age Proof (In Case of Minor) (Any -1)</legend>
                                    <div class="container">
                                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
                                            <div class="col">
                                                <p>1)  SFC Certificate</p>
                                            </div>
                                            <div class="col">
                                                <p>2) Birth Certificate</p>
                                            </div>
                                            <div class="col">
                                                <p>3) Bonafide Certificate</p>
                                            </div>
                                            <div class="col">
                                                <p>4) School Leaving Certificate</p>
                                            </div>
                                            <div class="col">
                                                <p>5) Extract from primary school entry</p>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                        <div class=" col-12 col-sm-12 col-xl-12 col-xxl-12 col-md-12 ">
                            <div class="col-12 form-group  details-container">
                                <fieldset class="border">
                                    <legend class="bg-primary legend-heading">Mondatory Documents</legend>
                                    <div class="container">
                                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
                                            <div class="col">
                                                <p>1) Other</p>
                                            </div>
                                            <div class="col">
                                                <p>2) Self-Declaration</p>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                        </div>
                        <hr>
                    </div>
                </div>
                
              
            </body>
        </html>
    `);
    printWindow.print()
}

</script>