<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <div style="border: 3px solid black;">
    <h2>Email data</h2>
        <form action="/send-email" method="post">
            @csrf
            <input type="text" name="nombre" placeholder="Ingrese name"></br>
            <input type="text" name="email" placeholder="Ingrese email"></br>
            <input type="text" name="asunto" placeholder="Ingrese asunto"></br>
            <textarea name="mensaje" placeholder="Ingrese mensaje"></textarea></br>
            <button>Send Email</button>
        </form>        
    </div>    
</body>
</html>