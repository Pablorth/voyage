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
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-1"><span id="card-0"></span></div>
                    <div class="col-md-1"><span id="card-1"></span></div>
                    <div class="col-md-1"><span id="card-2"></span></div>
                    <div class="col-md-1"><span id="card-3"></span></div>
                    <div class="col-md-1"><span id="card-4"></span></div>
                    <div class="col-md-1"><span id="card-5"></span></div>
                    <div class="col-md-1"><span id="card-6"></span></div>
                    <div class="col-md-1"><span id="card-7"></span></div>
                    <div class="col-md-1"><span id="card-8"></span></div>
                    <div class="col-md-1"><span id="card-9"></span></div>
                    <div class="col-md-1"></div>
                </div>
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
