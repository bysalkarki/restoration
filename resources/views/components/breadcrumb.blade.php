@props(['title'])

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-uppercase">{{ $title }}</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right  text-capitalize">
                    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                    @foreach (explode('/', request()->getRequestUri()) as $item)
                        @if ($loop->last)
                            <li class="breadcrumb-item active">{{ $item }}</li>
                        @break
                    @endif
                    @if ($item)
                        <li class="breadcrumb-item">{{ $item }}</li>
                    @endif
                    @endforeach
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
