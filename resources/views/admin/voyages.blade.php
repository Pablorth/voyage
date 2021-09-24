@extends('layouts.app')

@section('content')
<div class="col-md-12 ressource-field">
    <table class="table table-borderless table-hover table-sm text-center">
        @foreach ($voyages as $voyage)
            <tbody>
                <tr>
                    <td>{{$voyage->$id}}</td>
                    <td>{{$voyage->name}}</td>
                    <td>
                        <a href="{{'route(voyages.show',$voyage->id)}}">VOIR</a>
                    </td>
                    <td>
                        <a href="{{'route(voyages.edit',$voyage->id)}}">MODIFIER</a>
                    </td>
                    <td>
                        {!! Form::open(['action' => ['VoyageController@destroy', $voyage->id], 'method' => 'POST'])!!}
                        {{Form::hidden('_method','DELETE')}}
                        {{Form::submit('Supprimer', ['class' => 'btn btn-md btn-delete'])}}
                        {!! Form::close() !!}
                    </td>
                </tr>
            </tbody>
        @endforeach
    </table>
</div>
<p>Aucun voyage existant !</p>
@endsection
