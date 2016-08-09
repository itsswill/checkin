@extends('layouts.default')
@section('content')

    <div class="wrapper-md">
        <div class="row">
            <div class="col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-heading font-bold">Create Guardian</div>
                    <div class="panel-body">

                        <form role="form" action="/guardian/create" method="post">

                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" name="first_name" class="form-control" placeholder="">
                            </div>

                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" name="last_name" class="form-control" placeholder="">
                            </div>

                            <div class="form-group" >
                                <label>Address</label>
                                <input type="text" name="address" class="form-control" placeholder="">
                            </div>

                            <div class="form-group" >
                                <label>City</label>
                                <input type="text" name="city" class="form-control" placeholder="">
                            </div>

                            <div class="form-group" >
                                <label>Province/State</label>
                                <input type="text" name="province" class="form-control" placeholder="">
                            </div>

                            <div class="form-group" >
                                <label>Postal Code</label>
                                <input type="text" name="postal_code" class="form-control" placeholder="">
                            </div>

                            <div class="form-group" >
                                <label>Phone Number</label>
                                <input type="text" name="phone_number" class="form-control" placeholder="">
                            </div>

                            <input type="hidden" name="_method" value="POST">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">


                            <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>

@stop