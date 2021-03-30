<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Prueba</title>
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <!-- Styles -->
        
    </head>
    <body>
 
       <div class="container">
     
       <h1 style="text-align:center"><b>Potenciación</b></h1>
       <br>
       <form action="/" method="GET">
         <div class="form-group">
         <label>Base: </label>
         <input class="form-control" type="text" name="base" id="">
         <label>Exponente: </label>
         <input class="form-control" type="text" name="exponente" id="">
        <br>
         <button class="btn btn-primary" type="submit"> Aceptar </button>
        <br>
         <label>Resultado: </label>
         <input class="form-control" type="text" name="resultado"  id="" readonly value={{$respuesta}}>
        
         <label>Total: </label>
     
         <input class="form-control" type="text" name="acumulador" id="" placeholder="0" readonly value={{$total}}>
           
         </div>
       </form>
     

    </body>
</html>
