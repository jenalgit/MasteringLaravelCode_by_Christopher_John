@extends('app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Login</div>
                    <div class="panel-body">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some
                                problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <?php $inputAttributes = ['class' => 'form-control'];
                        $labelAttributes = [
                                'class' => 'col-md-4
control-label'
                        ]; ?>
                        {!! Form::open(['class'=>'form-horizontal',
                        'role'=>'form',
                        'method'=>'POST',
                        'url'=>'reserve-room']) !!}
                        <?php
                        Form::macro('monthDayYear', function ($suffix = '') {
                            echo Form::selectMonth(($suffix !== '') ? 'month-' . $suffix : 'month', date('m'));
                            echo Form::selectRange(($suffix !== '') ? 'date-' . $suffix : 'date', 1, 31, date('d'));
                            echo Form::selectRange(($suffix !== '') ? 'year-' . $suffix : 'year', date('Y'),
                                    date('Y') + 3, date('Y'));
                        });
                        ?>
                        {!! Form::open(['class'=>'form-horizontal','role'=>'form', 'method'=>'POST', 'url'=>'/reserve-room']) !!}
                        {!! Form::label(null, 'Start Date',$labelAttributes) !!}
                        {!! Form::monthDayYear('-start') !!}
                        {!! Form::label(null, 'End Date',$labelAttributes) !!}
                        {!! Form::monthDayYear('-end') !!}
                        {!! Form::submit('Reserve',['class'=>'btn btn-primary',
                        'style'=>'margin-right: 15px;']) !!}
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection