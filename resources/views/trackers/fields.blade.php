<!-- Project Field -->
<div class="form-group col-sm-6">
    {!! Form::label('project', 'Project:') !!}
    {!! Form::text('project', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Verifyfile Field -->
<div class="form-group col-sm-6">
    {!! Form::label('verifyfile', 'Verifyfile:') !!}
    <div class="input-group">
        <div class="custom-file">
            {!! Form::file('verifyfile', ['class' => 'custom-file-input']) !!}
            {!! Form::label('verifyfile', 'Choose file', ['class' => 'custom-file-label']) !!}
        </div>
    </div>
</div>
<div class="clearfix"></div>
