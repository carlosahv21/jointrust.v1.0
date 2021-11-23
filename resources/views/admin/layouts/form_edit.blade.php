<div class="row align-items-start p-2">
    @if ($user->id)
        <input type="hidden" class="form-control" name="record_id" value="{{$user->id}}">
    @endif
    <div class="col-6 p-2">
        <label for="inputNombre" class="form-label">Nombre <span class="text-danger"> *</span></label>
        <input type="text" class="form-control" placeholder="Ej: John" id="inputNombre" name="first_name" @if ($user->first_name) value="{{$user->first_name}}" @endif>
    </div>
    <div class="col-6 p-2">
        <label for="inputApellido" class="form-label">Apellido <span class="text-danger"> *</span></label>
        <input type="text" class="form-control" placeholder="Ej: Doe" id="inputApellido" name="last_name" @if ($user->last_name) value="{{$user->last_name}}" @endif>
    </div>
    <div class="col-6 p-2">
        <label for="inputEmail" class="form-label">Email <span class="text-danger"> *</span></label>
        <input type="text" class="form-control" placeholder="Ej: johndoe@test.com" id="inputEmail" name="email" @if ($user->email) value="{{$user->email}}" @endif>
    </div>
    <div class="col-6 p-2">
        <label for="inputCelular" class="form-label">Celular</label>
        <input type="text" class="form-control" placeholder="Ej: 311999999" id="inputCelular" name="phone" @if ($user->phone) value="{{$user->phone}}" @endif>
    </div>
    <div class="col-12 p-2">
        <label for="inputDireccion" class="form-label">Direccion <span class="text-danger"> *</span></label>
        <input type="text" class="form-control" placeholder="Direccion completa que incluya nombre edificio o conjunto" id="inputDireccion" name="address" @if ($user->address) value="{{$user->address}}" @endif>
    </div>
    <div class="col-6 p-2">
        <label for="inputBarrio" class="form-label">Barrio </label>
        <input type="text" class="form-control" placeholder="Ej: Castilla" id="inputBarrio" name="neighborhood" @if ($user->neighborhood) value="{{$user->neighborhood}}" @endif>
    </div>
    <div class="col-6 p-2">
        <label for="inputLocalidad" class="form-label">Localidad</label>
        <input type="text" class="form-control" placeholder="Ej: Kenedy" id="inputLocalidad" name="location" @if ($user->location) value="{{$user->location}}" @endif>
    </div>
    <div class="col-6 p-2">
        <label for="inputTipo" class="form-label">Rol <span class="text-danger"> *</span></label>
        <select class="form-select" name="role" id="inputTipo">
            <option value="admin" @if ($user->role == "admin") selected @endif>Admin</option>
            <option value="client" @if ($user->role == "client") selected @endif>Cliente</option>
            <option value="domiciliary" @if ($user->role == "domiciliary") selected @endif>Domiciliario</option>
          </select>
    </div>
    <div class="col-6 p-2">
        <label for="inputIdentificacion" class="form-label">NIT / CC </label>
        <input type="text" class="form-control" placeholder="Ej: 123456789-0" id="inputIdentificacion" name="identificacion" @if ($user->identificacion) value="{{$user->identificacion}}" @endif>
    </div>
</div>