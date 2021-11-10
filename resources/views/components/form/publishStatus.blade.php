@props(['value', 'name' => 'publishStatus', 'multiple' => false, 'list' => ['0' => 'Inactive', '1' => 'Active'],'label'=>null])
<div class="form-group">
    {!! Form::label($name,$label ??  $name) !!}
    {!! Form::select($name, $list, $value, ['class' => 'form-control','multiple'=>$multiple]) !!}
</div>
