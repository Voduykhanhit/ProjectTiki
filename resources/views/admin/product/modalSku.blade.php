<!-- Modal -->
<div class="modal fade" id="ModalSku" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <form action="{{url('/admin/product/updateSku/'.$details['product_id'])}}" method="post">
             @csrf
                <div class="modal-header bg-primary">
                    <h5 class="modal-title" style="color:#fff;" id="exampleModalLabel"><i class="fas fa-edit"></i> Cập nhật SKU</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                        <div class="form-group row">
                            <label for="Price" class="col-sm-2 col-form-label">Price</label>
                            <div class="col-sm-10">
                                <input type="number" value="{{$details['price']}}" name="price" class="form-control" id="Price">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="MarketPrice" class="col-sm-2 col-form-label">Market Price</label>
                            <div class="col-sm-10">
                                <input type="number" value="{{$details['market_price']}}" name="marketprice" class="form-control" id="MarketPrice">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Thumbnail" class="col-sm-2 col-form-label">Active</label>
                            <div class="col-sm-10">
                                <select class="custom-select mr-sm-2" name="active" id="inlineFormCustomSelect">
                                    <option @if($details['active']==1) selected @endif value="1">Hoạt động</option>
                                    <option @if($details['active']==0) selected @endif value="0">Không hoạt động</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Quantity" class="col-sm-2 col-form-label">Quantity</label>
                            <div class="col-sm-10">
                                <input type="text" name="quantity" class="form-control" id="Quantity">
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Lưu</button>
                </div>
        </form>
    </div>
  </div>
</div>