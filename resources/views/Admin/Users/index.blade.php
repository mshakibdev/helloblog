@extends('layouts.admin')

@section('content')
        <div class="container">
            <h1>User List</h1>
            <table class="table table-dark">
                    <hr>
                        <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Photo</th>
                            <th scope="col">Name</th>
                            <th scope="col">Role</th>
                            <th scope="col">Status</th>
                            <th scope="col">Email</th>
                            <th scope="col">Created</th>
                            <th scope="col">Updated</th>
                        </tr>
                        </thead>
                @if($users)
                    @foreach ($users as $user)
                        <tbody>
                        <tr>
                            <td>{{$user->id}}</td>
                            <td><img height="50" width="50" src="{{$user->photo ? $user->photo->path: 'No Photo'}}" alt=""></td>
                            <td><a href="{{route('users.edit',$user->id)}}">{{$user->name}}</a></td>
                            <td>{{$user->role->name}}</td>
                            <td>{{$user->is_active == 1 ? 'Active' : 'Not active'}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->created_at->diffForHumans()}}</td>
                            <td>{{$user->updated_at->diffForHumans()}}</td>
                        </tr>
                        </tbody>
                    @endforeach
                @endif
              </table>
        </div>
@endsection