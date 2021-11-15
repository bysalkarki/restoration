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
    <div id="{{ $title . 'holder_favicon' }}">
        <img src="{{ $value }}">
    </div>
</div>
@push('styles')
    <style>
        .form-group img {
            height: auto;
            max-width: 150px;
            box-shadow: inset 5px 1px 1px #000;

        }

    </style>
@endpush
@push('scripts')
    <script>
        $(document).ready(function() {
            $("#{{ $title . 'lfm_favicon' }}").filemanager('image');
        })
    </script>
@endpush
