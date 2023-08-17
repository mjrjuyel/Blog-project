
        <table>
            <thead>
                <tr >
                <th>User Id</th>
                <th>User Name</th>
                <th>User Email</th>
                <th>User Phone</th>
                <th>User Photo</th>
                <th>User Role</th>
                </tr>
            </thead>
            <tbody>
                @foreach($alluser as $data)
                <tr>
                    <td>{{$data->id}}</td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->email}}</td>
                    <td>{{$data->phone}}</td>
                    <td>{{$data->roleinfo->role_title}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
