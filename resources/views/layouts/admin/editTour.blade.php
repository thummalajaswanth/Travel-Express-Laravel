<button type="button" class="btn btn-primary" data-myname="{{ $tour->name }}" data-myprice="{{ $tour->price }}"
    data-mydescription="{{ $tour->description }}" data-myplacescovered="{{ $tour->places_covered }}"
    data-myid="{{ $tour->t_id }}" data-toggle="modal" data-target="#editTours">
    <i class="fas fa-edit"></i>
</button>

<div class="modal fade" id="editTours" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="addUsersLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editToursLabel">Edit Tour
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="{{ route('tour.update', 'tour_id') }}">
                @csrf
                {{ method_field('PATCH') }}
                <div class="modal-body">
                    <input type="hidden" name="tour_id" id="tid" value="">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" id="price" class="form-control" name="price">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea type="text" id="description" class="form-control" name="description"
                            rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="places_covered">Places Covered</label>
                        <textarea class="form-control" rows="5" id="places_covered" name="places_covered"
                            required></textarea>
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
