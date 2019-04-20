<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <style>
        .badge{
            margin-left:5px;
        }

        div{
            margin-top:10px;
        }

        .card{
            padding:10px;
        }

    </style>
    <body>
        @extends('contacts.layouts.back')
        <div class="container">
            <div class="row align-items-center">
                <h2>{{$contact->name}}</h2>
                <a href="{{ url('/contact/'.$contact->id.'/edit')}}" class="badge badge-warning">Изменить</a>
                <a href="{{ url('/contact/'.$contact->id.'/delete')}}" class="badge badge-danger">Удалить</a>
            </div>
            <div class="card">
                <h3>Организация: </h3>
                <p>{{$contact->organisation}}</p>
            </div>

            <div class="card">
                <h3>Адрес: </h3>
                <p>{{$contact->address}}</p>
            </div>

            <div class="card">
                <h3>Комментарий: </h3>
                <p>{{$contact->description}}</p>
            </div>
        </div>
    </body>
</html>