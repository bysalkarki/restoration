@if($popups)
    <!-- Modal -->
    <div class="modal fade" id="popupModal" tabindex="-1" role="dialog" aria-labelledby="popupModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="popupModal">{{$popups->title}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="{{$popups->image}}" class="img-fluid img">
                </div>
            </div>
        </div>
    </div>

@push('scripts')
    <script>
        $('#popupModal').modal('show')
    </script>
@endpush
@endif

