{{-- @livewire('admin.export-pdf', ['assists' => $assists, 'events' => $events]) --}}


<!DOCTYPE>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Reporte de Asistencias</title>
<style>
    body {
        /*position: relative;*/
        /*width: 16cm;  */
        /*height: 29.7cm; */
        /*margin: 0 auto; */
        /*color: #555555;*/
        /*background: #FFFFFF; */
        font-family: Arial, sans-serif;
        font-size: 14px;
        /*font-family: SourceSansPro;*/
    }

    #logo {
        float: left;
        margin-top: 1%;
        margin-left: 2%;
        margin-right: 2%;
    }

    #imagen {
        width: 100px;
    }

    #datos {
        float: left;
        margin-top: 0%;
        margin-left: 2%;
        margin-right: 2%;
        /*text-align: justify;*/
    }

    #encabezado {
        text-align: center;
        margin-left: 10%;
        margin-right: 35%;
        font-size: 15px;
    }

    #fact {
        /*position: relative;*/
        float: right;
        margin-top: 2%;
        margin-left: 2%;
        margin-right: 2%;
        font-size: 20px;
    }

    section {
        clear: left;
    }

    #cliente {
        text-align: left;
    }

    #facliente {
        width: 40%;
        border-collapse: collapse;
        border-spacing: 0;
        margin-bottom: 15px;
    }

    #fac,
    #fv,
    #fa {
        color: #FFFFFF;
        font-size: 15px;
    }

    #facliente thead {
        padding: 20px;
        background: #2183E3;
        text-align: left;
        border-bottom: 1px solid #FFFFFF;
    }

    #facvendedor {
        width: 100%;
        border-collapse: collapse;
        border-spacing: 0;
        margin-bottom: 15px;
    }

    #facvendedor thead {
        padding: 20px;
        background: #2183E3;
        text-align: center;
        border-bottom: 1px solid #FFFFFF;
    }

    #facarticulo {
        width: 100%;
        border-collapse: collapse;
        border-spacing: 0;
        margin-bottom: 15px;
    }

    #facarticulo thead {
        padding: 20px;
        background: #2183E3;
        text-align: center;
        border-bottom: 1px solid #FFFFFF;
    }

    #gracias {
        text-align: center;
    }
</style>

<body>
    <header>
        <div id="logo">
            <img src="img/logos/vijorma_oficial.png" alt="vijorma" id="imagen">
        </div>
        <div id="datos">
            <p id="encabezado">
                <b>vijorma ©</b><br> Juliaca - Puno
                Perú<br>Telefono:(+51)945257563<br>Email:vidal_mamani@upeu.edu.pe
            </p>
        </div>
        <div id="fact">
            <p>Informe<br>
            General</p>
        </div>
    </header>
    <br>
    <section>
        <div>
            <table id="facliente">
                <thead>
                    <tr>
                        <th id="fac">lunes, 18 de diciembre</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>
                            <p id="cliente">Estos eventos fueron diseñados para proporcionar a los asistentes información valiosa y oportunidades de aprendizaje.</p>
                        </th>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
    {{-- <br>
    <section>
        <div>
            <table id="facvendedor">
                <thead>
                    <tr id="fv">
                        <th>VENDEDOR</th>
                        <th>FECHA</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>vendedor</td>
                        <td>fecha</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
    <br> --}}
    <section>
        <div>
            <table id="facarticulo">
                <thead>
                    <tr id="fa">
                        <th>N°</th>
                        <th>CÓDIGO</th>
                        <th>PARTICIPANTE</th>
                        <th>EVENTO</th>
                        <th>E.P.</th>
                        <th>CICLO</th>
                        <th>GRUPO</th>
                        <th>FECHA</th>
                    </tr>
                </thead>
                <tbody>
                    @php $counter = 1; @endphp
                    @foreach ($assists as $assist)
                        <tr>
                            <td>
                                {{ $counter++ }}
                            </td>
                            <td>{{ $assist->code }}</td>
                            <td>{{ $assist->participant->name }}</td>
                            <td>{{ $assist->event->name }}</td>
                            <td>{{ $assist->career }}</td>
                            <td>{{ $assist->semester }}</td>
                            <td>{{ $assist->group }}</td>
                            <td>{{ $assist->date }}</td>
                        </tr>
                    @endforeach
                </tbody>
                {{-- <tfoot>
                    <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th>SUBTOTAL</th>
                        <td>subtotal</td>
                    </tr>
                    <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th>IVA</th>
                        <td>iva</td>
                    </tr>
                    <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th>TOTAL</th>
                        <td>total</td>
                    </tr>
                </tfoot> --}}
            </table>
        </div>
    </section>
    <br>
    <br>
    <footer>
        <div id="gracias">
            <p id="cliente">Atentamente,</p>
            <br>
            Vidal Mamani Jordan
        </div>
    </footer>
</body>

</html>
