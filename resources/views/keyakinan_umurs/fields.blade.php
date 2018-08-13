<!-- Bobot Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bobot', 'Bobot:') !!}
    {!! Form::number('bobot', null, ['class' => 'form-control']) !!}
</div>

<!-- Keterangan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('keterangan', 'Keterangan:') !!}
    {!! Form::text('keterangan', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('keyakinanUmurs.index') !!}" class="btn btn-default">Cancel</a>
</div>
