<h2>nueva mascota</h2>
<form action="{{url('pet')}}" method="post">
    @csrf
    @include('pets.form')

</form>