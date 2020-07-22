@extends('layouts.app')
@section('content')

<div class="container">
   <div class="row">
     <div class="col-lg-12">
        <h1 class="page-header">
        All Cars
        </h1>
        <table class="table table-hover">
             <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Make Company</th>
                    <th>Price</th>
                    <th>Photo</th>
                </tr>
             </thead>
            @foreach ($del as $delete)
           <tbody>
                <tr>
                    <td>{{ $delete->id }}</td>
                    <td>{{ $delete->name }} </td>
                    <td>{{ $delete->make }}</td>
                    <td>${{ $delete->price }}</td>
                    <td><img style="width: 60px; height: 40px;" src="http://localhost:8000/img/car/{{ $delete->photo1 }}" ></td>
                    <td><a class="btn btn-danger" href="/delete/{{ $delete->id }}">x</a></td>
                </tr>
           </tbody>
           @endforeach
        </table>
     </div>
   </div>
</div>
    

@endsection