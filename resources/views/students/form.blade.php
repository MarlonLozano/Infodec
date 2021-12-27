<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="../../../resources/js/calculate.js"></script>
<script src="../../resources/js/calculate.js"></script>

<div class="container mt-5">
    <h1>{{$Type=='create' ? 'Agregar Nuevo Estudiante':'Editar Estudiante'}}</h1>
</div>
<div class="container mt-5" id="form">
        <div class="col-md-6">
            <div class="form-group">
    <label for="Name">{{'Nombre Completo'}}</label>
    <input type="text" class="form-control" required name="Nombre" id="Name" value="{{ isset($student->Nombre)?$student->Nombre:'' }}">
    </div>
    </div>
        <div class="col-md-6">
            <div class="form-group">
    <label for="Nota1">{{'Nota 1'}}</label>
    <input type="number" step="0.01" min="1.0" max="5.0" class="form-control" required name="Nota1" id="nota1"  value="{{ isset($student->nota1)?$student->nota1:'' }}">
    </div>
    </div>
    <div class="col-md-6">
            <div class="form-group">
    <label for="Nota2">{{'Nota 2'}}</label>
    <input type="number" step="0.01" min="1.0" max="5.0" class="form-control" required name="Nota2" id="nota2" value="{{ isset($student->nota2)?$student->nota2:'' }}">
    </div>
    </div>
    <div class="col-md-6">
            <div class="form-group">
    <label for="Nota3">{{'Nota 3'}}</label>
    <input type="number" step="0.01" min="1.0" max="5.0" class="form-control" required name="Nota3" id="nota3" value="{{ isset($student->nota3)?$student->nota3:'' }}">
    </div>
    </div>
    <div class="col-md-6">
            <div class="form-group">
    <label for="NotaFinal">{{'Promedio'}}</label>
    <input type="number" step="0.01" min="1.0" max="5.0" class="form-control" name="notaFinal" id="notaFinal" value="{{isset($student->notaFinal)?($student->nota1+$student->nota2+$student->nota3)/3:'' }}" >
    </div>
    </div>
    <div class="col-md-6 mt-5">
            <div class="form-group">
    <input type="submit" value="{{$Type=='create' ? 'Agregar':'Editar'}}" class="btn btn-warning" >
    <a href="{{url('students')}}" class="btn btn-primary">Regresar</a>
    </div>
    </div>

