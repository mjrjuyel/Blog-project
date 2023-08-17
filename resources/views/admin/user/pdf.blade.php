<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>User Pdf file</title>
</head>
<body>
    <section class="full_wrapper">
        <h1 class="section_title">User List</h1>

        <table class="table table-striped custom_table">
            <thead class="table-dark">
                <tr >
                <th scope="col">User Id</th>
                <th scope="col">User Name</th>
                <th scope="col">User Email</th>
                <th scope="col">User Phone</th>
                <th scope="col">User Photo</th>
                <th scope="col">User Role</th>
                <th scope="col">Manage</th>
                </tr>
            </thead>
            <tbody>
                @foreach($user as $data)
                <tr>
                <th>{{$data->id}}</th>
                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>
                <td>{{$data->phone}}</td>
                
                <td>{{$data->roleinfo->role_title}}</td>
                
                </tr>
                @endforeach
            </tbody>
        </table>
    </section>
</body>
</html>