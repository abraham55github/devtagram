@extends('layout.app')

@section('titulo')
    Registrate en la pagina
@endsection

@section('contenido')
    <div class="md:flex">
        <div class="md:w-1/2">
            <p>Imagen aqui</p>
        </div>

        <div class="md:w-1/2">
            <form>
                <div class="mb-5">
                    <label id="name" class="mb-2 block uppercase text-gray-500 font bold">
                        Nombre
                    </label>
                    <input 
                        id="name"
                        name="name"
                        type="text"
                        placeholder="Tu nombre"
                        class="border p-3 w-full rounded-lg"
                        >
                </div>

                <div class="mb-5">
                    <label id="name" class="mb-2 block uppercase text-gray-500 font bold">
                        USERNAME
                    </label>
                    <input 
                        id="username"
                        name="username"
                        type="text"
                        placeholder="Tu nombre"
                        class="border p-3 w-full rounded-lg"
                        >
                </div>
     
                <div class="mb-5">
                    <label id="email" class="mb-2 block uppercase text-gray-500 font bold">
                        Email
                    </label>
                    <input 
                        id="email"
                        name="email"
                        type="email"
                        placeholder="Tu email"
                        class="border p-3 w-full rounded-lg"
                        >
                </div>
     
            </form>
        </div>
    </div>