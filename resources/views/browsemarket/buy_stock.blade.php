@extends('app')
@section('content')


<div class="container">
    <div class="row clearfix">
        <div class="col-md-12 column">

            <div class="page-header">
                <h1>
                    BUY STOCK
                </h1>
            </div>

            @for ($i = 0; $i < count($test); $i++)
            <h3><strong>Stock Name:</strong> <span>  {{$test[0]['name'] }}</span></h3>
            <h3><strong>Price:</strong> <span>   {{$test[0]['price'] }} </span></h3>

            {!! Form::open(array('route' => 'browsemarket/buy_stocks_amount','class' => 'form-horizontal')) !!}
            <div class="form-group">
            {!! Form::label('quantity', 'Quantity:',['class' => 'col-md-1 control-label']) !!}
                <div class="col-md-4">
           {!! Form::text('quantity',null,['class' => 'form-control input-md']) !!}
           {!! Form::hidden('price', $test[0]['price']) !!}
           {!! Form::hidden('name', $test[0]['name']) !!}

                </div>
            </div>
            @endfor
            <div class="form-group">
                <div class="col-md-4">
                    {!! Form::submit('Submit', ['class'=>'btn btn-primary']) !!}

                </div>
                {!! Form::close() !!}

            </div>

</div>
    </div>
</div>
@stop