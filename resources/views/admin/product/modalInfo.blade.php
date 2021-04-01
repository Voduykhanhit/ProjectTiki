<!-- Modal -->
<div class="modal fade" id="ModalInfo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <form action="{{url('/admin/product/updateProductInfo/'.$details['product_id'])}}" method="post" enctype="multipart/form-data">
        @csrf
                <div class="modal-header bg-primary">
                    <h5 class="modal-title" style="color:#FFF;" id="exampleModalLabel">UPDATE PRODUCT INFO</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="ProductName" class="col-sm-2 col-form-label">Product Name</label>
                        <div class="col-sm-10">
                            <input type="text" value="{{$details['name']}}" name="name" class="form-control" id="ProductName" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Thumbnail" class="col-sm-2 col-form-label">Thumbnail</label>
                        <div class="col-sm-10">
                            <input type="file" name="thumbnail" class="form-control" id="Thumbnail">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="MarketPrice" class="col-sm-2 col-form-label">Market Price</label>
                        <div class="col-sm-10">
                            <input type="number" value="{{$details['market_price']}}" name="marketprice" class="form-control" id="MarketPrice">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save</button>
                </div>
                
        </form>
    </div>
  </div>
</div>