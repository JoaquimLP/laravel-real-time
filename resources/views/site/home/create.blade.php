@extends('site.layouts.app')

@section('title', 'Criar um novo Post')

@section('content')
    <div style="margin: 10px auto;">

        <form action="{{route('create.store')}}" method="post">
            @csrf
            <input type="text" name="title" id="title" placeholder="nome">
            <br>
            <hr>
            <br>
            <textarea name="body" id="" cols="30" rows="10" placeholder="Drescição"></textarea>
            <button type="submit">Enviar</button>
        </form>
    </div>
@endsection
