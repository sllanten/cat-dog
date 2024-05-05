<x-app-layout>
    <script>
        function options(option,id){

            switch (option) {
                case 1:
                    var div = document.getElementById(id);
                    
                    if (div.style.display === "none") {
                        div.style.display = "block";
                    } else {
                        div.style.display = "none";
                    }
                    
                break;

                case 2:
                    var div = document.getElementById(id);
                                        
                    if (div.style.display === "none") {
                        div.style.display = "block";
                    } else {
                        div.style.display = "none";
                    }

                break;

                case 3:
                    var div = document.getElementById(id);
                    
                    if (div.style.display === "none") {
                        div.style.display = "block";
                    } else {
                        div.style.display = "none";
                    }  

                break;

                case 4:
                    var div = document.getElementById(id);
                    
                    if (div.style.display === "none") {
                        div.style.display = "block";
                    } else {
                        div.style.display = "none";
                    }

                break;
            }

        }
    </script>
    <div class="py-1">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div style="background-color: #1a2333;" class="bg-gray-100 overflow-hidden shadow-xl sm:rounded-lg">
                <br>
                <div class="container" style="background-color:">
                    <div class="card mb-3 text-white" style="background-color: #1a2333;">
                        <div class="row g-0">
                            <div class="col-md-4 text-center">
                                <br>
                                <div class="card text-white bg-secondary" style="max-width: 18rem;">
                                    <div class="card-header">Nina</div>
                                    <div class="card-body">
                                        <br>
                                        <p>Propietario: Diana Marcela Herrera</p>
                                        <p>Celular: 3136174997</p>
                                        <p>Ultima visita: Mayo 3 de 2024</p>
                                        <br>
                                    </div>
                                    <div class="card-footer">
                                        <a href="{{ Route('boardMascota') }}" class="btn btn-primary">Regresar atras</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title" style="font-size: 26px">Resumen</h5>
                                    <p class="card-text">Nina es una felina de 2 años de edad, a la cual se le ha
                                        realizo lo siguiente.</p><br>
                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                        <button class="btn btn-secondary" type="button">Nueva Historia clinica</button>
                                        <button class="btn btn-secondary" type="button">Nueva actividad</button>
                                    </div>
                                    <table class="table table-dark table-hover text-white">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Tipo de actividad</th>
                                                <th scope="col">Ultima actividad</th>
                                                <th scope="col">Estado</th>
                                                <th scope="col">Opcion</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Baño medicado</td>
                                                <td>Mayo 1 de 2024</td>
                                                <td>Finalizado</td>
                                                <td>
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Ver mas"
                                                        onclick="options(1,'opt1')">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" class="bi bi-box-arrow-up-right"
                                                            viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd"
                                                                d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5">
                                                            </path>
                                                            <path fill-rule="evenodd"
                                                                d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Desparacitacion</td>
                                                <td>Mayo 1 de 2024</td>
                                                <td>Finalizado</td>
                                                <td>
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Ver mas"
                                                        onclick="options(2,'opt2')">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" class="bi bi-box-arrow-up-right"
                                                            viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd"
                                                                d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5">
                                                            </path>
                                                            <path fill-rule="evenodd"
                                                                d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Vacuna</td>
                                                <td>Marzo 1 de 2024</td>
                                                <td>Finalizado</td>
                                                <td>
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Ver mas"
                                                        onclick="options(3,'opt3')">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" class="bi bi-box-arrow-up-right"
                                                            viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd"
                                                                d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5">
                                                            </path>
                                                            <path fill-rule="evenodd"
                                                                d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">4</th>
                                                <td>Visita medica</td>
                                                <td>Mayo 3 de 2024</td>
                                                <td>En espera</td>
                                                <td>
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Ver mas"
                                                        onclick="options(4,'opt4')">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" class="bi bi-box-arrow-up-right"
                                                            viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd"
                                                                d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5">
                                                            </path>
                                                            <path fill-rule="evenodd"
                                                                d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="opt1" style="display: none">
                        <h1 class="text-center text-white" style="font-size: 26px">Baño medicado</h1><br>
                        <table class="table table-dark table-hover text-white">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Descripcion</th>
                                    <th scope="col">Fecha</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Baño de rutina</td>
                                    <td>Febrero 1 de 2024</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Baño de rutina</td>
                                    <td>Marzo 1 de 2024</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Baño de rutina</td>
                                    <td>Abril 1 de 2024</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Baño de rutina</td>
                                    <td>Mayo 1 de 2024</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div id="opt2" style="display: none">
                        <h1 class="text-center text-white" style="font-size: 26px">Desparacitacion</h1><br>
                        <table class="table table-dark table-hover text-white">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Descripcion</th>
                                    <th scope="col">Fecha</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Desparacitante Galgocal®</td>
                                    <td>Febrero 1 de 2024</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Desparacitante Tripack Advocate</td>
                                    <td>Marzo 1 de 2024</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Desparacitante Total FLC</td>
                                    <td>Abril 1 de 2024</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Desparacitante Rondel 10 ml</td>
                                    <td>Mayo 1 de 2024</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div id="opt3" style="display: none">
                        <h1 class="text-center text-white" style="font-size: 26px">Vacunacion</h1><br>
                        <table class="table table-dark table-hover text-white">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Descripcion</th>
                                    <th scope="col">Fecha</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Vacuna Moquillo (panleucopenia)</td>
                                    <td>Febrero 1 de 2024</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Vacuna Gripe felina (rinotraqueítis: infección por calicivirus o herpesvirus)
                                    </td>
                                    <td>Marzo 1 de 2024</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div id="opt4" style="display: none">
                        <h1 class="text-center text-white" style="font-size: 26px">Visita medica</h1><br>
                        <table class="table table-dark table-hover text-white">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Motivo</th>
                                    <th scope="col">Tratamiento</th>
                                    <th scope="col">Fecha</th>
                                    <th scope="col">Opcion</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Motivo</td>
                                    <td>Tratamiento</td>
                                    <td>Abril 4 del 2020</td>
                                    <td>
                                        <input type="button" class="btn btn-secondary" value="Descargar">
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Motivo</td>
                                    <td>Tratamiento</td>
                                    <td>Diciembre 12 del 2020</td>
                                    <td>
                                        <input type="button" class="btn btn-secondary" value="Descargar">
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Motivo</td>
                                    <td>Tratamiento</td>
                                    <td>Marzo 24 del 2021</td>
                                    <td>
                                        <input type="button" class="btn btn-secondary" value="Descargar">
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Motivo</td>
                                    <td>Tratamiento</td>
                                    <td>Mayo 3 de 2024</td>
                                    <td>
                                        <input type="button" class="btn btn-secondary" value="Descargar">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>