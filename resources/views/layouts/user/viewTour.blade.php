<button type="button" class="btn btn-info" data-myname="{{ $tour->name }}" data-myprice="{{ $tour->price }}"
    data-mydescription="{{ $tour->description }}" data-myplacescovered="{{ $tour->places_covered }}"
    data-myimage="{{ $tour->image }}" data-myid="{{ $tour->t_id }}" data-toggle="modal" data-target="#viewTour">
    View More
</button>

<!-- Modal -->
<div class="modal fade" id="viewTour" tabindex="-1" aria-labelledby="viewTourLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="viewTourLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                        <img id="viewTourImg" class="w-100 mb-2 h-75" src="" alt="">
                        <form action="/booking/create" method="get">
                            <input type="hidden" name="name" id="name">
                            <input type="hidden" name="tour_id" id="tid" value="">
                            <input type="hidden" name="price" id="price" value="">
                            <button type="submit" class="btn btn-info btn-block">Book Now</button>
                        </form>
                    </div>
                    <div class="offset-md-1 col-md-7">
                        <label class="font-weight-bolder">Description</label>
                        <p id="viewTourDescription" class="text-justify"></p>
                        <label class="font-weight-bolder">Places Covered</label>
                        <p id="viewTourPlacesCovered" class="text-justify"></p>
                        <label class="font-weight-bolder">Price</label>
                        <p id="viewTourPrice" class="text-justify text-capitalize"></p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
