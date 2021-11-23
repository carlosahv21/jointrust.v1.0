@extends('admin.layouts.base')

@section('title', 'Usuarios')
@section('module', 'Usuarios')

@section('content')
<div>
   <div class="row py-4">
      <div class="col-12 col-xl-8">
         <div class="card card-body border-0 shadow mb-4">
            <h2 class="h5 mb-4">Información de {{$user->first_name." ".$user->last_name}}</h2>
            <form action="{{route('admin.users.store')}}" method="POST">
               @csrf
               @include('admin.layouts.form_edit', $user)
               <div class="mt-3 d-md-flex justify-content-md-end">
                  <button type="submit" class="btn btn-secondary">Guardar</button>&nbsp;
                  <a  href="{{ route('admin.users.index') }}" class="btn btn-link text-gray-600 " data-bs-dismiss="modal">Cancelar</a>
               </div>
            </form>
         </div>
      </div>
      <div class="col-12 col-xl-4">
         <div class="row">
            <div class="col-12 mb-4">
               <div class="card shadow border-0 text-center p-0">
                  <div wire:ignore.self class="profile-cover rounded-top"
                     data-background="../../../assets/img/profile-cover.jpg"></div>
                  <div class="card-body pb-5">
                     <img src="../../../assets/img/team/profile-picture-1.jpg"
                        class="avatar-xl rounded-circle mx-auto mt-n7 mb-4" alt="Neil Portrait">
                     <h4 class="h3">
                        {{$user->first_name." ".$user->last_name}}
                     </h4>
                     {{-- <h5 class="fw-normal">Senior Software Engineer</h5> --}}
                     <p class="text-gray mb-4">{{$user->address.", ".$user->neighborhood.", ".$user->location}}</p>
                     <a class="btn btn-sm btn-gray-800 d-inline-flex align-items-center me-2" href="#">
                        <svg class="icon icon-xs me-1" fill="currentColor" viewBox="0 0 20 20"
                           xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z">
                           </path>
                        </svg>
                        Connect
                     </a>
                     <a class="btn btn-sm btn-secondary" href="#">Send Message</a>
                  </div>
               </div>
               <div class="card card-body border-0 shadow mb-4 mt-4">
                  <h2 class="h5 mb-4">Select profile photo</h2>
                  <div class="d-flex align-items-center">
                     <div class="me-3">
                        <!-- Avatar -->
                        <div class="user-avatar xl-avatar">
                           <img class="rounded avatar-xl" src="/assets/img/team/profile-picture-5.jpg" alt="Profile Photo">
                        </div>
                     </div>
                     <div class="file-field">
                        <div class="d-flex justify-content-xl-center ms-xl-3">
                           <div class="d-flex">
                              <span class="icon icon-md">
                                 <svg class="icon text-gray-500 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd"></path>
                                 </svg>
                              </span>
                              <input wire:model="upload" type="file" accept="image/*">
                              <div class="d-md-block text-left">
                                 <div class="fw-normal text-dark mb-1">Choose Image</div>
                                 <div class="text-gray small">JPG, GIF or PNG. Max size of 2MB
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection

