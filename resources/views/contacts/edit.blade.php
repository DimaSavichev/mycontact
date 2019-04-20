<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <style>
        h3{
            text-align:center;
        }
        input, textarea{
            margin-bottom:10px;
        }
    </style>
    <body>
        @extends('contacts.layouts.back')
        <div class="container">
            <h3>Редактирование контакта</h3>

            <form method="POST" class="col-12">
                @csrf
                <input type="text" placeholder="Имя" name="name" value="{{$contact->name}}" class="col-12"/><br>
                <input type="text" placeholder="Организация" name="organisation" value="{{$contact->organisation}}" class="col-12"/><br>
                <input type="text" placeholder="Адрес" name="address" value="{{$contact->address}}" class="col-12"/><br>
                <textarea placeholder="Комментарий" name="description" class="col-12">{{$contact->description}}</textarea>
                <input type="submit" value="Изменить" class="col-4 offset-4 btn btn-warning"/>
            </form>
        </div>
    </body>
</html>