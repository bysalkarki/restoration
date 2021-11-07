@props(['value', 'name' => 'publishStatus','list'=>['0' => 'Inactive', '1' => 'Active']])
<div class="form-group">
    {!! Form::label($name, $name) !!}
    {!! Form::select($name, $list, $value, ['class' => 'form-control']) !!}
</div>
