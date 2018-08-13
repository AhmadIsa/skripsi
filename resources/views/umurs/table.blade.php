<table class="table table-responsive" id="umurs-table">
    <thead>
        <tr>
            <th>Usia</th>
        <th>Users Id</th>
        <th>Bobots Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($umurs as $umur)
        <tr>
            <td>{!! $umur->usia !!}</td>
            <td>{!! $umur->users_id !!}</td>
            <td>{!! $umur->bobots_id !!}</td>
            <td>
                {!! Form::open(['route' => ['umurs.destroy', $umur->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('umurs.show', [$umur->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('umurs.edit', [$umur->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>