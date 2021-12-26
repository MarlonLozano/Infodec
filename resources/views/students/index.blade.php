@if(Session::has('Message')){{
    Session::get('Message')
}}
@endif
<a href="{{url('students/create')}}">Nuevo Estudiante</a>
<table class="table table-dark">
<th>#</th>
<th>Nombre</th>
<th>Nota 1</th>
<th>Nota 2</th>
<th>Nota 3</th>
<th>ACCIONES</th>

<thead>
    <tr>
    </tr>
</thead>
    <tbody>
        @foreach($students as $student)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$student->Nombre}}</td>
            <td>{{$student->nota1}}</td>
            <td>{{$student->nota2}}</td>
            <td>{{$student->nota3}}</td>
            <td>
                <a href="{{url('/students/'.$student->id.'/edit')}}">Editar</a>
            <form method="post" action="{{ url('/students/'.$student->id)}}">
            {{csrf_field()}}
            {{method_field('DELETE')}}
            <button type="submit" onclick="return confirm('¿Seguro que desea borrar?');">Borrar</button>
            </form>
            </td>
            
        </tr>
    </tbody>
    @endforeach
</table>