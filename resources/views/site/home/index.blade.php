@extends('site.layouts.app')

@section('title', 'Listagem dos Post')

@section('content')
<div class="mt-6">
    <a href="{{route('create')}}" class="btn-gray">Adicionar um novo post</a>
</div>
<posts-components></posts-components>
@endsection
