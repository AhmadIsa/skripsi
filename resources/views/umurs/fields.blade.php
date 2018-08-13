<!-- Usia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('usia', 'Usia:') !!}
    {!! Form::number('usia', null, ['class' => 'form-control']) !!}
</div>

<!-- Users Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('users_id', 'Users Id:') !!}
    {!! Form::number('users_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Bobots Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bobots_id', 'Bobots Id:') !!}
    {!! Form::number('bobots_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('umurs.index') !!}" class="btn btn-default">Cancel</a>
</div>
