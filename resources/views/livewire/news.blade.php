<div>
    <!-- component -->
<!-- Gogole Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;1,100;1,200&display=swap"
    rel="stylesheet" />

<!-- AlpineJS -->
<script
    defer
    src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

<!-- Tailwind -->
<script src="https://cdn-tailwindcss.vercel.app/"></script>

<style>
    section {
        font-family: "Poppins", sans-serif;
    }
</style>



<!-- Notes -->
<header>
    <!-- Background image -->
    <div class="sticky overflow-hidden bg-no-repeat bg-cover" style="
      background-position: 50%;
      background-image: url('https://dvgnzpfv30f28.cloudfront.net/07-21-2020/t_9f79de2b01d44050bbe010322b7b476b_name_Copia_de_PORTADAS_ARC_TRVSL__43_.png');
      height: 350px;
    ">
      <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed"
        style="background-color: rgba(0, 0, 0, 0.75)">
        <div class="flex justify-center items-center h-full">
          <div class="text-center text-white px-6 md:px-12">
            <h1 class="text-5xl font-bold mt-0 mb-6">NOTICIAS RECIENTES</h1>
            <h3 class="text-3xl font-bold mb-8">Esta al tanto con las noticias y estudios acerca de la comunidad fit</h3>
            
          </div>
        </div>
      </div>
    </div>
    <!-- Background image -->
  </header>

    {{-- SECCION Noticias --}}
    <!-- Container for demo purpose -->
<div class="container my-24 px-6 mx-auto">

    <!-- Section: Design Block -->
    <section class="mb-32 text-gray-800 text-center">
  
      <h2 class="text-3xl font-bold mb-12 pb-4 text-center">Últimos Artículos</h2>
  
      <div class="grid lg:grid-cols-3 gap-6 xl:gap-x-12">
        <div class="mb-6 lg:mb-0">
          <div class="relative block bg-white rounded-lg shadow-lg">
            <div class="flex">
              <div
                class="relative overflow-hidden bg-no-repeat bg-cover relative overflow-hidden bg-no-repeat bg-cover shadow-lg rounded-lg mx-4 -mt-4"
                data-mdb-ripple="true" data-mdb-ripple-color="light">
                <img src="https://www.elsoldehermosillo.com.mx/doble-via/lc8rkc-comida-saludable/alternates/LANDSCAPE_768/comida%20saludable" class="w-full" />
                <a href="#!">
                  <div
                    class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 hover:opacity-100 transition duration-300 ease-in-out"
                    style="background-color: rgba(251, 251, 251, 0.15)"></div>
                </a>
              </div>
            </div>
            <div class="p-6">
              <h5 class="font-bold text-lg mb-3">Obesidad: Consejos para prevenir el sobrepeso</h5>
              <p class="text-gray-500 mb-4">
                <small>Published <u>13.01.2022</u> by
                  <a href="" class="text-gray-900">Anna Maria Doe</a></small>
              </p>
              <p class="mb-4 pb-2">
                Ut pretium ultricies dignissim. Sed sit amet mi eget urna
                placerat vulputate. Ut vulputate est non quam dignissim
                elementum. Donec a ullamcorper diam.
              </p>
              <a href="https://peru21.pe/lima/obesidad-consejos-para-prevenir-el-sobrepeso-noticia/" target="_blank" data-mdb-ripple="true" data-mdb-ripple-color="light"
                class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Más Información</a>
            </div>
          </div>
        </div>
  
        <div class="mb-6 lg:mb-0">
          <div class="relative block bg-white rounded-lg shadow-lg">
            <div class="flex">
              <div
                class="relative overflow-hidden bg-no-repeat bg-cover relative overflow-hidden bg-no-repeat bg-cover shadow-lg rounded-lg mx-4 -mt-4"
                data-mdb-ripple="true" data-mdb-ripple-color="light">
                <img src="https://noticias.unsam.edu.ar/wp-content/uploads/2013/08/alimentacion_saludable.jpg" class="w-full" />
                <a href="https://noticias.unsam.edu.ar/2013/08/01/charla-sobre-alimentacion-saludable/" target="_blank">
                  <div
                    class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 hover:opacity-100 transition duration-300 ease-in-out"
                    style="background-color: rgba(251, 251, 251, 0.15)"></div>
                </a>
              </div>
            </div>
            <div class="p-6">
              <h5 class="font-bold text-lg mb-3">CHARLA SOBRE ALIMENTACIÓN SALUDABLE</h5>
              <p class="text-gray-500 mb-4">
                <small>Published <u>12.01.2022</u> by
                  <a href="" class="text-gray-900">Halley Frank</a></small>
              </p>
              <p class="mb-4 pb-2">
                Suspendisse in volutpat massa. Nulla facilisi. Sed aliquet
                diam orci, nec ornare metus semper sed. Integer volutpat
                ornare erat sit amet rutrum.
              </p>
              <a href="https://noticias.unsam.edu.ar/2013/08/01/charla-sobre-alimentacion-saludable/" target="_blank" data-mdb-ripple="true" data-mdb-ripple-color="light"
                class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Read
                more</a>
            </div>
          </div>
        </div>
  
        <div class="mb-0">
          <div class="relative block bg-white rounded-lg shadow-lg">
            <div class="flex">
              <div
                class="relative overflow-hidden bg-no-repeat bg-cover relative overflow-hidden bg-no-repeat bg-cover shadow-lg rounded-lg mx-4 -mt-4"
                data-mdb-ripple="true" data-mdb-ripple-color="light">
                <img src="https://eurofitness.com/wp-content/uploads/2019/12/Alimentaci%C3%B3n-base-vida-saludable.jpg" class="w-full" />
                <a href="https://eurofitness.com/blog-deportes/tag/frases-de-motivacion/" target="_blank">
                  <div
                    class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 hover:opacity-100 transition duration-300 ease-in-out"
                    style="background-color: rgba(251, 251, 251, 0.15)"></div>
                </a>
              </div>
            </div>
            <div class="p-6">
              <h5 class="font-bold text-lg mb-3">La alimentación es la base de una vida saludable</h5>
              <p class="text-gray-500 mb-4">
                <small>Published <u>10.01.2022</u> by
                  <a href="" class="text-gray-900">Joe Svan</a></small>
              </p>
              <p class="mb-4 pb-2">
                Curabitur tristique, mi a mollis sagittis, metus felis mattis
                arcu, non vehicula nisl dui quis diam. Mauris ut risus eget
                massa volutpat feugiat. Donec.
              </p>
              <a href="https://eurofitness.com/blog-deportes/tag/frases-de-motivacion/" target="_blank" data-mdb-ripple="true" data-mdb-ripple-color="light"
                class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Read
                more</a>
            </div>
          </div>
        </div>
      </div>
  
    </section>
    <!-- Section: Design Block -->
  
  </div>
  <!-- Container for demo purpose -->

</div>
