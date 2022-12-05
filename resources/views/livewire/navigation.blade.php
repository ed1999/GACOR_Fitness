<header class="bg-emerald-600 sticky top-0" style="z-index: 900" x-data="dropdown()">

    <div class="container flex items-center h-16 justify-between md:justify-start">
        <a
            x-on:click="show()"
            class="flex flex-col items-center justify-center order-last md:order-first px-6 md:px-4 bg-white bg-opacity-25 text-white cursor-pointer font-semibold h-full">
            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                <path class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <span>
                Menú
            </span>
        </a>
        <a href="/" class="mx-6">
            <x-jet-application-mark class="block w-auto items-center justify-center" style="height: 100px" />
        </a>

        <div class="flex-1 hidden md:block">
            @livewire('search')
        </div>

        <div class="mx-6 relative hidden md:block">
            @auth
                <x-jet-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button
                            class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                            <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}"
                                alt="{{ Auth::user()->name }}" />
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <!-- Account Management -->
                        <div class="block px-4 py-2 text-xs  text-emerald-400">
                            {{ __('Manage Account') }}
                        </div>

                        <x-jet-dropdown-link href="{{ route('profile.show') }}">
                            {{ __('Profile') }}
                        </x-jet-dropdown-link>
                        @role('Admin')
                        <x-jet-dropdown-link href="{{ url('admin') }}">
                            Administrador
                        </x-jet-dropdown-link>
                        @endrole
                        

                        <div class="border"></div>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}" x-data>
                            @csrf

                            <x-jet-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                {{ __('Log Out') }}
                            </x-jet-dropdown-link>
                        </form>
                    </x-slot>
                </x-jet-dropdown>
            @else
                <x-jet-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <i class="fas fa-user-circle text-white text-3xl cursor-pointer "></i>
                    </x-slot>


                    <x-slot name="content">
                        <x-jet-dropdown-link href="{{ route('login') }}">
                            {{ __('Login') }}
                        </x-jet-dropdown-link>

                        <x-jet-dropdown-link href="{{ route('register') }}">
                            {{ __('Register') }}
                        </x-jet-dropdown-link>
                    </x-slot>
                </x-jet-dropdown>
            @endauth
        </div>

        <div class="hidden md:block">
            @livewire('dropdown-cart')
        </div>

    </div>

    <nav id="navigation-menu" 
    :class="{'block': open, 'hidden': !open}"   
    class="bg-cyan-800 bg-opacity-25 w-full absolute hidden">

    {{-- Menu computadora --}}

        <div class="container h-full hidden md:block">
            <div
            x-on:click.away="close()"
            class="grid grid-cols-4 h-full relative">
                <ul class="bg-white">
                    <li class="text-teal-700 hover:bg-emerald-500 hover:text-white py-2 px-4 text-sm flex items-center">
                        <a href="/progreso"><i class="fas fa-heart">&nbsp;&nbsp;</i>Mi progreso</a></li>
                    <li class="text-teal-700 hover:bg-emerald-500 hover:text-white py-2 px-4 text-sm flex items-center">
                        <a href="/recetas"><i class="fas fa-birthday-cake">&nbsp;&nbsp;</i>Recetas</a></li>
                    <li class="text-teal-700 hover:bg-emerald-500 hover:text-white py-2 px-4 text-sm flex items-center">
                        <a href="/noticias"><i class="fas fa-newspaper">&nbsp;&nbsp;</i>Noticias</li>
                    <li class="text-teal-700 hover:bg-emerald-500 hover:text-white py-2 px-4 text-sm flex items-center">
                        <a href="/contacto"><i class="fas fa-envelope-open">&nbsp;&nbsp;</i>Contacto</li>
                    <li class="text-teal-700 hover:bg-emerald-500 hover:text-white py-2 px-4 text-sm flex items-center">
                        <a href="/imc"><i class="fas fa-plus-square">&nbsp;&nbsp;</i>Calcular IMC</a></li>
                    <li class="text-teal-700 hover:bg-emerald-500 hover:text-white py-2 px-4 text-sm flex items-center">
                        <a href="/mapa"><i class="fas fa-map-marker-alt">&nbsp;&nbsp;</i>Mapa Nutriologos</a></li>
                    <div class=" absolute w-3/4 h-full top-0 right-0">
                    
                    </div>
                </ul>
            </div>
        </div>

        {{-- Menu movil --}}

        <div class="bg-white h-full overflow-y-auto">

            <div class="container bg-gray-200 py-3 mb-2">
                @livewire('search')
            </div>
            <ul>
                <li class="text-teal-700 hover:bg-emerald-500 hover:text-white py-2 px-4 text-sm flex items-center">
                    <a href="/progreso"><i class="fas fa-heart">&nbsp;&nbsp;</i>Mi progreso</a></li>
                <li class="text-teal-700 hover:bg-emerald-500 hover:text-white py-2 px-4 text-sm flex items-center">
                    <a href="/recetas"><i class="fas fa-birthday-cake">&nbsp;&nbsp;</i>Recetas</a></li>
                <li class="text-teal-700 hover:bg-emerald-500 hover:text-white py-2 px-4 text-sm flex items-center">
                    <a href="/noticias"><i class="fas fa-newspaper">&nbsp;&nbsp;</i>Noticias</li>
                <li class="text-teal-700 hover:bg-emerald-500 hover:text-white py-2 px-4 text-sm flex items-center">
                    <a href="/contacto"><i class="fas fa-envelope-open">&nbsp;&nbsp;</i>Contacto</li>
                <li class="text-teal-700 hover:bg-emerald-500 hover:text-white py-2 px-4 text-sm flex items-center">
                    <a href="/imc"><i class="fas fa-plus-square">&nbsp;&nbsp;</i>Calcular IMC</a></li>
                <li class="text-teal-700 hover:bg-emerald-500 hover:text-white py-2 px-4 text-sm flex items-center">
                    <a href="/mapa"><i class="fas fa-map-marker-alt">&nbsp;&nbsp;</i>Mapa Nutriologos</a></li>
                <li class="text-teal-700 hover:bg-emerald-500 hover:text-white py-2 px-4 text-sm flex items-center">
                    <a href="/mapa"><i class="fas fa-map-marker-alt">&nbsp;&nbsp;</i>Contactar con nutriologo</a></li>
                <div class=" absolute w-3/4 h-full top-0 right-0">
                </div>
            </ul>

            <p class="text-trueGray-500 px-6 my-2">USUARIOS</p>

            @livewire('cart-mobil')

            @auth
                <a href="{{ route('profile.show') }}" class="py-2 px-4 text-sm flex items-center text-teal-700 hover:bg-emerald-500 hover:text-white">

                    <span class="flex justify-center w-9">
                        <i class="far fa-address-card"></i>
                    </span>

                    Perfil
                </a>

                    @role('Admin')
                    <a href="{{ url('admin') }}" class="py-2 px-4 text-sm flex items-center text-teal-700 hover:bg-emerald-500 hover:text-white">
                        <span class="flex justify-center w-9">
                            <i class="fas fa-chart-pie"></i>
                        </span>
                        Administrador
                    </a>
                    @endrole

                <a href="" 
                    onclick="event.preventDefault();
                            document.getElementById('logout-form').submit() "
                    class="py-2 px-4 text-sm flex items-center text-teal-700 hover:bg-emerald-500 hover:text-white">

                    <span class="flex justify-center w-9">
                        <i class="fas fa-sign-out-alt"></i>
                    </span>

                    Cerrar sesión
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                    @csrf
                </form>

            @else
                <a href="{{ route('login') }}" class="py-2 px-4 text-sm flex items-center text-teal-700 hover:bg-emerald-500 hover:text-white">

                    <span class="flex justify-center w-9">
                        <i class="fas fa-user-circle"></i>
                    </span>

                    Iniciar sesión
                </a>

                <a href="{{ route('register') }}" class="py-2 px-4 text-sm flex items-center  text-teal-700 hover:bg-emerald-500 hover:text-white">

                    <span class="flex justify-center w-9">
                        <i class="fas fa-fingerprint"></i>
                    </span>

                    Registrate
                </a>
            @endauth
        </div>

    </nav>
</header>




