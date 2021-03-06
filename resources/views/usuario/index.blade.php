@extends('layouts.admin')

<?php $message=Session::get('message') ?>
@if($message == 'store')
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  Usuario Guardado Correctamente
</div>
@endif
@section('content')

<table class="table">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Operación</th>
        </tr>
    </thead>
    @foreach($users as $user)
    <tbody>
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td></td>
        </tr>
    </tbody>
    @endforeach
</table>

@endsection
