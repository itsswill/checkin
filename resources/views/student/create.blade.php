@extends('layouts.default')
@section('content')

    <div class="wrapper-md">
        <div col="row">
            <div class="col-md-12">
                @if (!$errors->isEmpty())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            {{ $error }}<br>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-heading font-bold">Create Student</div>
                    <div class="panel-body">

                        <form role="form" action="/students/create" method="post">

                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" name="first_name" class="form-control" placeholder="" value="{{ old('first_name') }}">
                            </div>

                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" name="last_name" class="form-control" placeholder="" value="{{ old('last_name') }}">
                            </div>

                            <div class="form-group" >
                                <label>Date Of Birth</label>
                                <input type="text" name="dob" class="form-control" placeholder="" value="{{ old('dob') }}">
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