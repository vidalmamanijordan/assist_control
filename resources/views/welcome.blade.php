<x-app-layout>
    {{-- Slider --}}
    <div class="m-10 mx-auto p-16 sm:p-24 lg:p-24">
        <div class="relative rounded-lg block md:flex items-center bg-gray-100 shadow-xl" style="min-height: 19rem;"
            x-data="{
                activeSlide: 1,
                slides: [
                    { id: 1, name: '1.- Crea Eventos', description: 'Estable eventos o actividades, para que las personas asistan o participen de manera presencial. Estos eventos pueden incluir reuniones, conferencias, talleres, seminarios, clases, sesiones de formación, o cualquier otra actividad programada.' },
                    { id: 2, name: '2.- Registra Asistencias', description: 'Lleva un registro de las personas que asistieron a tu evento, actividad o lugar específico en un momento determinado.' },
                    { id: 3, name: '3.- Genera Reportes', description: 'Recopila y presenta informes detallada sobre la presencia de tus participantes en un evento, actividad o lugar especifico durante un periodo de tiempo determinado.' },
                    { id: 4, name: '!Qué esperás¡', description: 'Inicia YA!' }
                ],
                loop() {
                    setInterval(() => { this.activeSlide = this.activeSlide === 4 ? 1 : this.activeSlide + 1 }, 4000)
                }
            }" x-init="loop">
            <template x-for="slide in slides" :key="slide.id">
                <div x-show="activeSlide === slide.id"
                    class="relative w-full md:w-2/5 h-full overflow-hidden rounded-t-lg md:rounded-t-none md:rounded-l-lg"
                    style="min-height: 19rem;">
                    <img class="absolute inset-0 w-full h-full object-cover object-center" src="https://media.istockphoto.com/id/1282804749/es/foto/certificaci%C3%B3n-de-control-de-calidad-garant%C3%ADa-comprobada-de-est%C3%A1ndar.webp?b=1&s=612x612&w=0&k=20&c=f7UIbXRP6cKT6Fsji5levVG_fm9cVFJZjMtaa_tlZmc=" alt="">
                    <div class="absolute inset-0 w-full h-full bg-sky-400 opacity-50"></div>
                    <div
                        class="absolute inset-0 w-full h-full flex items-center justify-center fill-current text-white">
                        <h1 x-text="slide.name" class="text-3xl font-semibold"></h1>
                    </div>
                </div>
            </template>
            <template x-for="slide in slides" :key="slide.id">
                <div x-show="activeSlide === slide.id"
                    class="w-full md:w-3/5 h-full flex items-center bg-gray-100 rounded-lg">
                    <div class="p-12 md:pr-24 md:pl-16 md:py-12">
                        <p class="text-gray-600 font-semibold text-lg"><span class="text-gray-900">Sistema Control de Asistencia</span>
                        </p><br>
                        <h1 x-text="slide.description"></h1>
                        <a class="flex items-baseline mt-3 text-indigo-600 hover:text-indigo-900 focus:text-indigo-900"
                            href="">
                            <span>Ver más</span>
                            <span class="text-xs ml-1">&#x279c;</span>
                        </a>
                    </div>
                    <svg class="hidden md:block absolute inset-y-0 h-full w-24 fill-current text-gray-100 -ml-12"
                        viewBox="0 0 100 100" preserveAspectRatio="none">
                        <polygon points="50,0 100,0 50,100 0,100" />
                    </svg>
                </div>
            </template>
            <button x-on:click="activeSlide = activeSlide === 1 ? slides.length : activeSlide -1"
                class="absolute top-0 mt-32 left-0 bg-white rounded-full shadow-md h-12 w-12 text-2xl text-indigo-600 hover:text-indigo-400 focus:text-indigo-400 -ml-6 focus:outline-none focus:shadow-outline">
                <span class="block" style="transform: scale(-1);">&#x279c;</span>
            </button>
            <button x-on:click="activeSlide = activeSlide === slides.length ? 1 : activeSlide + 1"
                class="absolute top-0 mt-32 right-0 bg-white rounded-full shadow-md h-12 w-12 text-2xl text-indigo-600 hover:text-indigo-400 focus:text-indigo-400 -mr-6 focus:outline-none focus:shadow-outline">
                <span class="block" style="transform: scale(1);">&#x279c;</span>
            </button>
            <div class="absolute w-full flex items-center justify-center px-4 -mb-80">
                <template x-for="slide in slides" :key="slide.id">
                    <button
                        class="flex-1 w-3 h-2 mt-8 mx-1 mb-2 rounded-full overflow-hidden transition-colors duration-200 ease-out hover:bg-slate-600 hover:shadow-lg"
                        :class="{
                            'bg-blue-600': activeSlide === slide.id,
                            'bg-blue-300': activeSlide !== slide.id,
                        }"
                        x-on:click="activeSlide = slide.id">
                    </button>
                </template>
            </div>    
        </div>
    </div>
    {{-- Cards --}}
    {{-- <div style="background-color:#fff8f4" class="h-full">
        <div class="container mx-auto  lg:px-20" >
            <div class='grid grid-cols-3 h-full pb-40'>
                <div class="border-r border-gray-300 mx-3 lg:pl-20">
                    <div class=" py-10 pb-3 mt-72 h-4/6 relative bg-purple-100 group hover:bg-purple-200 cursor-pointer transition ease-out duration-300"> 
                        <div>
                            <div class="w-4 h-1/5 bg-red-50	absolute right-0 -top-48 bg-purple-100 group-hover:bg-purple-50"></div>
                            <img src="https://i.ibb.co/FzkhpcD/pngegg.png" alt="https://www.pngegg.com/en/png-nllal/download">
                        </div>
                        <div class="px-7 mt-20">
                            <h1 class="text-3xl font-bold group-hover:text-purple-300 transition ease-out duration-300">01.</h1>
                            <h2  class="text-1xl mt-4 font-bold">Roof light lamp</h2>
                            <p class="mt-2 opacity-60 group-hover:opacity-70 ">Diverse collection of roof lights of quality</p>
                        </div>
                    </div>
                </div>
                <div class="border-r border-gray-300 mx-3 lg:pl-20">
                    <div class=" py-10  pb-3 mt-32 h-4/6 relative bg-indigo-100 group hover:bg-indigo-200 cursor-pointer transition ease-out duration-300"> 
                        <div>
                            <div class="w-4 h-1/5 bg-red-50	absolute right-0 -top-48 bg-indigo-100  group-hover:bg-indigo-50"></div>
                            <img src="https://i.ibb.co/JB4GWMJ/pngegg-1.png" alt="https://www.pngegg.com/en/png-zquqj/download">
                        </div>
                       <div class="px-7 mt-20">
                            <h1 class="text-3xl font-bold group-hover:text-indigo-300 transition ease-out duration-300">02.</h1>
                            <h2  class="text-1xl mt-4 font-bold">Lounge Chair</h2>
                            <p class="mt-2 opacity-60 group-hover:opacity-70 ">Comfortable collection of perfect lounge chairs</p>
                        </div>
                    </div>
                </div>
                <div class="border-r border-gray-300 mx-3 lg:pl-20">
                    <div class=" py-10 pb-3 mt-5 h-4/6 relative bg-red-100 group hover:bg-red-200 cursor-pointer transition ease-out duration-300"> 
                         <div>
                            <div class="w-4 h-1/5 bg-red-50	absolute right-0 -bottom-44 bg-red-100 group-hover:bg-red-50"></div>
                            <img src="https://i.ibb.co/MgnH44p/pngegg-2.png" alt="https://www.pngegg.com/en/png-epwii/download">
                        </div>
                        <div class="px-7 mt-5">
                            <h1 class="text-3xl font-bold group-hover:text-red-300 transition ease-out duration-300">03.</h1>
                            <h2  class="text-1xl mt-4 font-bold">Scandinavia Couch</h2>
                            <p class="mt-2 opacity-60 group-hover:opacity-70 ">Best selection of scandinavia couch for your home</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
</x-app-layout>
