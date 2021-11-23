@extends('admin.layouts.base')

@section('title', 'Usuarios')
@section('module', 'Usuarios')

@section('content')
<table class="table table-flush" id="datatable">
    <thead class="thead-light">
        <tr>
            <th>Nombre</th>
            <th>Rol</th>
            <th>Email</th>
            <th>Direccion</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <th>{{ $user->first_name . " ". $user->last_name }}</th>
                    <th>{{ $user->role }}</th>
                    <th>{{ $user->email }}</th>
                    <th>{{ $user->address }}</th>
                    <th style="width: 5%;">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-ellipsis-h"></i>
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item btn-outline-gray-500" href="{{route( 'admin.users.edit', $user->id)}}"><i class="fas fa-eye"></i> Ver</a></li>
                            @if ($user->role != 'admin')
                                <li><button class="dropdown-item btn-outline-gray-500" data-bs-toggle="modal" data-bs-target="#delete-{{ $user->id }}"><i class="fas fa-trash"></i> Eliminar</button></li>
                            @endif
                          </ul>
                        </li>
                    </th>
                </tr>
            @include('admin.layouts.modal_delete')
            @endforeach
        </tbody>
    </table>

    @include('admin.layouts.modal')
@endsection