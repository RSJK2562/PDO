<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <style>
        #success-message{
            background: #DEF1D8;
            border-radius: 15px;
            color: green;
            padding: 10px;
            margin: 10px;
            display: none;
            position: absolute;
            right: 15px;
            top: 15px;
        }
        #error-message{
            background: #EFDCDD;
            border-radius: 15px;
            color: red;
            padding: 10px;
            margin: 10px;
            display: none;
            position: absolute;
            right: 15px;
            top: 15px;
        }
    </style>
</head>

<body>
    <header class="bg-info">
        <h4 class="text-center p-3 text-light fw-bold">Add Record With PHP & Ajax</h4>
    </header>
    <main>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-sm-4 text-center mt-2 mb-3">
                    <form id="addForm">
                        <div class="mb-3 text-start" id="table-form">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" id="sname" placeholder="Enter Name">

                            <label class="form-label">City</label>
                            <input type="text" class="form-control" id="scity" placeholder="Enter Name">

                            <label class="form-label">Number</label>
                            <input type="number" class="form-control" id="snumber" placeholder="Enter Strong Password">

                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" id="semail" placeholder="Enter Email Id">

                            <input class="btn btn-info fw-bold w-100 mt-1" type="button" id="save-button" value="Save">
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
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
            <div id="error-message">error</div>
            <div id="success-message">success</div>
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
    <script type="text/javascript">
        // Load Table Records
        $(document).ready(function() {
            function loadTable() {
                $.ajax({
                    url: "ajax-load.php",
                    type: "POST",
                    success: function(data) {
                        $("#table-data").html(data);
                    }
                });
            }
            loadTable();    //Load Table Records on Page Load

            // Insert New Records
            $("#save-button").on("click", function(e) {
                e.preventDefault();
                var name = $("#sname").val();
                var city = $("#scity").val();
                var number = $("#snumber").val();
                var email = $("#semail").val();
                if (name == "" || city == "" || number == "" || email == "") {
                    $("#error-message").html("All filed are required.").slideDown();
                    $("#success-message").slideUp();
                } else {
                    $.ajax({
                        url: "ajax-insert.php",
                        type: "POST",
                        data: {
                            Name: name,
                            City: city,
                            Number: number,
                            Email: email
                        },
                        success: function(data) {
                            if (data == 1) {
                                loadTable();
                                $("#addForm").trigger("reset");
                                $("#success-message").html("Data Inserted Successfully.").slideDown();
                                $("#error-message").slideUp();
                            } else {
                                $("#error-message").html("Con't Save Record.").slideDown();
                                $("#success-message").slideUp();
                            }
                        }
                    });
                }
            })
        });
    </script>
</body>

</html>