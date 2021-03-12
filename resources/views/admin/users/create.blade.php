<!DOCTYPE html>
<html>
<head>
	<title>Administrador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
<h1>PAGINA PARA AGREGAR UN USUARIO</h1>
{!! Form::open(['method' => 'POST','action'=>'App\Http\Controllers\AdminUsersController@store']) !!}

    <Table class="table">
        <TR>

            <TD>{!!Form::label('name', 'Nombre:')!!}</TD>
            <TD> {!!Form::text('name')!!}</TD>
        </TR>
        <TR>

            <TD>{!!Form::label('email', 'Correo:')!!}</TD>
            <TD> {!!Form::text('email')!!}</TD>
        </TR>
        <TR>

            <TD>{!!Form::label('email_verified_at', 'Veririficar correo:')!!}</TD>
            <TD> {!!Form::text('email_verified_at')!!}</TD>
        </TR>
        <TR>

            <TD>{!!Form::label('password', 'Clave:')!!}</TD>
            <TD> {!!Form::password('password')!!}</TD>
        </TR>

        <TR>

            <TD>{!!Form::label('role_id', 'Rol')!!}</TD>
            <TD> {!!Form::text('role_id')!!}</TD>
        </TR>

        <TR>

            <TD>{!!Form::submit('Crea Usuario')!!}</TD>
            <TD> {!!Form::reset('Borrar')!!}</TD>
        </TR>


    </Table>
{!! Form::close() !!}

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</body>
</html>
