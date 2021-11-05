<div class="form-group">
    {!! Form::label($name, $name,['class'=>'text-capitalize']) !!}
    {!! Form::$type($name, $value, array_merge($option, ['class' => 'form-control', 'id' => $name])) !!}
</div>
