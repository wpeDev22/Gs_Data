@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 pt-5">
           <h4 class='text-center'> Google Sheet Data</h4>
           <table class="table">
            <thead class='bg-light'>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">age</th>
                <th scope="col">Address</th>
                <th scope="col">Phone</th>
              </tr>
            </thead>
            <tbody>
                @foreach($datas as $data)
                <tr> 
                    <td>{{$data->name}} </td>
                    <td>{{$data->age}} </td>
                    <td>{{$data->address}} </td>
                    <td>{{$data->phone}} </td>
    
                </tr>
                @endforeach
            
            </tbody>
          </table>
          

        </div>
    </div>
</div>
@endsection