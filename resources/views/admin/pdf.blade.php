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
            <img src="assets/img/LOGO-SEP.png" style="float: left; width: 200px; height: auto;">
            <img src="assets/img/TECNM_LOGO.png" style="float: none; width: 150px; height: auto;">
            <img src="assets/img/LOGO-CLE2.png" style="float: right; width: 150px; height: auto;">
        </div>
        <h3>COORDINACIÓN DE LENGUAS EXTRANJERAS</h3>
        <p><strong>LEVEL._____ ___________ _________________</strong></p>
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
                    <td style="text-align: center">&nbsp;</td>

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
        <table width="100%" style="text-align: center; margin-top: 30px; border: none;">
            <tr>
                <td style="border: none;"><img src="assets/img/Logoiti.png" style="width: 80px; height: auto;"></td>
                <td style="border: none;"><img src="assets/img/Logo100%.png" style="width: 80px; height: auto;"></td>
                <td style="border: none;">Carretera Nacional Iguala-Taxco Esquina Periférico Norte, Col. Adolfo López Mateos<br>
                    Iguala de la Independencia, Gro. C.P. 40030 - Tel. (733) 3321425 Ext. 1430 - Email:
                    cle@iguala.tecnm.mx</td>
                <td style="border: none;"><img src="assets/img/logo4.png" style="width: 80px; height: auto;"></td>
                <td style="border: none;"><img src="assets/img/LogoMexico.png" style="width: 80px; height: auto;"></td>
            </tr>
        </table>
    </div>

</body>

</html>
