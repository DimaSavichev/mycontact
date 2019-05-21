<html>
    <head>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <style>
        h1{
            text-align:center;
        }

        a{
            color: black;
        }

        ul{
            list-style-type: circle;
        }

        .card{
            margin-top:10px;
            padding: 10px;
        }

        .name{
            font-size: 20px;
        }

        .badge{
            margin-left:5px;
        }
    </style>
    <body>
        <div class="container">
            <h1>Телефонная книга</h1>
            <div class="card">
                <ul>
                    @foreach($contacts as $contact)
                        <li class="row align-items-center">
                            <a href="{{url('/contact/'.$contact->id)}}" class="name">{{$contact->name}}</a>
                            <a href="{{ url('/contact/'.$contact->id.'/edit')}}" class="badge badge-warning">Изменить</a>
                            <a href="{{ url('/contact/'.$contact->id.'/delete')}}" class="badge badge-danger">Удалить</a>
                        </li>
                    @endforeach
                </ul>
                <a href="{{url('/add')}}"><button class="btn btn-success col-4 offset-4">Добавить</button></a>
            </div>
        </div>
    </body>
</html>