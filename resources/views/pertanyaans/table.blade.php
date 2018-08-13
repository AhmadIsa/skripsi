<table class="table table-responsive" id="pertanyaans-table">
    <thead>
        <tr>
            <th>Konsultasi</th>
        <th>Beratdantinggi</th>
        <th>Umur</th>
        <th>Riwayat Cideras Id</th>
        <th>Keyakinan Beratdantinggis Id</th>
        <th>Keyakinan Umurs Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($pertanyaans as $pertanyaan)
        <tr>
            <td>{!! $pertanyaan->pertanyaan !!}</td>
            <td>{!! $pertanyaan->beratdantinggi->berat_tinggi or ""!!}</td>
            <td>{!! $pertanyaan->umur->usia !!}</td>
            <td>{!! $pertanyaan->riwayat_cideras_id !!}</td>
            <td>{!! $pertanyaan->keyakinan_beratdantinggis_id !!}</td>
            <td>{!! $pertanyaan->keyakinan_umurs_id !!}</td>
            <td>
                {!! Form::open(['route' => ['pertanyaans.destroy', $pertanyaan->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('pertanyaans.show', [$pertanyaan->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('pertanyaans.edit', [$pertanyaan->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>