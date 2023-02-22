@extends('layout.main')

@section('title', 'HOME')

@section('content')

<h1>{{$event->id}}</h1>
<h1>{{$event->nome}}</h1>
<h1>{{$event->imagem}}</h1>
@endsection