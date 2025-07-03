@extends('app')




@section('content')

<form action="{{route('publishers.store')}}" method="post">
    @csrf
    <div>
        <label for="nome">nome</label>
        <input type="text" name="nome" id="nome">
    </div>

    <div>
        <label for="contatto">contatto</label>
        <input type="text" name="contatto" id="contatto">
    </div>
    <button>Add Publisher</button>

</form>

@endsection