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
    <header>
        <h3 class="text-center bg-info p-3 text-light">PHP Ajax Serialize Form</h3>
    </header>
    <main>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-sm-6">
                    <div class="mb-3 text-center">
                        <h6 id="response" class="m-3 fw-bold"></h6>
                    </div>
                    <form id="submit_form">
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Age</label>
                            <input type="number" name="age" id="age" class="form-control" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Gender</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gnd" id="" value="Male">
                                <label class="form-check-label" for="">
                                    Male
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gnd" id="" value="Female">
                                <label class="form-check-label" for="">
                                    Female
                                </label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">City</label>
                            <select class="form-select" name="city" id="">
                                <option value="Lucknow">Lucknow</option>
                                <option value="New_Delhi">New Delhi</option>
                                <option value="Jaunpur">Jaunpur</option>
                                <option value="Varanashi">Varanashi</option>
                            </select>
                        </div>
                        <div class="mb-3 text-center">
                            <input type="button" name="submit" id="submit" class="btn btn-info fw-bold text-white w-100" value="Submit">
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
        $(document).ready(function() {
            $("#submit").click(function() {
                var name = $("#name").val();
                var Age = $("#age").val();
                
                if (name == "" || age == "" || !$('input:radio[name=gnd]').is(':checked')){
                    $('#response').fadeIn();
                    $('#response').addClass('text-light bg-danger').html('All fields are required.');
                } else {
                    // $('#response').html($('#submit_form').serialize());
                    $.ajax({
                        url : "ajax-serialize.php",
                        type : "POST",
                        data : $('#submit_form').serialize(),
                        beforeSend: function(){
                            $('#response').fadeIn();
                            $('#response').removeClass('text-light bg-danger bg-success').addClass('text-light bg-secondary').html('Loading response...');
                        },
                        success : function(data){
                            $('#submit_form').trigger("reset");
                            $('#response').fadeIn();
                            $('#response').removeClass('text-light bg-danger').addClass('text-light bg-success').html(data);
                            setTimeout(function(){
                                $('#response').fadeOut("slow");
                            },2000);
                        }
                    })
                }
            });
        });
    </script>
</body>

</html>