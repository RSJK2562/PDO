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
        <h4 class="text-center p-3 text-light fw-bold">Insert Checkbox With PHP & Ajax</h4>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <form id="student-from">
                        <div class="mb-3">
                            <input type="text" class="form-control" id="name" placeholder="Enter Name">
                            <label class="form-label fw-bold" for="">Languages</label>
                            <br>
                            <div class="form-check">
                                <input class="form-check-input lang" type="checkbox" value="Python">
                                <label class="form-check-label" for="">
                                    Python
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input lang" type="checkbox" value="PHP">
                                <label class="form-check-label" for="">
                                    PHP
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input lang" type="checkbox" value="JavaScript">
                                <label class="form-check-label" for="">
                                    JavaScript
                                </label>
                            </div>
                            <button class="btn btn-info text-light fw-bold w-100" id="submit-btn">Submit</button>
                        </div>
                    </form>
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

            $("#student-from").submit(function(e){
                e.preventDefault();

                var name =$("#name").val();
                var language = [];

                $(".lang").each(function(){

                    if($(this).is(":checked")){
                        language.push($(this).val());
                    }
                });
                language = language.toString();
                // console.log(language);  
                if(name != '' && language.length !== 0){
                    $.ajax({
                        url: "INSERT-Checkbox-data.php",
                        type: "POST",
                        data: {name: name, language: language},
                        success: function(data){
                            $("#student-from").trigger('reset');
                            alert(data);
                        }
                    });
                }else{
                    alert("Please fill the required form fields.");
                }

            });

        });
    </script>
</body>

</html>