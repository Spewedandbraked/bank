@extends('layout.layout')
@section('contains')
    <form class="flex-by-center" action="{{route('test.index')}}>
        @csrf
        <div style=" margin:20px; padding: 10px;" class="border flex-by-start">
            <div class="flex-by-row-centered" style="width:100%;" >Логин:<input id='checklogin'></div>
            <div class="flex-by-row-centered" style="width:100%;" >Пароль:<input id='checkpass' type="password"></div>
            <input  type="button" value="Войти" onclick="doshitplease">
        </div>
    </form>
    <form class="flex-by-center">
        <div style="margin:20px; padding: 10px;" class=" border flex-by-start"><input type="button" value="Откат к регистрации"></div>
    </form>

    <form class="flex-by-center" action="{{route('test.create')}}">
        @csrf
        <div style=" margin:20px; padding: 10px;" class="border flex-by-start">
            <div class="flex-by-row-centered" style="width:100%;">Новый логин:<input id='newlogin'></div>
            <div class="flex-by-row-centered" style="width:100%;">Пароль:
                <input id='newpass' type="password"></div>
            <div id ='newpass2' class="flex-by-row-centered" style="width:100%;">Повторите пароль:
                <input type="password"></div>    
            <input  type="submit" value="Зарегистрироваться" onclick="doshitplease">
        </div>
    </form>
@endsection