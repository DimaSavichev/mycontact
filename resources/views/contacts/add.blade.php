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
            <h3>Создание контакта</h3>

            <form method="POST" class="col-12">
                @csrf
                <input type="text" placeholder="Имя" name="name" class="col-12"/><br>
                <input type="text" placeholder="Организация" name="organisation" class="col-12"/><br>
                <input type="text" placeholder="Адрес" name="address" class="col-12"/><br>
                <textarea placeholder="Комментарий" name="description" class="col-12"></textarea>
                <input type="submit" value="Добавить" class="btn btn-success col-4 offset-4"/>
            </form>
        </div>
    </body>
</html>