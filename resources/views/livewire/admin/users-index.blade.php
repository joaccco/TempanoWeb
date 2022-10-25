<div>
    Lista de usuarios.

    <div class="card">
        <div class="card-header">
            <input wire:model="search" class="form-control" placeholder="Buscar usuario">
        </div>
        @if ($users ->count())
           <div class="card-body">
           <table class="table table-striped">
           <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th></th>
            </tr>
           </thead>
            <body>
                @foreach ($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td width="10px">
                            <a class="btn btn-primary" href="{{route('admin.users.edit', ['user'=>$user->id])}}">Editar</a>
                        </td>
                    </tr>
                @endforeach
            </body>
           </table>
        </div>
        </div>
        <div class="card-footer">
        {{$users->links()}}
        </div>
        @else
        <div class="card-body">
        <strong>No hay registros</strong>

        </div>

     
    @endif
</div>
