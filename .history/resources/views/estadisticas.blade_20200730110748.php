<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
               
                <div class="row">
                    
                    <p>Número visitas por inmuebles</p>
                    <ul>
                    @foreach ($visitasporinmueble as $visitaporinmueble)
                        <li>{{ $visitaporinmueble->calle }} : {{ $visitaporinmueble->visitasporinmueble }}</li>
                    @endforeach
                    </ul>

                    
                </div>

                <div class="row">
                    <p>Estadísticas</p>
                    <ul>
                        <li>Número total de inmuebles: {{ $numtotalinmuebles}}</li>
                        <li>Número total de inmuebles con visitas: {{ $numtotalinmueblesvisitas}}</li>
                        <li>Número total de inmuebles visitados (Estado 3 y 4 ): {{ $numtotalinmueblesvisitados}} </li>
                        <li>Número total de inmuebles vendidos (Archivo = Venta deplace) {{ $numtotalventadeplace}}</li>
                    </ul>
                </div>

                <div class="row">
                    <p>Razones venta inmuebles</p>
                    <ul>
                    @foreach ($inmuebles as $inmueble)
                        @if ($inmueble->archivo)
                            <li>{{ $inmueble->calle }} : {{ $inmueble->archivo }}</li>
                        @else
                            <li>{{ $inmueble->calle }} : --</li>
                        @endif
                        
                    @endforeach
                    </ul>
                </div>

                 <div class="row">
                    
                    <p>Estado visitas por inmuebles</p>
                   

                    
                </div>
                 
            </div>
        </div>
    </body>
</html>
