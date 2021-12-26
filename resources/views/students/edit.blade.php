
<form action="{{url('/students/'.$student->id)}}" method="post">
{{csrf_field()}}
{{ method_field('PATCH')}}

@include('students.form',['Type'=>'edit'])

</form>