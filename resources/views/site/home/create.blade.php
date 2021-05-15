@extends('site.layouts.app')

@section('title', 'Criar um novo Post')

@section('content')
    <div class="bg-gray-600 w-full my-4 shadow-sm border rounded">
        <h1 class="text-center text-3xl text-white">Criar um novo Post</h1>
        <form action="{{route('create.store')}}" method="post" class="max-w-4xl mx-auto py-6">
            @csrf
            <input type="text" name="title" id="title" placeholder="nome" class="input-text my-4 py-3">
            <textarea name="body" id="" cols="30" rows="10" placeholder="Drescição"  class="input-text my-4"></textarea>
            <button type="submit" class="btn-blue">Enviar</button>
        </form>
    </div>
@endsection
