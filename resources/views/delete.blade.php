@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>

    
    <style type="text/css">
        .dropdown-toggle{
            height: 40px;
            width: 200px !important;
        }
    </style>

</head>
<body>
    
    <div class = "container row offset-3 mt-2 col-sm-20" style = "text-align: center;">
    

        <form method = "POST" action = "/home/{{$post->id}}">

            @method('DELETE')

            @csrf

            <div style = "text-align: center" class = "form-control col-sm-20">
                <label for = "Name">Name: </label><br>
                <input id = "Name" name = "Name" value = "{{$post->Name}}"><br>

                <label for = "Surname">Surname: </label><br>
                <input id = "Surname" name = "Surname" value = "{{$post->Surname}}"><br>

                <label for = "idNumber">SA ID Number: </label><br>
                <input id = "idNumber" name = "idNumber" value = "{{$post->idNumber}}"><br>

                <label for = "mobileNumber">Mobile Number: </label><br>
                <input id = "mobileNumber" name = "mobileNumber" value = "{{$post->mobileNumber}}"><br>

                <label for = "emailAddress">Email Address: </label><br>
                <input id = "emailAddress" name = "emailAddress" value = "{{$post->emailAddress}}"><br>


                <label for = "dateOfBirth" class = "control-label">Date of Birth: </label><br>
                <input id = "dateOfBirth" name = "dateOfBirth" type = "date" value = "{{$post->dateOfBirth}}"><br>


                <label for = "language">Language: </label><br>
                <select class = "selectpicker" name = "language">
                    <option value = "{{$post->language}}">{{$post->language}}</option>
                </select>

                <div class = "">
                <label for = "interest"><strong>Interest: </strong></label><br><select class = "selectpicker" name = "interest[]">
                    <option value = "{{$post->interest}}">{{$post->interest}}</option>
                </select><br><br>
                </div>
            </div>

            <br>
            This will delete data from the Database, be 100% certain before you press delete.<br><br>
            <a href = '/home'><input value = "Delete" type = "submit" style = "color:red"></a> <a href = '/home'><input value = "Back" type = "button"></a>

        </form>

    </div>

</body>
</html>
@endsection