<!doctype html>
<html lang="en">

<head>
    <title>Selete Box</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <header>
        <h3 class="text-center bg-info p-2 text-light fw-bold">Dynamic Dependent Select Box in <b>PHP & jQuery Ajax</b></h3>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <form method="">
                    <div class="col">
                        <div class="mb-3">
                            <label for="" class="form-label">Country :</label>
                            <select class="form-select" name="" id="country">
                                <option selected>Select Country</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="" class="form-label">State :</label>
                            <select class="form-select" name="" id="state">
                                
                            </select>
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
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script>
        $(document).ready(function(){
            function loadData(type, category_id){
                $.ajax({
                    url : "load-slect-box.php",
                    type : "POST",
                    data : {type : type, id : category_id},
                    success : function(data){
                        if(type == "stateData"){
                            $("#state").html(data);
                        } else{
                            $("#country").append(data);
                        }
                    }
                });
            }
            loadData();

            $("#country").on("change", function(){
                var country = $("#country").val();
                if(country != ""){
                    loadData("stateData", country);
                } else{
                    $("#state").html("");
                }
            });
        });
    </script>
</body>

</html>