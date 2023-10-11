<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <h2 class="text-center">PHP Ajax SHOW DATA</h2>
  </header>
  <main>
    <div class="container">
        <div class="row justify-content-center align-items-center g-2">
            <div class="col">
                <div class="table-responsive">
                    <table class="table table-primary">
                        <thead>
                            <input class="btn btn-primary mt-3 mb-3" type="button" id="load-button" value="SHOW DATA">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">City</th>
                                <th scope="col">Number</th>
                                <th scope="col">Email ID</th>
                                <th scope="col">Delete Record</th>
                            </tr>
                        </thead>
                        <tbody id="table-data">
                            <!-- call ajax -->
                            
                            <!-- end ajax  -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
  </main>
  <footer>
    
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>

  <!-- jQuery -->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
        $("#load-button").on("click",function(e){
            $.ajax({
                url : "ajax-load.php",
                type : "POST",
                success : function(data){
                    $("#table-data").html(data);
                }
            });
        });
    });
  </script>
</body>

</html>