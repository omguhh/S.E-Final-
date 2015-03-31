@extends('app')

<form class="form-horizontal" role="form" method="post" action="index.php">
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="">
        </div>
    </div>
    <div class="form-group">
        <label for="email" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="">
        </div>
    </div>
    <div class="form-group">
        <label for="message" class="col-sm-2 control-label">Message</label>
        <div class="col-sm-10">
            <textarea class="form-control" rows="4" name="message"></textarea>
        </div>
    </div>
    <div class="form-group">
        <label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <! Will be used to display an alert to the user>
        </div>
    </div>
</form>

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
