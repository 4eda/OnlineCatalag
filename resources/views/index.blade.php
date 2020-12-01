<!doctype html>
<html lang="ru">
    <head> 
    <title>Электронная библиотека</title>
    <meta charset="utf-8">
    </head>

<body>
@extends('layouts.app')

            
       
@section('content')

<nav class="nav justify-content-center"> 
    <div class="container">
        <div class="navbar-header">
    <ul class="nav navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="{{ url('/') }}">Главная</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Популярные книги</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('Search') }}">Поиск по жанрам</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">О сайте</a>
          </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Контакты</a>
        </li>
      </ul>
        </div>
        </div>
                    <div class="extra">
                        <div class="main1">
                        
                            <h3>Добавить книгу</h3>
                            <router-view name="companiesIndex"></router-view>
                            <router-view></router-view>
                                
                            
                    </div>
                         </div>

                         
                       
                        
                       
                    
               
            </body>
            <script src="{{ asset('js/app.js') }}"></script>

@endsection
      

<style>
  .extra {min-height:100%;height:auto !important;height:100%;margin:0 auto -100px }
  .main1{margin:0 auto;width:960px;position:relative;right: 90px}
  .layouts{ }
}
   
</style>
