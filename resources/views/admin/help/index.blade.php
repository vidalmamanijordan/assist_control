@extends('dashboard')

@section('work_area')
    <div
        class="w-full p-4 text-center bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700 col-span-4 flex">

        <div class="w-1/2">
            <img src="{{ asset('img/logos/dti_oficial.png') }}" alt="Logo DTI" class="mx-auto max-w-xs w-full h-auto">
        </div>
        <div class="w-1/2 text-left">
            <h5 class="text-3xl font-black mt-6">CONTACTO</h5>
            <hr class="mt-3">
            <h3 class="mt-3 font-normal">Chatea con nosotros y resuelve tus dudas:</h3><br>
            <a href="https://api.whatsapp.com/send?phone=989429830" target="_blank" rel="noopener"
                class="bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded-full shadow-lg transition-transform transform hover:scale-105">
                <i class="fab fa-whatsapp mr-2"></i> WhatsApp
            </a>
            <h3 class="mt-6">Llamanos:</h3>
            <button type="button"
                class="inline-block rounded-full bg-warning px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-blue-600 shadow-[0_4px_9px_-4px_#e4a11b] transition duration-150 ease-in-out hover:bg-warning-600 hover:shadow-[0_8px_9px_-4px_rgba(228,161,27,0.3),0_4px_18px_0_rgba(228,161,27,0.2)] focus:bg-warning-600 focus:shadow-[0_8px_9px_-4px_rgba(228,161,27,0.3),0_4px_18px_0_rgba(228,161,27,0.2)] focus:outline-none focus:ring-0 active:bg-warning-700 active:shadow-[0_8px_9px_-4px_rgba(228,161,27,0.3),0_4px_18px_0_rgba(228,161,27,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(228,161,27,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(228,161,27,0.2),0_4px_18px_0_rgba(228,161,27,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(228,161,27,0.2),0_4px_18px_0_rgba(228,161,27,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(228,161,27,0.2),0_4px_18px_0_rgba(228,161,27,0.1)]">
                <i class="fa-solid fa-phone mr-2"></i><label class="font-medium text-base">+51 989 429 830</label>
            </button>
            <h3 class="mt-6">Escribenos:</h3>
            <button type="button"
                class="inline-block rounded-full bg-info px-6 pb-2 pt-2.5 text-xs font-medium leading-normal text-blue-600 e shadow-[0_4px_9px_-4px_#54b4d3] transition duration-150 ease-in-out hover:bg-info-600 hover:shadow-[0_8px_9px_-4px_rgba(84,180,211,0.3),0_4px_18px_0_rgba(84,180,211,0.2)] focus:bg-info-600 focus:shadow-[0_8px_9px_-4px_rgba(84,180,211,0.3),0_4px_18px_0_rgba(84,180,211,0.2)] focus:outline-none focus:ring-0 active:bg-info-700 active:shadow-[0_8px_9px_-4px_rgba(84,180,211,0.3),0_4px_18px_0_rgba(84,180,211,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(84,180,211,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(84,180,211,0.2),0_4px_18px_0_rgba(84,180,211,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(84,180,211,0.2),0_4px_18px_0_rgba(84,180,211,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(84,180,211,0.2),0_4px_18px_0_rgba(84,180,211,0.1)]">
                <i class="fa-solid fa-envelope mr-2"></i><label
                    class="font-medium text-base text-blue-600">upeuvirtualj@upeu.edu.pe</label>
            </button>
            <h3 class="mt-6">Ubicanos:</h3>
            <i class="fa-solid fa-location-dot mr-2 text-gray-400"></i><label class="text-gray-400">3.er PISO PABELLÓN A - ofic. Soporte y Desarrollo de Sistemas DTI</label>
        </div>
    </div>
@endsection
