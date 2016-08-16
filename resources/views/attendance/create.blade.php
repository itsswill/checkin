@extends('layouts.default')
@section('content')

    <div class="wrapper-md">

        <div class="row">
            <div class="col-sm-6">
                <div class="font-bold">Check In / Check Out</div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <table class="table table-striped m-b-none">
                    <thead>
                    <tr>
                        <th></th>
                    </tr>
                    <tr>
                        <th>Check In</th>
                        <th>Check Out</th>
                        <th>Guardian</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Date of Birth</th>
                        <th>...Comments...</th>
                        <th>&nbsp;</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($students as $student)
                        <form role="form" action="/attendance/create" method="post">
                        <tr>

                            @if($student->checkedIn)
                                <td><input type="checkbox" checked name="checkin" value="in"></td>
                            @else
                                <td><input type="checkbox" name="checkin" value="in"></td>
                            @endif

                            @if($student->checkedOut)
                                <td><input type="checkbox" checked name="checkin" value="{{ $student->checkinId }}"></td>
                             @else
                                <td><input type="checkbox" name="checkout" value="out"></td>
                             @endif

                            <td>
                                <select name="guardian_id" class="form-control">
                                    @foreach($student->guardians as $guardian)
                                    <option value="{{ $guardian->guardian_id  }}">{{ $guardian->first_name  }} {{ $guardian->last_name  }}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td>{{ $student->first_name  }}</td>
                            <td>{{ $student->last_name  }}</td>
                            <td>{{ $student->dob  }}</td>

                            <td>
                                <textarea class="form-control" name="comment" placeholder="enter text here..."></textarea>

                                <input type="hidden" name="_method" value="POST">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="student_id" value="{{ $student->id  }}">

                            <td>
                                <input type="submit" class="btn btn-sm btn-primary m-t" value="Submit">
                            </td>
                        </tr>
                        </form>
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