@extends('layouts.app')

@section('content')

<div class="container">

<table>

    @foreach ($dishes as $dish)
        <tr>
            <td>{{$dish->name}}</td>
            <td>{{$dish->price}}</td>
            <td>{{$dish->type}}</td>
        </tr>


    @endforeach
    
</table>
<hr>

<a href="product.create">Create</a>


</div>
{{-- {{$dishes->links()}} --}}  

@endsection