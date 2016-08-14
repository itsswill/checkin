@extends('layouts.default')
@section('content')

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