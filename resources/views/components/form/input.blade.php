<div class="form-group">
    {!! Form::label($name, $name,['class'=>'text-capitalize']) !!}
    {!! Form::$type($name, $value, array_merge($option, ['class' => 'form-control', 'id' => $name])) !!}
    @error($name)
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
