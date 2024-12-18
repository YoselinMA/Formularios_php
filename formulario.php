<!DOCTYPE html>
<html>
<head>
    <title>Registro Familiar</title>
    <style>
        /* Aplica estilos para centrar todo el contenido */
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh; /* Ocupa toda la altura de la pantalla */
            margin: 0;
            font-family: Arial, sans-serif; /* Fuente más limpia y moderna */
            background-color: #f9f9f9; /* Fondo claro */
        }

        h1 {
            margin-bottom: 20px;
        }

        form {
            width: 100%;
            max-width: 400px; /* Limita el ancho máximo del formulario */
            text-align: center; /* Centra los elementos dentro del formulario */
            background-color: #ffffff; /* Fondo blanco */
            padding: 20px;
            border: 1px solid #ccc; /* Borde gris claro */
            border-radius: 8px; /* Esquinas redondeadas */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Sombra sutil */
        }

        input[type="text"],
        input[type="file"] {
            width: 90%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc; /* Borde gris claro */
            border-radius: 4px; /* Esquinas redondeadas */
        }

        input[type="submit"] {
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            background-color: pink; /* Azul para el botón */
            color: white; /* Texto blanco */
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: purple; /* Azul más oscuro al pasar el cursor */
        }
    </style>


    <title>Registro Familiar</title>
    <!-- Establece el título de la página que aparece en la pestaña del navegador -->
</head>
<body>
    <!-- Inicia el cuerpo de la página web, donde se define el contenido visible -->
    <h1>Familiares</h1>
    <!-- Encabezado principal de la página -->

    <form action="registrar.php" method="post" enctype="multipart/form-data">
        <!-- Inicia un formulario para enviar datos al servidor -->
        <!-- 'action="registrar.php"': Especifica el archivo PHP que procesará los datos -->
        <!-- 'method="post"': Los datos se envían de forma oculta (no se muestran en la URL) -->
        <!-- 'enctype="multipart/form-data"': Permite enviar archivos (como imágenes) -->

        Ingrese nombre:
        <!-- Etiqueta de texto que indica que el usuario debe ingresar su nombre -->
        <input type="text" name="nombre" required>
        <!-- Campo de entrada para el nombre -->
        <!-- 'name="nombre"': Este es el nombre del campo que se enviará al servidor -->
        <!-- 'required': Obliga al usuario a completar este campo -->
        <br><br>
        <!-- Salto de línea para separar visualmente los campos -->

        Ingrese parentesco:
        <!-- Etiqueta de texto para solicitar el parentesco -->
        <input type="text" name="parentesco" required>
        <!-- Campo de entrada para el parentesco del familiar -->
        <!-- 'name="parentesco"': Nombre del campo enviado al servidor -->
        <!-- 'required': Obliga al usuario a completarlo -->
        <br><br>
        <!-- Salto de línea -->

        Seleccione la foto:
        <!-- Etiqueta de texto para pedir al usuario que suba una foto -->
        <input type="file" name="foto" accept="image/*" required>
        <!-- Campo de entrada para seleccionar un archivo -->
        <!-- 'type="file"': Permite subir archivos -->
        <!-- 'name="foto"': Nombre del campo que se enviará al servidor -->
        <!-- 'accept="image/*"': Restringe los archivos aceptados solo a imágenes -->
        <!-- 'required': Obliga a seleccionar una foto -->
        <br><br>
        <!-- Salto de línea -->

        <input type="submit" value="Registrar">
        <!-- Botón para enviar el formulario al archivo 'registrar.php' -->
        <!-- 'value="Registrar"': Texto que aparece en el botón -->
    </form>
    <!-- Fin del formulario para el registro -->

    <br>
    <!-- Salto de línea para separar visualmente -->

    <!-- Nuevo botón para ver listado -->
    <form action="listado.php" method="get">
        <!-- Inicia un segundo formulario -->
        <!-- 'action="listado.php"': Envía la solicitud al archivo 'listado.php' -->
        <!-- 'method="get"': Los datos se envían a través de la URL (aunque aquí no hay datos) -->

        <input type="submit" value="Listado Familiar">
        <!-- Botón para enviar el formulario al archivo 'listado.php' -->
        <!-- 'value="Listado Familiar"': Texto que aparece en el botón -->
    </form>
    <!-- Fin del formulario para el listado -->
</body>
<!-- Fin del cuerpo de la página -->
</html>
<!-- Fin del documento HTML -->
