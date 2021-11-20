@extends('base')
@section('content')

@if($info = Session::get('info'))
<div class="card">
    <div class="card-body bg-success text-dark">
    {{$info}}
    </div>
</div>
@endif
<div class="container">
<div class="float-right">
    <a href="{{url('/merchandises/create')}}" class="btn btn-primary"> Add New Merchandise</a>
</div>
        <div class="align-self-center px-9 mt-5">
            <h1 class="text-white">Stores</h1>
            <table class="table table-bordered table table-striped table-light table-sm">
                <thead class="bg-info">
                    <tr>
                        <th>Merchandise Id</th>
                        <th>Merchandise Name</th>
                        <th>Description</th>
                        <th>Quantity</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody class="table-striped">
                    @foreach($merchandises as $merch)
                    <tr class="fs-5">
                        <td>{{$merch->id}}</td>
                        <td>{{$merch->name}}</td>
                        <td>{{$merch->description}}</td>
                        <td>{{$merch->quantity}}</td>
                        <td>{{$merch->price}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
</div>
@endsection