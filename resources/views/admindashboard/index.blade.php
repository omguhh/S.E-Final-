@extends('app')

	<div class="col-lg-10 col-lg-offset-1">

		<h1><i class="fa fa-users"></i> User Administration <a href="/logout" class="btn btn-default pull-right">Logout</a></h1>
        <a href="#" class="btn btn-success"><span class="glyphicon glyphicon-plus-sign"></span> Add New User</a>
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
                        <td><a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span> Delete</a></td>
					</tr>
                @endfor
				</tbody>

			</table>
		</div>

	</div>
