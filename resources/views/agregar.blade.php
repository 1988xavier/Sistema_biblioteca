<!DOCTYPE html>
<html>
<head>
    <title>Lista de Libros</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
       .encabezado {
            background-color: #000000;
            height: 120px;
            margin: 0px;
        }

        .enlaces-izquierda {
            background-color: #6675a4;
            height: calc(100vh - 120px); /* Ajustar altura para que ocupe todo el espacio restante */
            padding: 20px;
        }

        .lista-libros {
            background-color: #80d4e7;
            height: calc(100vh - 120px); /* Ajustar altura para que ocupe todo el espacio restante */
            padding: 20px;
        }

        .table {
            font-size: 14px; /* Reducir el tamaño de fuente de la tabla */
        }

        .table th, .table td {
            padding: 7px; /* Reducir el espacio entre las celdas de la tabla */
        }

        .btn {
            padding: 6px 12px; /* Reducir el tamaño de los botones */
            font-size: 10px; /* Reducir el tamaño de fuente de los botones */
        }

        .body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form {
            text-align: center;
        }
    </style>
</head>
<body>
    <!-- Encabezado -->
    <div class="encabezado">
        <div class="row">
            <div class="col-10  ">
                <div class="header">
                <div class="logo">
                <img src="imagenes/logo.png" alt="Logo" style="width: 100px; height: 100px;">
                <span style="margin-left: 20px; font-size: 50px; color: white;" >Sistema de Biblioteca</span>
            </div>
                </div>
            </div>
            <div class="col-2">
                <div class="header">
                    <div class="search" style="margin-top: 40px;">
                    <input type="text" class="form-control" id="input-busqueda" placeholder="Buscar...">

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contenido de la página -->
    <div class="">
        <div class="row">
            <!-- Enlaces a la izquierda -->
            <div class="col-3">
                <div class="enlaces-izquierda">
                    <a href="{{ route('libro.listado') }}" style="color: white; font-size: 20px;">Listar Libros</a><br>
                    <a href="#" style="color: white; font-size: 20px;">Administrar Libros</a>
                    <!--<button onclick="window.location.href='/agregar'" style="color: white; font-size: 20px; background-color: #007bff; border: none; padding: 10px 20px; cursor: pointer; margin-top: 390px;">Agregar Libro</button>-->

                </div>
            </div>

            <!-- Lista de libros -->
            <div class="col-9">
                <div class="lista-libros">
                   
                    
                    <body>
                        <h1 >Agregar Libro</h1>
                        <form method="POST" action="{{ url('/agregar') }}">
                            @csrf
                            <label for="clave">Clave:</label><br>
                            <input type="text" id="clave" name="clave"><br>
                            
                            <label for="nombre">Nombre:</label><br>
                            <input type="text" id="nombre" name="nombre"><br>
                            
                            <label for="autor">Autor:</label><br>
                            <input type="text" id="autor" name="autor"><br>
                            
                            <label for="fecha_publicacion">Fecha de Publicación:</label><br>
                            <input type="date" id="fecha_publicacion" name="fecha_publicacion"><br>
                            
                            <label for="editorial">Editorial:</label><br>
                            <input type="text" id="editorial" name="editorial"><br>
                            
                            <label for="portada">Portada:</label><br>
                            <input type="file" id="portada" name="portada"><br><br>
                            
                            <input type="submit" value="Agregar">
                        </form>
                    </body>
                   
                </div>
            </div>
        </div>
    </div>


    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const inputBusqueda = document.getElementById('input-busqueda');

        inputBusqueda.addEventListener('input', function () {
            const valorBusqueda = inputBusqueda.value.toLowerCase();
            const filasTabla = document.querySelectorAll('.table tbody tr');

            filasTabla.forEach(function (fila) {
                const titulo = fila.querySelector('td:nth-child(2)').textContent.toLowerCase();
                const autor = fila.querySelector('td:nth-child(3)').textContent.toLowerCase();

                if (titulo.includes(valorBusqueda) || autor.includes(valorBusqueda)) {
                    fila.style.display = '';
                } else {
                    fila.style.display = 'none';
                }
            });
        });
    });
</script>
</body>
</html>
















  


    <style>
        /* Estilos CSS aquí */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }
        /* Otros estilos */
    </style>
</head>

