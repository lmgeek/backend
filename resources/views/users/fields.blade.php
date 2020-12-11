<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Roles Field -->
@if(isset($user))
<?php
$role = str_replace('["', " ", $user->getRoleNames());
$role = str_replace('"]', " ", $role);
?>
<input type="hidden" value="{{ $role }}">
@endif
<div class="form-group col-sm-6">
    {!! Form::label('roles', 'Roles') !!}
    <select name="role" class="form-control" id="role">
        @foreach(\Spatie\Permission\Models\Role::all() as $rol)
            <option value="{{ $rol->name }}" >{{ $rol->name }}</option>
        @endforeach
    </select>
</div>

<!-- Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password', 'Password') !!}
    {!! Form::password('password', ['class' => 'form-control']) !!}
</div>

<!-- Confirmation Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password', 'Password Confirmation') !!}
    {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('users.index') !!}" class="btn btn-default">Cancel</a>
</div>
