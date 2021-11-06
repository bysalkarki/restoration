@props(['value', 'name' => 'publishStatus'])
<div class="form-group">
    {!! Form::label($name, $name) !!}
    {!! Form::select($name, ['0' => 'Inactive', '1' => 'Active'], $value, ['class' => 'form-control']) !!}
</div>
