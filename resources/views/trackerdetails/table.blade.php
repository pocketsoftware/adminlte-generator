<div class="table-responsive">
    <table class="table" id="trackerdetails-table">
        <thead>
            <tr>
                <th>Oc</th>
        <th>Fullname</th>
        <th>Deladdr</th>
        <th>Csz</th>
        <th>Intelligentmailbarcode</th>
        <th>Cardnumberwcheck</th>
        <th>Type</th>
        <th>Serialnumber</th>
        <th>Imbalpha</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($trackerdetails as $trackerdetail)
            <tr>
                <td>{{ $trackerdetail->OC }}</td>
            <td>{{ $trackerdetail->fullname }}</td>
            <td>{{ $trackerdetail->deladdr }}</td>
            <td>{{ $trackerdetail->CSZ }}</td>
            <td>{{ $trackerdetail->intelligentmailbarcode }}</td>
            <td>{{ $trackerdetail->cardnumberwcheck }}</td>
            <td>{{ $trackerdetail->type }}</td>
            <td>{{ $trackerdetail->serialnumber }}</td>
            <td>{{ $trackerdetail->imbalpha }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['trackerdetails.destroy', $trackerdetail->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('trackerdetails.show', [$trackerdetail->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('trackerdetails.edit', [$trackerdetail->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
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
