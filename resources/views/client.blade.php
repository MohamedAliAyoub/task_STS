

@extends('layouts.app')

@section('content')


<!DOCTYPE html>
<html>
<head>
	<title></title>
	
</head>
<body>






<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">





<div class="container-fluid">
  












<div class="container-sm">
            <table class="table">
                <thead class=" text-primary">
                <tr>
                    <th>
                        ID
                    </th>
                    <th>
                        Name
                    </th>
                    <th>
                        email
                    </th>
                    <th>
                        group
                    </th>
                    <th class="text-right">
                      

                    </th>
                </tr></thead>
                <tbody>
                @foreach($users as $row)
                    <tr>
                        <td>
                            {{ $row->id }}
                        </td>
                        <td>
                            {{ $row->name }}
                        </td>
                        <td>
                            {{ $row->email }}
                        </td>
                        <td>
                            {{ $row->group }}
                        </td>
                        <td class="td-actions text-right">
                           
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>





            <table class="table">
                <thead class=" text-primary">
                <tr>
                    <th>
                        ID
                    </th>
                    <th>
                        Name
                    </th>
                    <th>
                        email
                    </th>
                    <th>
                        phone
                    </th>
                    <th class="text-right">
                       <a href="{{ route('admin.delete')}}"> <button type="button" class="btn btn-dark">Delete All</button></a>
					   <a href="{{ route('csv')}}">	<button type="button" class="btn btn-danger">Export CSV</button></a>
					   <a href="{{ route('excel')}}">	<button type="button" class="btn btn-danger">Export Excel</button></a>

                    </th>
                </tr></thead>
                <tbody>
                @foreach($clients as $row)
                    <tr>
                        <td>
                            {{ $row->id }}
                        </td>
                        <td>
                            {{ $row->name }}
                        </td>
                        <td>
                            {{ $row->email }}
                        </td>
                        <td>
                            {{ $row->phone }}
                        </td>
                        <td class="td-actions text-right">
                           
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        
        </div>

      </div>  
</body>
</html>
	   























@endsection
