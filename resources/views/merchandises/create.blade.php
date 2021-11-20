@extends('base')

@section('content')
   
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-md-5 offset-md-2">
                    <h1>Create New Merchandise</h1>
                    {!! Form::open(['url' => '/merchandises', 'method' => 'post']) !!}

                    <div class="form-group">
                        {{Form::label('name', 'Merchandise Name')}}
                        {{Form::text('name', null, ['class' =>'form-control'])}}
                    </div>

                    <div class="form-group">
                        {{Form::label('description', 'Merchandise Description')}}
                        {{Form::text('description', null, ['class' =>'form-control'])}}
                    </div>

                    <div class="form-group">
                        {{Form::label('quantity', 'Quantity')}}
                        {{Form::text('quantity', null, ['class' =>'form-control'])}}
                    </div>

                    <div class="form-group">
                        {{Form::label('price', 'Price')}}
                        {{Form::number('price', null, ['class' =>'form-control'])}}
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary float-right">
                            Create Merchandise

                        </button>
                    </div>
                    {!! Form::close() !!}

                </div>
                <div class="mt-5">  
                @include('errors')
        </div>
</div>

        </div>


    
@endsection