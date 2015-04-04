@extends('ADapp')
@section('content')

    <div class="container">
        <div class="col-lg-12" style="width: 100% !important;">

		<h1>Admin Dashboard </h1>   <span>

        {!! Form::open(array('route' => 'admin_dashboard/addFA')) !!}
        {!! Form::submit('Add New FA', ['class' => 'btn btn-success']) !!}
        {!! Form::close() !!}</span>

            <div class="table-responsive">
			<table class="table table-bordered table-striped">

				<thead>
				<tr>
					<th>Financial Advisor ID</th>
					<th>Financial Advisor Name</th>
                    <th>Action</th>
				</tr>
				</thead>
				<tbody>
               @for ($i = 0; $i < count($admin); $i++)
				<tr>
						<td><a href={{ URL::route('user',$admin[$i]['fa_name']) }} > {{$admin[$i]['fa_id']}}</a> </td>
						<td>{{$admin[$i]['fa_name']}}</td>
                        <td>{!! Form::open(['method' => 'DELETE', 'route' => ['user/delete',$admin[$i]['fa_id']]]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}</td>
					</tr>

                @endfor
				</tbody>

			</table>
		</div>

	</div>
    </div>
 @stop
