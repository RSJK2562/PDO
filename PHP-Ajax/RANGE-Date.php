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
        <h4 class="text-center p-3 text-light fw-bold">Search in Date Range using PHP & Ajax</h4>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <form method="">
                    <div class="col-sm-6 mb-4">
                        <label for="from">From</label>
                        <input type="text" id="from" name="from">
                        <label for="to">to</label>
                        <input type="text" id="to" name="to">
                    </div>
                    <div class="col">
                        <div class="table-responsive">
                            <table class="table table-primary">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">City</th>
                                        <th scope="col">DOB</th>
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
        $(function() {
            var minD;
            var maxD;
            var dateFormat = "mm/dd/yy",
                from = $("#from")
                .datepicker({
                    defaultDate: "+1w",
                    changeYear: true,
                    changeMonth: true,
                    numberOfMonths: 1,
                    yearRange: "1991:2023"
                })
                .on("change", function() {
                    to.datepicker("option", "minDate", getDate(this));
                    minD = $(this).val();
                    if(minD !== "" && maxD !== ""){
                        loadTable(minD, maxD);
                    }
                }),

                to = $("#to").datepicker({
                    defaultDate: "+1w",
                    changeYear: true,
                    changeMonth: true,
                    numberOfMonths: 1,
                    yearRange: "1991:2023"
                })
                .on("change", function() {
                    from.datepicker("option", "maxDate", getDate(this));
                    maxD = $(this).val();
                    if(minD !== "" && maxD !== ""){
                        loadTable(minD, maxD);
                    }
                });

            function getDate(element) {
                var date;
                try {
                    date = $.datepicker.parseDate(dateFormat, element.value);
                } catch (error) {
                    date = null;
                }

                return date;
            }
            
            function loadTable(date1, date2){
                $.ajax({
                    url: "RANGE-Date-Data.php",
                    type: "POST",
                    data: {date1: date1, date2:date2},
                    success: function(response){
                        $("#table-data").html(response);
                    }
                });
            }
            loadTable(minD, maxD);
        });
    </script>
</body>

</html>