{!! Form::model($sample, [
    'route' => $sample->exists() ?['samples.store']:['samples.update', $sample->id],
    'method' => $sample->exists() ? 'post' : 'put',
    'class' => 'form-horizontal'
    ]) !!}

    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('ori_num', 'Origin Number', [
                'class' => 'col-md-2 control-label'
            ]) !!}
            <div class="col-md-10">
                {!! Form::text('ori_num', null, [
                    'class' => 'form-control',
                    'id' => 'ori_num'
                ]) !!}
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('py_num', 'Puyuan Number', [
                'class' => 'col-md-2 control-label'
            ]) !!}
            <div class="col-md-10">
                {!! Form::text('py_num', null, [
                    'class' => 'form-control',
                    'id' => 'py_num'
                ]) !!}
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('amount', 'amount', [
                'class' => 'col-md-2 control-label'
            ]) !!}
            <div class="col-md-10">
                {!! Form::text('amount', null, [
                    'class' => 'form-control',
                    'id' => 'amount'
                ]) !!}
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('sampling_time', 'Sampling time', [
                'class' => 'col-md-2 control-label'
            ]) !!}
            <div class="col-md-10">
                {!! Form::text('sampling_time', null, [
                    'class' => 'form-control',
                    'id' => 'sampling_time',
                    'placeholder' => 'mm/dd/yyyy'
                ]) !!}
            </div>
        </div>

    </div>

     <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('due_time', 'Due time', [
                'class' => 'col-md-2 control-label'
            ]) !!}
            <div class="col-md-10">
                {!! Form::text('due_time', null, [
                    'class' => 'form-control',
                    'id' => 'due_time',
                    'placeholder' => 'mm/dd/yyyy'
                ]) !!}
            </div>
        </div>

    </div>

    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('split_time', 'Split time', [
                'class' => 'col-md-2 control-label'
            ]) !!}
            <div class="col-md-10">
                {!! Form::text('split_time', null, [
                    'class' => 'form-control',
                    'id' => 'split_time',
                    'placeholder' => 'mm/dd/yyyy'
                ]) !!}
            </div>
        </div>

    </div>

    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('split_type', 'Split type', [
                'class' => 'col-md-2 control-label'
            ]) !!}
            <div class="col-md-10">
                {!! Form::select('split_type', [
                    '0' => '',
                    '1' => 'poll',
                    '2' => 'ice',
                    '3' => 'bing',
                    ], 0, [
                    'class' => 'form-control',
                    'id' => 'split_type'
                ]) !!}
            </div>
        </div>

    </div>



<div class="col-md-4 col-md-offset-4">

    {!! Form::submit($sample->exists() ?'Store':'Update' , ['class' => 'btn btn-default']) !!}
</div>


{!! Form::close() !!}
