function loadTable() {
    fetch("code/load-table.php")
        .then((response) => response.json())
        .then((data) => {
            var tabledata = document.getElementById("table-data");
            if (data["empty"]) {
                tabledata.innerHTML = "<tr><td colspan='6' class='text-center'><h3>No Record Found.</h3></td></tr>";
            } else {
                var tr = "";
                for (var i in data) {
                    tr += `<tr>
                        <td>${data[i].id}</td>
                        <td>${data[i].f_name} ${data[i].l_name}</td>
                        <td>${data[i].class_name}</td>
                        <td>${data[i].city}</td>
                        <td><button class="btn btn-success" onclick="edit(${data[i].id})">Edit</button></td>
                        <td><button class="btn btn-danger" onclick="delete(${data[i].id})">Delete</button></td>
                    </tr>`;
                }
                tabledata.innerHTML = tr;
            }
        })
        .catch((error) => {
            show_message("error", "Cant't Fetch Data.");
        });
}

loadTable();

function show_message(type,text) {
    if (type == "error") {
        var msg_box = document.getElementById("error");
    } else {
        var msg_box = document.getElementById("success");
    }
    msg_box.innerHTML = text;
}