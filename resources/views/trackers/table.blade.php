<div class="table-responsive">
    <table class="table" id="trackers-table">
        <thead>
            <tr>
                <th>Project</th>
        <th>Email</th>
        <th>Verifyfile</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($trackers as $tracker)
            <tr>
                <td>{{ $tracker->project }}</td>
            <td>{{ $tracker->email }}</td>
            <td><a href="{{ asset($tracker->verifyfile) }}">{{ asset($tracker->verifyfile) }}</a></td>
                <td width="120">
                    {!! Form::open(['route' => ['trackers.destroy', $tracker->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                       
                        <a href="{{ route('trackers.edit', [$tracker->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        <a href="{{ route('trackerdetails.index', [$tracker->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-address-card"></i>
                        </a>
                        
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
