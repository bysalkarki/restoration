@props(['name' => 'publishStatus'])
<div class="form-group">
    <div class="custom-control custom-switch">
        <input type="checkbox" class="custom-control-input" id="customSwitches" name={{ $name }}>
        <label class="custom-control-label" for="customSwitches">{{ $name }}</label>
    </div>
</div>
