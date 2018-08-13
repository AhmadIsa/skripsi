<table class="table table-responsive" id="keyakinanBeratdantinggis-table">
    <thead>
        <tr>
            <th>Bobot</th>
        <th>Keterangan</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($keyakinanBeratdantinggis as $keyakinanBeratdantinggi)
        <tr>
            <td>{!! $keyakinanBeratdantinggi->bobot !!}</td>
            <td>{!! $keyakinanBeratdantinggi->keterangan !!}</td>
            <td>
                {!! Form::open(['route' => ['keyakinanBeratdantinggis.destroy', $keyakinanBeratdantinggi->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('keyakinanBeratdantinggis.show', [$keyakinanBeratdantinggi->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('keyakinanBeratdantinggis.edit', [$keyakinanBeratdantinggi->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>