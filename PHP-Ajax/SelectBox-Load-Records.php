<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <header class="bg-info">
        <h4 class="text-center p-3 text-light fw-bold">Load Record Using SelectBox With PHP & Ajax</h4>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <form method="">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="" class="form-label">City :</label>
                            <select class="form-select" name="" id="city">
                                <option selected>Select City</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="table-responsive">
                            <table class="table table-primary">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">City</th>
                                        <th scope="col">Number</th>
                                        <th scope="col">Email ID</th>
                                    </tr>
                                </thead>
                                <tbody id="table-data">
                                    <!-- call ajax -->
                                    <!-- end ajax  -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </form>
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
            $.ajax({
                url: "ajax-load-city.php?data=1",
                type: "POST",
                dataType: "JSON",
                success: function(data){
                    $.each(data, function(key, value){
                        $("#city").append("<option value='" + value.city + "'>" + value.city + "</option>");
                    });
                }
            });

            // Load Table Data
            $("#city").change(function (e) { 
                e.preventDefault();
                var city =$(this).val();
                if(city == ""){
                    $("#table-data").html("");
                }else{
                    $.ajax({
                        url: "ajax-load-city-table.php",
                        type: "POST",
                        data: {city: city},
                        success: function(data){
                            $("#table-data").html(data);
                        }
                    });
                }
            });
        });
    </script>
</body>

</html>