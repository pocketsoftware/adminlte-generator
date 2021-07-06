<!-- Project Field -->
<div class="col-sm-12">
    {!! Form::label('project', 'Project:') !!}
    <p>{{ $tracker->project }}</p>
</div>

<!-- Email Field -->
<div class="col-sm-12">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $tracker->email }}</p>
</div>

<!-- Verifyfile Field -->
<div class="col-sm-12">
    {!! Form::label('verifyfile', 'Verifyfile:') !!}
    <p>{{ $tracker->verifyfile }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $tracker->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $tracker->updated_at }}</p>
</div>

