<!-- Modal -->
<div class="modal fade" id="addPrice" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="addModalWarehouseOutLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="addModalWarehouseOutLabel">Input Harga</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
            <form action="" method="post">
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama Item</label>
                <input class="form-control" type="text" name="{{ $item->Item['name']  }}" placeholder="{{ $item->Item['name']  }}" readonly>
              </div>
              

            </div>
          </div>
      </div>
  </div>
</div>
