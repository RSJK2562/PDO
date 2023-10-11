<!doctype html>
<html lang="en">

<head>
    <title>DATA-SAVE-JSON</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <header>
        <h4 class="text-center p-2 bg-info text-light fw-bold">Save Fomr Data in JSON File</h4>
    </header>
    <main>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-sm-5">
                    <div class="mb-3 text-center">
                        <h6 id="response" class="m-3 fw-bold"></h6>
                    </div>
                    <form action="save-form-data.php" method="post" id="submit_form">
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
                            <input type="submit" name="submit" id="submit" class="btn btn-info fw-bold text-white w-100">
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
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>

</body>

</html>