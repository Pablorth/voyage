@extends('layouts.app')

@section('content')
<br>
<div class="jumbotron">
    <p class = "quote">
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia placeat neque maiores eius obcaecati, rerum explicabo repudiandae sapiente, ea veniam quo?
        Tempora inventore iure unde expedita saepe quaerat earum consectetur
    </p>

    <div class = "begin">
        <h1>En savoir plus!</h1>
        <a href="/characters/create" class = "start"><h3>Créateur de Personnage</h3></a>
        @if (!Auth::guest())
            <a href="/characters" class = "start"><h3>Personnages crées</h3></a>
        @endif
        @if (!Auth::guest())
            <a href="/spells" class = "start"><h3>Sorts crées</h3></a>
        @endif
    </div>
</div>
@endsection
