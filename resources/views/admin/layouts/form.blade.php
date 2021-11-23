<div class="row align-items-start p-2">
    <div class="col-6 p-2">
        <label for="inputNombre" class="form-label">Nombre <span class="text-danger"> *</span></label>
        <input type="text" class="form-control" placeholder="Ej: John" id="inputNombre" name="first_name" >
    </div>
    <div class="col-6 p-2">
        <label for="inputApellido" class="form-label">Apellido <span class="text-danger"> *</span></label>
        <input type="text" class="form-control" placeholder="Ej: Doe" id="inputApellido" name="last_name">
    </div>
    <div class="col-6 p-2">
        <label for="inputEmail" class="form-label">Email <span class="text-danger"> *</span></label>
        <input type="text" class="form-control" placeholder="Ej: johndoe@test.com" id="inputEmail" name="email">
    </div>
    <div class="col-6 p-2">
        <label for="inputCelular" class="form-label">Celular</label>
        <input type="text" class="form-control" placeholder="Ej: 311999999" id="inputCelular" name="phone">
    </div>
    <div class="col-12 p-2">
        <label for="inputDireccion" class="form-label">Direccion <span class="text-danger"> *</span></label>
        <input type="text" class="form-control" placeholder="Direccion completa que incluya nombre edificio o conjunto" id="inputDireccion" name="address">
    </div>
    <div class="col-6 p-2">
        <label for="inputBarrio" class="form-label">Barrio </label>
        <input type="text" class="form-control" placeholder="Ej: Castilla" id="inputBarrio" name="neighborhood">
    </div>
    <div class="col-6 p-2">
        <label for="inputLocalidad" class="form-label">Localidad</label>
        <input type="text" class="form-control" placeholder="Ej: Kenedy" id="inputLocalidad" name="location">
    </div>
    <div class="col-6 p-2">
        <label for="inputTipo" class="form-label">Rol <span class="text-danger"> *</span></label>
        <select class="form-select" name="role" id="inputTipo">
            <option value="Admin">Admin</option>
            <option value="Client">Cliente</option>
            <option value="Domiciliary">Domiciliario</option>
          </select>
    </div>
    <div class="col-6 p-2">
        <label for="inputIdentificacion" class="form-label">NIT / CC </label>
        <input type="text" class="form-control" placeholder="Ej: 123456789-0" id="inputIdentificacion" name="identificacion">
    </div>
</div>