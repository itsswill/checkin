@extends('layouts.default')
@section('content')

<div class="wrapper-md">
  <div class="row">
    <div class="col-sm-6">
      <div class="panel panel-default">
        <div class="panel-heading font-bold">Create Student</div>
        <div class="panel-body">

          <form role="form" action="/checkin" method="post">

            <div class="form-group">
              <label>First Name</label>
              <input type="text" name="first_name" class="form-control" placeholder="">
            </div>

            <div class="form-group">
              <label>Last Name</label>
              <input type="text" name="last_name" class="form-control" placeholder="">
            </div>

              <div class="form-group">
                      <input type="hidden" name="_method" value="POST">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group">
              <label>Comments</label>
              <textarea class="form-control" name="comment"></textarea>
            </div>

            <button type="submit" class="btn btn-sm btn-primary">Submit</button>
          </form>


        </div>
      </div>
    </div>
  </div>
</div>    
	
@stop