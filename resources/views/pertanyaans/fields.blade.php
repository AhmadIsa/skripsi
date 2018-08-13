<!-- Pertanyaan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pertanyaan', 'Pertanyaan:') !!}
    {!! Form::text('pertanyaan', null, ['class' => 'form-control']) !!}
</div>

<!-- Beratdantinggis Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('beratdantinggis_id', 'Beratdantinggis Id:') !!}
    {!! Form::select('beratdantinggis_id',$nilaiberatdantinggi, null, ['class' => 'form-control']) !!}
</div>

<!-- Umurs Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('umurs_id', 'Umurs Id:') !!}
    {!! Form::number('umurs_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Riwayat Cideras Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('riwayat_cideras_id', 'Riwayat Cideras Id:') !!}
    {!! Form::number('riwayat_cideras_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Keyakinan Beratdantinggis Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('keyakinan_beratdantinggis_id', 'Keyakinan Beratdantinggis Id:') !!}
    {!! Form::number('keyakinan_beratdantinggis_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Keyakinan Umurs Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('keyakinan_umurs_id', 'Keyakinan Umurs Id:') !!}
    {!! Form::number('keyakinan_umurs_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('pertanyaans.index') !!}" class="btn btn-default">Cancel</a>
</div>
