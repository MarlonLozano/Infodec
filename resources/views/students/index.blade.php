<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
@if(Session::has('Message')){{
    Session::get('Message')
}}
@endif
<div class="container mt-5">
<a href="{{url('students/create')}}" class="btn btn-success">Nuevo Estudiante</a>
</div>
<div class="container mt-5">
<table class="table table-striped table-light">
<thead class="thead-light">
    <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Nota 1</th>
        <th scope="col">Nota 2</th>
        <th scope="col">Nota 3</th>
        <th scope="col">Nota Final</th>
        <th scope="col">ACCIONES</th>
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
            <td>{{$student->notaFinal}}</td>
            <td>
            <a href="{{url('/students/'.$student->id.'/edit')}}" class="btn btn-warning">Editar</a>
            <form method="post" action="{{ url('/students/'.$student->id)}}" style="display:inline">
            {{csrf_field()}}
            {{method_field('DELETE')}}
            <button type="submit" onclick="return confirm('¿Seguro que desea borrar?');" class="btn btn-danger" >Borrar</button>
            </form>
            </td>
            
        </tr>
    </tbody>
    @endforeach
</table>
</div>