<!-- Button trigger modal -->

  
  <!-- Modal -->
  <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <form action="" method="POST" id="add_product_form">
            @csrf
        <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="addModalLabel">add product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">

                <div class="errMsgcontainer mb-2">

                </div>

                <div class="form-group">
                    <label for="name">product name</label>
                    <input type="text" class="form-control" name="name" id="name">
                </div>

                <div class="form-group mt-2">
                    <label for="name">product price</label>
                    <input type="text" class="form-control" name="price" id="price" placeholder="Product price">
                </div>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary add_product">Add Product</button>
              </div>
            </div>
          </div>
    </form>
  </div>