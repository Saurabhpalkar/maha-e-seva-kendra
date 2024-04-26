<?php
include 'include/connection.php';
include 'index1.php';
if(!$_SESSION){
    header("location:home.php");
}
?>

<div class=" col-10 col-sm-10 col-xl-10 col-xxl-10 col-md-10 domicile-div">
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
        <div class="col-12 form-group  details-container">
            <a href="incomeCertReqDoc.php" class="btn btn-primary btn-print">CONTINUE</a>
            <button class="btn btn-success btn-print" onclick="printYourDocument()">PRINT</button>
            <a href="dashboard.php" class="btn btn-warning">BACK</a>
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
    