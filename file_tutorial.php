<!DOCTYPE html>
<html>
<head>
  <title>Maha e Sea Kendra</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/cssFile.css">
  <script src="js/js.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <style></style>
</head>
<body>
  <div class="container col-4 d-flex border mt-4" style="justify-content: center;">
  <form id="fileform" action="file_insert.php" method="POST" enctype="multipart/form-data">
         <input type="file" name="image" />
         <input class="btn btn-primary" name="submit" type="submit"/>
      </form>
  </div>
</body>
</html>

<script>
   $(document).on("submit", "form", function(event)
{
    event.preventDefault();
    $.ajax({
        url: $(this).attr("action"),
        type: $(this).attr("method"),
        dataType: "JSON",
        data: new FormData(this),
        processData: false,
        contentType: false,
        success: function (data, status)
        {

        },
        error: function (xhr, desc, err)
        {
            

        }
    });        

});
</script>
