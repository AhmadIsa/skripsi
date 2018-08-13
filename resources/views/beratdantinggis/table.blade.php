<table class="table table-responsive" id="beratdantinggis-table">
    <thead>
        <tr>
            <th>Berat Tinggi</th>
        <th>Users Id</th>
        <th>Bobots Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($beratdantinggis as $beratdantinggi)
        <tr>
            <td>{!! $beratdantinggi->berat_tinggi !!}</td>
            <td>{!! $beratdantinggi->users_id !!}</td>
            <td>{!! $beratdantinggi->bobots_id !!}</td>
            <td>
                {!! Form::open(['route' => ['beratdantinggis.destroy', $beratdantinggi->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('beratdantinggis.show', [$beratdantinggi->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('beratdantinggis.edit', [$beratdantinggi->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>