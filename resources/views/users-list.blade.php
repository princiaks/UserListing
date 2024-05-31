<!DOCTYPE html>
<html>
<head>
    <title>List Users</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>
<body>
    <div class="container mt-5 pt-3">
        <h2>Users List</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody id="userTableBody">
            </tbody>
        </table>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            axios.get('http://127.0.0.1:8000/api/users')
            .then(function (response) {
                const users = response.data;
                const tableBody = document.getElementById('userTableBody');
                users.forEach(user => {
                    const row = document.createElement('tr');
                    const nameCell = document.createElement('td');
                    const emailCell = document.createElement('td');
                    nameCell.textContent = user.name;
                    emailCell.textContent = user.email;
                    row.appendChild(nameCell);
                    row.appendChild(emailCell);
                    tableBody.appendChild(row);
                });
            })
            .catch(function (error) {
                alert('Something went wrong');
            });
        });
    </script>
</body>
</html>
