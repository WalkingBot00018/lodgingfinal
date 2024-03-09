   <table>
    <thead>
        <tr>
            <th>identificacion de Rol</th>
            <th>Nombre del Rol</th>
            <th>Permisos</th>
            
        </tr>
    </thead>
    <tbody>
        @forelse ($rol as $role)
            <tr>
                <td>{{ $role->ID_rol }}</td>
                <td>{{ $role->Nombre }}</td>
                <td>{{ $role->Permisos }}</td>
                
            </tr>
        @empty
            <tr>
                <td colspan="3"><h6>No hay datos</h6></td>
            </tr>
        @endforelse
    </tbody>
</table>
