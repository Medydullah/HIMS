<table class="table">
    <thead>
        <tr>
            <th>S/N</th>
            <th>Name</th>
            <th>email</th>
            <th>Qualification</th>
            <th>Specialization</th>
            <th> </th>
        </tr>
    </thead>
    <tbody>

        @foreach( $staffs  as
        $key=>$staff)
        <tr class="table-success">
            <td>{{ $staff->id }}</td>
            <td>{{ $staff->name }}</td>
            <td>{{ $staff->email }}</td>
            <td>{{ $staff->qualification }}
            </td>
            <td>{{ $staff->specialization }}
            </td>
        </tr>

            @endforeach
    </tbody>

</table>
