@extends('layouts.base')

@section('title', 'Ajouter un star')

@section('content')
    <div class="mt-20 mb-20">
         <h3 class="mb-10 mt-10 text-3xl font-medium leading-tight text-primary">Ajouter</h3>
    </div>
    
    @include('admin.star.form')
@endsection