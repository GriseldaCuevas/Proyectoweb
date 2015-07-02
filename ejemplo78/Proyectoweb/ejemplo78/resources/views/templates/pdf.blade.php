<!DOCTYPE html>

<html lang="es">
    <head>
        <title>{{$grupo->nombre}} | {{$grupo->horario}}</title>
        <style type="text/css">
            *{
                font-size: 16px;
            }

            #contenedor{
                margin: 3em auto;
                width: 90%
            }

            header{
                text-align: center;
            }

            header > img{
                height: 200px;
                width: 200px;
            }

            #tabla{
                border: 1px;
                margin: 0 auto;
                width: 100%
            }

            #tabla tr th, #tabla tr td{
                text-align: center;
            }
        </style>
    </head>
    <body>
        <section id="contenedor">
            <header>
                <h1>{{$grupo->nombre}}</h1>
                <h3>{{$grupo->horario}} - Aula {{$grupo->aula}}</h3>
                <h3>Maestro: {{$grupo->nombres}} {{$grupo->apellidos}}</h3>
                <h4>Total: {{$total}}</h4>
            </header>
            <table id="tabla">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Semestre</th>
                    <th>Promedio</th>
                </tr>
                @foreach($alumnos as $alumno)
                    <tr>
                        <td>{{$alumno->id}}</td>
                        <td>{{$alumno->apellidos}} {{$alumno->nombres}}</td>
                        <td>{{$alumno->semestre}}</td>
                        <td>{{$alumno->promedio}}</td>
                    </tr>
                @endforeach
            </table>
        </section>
    </body>
</html>
