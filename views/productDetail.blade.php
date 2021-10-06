@extends('layout.app')

@section('content')
<h1>Click to see details</h1>
@foreach($product as $product)
      <h3>ID : {{$product->id}}</h3>
      <h3>Prodcut Name : {{$product->name}}</h3>
      <h3>Product code : {{$product->code}}</h3>
      <h3>Description : {{$product->description}}</h3>
      <h3>Category : {{$product->category}}</h3>
      <h3>Price : {{$product->price}}</h3>
      <h3>Quantity : {{$product->quantity}}</h3>
      <h3>Stock Date : {{$product->date}}</h3>
      <h3>Rating : {{$product->rate}}</h3>
      <h3>Purchased : {{$product->purchased}}</h3>

      <br><br>
@endforeach      
      
@endsection