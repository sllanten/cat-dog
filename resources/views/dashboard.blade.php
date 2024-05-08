<x-app-layout>
    <div class="py-1">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div style="background-color: #1a2333;" class="bg-gray-100 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container py-12">
                @can('usuario.dashboard')
                    <div class="row row-cols-1 row-cols-md-4">
                        <div class="col text-center">
                                <div class="card text-white bg-secondary" style="height: 100%;max-width: 18rem;">
                                    <div class="card-header text-center">Nina</div>
                                        <div class="card-body">
                                            <p>Veterinario: Jair Torres</p>
                                            <p>Celular: 3136174997</p>
                                            <p>Ultima visita: 2024/05/14</p>
                                        </div>
                                    <div class="card-footer text-center">
                                        <a href="{{ route("usuario.boardDetalle",$name="nina" ) }}" class="btn btn-primary">Mas detalle</a>
                                    </div>
                                </div>                 
                            </div>
                        </div>
                        <br>
                        <div class="alert alert-danger invisible" role="alert">
                            <label>No hay registros con los criterios de su busqueda</label>
                        </div>
                        <div class="col">
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                Nota:<br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                @endcan
                @can('veterinario.dashboard')
                    <div class="row">
                        <div class="col-4">
                            <div class="form-floating mb-3">
                                <input type="text" wire:model="buscar" class="form-control" id="floatingInput" placeholder="buscar">
                                <label for="floatingInput">Buscar mascota</label>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-floating">
                                <select class="form-select" id="floatingSelect" aria-label="Floating label select example"
                                    wire:model="perPage">
                                    <option value="12">Todos</option>
                                    <option value="12">Actividades pendientes (mayor a menor)</option>
                                    <option value="12">Propietarios</option>
                                    <option value="12">Mas recientes</option>
                                </select>
                                <label for="floatingSelect">Organizar por</label>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button style="height: 4rem;" class="btn btn-secondary me-md-2" type="button">Nuevo propietario</button>
                                <button style="height: 4rem;" class="btn btn-secondary" type="button">Asignar mascota</button>
                            </div>
                        </div>
                    </div>
                    <div class="row row-cols-1 row-cols-md-4 py-6">
                        <div class="col">
                            <div class="card text-white bg-Light" style="height: 100%;max-width: 18rem;">
                                <div class="card-header text-center text-black">Nina</div>
                                <div class="card-body text-black">
                                    <p>Propietario: Diana Marcela Herrera</p>
                                    <p>Celular: 3136174997</p>
                                    <p>Ultima visita: 2024/05/14</p>
                                    <p>Actividades Pendientes:1</p>
                                </div>
                                <div class="card-footer text-center">
                                    <a href="{{ route("veterinario.boardDetalle",$name="nina" ) }}" class="btn btn-secondary">Mas
                                        detalle</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card text-black bg-Light" style="height: 100%;max-width: 18rem;">
                                <div class="card-header text-center">Simba</div>
                                <div class="card-body text-black">
                                    <p>Propietario: Andres Rodrigez</p>
                                    <p>Celular: 3104555574</p>
                                    <p>Ultima visita: 2024/01/12</p>
                                    <p>Actividades Pendientes: 0</p>
                                </div>
                                <div class="card-footer text-center">
                                    <a href="{{ route("veterinario.boardDetalle",$name="nina" ) }}" class="btn btn-secondary">Mas
                                        detalle</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card text-black bg-Light" style="height: 100%;max-width: 18rem;">
                                <div class="card-header text-center">Arnoldo</div>
                                <div class="card-body text-black">
                                    <p>Propietario: Manuel Turin</p>
                                    <p>Celular: 3236831123</p>
                                    <p>Ultima visita: 2024/01/14</p>
                                    <p>Actividades Pendientes: <code>1<code></p>
                                </div>
                                <div class="card-footer text-center">
                                    <a href="{{ route("veterinario.boardDetalle",$name="nina" ) }}" class="btn btn-secondary">Mas
                                        detalle</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="alert alert-danger invisible" role="alert">
                        <label>No hay registros con los criterios de su busqueda</label>
                    </div>
                    <div class="col">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            Nota:<br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                    </div>
                @endcan
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
