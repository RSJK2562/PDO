<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <header class="bg-info">
        <h4 class="text-center p-3 text-light fw-bold">Delete Multipal Data With <b>PHP & Ajax CRDU</b></h4>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col m-3 text-center"> <button class="btn btn-danger fw-bold" id="delete-btn">Delete Data</button> </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="table-responsive">
                        <table class="table table-primary">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Select</th>
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
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>

    <!-- sweet alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script type="text/javascript">
        // Load Table Records
        $(document).ready(function() {
            function loadTable() {
                $.ajax({
                    url: "ajax-load-multipal-data.php",
                    type: "POST",
                    success: function(data) {
                        $("#table-data").html(data);
                    }
                });
            }
            loadTable(); //Load Table Records on Page Load

            $("#delete-btn").on("click", function() {
                var id = [];

                $(":checkbox:checked").each(function(key){
                    id[key] = $(this).val();
                });
                if(id.length === 0){
                    alert("Please Selete atleat one checkbox.");
                } else{
                    // console.log(id);
                    swal({
                        title: "Are you sure?",
                        text: "Once deleted, You will not be able to recover this Record With PHP & Ajax file!",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            $.ajax({
                                url: "ajax-delete-multipal-data.php",
                                type: "POST",
                                data: {Id: id},
                                success: function(data) {
                                    if (data == 1) {
                                        swal("Poof! Your Ajax Record file has been deleted!", {
                                            icon: "success",
                                        });
                                        loadTable();
                                    } else {
                                        swal("Error");
                                    }
                                }
                            });
    
                        } else {
                            swal("Your Record With PHP & Ajax file is safe!");
                        }
                    });
                }
            });
        });
    </script>
</body>

</html>