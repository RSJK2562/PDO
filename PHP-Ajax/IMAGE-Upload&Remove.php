<!doctype html>
<html lang="en">

<head>
    <title>IMAGE</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <header class="bg-info">
        <h4 class="text-center p-3 text-light fw-bold">Upload Remove Image With PHP & Ajax</h4>
    </header>
    <main>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-sm-6">
                    <form id="submit_form">
                        <div class="mb-3">
                            <label for="" class="form-label">Select Image</label>
                            <input type="file" name="file" id="upload_file" class="form-control" aria-describedby="helpId">
                            <small id="helpId" class="text-muted">Allowed File Type - jpg, jpeg, png, gif</small>
                        </div>
                        <input class="btn btn-info w-50" type="submit" name="upload_button" id="upload_btn" value="Upload">
                    </form>
                    <div class="card mt-5 d-none" id="preview">
                        <h4 class="card-title bg-info p-2 text-center text-light">Image Preview</h4>
                        <div class="card-body" id="img_preview">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>

    <!-- jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#submit_form").on("submit", function(e){
                e.preventDefault();
                var fromData = new FormData(this);
                $.ajax({
                    url: "IMAGE-Upload.php",
                    type: "POST",
                    data: fromData,
                    contentType: false,
                    processData: false,
                    success: function(data){
                        $("#preview").fadeIn();
                        $("#preview").removeClass('d-none');
                        $("#img_preview").html(data);
                        $("#upload_file").val('');
                    }
                });
            });

            // Delete Image
            $(document).on("cluck", "#delete_btn", function(e){
                e.preventDefault();
                if(confirm("Are you sure you want to remove this image ?")){
                    var imgpath = $("#delete_btn").data("dlt");
                    alert(imgpath);
                    $.ajax({
                        url: "IMAGE-Remove.php",
                        type: "POST",
                        data: {delimg : imgpath},
                        success: function(data){
                            if(data != ""){
                                $("#preview").fadeIn();
                                $("#preview").addClass('d-none');
                                $("#img_preview").html(''); 
                            }
                        }
                    });
                }
            });
        });
    </script>
</body>

</html>