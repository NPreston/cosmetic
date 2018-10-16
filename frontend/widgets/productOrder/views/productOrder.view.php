<form enctype="multipart/form-data" action="#" onsubmit="return false;" method="POST">
    <div class="options">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">

                    <label for="product_options" class="control-label">Leather</label>
                    <div class="controls">
                        <select id="product_options" name="product_options[]" class="form-control">
                            <option value="Brown">Brown</option>
                            <option value="Black" selected="selected">Black</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="add-to-cart">
        <button class="btn btn-primary btn-lg btn-block-xs" data-toggle="modal" data-target="#added">
            <i class="fa fa-plus"></i> Add to cart
        </button>
    </div>
</form>

<!-- Added to cart modal window -->
<div id="added" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <div class="hgroup title">
                    <h3>You're one step closer to owning this product!</h3>
                    <h5>"Chaser Overalls" has been added to your cart</h5>
                </div>
            </div>
            <div class="modal-footer">
                <a href="cart.html" class="btn btn-primary btn-sm btn-block-xs">
                    Go to cart &nbsp; <i class="fa fa-chevron-right"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- End id="added" -->