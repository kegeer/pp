{!! Form::model($batch, [
    'route' => $batch->exists() ?['batches.update', $batch->id] :['batches.store'],
    'method' => $batch->exists() ? 'put' : 'post',
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
        {!! Form::label('sample_amount', 'Sample amount', [
            'class' => 'col-md-2 control-label'
        ]) !!}
        <div class="col-md-10">
            {!! Form::text('sample_amount', null, [
                'class' => 'form-control',
                'id' => 'sample_amount'
            ]) !!}
        </div>
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
        {!! Form::label('sender', 'Sender', [
            'class' => 'col-md-2 control-label'
        ]) !!}
        <div class="col-md-10">
            {!! Form::text('sender', null, [
                'class' => 'form-control',
                'id' => 'sender'
            ]) !!}
        </div>
    </div>
</div>
<div class="col-md-8">
    <div class="form-group">
        {!! Form::label('sender_contact', 'Sender contact', [
            'class' => 'col-md-2 control-label'
        ]) !!}
        <div class="col-md-10">
            {!! Form::text('sender_contact', null, [
                'class' => 'form-control',
                'id' => 'sender_contact'
            ]) !!}
        </div>
    </div>
</div>


<div class="col-md-4">
    <div class="form-group">
        {!! Form::label('send_time', 'Send time', [
            'class' => 'col-md-2 control-label'
        ]) !!}
        <div class="col-md-10">
            {!! Form::text('send_time', null, [
                'class' => 'form-control',
                'id' => 'send_time',
                'placeholder' => 'mm/dd/yyyy'
            ]) !!}
        </div>
    </div>

</div>
<div class="col-md-4">
    <div class="form-group">
        {!! Form::label('arrive_time', 'Arrive Time', [
            'class' => 'col-md-2 control-label'
        ]) !!}
        <div class="col-md-10">
            {!! Form::text('arrive_time', null, [
                'class' => 'form-control',
                'id' => 'arrive_time',
                'placeholder' => 'mm/dd/yyyy'
            ]) !!}
        </div>
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
        {!! Form::label('sample_type', 'Sample type', [
            'class' => 'col-md-2 control-label'
        ]) !!}
        <div class="col-md-10">

            {!! Form::select('sample_type', [
                '0' => '',
                '1' => 'poll',
                '2' => 'ice',
                '3' => 'bing',
                ], 0, [
                'class' => 'form-control',
                'id' => 'sample_type'
            ]) !!}

        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="form-group">
        {!! Form::label('trans_method', 'Transport Method', [
            'class' => 'col-md-2 control-label'
        ]) !!}
        <div class="col-md-10">
            {!! Form::select('trans_method', [
                '0' => '',
                '1' => 'poll',
                '2' => 'ice',
                '3' => 'bing',
                ], 0, [
                'class' => 'form-control',
                'id' => 'trans_method'
            ]) !!}
        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="form-group">
        {!! Form::label('arrive_status', 'Arrive Status', [
            'class' => 'col-md-2 control-label'
        ]) !!}
        <div class="col-md-10">
            {!! Form::select('arrive_status', [
                '0' => '',
                '1' => 'poll',
                '2' => 'ice',
                '3' => 'bing',
                ], 0, [
                'class' => 'form-control',
                'id' => 'arrive_status'
            ]) !!}
        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="form-group">
        {!! Form::label('manager', 'Manager', [
            'class' => 'col-md-2 control-label'
        ]) !!}
        <div class="col-md-10">
            {!! Form::select('manager', [
                '0' => '',
                '1' => 'poll',
                '2' => 'ice',
                '3' => 'bing',
                ], 0, [
                'class' => 'form-control',
                'id' => 'manager'
            ]) !!}
        </div>
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
        {!! Form::label('store_method', 'Store Method', [
            'class' => 'col-md-2 control-label'
        ]) !!}
        <div class="col-md-10">
            {!! Form::select('store_method', [
                '0' => '',
                '1' => 'poll',
                '2' => 'ice',
                '3' => 'bing',
                ], 0, [
                'class' => 'form-control',
                'id' => 'store_method'
            ]) !!}
        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="form-group">
        {!! Form::label('store_location', 'Store location', [
            'class' => 'col-md-2 control-label'
        ]) !!}
        <div class="col-md-10">
            {!! Form::text('store_location', null, [
                'class' => 'form-control',
                'id' => 'store_location'
            ]) !!}
        </div>
    </div>
</div>



    
    

    

    

    
    
<div class="col-md-12">
    <div class="form-group">
        {!! Form::label('note', 'Note', [
            'class' => 'col-md-2 control-label'
        ]) !!}
        <div class="col-md-10">
            {!! Form::textarea('note', null, [
                'class' => 'form-control',
                'id' => 'note'
            ]) !!}

        </div>
    </div>
</div>
    

    

    

    

    

    
{!! Form::submit($batch->exists() ? 'Update' : 'Store' , ['class' => 'btn btn-default']) !!}
    

{!! Form::close() !!}

