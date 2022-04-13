@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>

<div style = "width: 1200px; text-align: center;" class = "table">

    <br><br>
    <h3>People in organization</h3>
    <br>

    Click here to add new Client -><u><a href = "/create">Register new Client</a></u>
    <br><br>
    <u>To edit/update Clients, click on their names.</u>
    <br><br>


<table class = "table mx-auto w-auto table-bordered table-hover">
<thead class = "thead-light">
    <tr>
        <th scope="col">Name</th>
        <th scope="col">Surname</th>
        <th scope="col">SA ID Number</th>
        <th scope="col">Mobile Number</th>
        <th scope="col">Email Address</th>
        <th scope="col">Birth Date</th>
        <th scope="col">Language</th>
        <th scope="col">Interest</th>
    </tr>
</thead>
@foreach(($posts) as $post)
<tbody>
    <tr>
        <td><a href = "{{$post->id}}/edit">{{ $post->Name }}</a></td>
        <td>{{ $post->Surname }}</td>
        <td>{{ $post->idNumber }}</td>
        <td>{{ $post->mobileNumber }}</td>
        <td>{{ $post->emailAddress }}</td>
        <td>{{ $post->dateOfBirth }}</td>
        <td>{{ $post->language }}</td>
        <td>{{ $post->interest }}</td>
        <td><button><a href = "{{$post->id}}/delete" style = "color: red">Delete</a></button></td>
    </tr>
</tbody>
@endforeach
</table>  
</div>

@endsection
