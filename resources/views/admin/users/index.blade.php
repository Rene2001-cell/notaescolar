<!DOCTYPE html>
<html>
<head>
	<title>Administrador</title>
</head>
<body>

<h1>Esta es la pagina principal del administrador</h1>


    <table width="900" class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>Id</th>
                <th>Rol Id</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Creado</th>
                <th>Actualizado</th>



            </tr>
        </thead>
        <tbody>

            @foreach ($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->role_id}}</td>
                <td><a href="{{route('users.edit',$user->id)}}">{{$user->name}}</a></td>
                <td>{{$user->email}}</td>
                <td>{{$user->created_at}}</td>
                <td>{{$user->updated_at}}</td>

            </tr>
            @endforeach

        </tbody>
    </table>


</body>
</html>
