@extends('FAapp')


@section('content')

    <div class="content-wrapper">

<section class="content">

<div class = "row">
        <!-- PRODUCT LIST -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">All Clients</h3>

            </div><!-- /.box-header -->
            <div class="box-body">
                <ul class="products-list product-list-in-box">

                    @for ($i = 0; $i < count($client); $i++)
                    <li class="item">
                        <img src="http://localhost/I'mDoneWithSE/S.E-Final-/resources/img/download.jpg" style="width: 10%;" >
                            <div class="product-info">
                                <a href="#" class="product-title">Client Name:{{$client[$i]['rc_name']}} <br><span class="label label-warning pull-right">Cash Balance: {{$client[$i]['cash_balance']}}<br></span></a>

                        <span class="product-description">
                          Email: {{$client[$i]['rc_email']}}<br>
                                Address: {{$client[$i]['rc_address']}}<br>
                                Phone:{{$client[$i]['rc_phone']}} <br>
                        </span>
                            </div>
                        <div class="other">

                        </div>

                        @endfor


                    </li><!-- /.item -->

                </ul>
            </div><!-- /.box-body -->

        </div><!-- /.box -->
    </div>




</section>

</div>


@stop