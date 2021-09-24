{!! Form::open(['action' => ['VoyageController@update', $voyage->id], 'method' => 'POST'])!!}
    @method('PUT')
        <div id="top" class="container-fluid text-center">
            <div class="row">
                <div class="form-group col-md-12 text-center">
                    <div class="row">
                        {{Form::label('name', 'name' ,['class' => 'col-md-12'])}}
                        <div class="col-md-3"></div>
                        {{Form::text('name', $voyage->name, ['class' => 'form-control col-md-6 text-center', 'placeholder' => 'Nom'])}}
                        <div class="col-md-3"></div>
                        {{Form::text('place', $voyage->place, ['class' => 'form-control col-md-6 text-center', 'placeholder' => 'Nom'])}}
                        <div class="col-md-3"></div>
                        {{Form::text('country', $voyage->country, ['class' => 'form-control col-md-6 text-center', 'placeholder' => 'Nom'])}}
                        <div class="col-md-3"></div>
                        {{Form::date('date', $voyage->date, ['class' => 'form-control col-md-6 text-center', 'placeholder' => 'Nom'])}}
                        <div class="col-md-3"></div>
                        {{Form::number('cost', $voyage->cost, ['class' => 'form-control col-md-6 text-center'])}}
                        <div class="col-md-3"></div>
                        {{Form::text('organizer', $voyage->organizer, ['class' => 'form-control col-md-6 text-center', 'placeholder' => 'Nom'])}}
                        <div class="col-md-3"></div>
                        {{Form::number('rating', $voyage->rating, ['class' => 'form-control col-md-6 text-center'])}}
                        <div class="col-md-3"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 text-center">
            <hr>
            {{Form::hidden('_method','PUT')}}
            {{Form::submit('Enregister', ['class' => 'btn btn-lg btn-creation'])}}
        </div>
    {!! Form::close() !!}