<x-app-layout>
<div class="py-1">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div style="background-color: #1a2333;" class="bg-gray-100 overflow-hidden shadow-xl sm:rounded-lg">
            <div class="container py-12" style="background-color:">
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
                                <a href="{{ route("usuario.boardDetalle",$name="nina") }}" class="btn btn-primary">Mas detalle</a>
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
            </div>
        </div>
    </div>
</div>
</x-app-layout>
