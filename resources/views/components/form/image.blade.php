@props(['value', 'title' => 'image'])

<div class="form-group">
    {{ Form::label($title, $title, ['class' => 'control-label text-capitalize']) }}
    <div class="input-group">
        <span class="input-group-btn">
            <a id="{{ $title . 'lfm_favicon' }}" data-input="{{ $title . 'thumbnail_favicon' }}"
                data-preview="{{ $title . 'holder_favicon' }}" class="btn btn-primary text-white">
                <i class="fas fa-picture-o"></i> Choose
            </a>
        </span>
        <input id="{{ $title . 'thumbnail_favicon' }}" class="form-control" type="url" name="{{ $title }}"
            value="{{ old($title, $value) }}">
    </div>
    <img id="{{ $title . 'holder_favicon' }}" style="margin-top:15px;max-height:100px;">
</div>

@push('scripts')
    <script src="{{ asset('/vendor/laravel-file-manager/js/stand-alone-button.js') }}"></script>

    <script>
        $("#{{ $title . 'lfm_favicon' }}").filemanager('image');
    </script>
@endpush
