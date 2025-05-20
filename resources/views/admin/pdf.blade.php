<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Lista de Alumnos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 10px;
        }

        table {
            width: 100%;
        border-collapse: collapse;
        font-size: 10px;
        }

        th,
        td {
            border: 1px solid black;
        padding: 5px;
        text-align: center;
        height: 25px;
        }

        th {
            background-color: #d1e7dd;
        }

        .header {
            text-align: center;
            margin-bottom: 10px;
        }

        .logos img {
            height: 50px;
        }

        .footer {
            position: absolute;
            bottom: 20px;
            font-size: 8px;
            width: 100%;
            text-align: center;
        }
    </style>
</head>

<body>

    <div class="header">
        <div class="logos">
            <img src="{{ public_path('img/sep.png') }}" style="float: left;">
            <img src="{{ public_path('img/tecnm.png') }}" style="float: right;">
        </div>
        <h3>COORDINACIÓN DE LENGUAS EXTRANJERAS</h3>
        <p><strong>LEVEL 4F SABATINO 08:00 A.M. - 03:00 P.M.</strong></p>
        <p>TEACHER: _________________________</p>
    </div>

    <table>
    <thead>
        <tr>
            <th>No.</th>
            <th>NAME</th>
            <th>CONTROL NUMBER</th>
            <th>CAREER</th>
            <th colspan="7">FIRST WEEK</th>
            <th colspan="7">SECOND WEEK</th>
            <th>FINAL GRADE</th>
        </tr>
    </thead>
    <tbody>
        <?php $contador = 1; ?>
        @foreach ($alumnos as $alumno)
            <tr>
                <td style="text-align: center">{{ $contador++ }}</td>
                <td style="text-align: center">{{ $alumno->nombres . ' ' . $alumno->apellidos }}</td>
                <td style="text-align: center">{{ $alumno->no_control }}</td>
                <td style="text-align: center">&nbsp;</td> {{-- CAREER en blanco --}}

                {{-- FIRST WEEK (7 celdas vacías) --}}
                @for ($i = 0; $i < 7; $i++)
                    <td>&nbsp;</td>
                @endfor

                {{-- SECOND WEEK (7 celdas vacías) --}}
                @for ($i = 0; $i < 7; $i++)
                    <td>&nbsp;</td>
                @endfor

                <td>&nbsp;</td> {{-- FINAL GRADE --}}
            </tr>
        @endforeach
    </tbody>
</table>


    <div class="footer">
        Carretera Nacional Iguala-Taxco Esquina Periférico Norte, Col. Adolfo López Mateos<br>
        Iguala de la Independencia, Gro. C.P. 40030 - Tel. (733) 3321425 Ext. 1430 - Email: cle@iguala.tecnm.mx
    </div>

</body>

</html>
