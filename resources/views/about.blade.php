   @extends('layouts.main') 

   @section('container')
   
    <h1>{{ $nama }}</h1>
    <h3>{{ $email }}</h3>
    <p>{{ $image }}</p>
    <img src="img/black.jpg" alt="royandi gaming" style="width: 500px" class=" img-thumbnail rounded-circle ">

   @endsection

   
