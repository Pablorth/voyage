@extends('layouts.app')

@section('content')
    <h1 class="text-center">Aides de jeu</h1>
    <br>
    <div id="top" class="container-fluid">
        <div class="row text-center">
            <h2 id="title-1" class="col-md-12">Dés</h2>
            <div id="param-dice" class="col-md-2">
                {!! Form::open(['','methode'=> 'POST']) !!}
                    <div class="form-group form-dice">
                        {{Form::label('dice', 'Quel type de dés?',['class' => 'title-form col-md-12 col-form-label-md'])}}
                        {{Form::select('dice', [2=>'D2',3=>'D3',4=>'D4',6=>'D6',8=>'D8',10=>'D10',20=>'D20',100=>'D100'],'D6',['class' => 'form-control form-control-md','id'=>'dice'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('rolls', 'Combien de dés?',['class' => 'col-md-12  col-form-label-md'])}}
                        {{Form::number('rolls', 1, ['min'=>1,'max'=>10,'class' => 'form-control form-control-md','id' => 'rolls'])}}
                    </div>
                    <a href="#" class="btn btn-md btn-primary" id="roll-button" onclick="numberOfRolls"> Lancer </a>
                {!! Form::close() !!}
                <br>
            </div>
            <div class="result-display col-md-10">
                <table class="col-md-1 table table-bordered table-md" height=90%>
                    <tbody>
                        <tr>
                            <td id="card-0">10</td>
                            <td id="card-1">10</td>
                            <td id="card-2">10</td>
                            <td id="card-3">10</td>
                            <td id="card-4">10</td>

                        </tr>
                        <tr>
                            <td id="card-5">10</td>
                            <td id="card-6">10</td>
                            <td id="card-7">10</td>
                            <td id="card-8">10</td>
                            <td id="card-9">10</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div id="middle" class="container-fluid">
        <div class="row">

        </div>
    </div>

    <div id="bottom" class="container-fluid">
        <div class="row">

        </div>
    </div>


@endsection
