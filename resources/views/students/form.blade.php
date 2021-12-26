
    <label for="Name">{{'Name'}}</label>
    <input type="text" name="Nombre" id="Name" value="{{ isset($student->Nombre)?$student->Nombre:'' }}">

    <label for="Nota1">{{'Nota1'}}</label>
    <input type="text" name="Nota1" id="Name"  value="{{ isset($student->nota1)?$student->nota1:'' }}">

    <label for="Nota2">{{'Nota2'}}</label>
    <input type="text" name="Nota2" id="Name" value="{{ isset($student->nota2)?$student->nota2:'' }}">

    <label for="Nota3">{{'Nota3'}}</label>
    <input type="text" name="Nota3" id="Name" value="{{ isset($student->nota3)?$student->nota3:'' }}">

    <input type="submit" value="{{$Type=='create' ? 'Agregar':'Editar'}}">
    <a href="{{url('students')}}">Regresar</a>
