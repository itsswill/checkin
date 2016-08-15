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


                            <input type="hidden" name="student_ids" value="">

                            <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                        </form>


                    </div>
                </div>
            </div>
            <div class="col-sm-6">

                <table class="table table-striped m-b-none">
                    <thead>
                    <tr>
                        <th></th>
                    </tr>
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Date of Birth</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($students as $student)
                         <tr>
                             <td><input type="checkbox" data-id="{{ $student->id }}"></td>
                             <td>{{ $student->first_name  }}</td>
                             <td>{{ $student->last_name  }}</td>
                             <td>{{ $student->dob  }}</td>
                         </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>


    <script>

        $(document).ready(function(){
            var studentIds = [];

            $("input[type=checkbox]").on('click', function(){

                var student_id = $(this).attr('data-id');

               if($(this).is(':checked')){
                   //something happens on click of a checkbox
                   studentIds.push(student_id); //this pushes into array
               }else{

                   var index = studentIds.indexOf(student_id);
                   studentIds.splice(index, 1);
               }

                //join our array
                var studentString = studentIds.join("|");
                $("input[name=student_ids]").val(studentString);
            });


        });
    </script>

@stop