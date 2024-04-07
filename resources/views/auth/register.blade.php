@extends('layout.app')

@section('titulo')
    Registrate en la pagina
@endsection

@section('contenido')
    <div class="md:flex justify-center md:gap-10 md:items-center ">
        <div class="md:w-6/12 p-5">
            <img src="{{asset('img/registrar.jpg')}}" alt="Imagen Registro usuarios">
        </div>

        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
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

                <div class="mb-5">
                    <label id="password" class="mb-2 block uppercase text-gray-500 font bold">
                        Password
                    </label>
                    <input 
                        id="password"
                        name="password"
                        type="password"
                        placeholder="password de registro"
                        class="border p-3 w-full rounded-lg"
                        >
                </div>

                <div class="mb-5">
                    <label id="password_confirmation" class="mb-2 block uppercase text-gray-500 font bold">
                        Repetir Password
                    </label>
                    <input 
                        id="password_confirmation"
                        name="password_confirmation"
                        type="password"
                        placeholder="Repite tu password"
                        class="border p-3 w-full rounded-lg"
                        >
                </div>

                <input
                    type="submit"
                    value="Crear cuenta"
                    class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer
                    uppercase font bold w-full p-5 text-white rounded-lg"

                >

     
            </form>
        </div>
    </div>

@endsection