<!DOCTYPE html>
<html>
<head>
	<title>Administrador</title>
</head>
<body>
<h1>PAGINA PARA AGREGAR UN USUARIO</h1>
{!! Form::model($user,['method' => 'PATCH','action'=>['App\Http\Controllers\AdminUsersController@update',$user->id]]) !!}

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

            <TD>{!!Form::label('role_id', 'Rol')!!}</TD>
            <TD> {!!Form::text('role_id')!!}</TD>
        </TR>

        <TR>

            <TD>{!!Form::submit('Modificar')!!}</TD>
            <TD> {!!Form::reset('Borrar')!!}</TD>
        </TR>


    </Table>


</body>
</html>
