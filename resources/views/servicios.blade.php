@extends('layouts.app')
@section('title', 'Servicios Informáticos')

@section('content')
    <h2 class="text-center fw-bold mb-5">Servicios Informáticos</h2>

    <div class="row mb-5">
        @foreach ([
            ['Formateo e instalación de Windows', 'Optimiza tu equipo con una instalación limpia y actualizada.'],
            ['Reparación de notebooks y PC', 'Solucionamos fallas de hardware y software.'],
            ['Instalación de cámaras de seguridad', 'Monitorea tu hogar o negocio de forma profesional.'],
            ['Creación de páginas web', 'Desarrollamos sitios modernos y responsivos.'],
            ['Análisis de problemas técnicos', 'Diagnosticamos errores en sistemas, redes y hardware.']
        ] as [$titulo, $detalle])
            @include('components.servicio', ['titulo' => $titulo, 'detalle' => $detalle])
        @endforeach
    </div>

    <h3 class="text-center mb-4">¿Deseas una cotización?</h3>

    <div class="card shadow-sm">
        <div class="card-body">
            <form>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label">Nombre completo</label>
                        <input type="text" class="form-control" placeholder="Juan Pérez">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Correo electrónico</label>
                        <input type="email" class="form-control" placeholder="correo@ejemplo.cl">
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Servicio requerido</label>
                    <select class="form-select">
                        <option selected disabled>Seleccione una opción</option>
                        <option>Formateo e instalación</option>
                        <option>Reparación de PC</option>
                        <option>Instalación de cámaras</option>
                        <option>Creación de sitio web</option>
                        <option>Diagnóstico técnico</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Descripción del problema o requerimiento</label>
                    <textarea class="form-control" rows="4" placeholder="Escribe aquí los detalles..."></textarea>
                </div>

                <div class="text-end">
                    <button class="btn btn-primary">Solicitar cotización</button>
                </div>
            </form>
        </div>
    </div>
@endsection
