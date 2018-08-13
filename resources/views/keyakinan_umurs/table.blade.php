<table class="table table-responsive" id="keyakinanUmurs-table">
    <thead>
        <tr>
            <th>Bobot</th>
        <th>Keterangan</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($keyakinanUmurs as $keyakinanUmur)
        <tr>
            <td>{!! $keyakinanUmur->bobot !!}</td>
            <td>{!! $keyakinanUmur->keterangan !!}</td>
            <td>
                {!! Form::open(['route' => ['keyakinanUmurs.destroy', $keyakinanUmur->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('keyakinanUmurs.show', [$keyakinanUmur->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('keyakinanUmurs.edit', [$keyakinanUmur->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>