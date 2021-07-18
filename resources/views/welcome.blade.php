<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Test Task Zavalniuk</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body class="container mt-5">
<div class="container">
    <div class="d-flex mb-4">
        <div class="p-2 w-100 bd-highlight">
            <h2>Test Task Zavalniuk</h2>
        </div>
    </div>
    <div class="d-flex mb-4">
        <div class="p-2 flex-shrink-0 bd-highlight">
            <button class="btn btn-success" id="btn-success">
                Success Request
            </button>
            <button type="button" class="btn btn-danger" id="btn-fail">
                Fail Request
            </button>
        </div>
    </div>
    <div>
        <table class="table table-inverse">
            <thead>
            <tr>
                <th>ID</th>
                <th>Status</th>
                <th>Created At</th>
            </tr>
            </thead>
            <tbody id="todos-list" name="todos-list">
            @foreach ($orders as $order)
                <tr id="todo{{$order->id}}">
                    <td>{{$order->id}}</td>
                    <td>{{$order->status}}</td>
                    <td>{{$order->created_at}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    <div>
        <div class="modal-footer">

        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="{{ asset('js/request.js') }}" defer></script>

</body>

</html>
