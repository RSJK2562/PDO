<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <!-- jQuery ui CSS -->
    <link rel="stylesheet" href="jquery-ui-1.13.2.custom/jquery-ui.min.css">

</head>

<body>
    <header class="bg-info">
        <h4 class="text-center p-3 text-light fw-bold">Search with Range Slider using PHP & Ajax</h4>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <form method="">
                    <div class="col-sm-6 mb-4">
                        <p>
                            <label for="age">Age range:</label>
                            <input type="text" id="age" disabled style="border:0; color:#f6931f; font-weight:bold;">
                        </p>
                        <div id="slider-range"></div>
                    </div>
                    <div class="col">
                        <div class="table-responsive">
                            <table class="table table-primary">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Age</th>
                                        <th scope="col">Gender</th>
                                        <th scope="col">City</th>
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
    <script type="text/javascript" src="jquery-ui-1.13.2.custom/jquery-ui.min.js"></script>
    <script>
        $(document).ready(function() {
            var v1 = 10;
            var v2 = 25;
            $(function() {
                $("#slider-range").slider({
                    range: true,
                    min: 0,
                    max: 30,
                    values: [v1, v2],
                    slide: function(event, ui) {
                        $("#age").val(ui.values[0] + " - " + ui.values[1]);
                        v1 = ui.values[0];
                        v2 = ui.values[1];
                        loadTable(v1, v2);
                    }
                });
                $("#age").val($("#slider-range").slider("values", 0) +
                    " - " + $("#slider-range").slider("values", 1));
            });

            function loadTable(range1, range2) {
                $.ajax({
                    url: "RANGE-Slider-data.php",
                    type: "POST",
                    data: {
                        range1: range1,
                        range2: range2
                    },
                    success: function(data) {
                        $("#table-data").html(data);
                    }
                });
            }
            loadTable(v1, v2);
        });
    </script>
</body>

</html>