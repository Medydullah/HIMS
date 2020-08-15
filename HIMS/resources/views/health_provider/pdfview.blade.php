<!DOCTYPE html>
<html lang="en">
<head>
  <title>Staff Report</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">


<body>
@if( $editMode=='none' )

<ul class="nav" style="text-align: center;">

        <h3>  HOSPITAL INFORMATION MANAGEMENT SYSTEM <br>(HIMS) </h3>
            <h4>STAFF LIST REPORT</h4>
        </a>
    </li>

</ul>

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
            <td>{{ $staff->id}}</td>
            <td>{{ $staff->name }}</td>
            <td>{{ $staff->email }}</td>
            <td>{{ $staff->qualification }}</td>
            <td>{{ $staff->specialization }}
            </td>
        </tr>

            @endforeach
    </tbody>

</table>
@endif
