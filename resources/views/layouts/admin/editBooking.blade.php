<button type="button" class="btn btn-primary" data-myid="{{ $booking->booking_id }}"
    data-mystatus="{{ $booking->status }}" data-toggle="modal" data-target="#editBooking">
    <i class="fas fa-edit"></i>
</button>

<div class="modal fade" id="editBooking" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby=editBookingLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editBookingLabel">Change Status
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="{{ route('booking.update', 'booking_id') }}">
                @csrf
                {{ method_field('PATCH') }}
                <div class="modal-body">
                    <input type="hidden" name="booking_id" id="b_id" value="">
                    <div class="form-group">
                        <select class="custom-select" name="status" id="status">
                            <option selected></option>
                            <option value="confirmed">Confirmed</option>
                            <option value="cancelled">Cancelled</option>
                            <option value="pending">pending</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
