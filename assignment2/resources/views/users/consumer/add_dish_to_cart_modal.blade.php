<div class="modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Item</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label class="form-control-label">Name:</label><label class="form-control-label" id="name"></label><br />
                    <label class="form-control-label">Price:</label><label class="form-control-label"> $<span id="price"></span></label><br />
                    <label class="form-control-label">Extras:</label><br />
                    <textarea class="form-control add-dish-textarea" rows="4" cols="30"></textarea><br />
                    <select class="form-control" id="quantity">
                        @for($i = 1; $i <= 10; $i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
                    </select><br />
                    <label class="form-control-label">Total:</label><label> $<span id="total"></span></label>
                </div>
            </div>
            <div class="modal-footer">
                <button id="addToCart" type="button" class="btn btn-primary">Add</button>
                <button id="close" type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>