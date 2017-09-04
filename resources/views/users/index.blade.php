@extends('layouts.app')

@section('content')

    @if ($users->count())
        <table class="table">
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
            </tr>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->first_name }}</td>
                    <td>{{ $user->last_name }}</td>
                    <td>{{ $user->email }}</td>
                </tr>
            @endforeach
        </table>
    @else
        No results
    @endif

@endsection