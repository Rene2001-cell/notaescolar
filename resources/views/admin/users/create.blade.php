<!DOCTYPE html>
<html>
<head>
	<title>Administrador</title>
</head>
<body>
<h1>PAGINA PARA AGREGAR UN USUARIO</h1>
{!! Form::open(['method' => 'POST','action'=>'App\Http\Controllers\AdminUsersController@store']) !!}

    <Table>
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
</body>
</html>
