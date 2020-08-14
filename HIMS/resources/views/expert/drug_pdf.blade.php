<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
</head>




            <ul class="nav">
                <li class="nav-item" style="text-align: center">
                    <h3 class="left-menu-logo" >
                        <i class="fa fa-stethoscope dmw-logo"> </i>
                    </h3>
                    <h1>  HIMS </h1><br>
                        <h4>DRUG LIST REPORT</h4>
                    </a>
                </li>

            </ul>



        <table class="table">

            <thead>
                <tr>
                    <th>S/N</th>
                    <th>Stock No</th>
                    <th>Stock Date</th>
                    <th>Name</th>
                    <th>Total Price</th>
                    <th>Packets No</th>
                    <th>Tablets No</th>
                    <th>Expire Date</th>
                </tr>
            </thead>
            <tbody>



                @foreach( $drugs as $key=>$drug )
                <tr class="table-success">
                <td>{{ $drug->id }}</td>
                    <td>{{ $drug->stock_no }}</td>
                    <td>{{ $drug->stock_date }}</td>
                    <td>{{ $drug->drug_id}}</td>
                    <td>{{ $drug->drug_name }}</td>
                    <td>{{ $drug->price}}</td>
                    <td>{{ $drug->packet_no }}</td>
                    <td>{{ $drug->expire_date}}</td>

                    </td>

                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
