<!doctype html>
<html lang="en">

<head>
  <title>JSON</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <h3 class="text-center bg-info p-2 text-light fw-bold">PHP with Ajax & JSON</h3>
  </header>
  <main>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-sm-6">
                <div class="table-responsive">
                    <table class="table table-primary" id="json_data">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Age</th>
                                <th scope="col">gender</th>
                                <th scope="col">City</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- call ajax with json -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>

  <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script>
        $(document).ready(function(){
            // $.getJSON(
            //     "json_encode.php",
            //     function(data){
            //         $.each(data, function(key,value){
            //             $("#json_data").append(value.id + " - " + value.name + " <b>Age</b> " + value.age + " <b>Gender</b> " + value.gender + " <b>City</b> " + value.city + "<br>");
            //         });
            //     }
            // );

            $.ajax({
                url : "json_encode.php",
                type : "POST",
                data : {id : 3},
                dataType : "JSON",
                success: function(data){
                    $.each(data, function(key,value){
                        $("#json_data").append("<tr><td>" + value.id + "</td><td>" + value.name + "</td><td>" + value.age + "</td><td>" + value.gender + "</td><td>" + value.city + "</td></tr>");
                    });
                }
            });
        });
    </script>
</body>

</html>