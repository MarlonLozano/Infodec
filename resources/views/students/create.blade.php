<form action="{{ url('/students')}}" method="post">
    {{csrf_field()}}
@include('students.form',['Type'=>'create'])
</form>