<table class="table table-responsive" id="bobots-table">
    <thead>
        <tr>
            <th>Bobot</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($bobots as $bobot)
        <tr>
            <td>{!! $bobot->bobot !!}</td>
            <td>
                {!! Form::open(['route' => ['bobots.destroy', $bobot->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('bobots.show', [$bobot->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('bobots.edit', [$bobot->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>