@extends('contacts.layouts.back')
<style>
    .btn-success{
        margin-top:20px;
    }
    .row{
        height:100vh;
    }
</style>
<div class="row align-items-center col-12">
    <div class="container">
        <form method="POST">
            @csrf
            <input type="text" placeholder="Телефон" name="phone" class="col-12">
            <input type="submit" class="col-6 offset-3 btn btn-success" value="Добавить">
        </form>
    </div>
</div>