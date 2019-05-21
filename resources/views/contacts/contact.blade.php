<html>
    
    <style>
        .btn-sm{
            margin-left:5px;
        }

        div{
            margin-top:10px;
        }

        .card{
            padding:10px;
        }
        
        .btn-success{
            display:inline-block;
        }

        .badge-danger{
            margin-left:10px;
        }
    </style>
    <body>
        @extends('contacts.layouts.back')
        <div class="container">
            <div class="row align-items-center">
                <h2>{{$contact->name}}</h2>
                <a href="{{ url('/contact/'.$contact->id.'/edit')}}"><button class="btn btn-warning btn-sm">Изменить</button></a>
                <a href="{{ url('/contact/'.$contact->id.'/delete')}}"><button class="btn btn-danger btn-sm">Удалить</button></a>
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

            <div>
            <div class="card col-12">
                <div class="row align-items-center col-12">
                    <h3>Телефоны: </h3>
                    <a href="{{ url('/contact/'.$contact->id.'/add_phone')}}"><button class="btn btn-success btn-sm">Добавить</button></a>
                </div>
                <ul>
                    @foreach($contact->phones as $phone)
                        <li class="row align-items-center">
                            <div>{{ $phone->phone}}</div>
                            <div><a href="{{ url('/phone/'.$phone->id.'/delete')}}" class="badge badge-danger">Удалить</a></div>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="card col-12">
                <div class="row align-items-center col-12">
                    <h3>Веб-сайты: </h3>
                    <a href="{{ url('/contact/'.$contact->id.'/add_website')}}"><button class="btn btn-success btn-sm">Добавить</button></a>
                </div>
                <ul>
                    @foreach($contact->websites as $website)
                        <li class="row align-items-center">
                            <div>{{ $website->website }}</div>
                            <div><a href="{{ url('/website/'.$website->id.'/delete')}}" class="badge badge-danger">Удалить</a></div>
                        </li>
                    @endforeach
                </ul>
            </div>
            </div>
        </div>
    </body>
</html>