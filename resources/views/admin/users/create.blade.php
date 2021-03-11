<!DOCTYPE html>
<html>
<head>
	<title>Administrador</title>
</head>
<body>
<h1>PAGINA PARA AGREGAR UN USUARIO</h1>
{!! Form::open(['url' => 'foo/bar']) !!}

    <Table>
        <TR>

            <TD>{!!Form::label('email', 'E-Mail Address')!!}</TD>
            <TD> {!!Form::text('username')!!}</TD>
        </TR>
        <TR>

            <TD>{!!Form::label('email', 'E-Mail Address')!!}</TD>
            <TD> {!!Form::text('username')!!}</TD>
        </TR>
        <TR>

            <TD>{!!Form::label('email', 'E-Mail Address')!!}</TD>
            <TD> {!!Form::text('username')!!}</TD>
        </TR>
        <TR>

            <TD>{!!Form::label('email', 'E-Mail Address')!!}</TD>
            <TD> {!!Form::text('username')!!}</TD>
        </TR>
        <TR>

            <TD>{!!Form::label('email', 'E-Mail Address')!!}</TD>
            <TD> {!!Form::text('username')!!}</TD>
        </TR>


    </Table>


{!! Form::close() !!}
</body>
</html>
