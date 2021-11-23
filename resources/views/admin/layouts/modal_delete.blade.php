<div class="modal fade" id="delete-{{ $user->id }}" tabindex="-1" aria-labelledby="modal-default" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="h6 modal-title">Eliminar @yield('module')</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('admin.users.destroy', $user->id)}}" method="POST">
                @csrf
                <div class="modal-body">
                    Deseas eliminar el registro {{$user->first_name." ".$user->last_name}}
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-secondary">Eliminar</button>
                    <button type="button" class="btn btn-link text-gray-600 " data-bs-dismiss="modal">Cancelar</button>
                </div>
            </form>
        </div>
    </div>
</div>