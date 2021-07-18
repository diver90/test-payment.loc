<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Test Task Zavalniuk</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body class="container mt-5">
<div class="container">
    <div class="d-flex mb-4">
        <div class="p-2 w-100 bd-highlight">
            <h2>Payment Failed</h2>
        </div>
    </div>
    <div>
        @if(session()->has('fail'))
            <div class="alert">
                <table class="table table-inverse">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Operation</th>
                        <th>Status</th>
                        <th>Message</th>
                    </tr>
                    </thead>
                    <tbody id="todos-list" name="todos-list">
                        <tr id="todo{{$fail['id']}}">
                            <td>{{$fail['id']}}</td>
                            <td>{{$fail['operation']}}</td>
                            <td>{{$fail['status']}}</td>
                            <td>{{$fail['message']}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        @endif
    </div>
    <div class="d-flex mb-4">
        <a href="/" class="btn btn-success">
            Go Back
        </a>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/request.js') }}" defer></script>

</body>

</html>
