<!-- Modal -->
<div class="modal fade" id="ModalOginalSku" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <form action="{{url('/admin/product/updateOriginalSku/'.$details['product_id'])}}" method="post">
            @csrf
                <div class="modal-header bg-primary">
                    <h5 class="modal-title" style="color:#FFF;" id="exampleModalLabel"><i class="fas fa-edit"></i> Cập nhật ORIGINAL SKU</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="MarketPrice" class="col-sm-2 col-form-label">Original Sku</label>
                        <div class="col-sm-10">
                            <input type="text" value="{{$details['original_sku']}}" name="originalsku" class="form-control" id="MarketPrice">
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