<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>abstract.</title>

        <!-- Fonts -->
        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/styles.css')}}">
        <link rel="stylesheet" href="{{asset('css/dots.css')}}">
        <link rel="stylesheet" href="{{asset('css/nightmode.css')}}">
    </head>
    <body>
        <div class="dots">
            <svg class='dot dot-1' id='dot-1'>
                <circle cx=4 cy=4 r=4 ></circle>
            </svg>
            <svg class='dot dot-2' id='dot-2'>
                <circle cx=4 cy=4 r=4 class=></circle>
            </svg>
            <svg class='dot dot-3' id='dot-3'>
                <circle cx=4 cy=4 r=4 class=></circle>
            </svg>
            <svg class='dot dot-4' id='dot-4'>
                <circle cx=4 cy=4 r=4 class=></circle>
            </svg>
            <svg class='dot dot-5' id='dot-5'>
                <circle cx=4 cy=4 r=4 class=></circle>
            </svg>
            <svg class='dot dot-6' id='dot-6'>
                <circle cx=4 cy=4 r=4 class=></circle>
            </svg>
            <svg class='dot dot-7' id='dot-7'>
                <circle cx=4 cy=4 r=4 class=></circle>
            </svg>
            <svg class='dot dot-8' id='dot-8'>
                <circle cx=4 cy=4 r=4 class=></circle>
            </svg>
            <svg class='dot dot-9' id='dot-9'>
                <circle cx=4 cy=4 r=4 class=></circle>
            </svg>
            <svg class='dot dot-10' id='dot-10'>
                <circle cx=4 cy=4 r=4 class=></circle>
            </svg>
            <svg class='dot dot-11' id='dot-11'>
                <circle cx=4 cy=4 r=4 class=></circle>
            </svg>
            <svg class='dot dot-12' id='dot-12'>
                <circle cx=4 cy=4 r=4 class=></circle>
            </svg>
            <svg class='dot dot-13' id='dot-13'>
                <circle cx=4 cy=4 r=4 class=></circle>
            </svg>
            <svg class='dot dot-14' id='dot-14'>
                <circle cx=4 cy=4 r=4 class=></circle>
            </svg>
            <svg class='dot dot-15' id='dot-15'>
                <circle cx=4 cy=4 r=4 class=></circle>
            </svg>
            <svg class='dot dot-16' id='dot-16'>
                <circle cx=4 cy=4 r=4 class=></circle>
            </svg>
        </div>
        <nav>
            <p class='nav-title'>abstract<span class='title-dot'>.</span></p>
            <div class="night-toggler">
                <img class='night-toggler-img' src="{{asset('img/nav/sun.svg')}}" alt="">
            </div>
            <ul class='nav-ul'>
                <li class='nav-li'>
                    <h1>Desarrollo<span class='light-yellow'>.</span></h1> 
                </li>
                <li class='nav-li'>
                    <h1>Diseño<span class='light-green'>.</span></h1>    
                </li>
                <li class='nav-li'>
                    <h1>Comunidades<span class='light-blue'>.</span></h1> 
                </li>
            </ul>
        </nav>
        <div class="title-container">
            <h2>
                <span class='subtitle-line'>Te ponemos</span>
                <span class='subtitle-line'>en internet<span class='title-dot'>.</span></span> 
            </h2>
            <a class='btn title-btn' id='title-btn'>QUIERO ESTAR</a>
        </div>
        <div class="display-left">
            <div class="container">
                <h1 class='display-title'>Mostrate<span class='title-dot'>.</span></h1>
                <div class="display-data-side">
                    <p class='display-p'>
                        Te hacemos notar en las redes!
                    </p>
                    <p class='display-p'>
                        Tenés un proyecto? Sos artista y querés mostrar lo que hacés?
                    </p>
                    <p class='display-p bold'>
                        Ahí podés estar vos.
                    </p>
                    
                </div>
                <div class="display-img-side">
                    <img class='display-img' src="{{asset('img/display/info2.jpg')}}" alt="">
                </div>
            </div>
            
        </div>
        <div class="display-right">
            <div class="container">
                <h1 class='display-title'>Vendé más<span class='title-dot'>.</span></h1>
                <div class="display-data-side">
                    <p class='display-p'>
                        No hace falta que la gente pase por la vidriera para que vea tus productos.
                    </p>
                    <p class='display-p'>
                        Te armamos <span class='bold'>tu propio comercio en línea.</span>
                    </p>
                    <p class='display-p'>
                        Tenés una oferta?
                    </p>
                    <div class="btn display-btn">Hablemos!</div>

                </div>
                <div class="display-img-side">
                    <img class='display-img' src="{{asset('img/display/info1.jpg')}}" alt="">
                </div>
            </div>
        </div>
        <div class="contact">
            <h2 class='contact-title'>Estamos.</h2>
            <form class='contact-form'>
                @csrf
                <div class="input-wrapper">
                    <label for="name">
                        Cómo te llamás?
                    </label>
                    <input type="text" name='name' id='name' placeholder="Tu nombre...">
                </div>
                <div class="input-wrapper">
                    <label for="contact-info">
                        Cómo te ubicamos?
                    </label>
                    <input type="text" name='contact-info' id='contact-info' placeholder="Teléfono o email...">
                </div>
                <div class="input-wrapper">
                    <label for="message">
                        Cómo te ayudamos?
                    </label>
                    <textarea name="message" id="message" cols="30" rows="4" placeholder="Ej: 'Hola quiero vender en internet pero no se como...!'"></textarea>
                </div>
                
                <div class="input-wrapper">
                    <button class='title-btn submit-btn' id='submit' type="submit">ENVIAR</button>
                </div>
            </form>
        </div>
        <footer class='footer'>
            <h1 class='footer-title'>
                abstract<span class='title-dot'>.</span>
            </h1>
            <div class="footer-contact">
                <ul class="footer-ul">
                    <li class='footer-li'>
                        <a href=""><p>instagram</p></a>
                    </li>
                    <li class='footer-li'>
                        <a href="mailto:contacto.abstractdigital@gmail.com">
                            <p>email</p>
                        </a>
                    </li>
                    <li class='footer-li'>
                        <a href="tel:+542996101387">
                            <p>telefono</p>
                        </a>
                    </li>
                </ul>
            </div>
        </footer>
    </body>
    <script src="{{asset('js/script.js')}}"></script>
</html>
