@extends('layouts.default')
@section('content')

    <div class="wrapper-md">
        <div class="row">
            <div class="col-sm-12">
                <div class="panel-heading font-bold">Check In / Check Out</div>

                <table class="table table-striped m-b-none">
                    <thead>
                    <tr>
                        <th></th>
                    </tr>
                    <tr>
                        <th>Check In</th>
                        <th>Check Out</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Date of Birth</th>
                        <th>...Comments...</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($students as $student)
                        <tr>
                            <td><input type="checkbox" data-id="{{ $student->id }}"></td>
                            <td><input type="checkbox" data-id="{{ $student->id }}"></td>
                            <td>{{ $student->first_name  }}</td>
                            <td>{{ $student->last_name  }}</td>
                            <td>{{ $student->dob  }}</td>

                            <td>
                                <textarea rows="5"
                                          cols="60"
                                          name="comment" form="usrform">
                                    Enter text here...
                                </textarea>

                                <input type="hidden" name="_method" value="POST">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="student_ids" value="">
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <form role="form" action="/attendance/create" method="post">
                    <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                </form
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