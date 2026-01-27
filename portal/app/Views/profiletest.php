 <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Founders Profile</h4>
        </div>
        <div class="card-body">
          <form action="#" class="invoice-repeater">
            <div data-repeater-list="invoice">
              <div data-repeater-item>
                <div class="row d-flex align-items-end">
                  <div class="col-md-3 col-12">
                    <div class="mb-1">
                      <label class="form-label" for="itemname">Name</label>
                      <input
                        type="text"
                        class="form-control"
                        id="itemname"
                        aria-describedby="itemname"
                        placeholder="Founders Name"
                      />
                    </div>
                  </div>

                  <div class="col-md-1 col-12">
                    <div class="mb-1">
                      <label class="form-label" for="itemcost">Gender</label>
                      <input
                        type="text"
                        class="form-control"
                        id="itemcost"
                        aria-describedby="itemcost"
                        placeholder="F"
                      />
                    </div>
                  </div>

                  <div class="col-md-2 col-12">
                    <div class="mb-1">
                      <label class="form-label" for="itemquantity">Designation</label>
                      <input
                        type="text"
                        class="form-control"
                        id="itemquantity"
                        aria-describedby="itemquantity"
                        placeholder="CEO"
                      />
                    </div>
                  </div>
                  <div class="col-md-2 col-12">
                    <div class="mb-1">
                      <label class="form-label" for="itemquantity">Linkedin</label>
                      <input
                        type="text"
                        class="form-control"
                        id="itemquantity"
                        aria-describedby="itemquantity"
                        placeholder="url"
                      />
                    </div>
                  </div>

                  <div class="col-md-2 col-12">
                    <div class="mb-1">
                      <label class="form-label" for="staticprice">Picture</label>
                       <input
                        type="file"
                        class="form-control"
                        id="itemquantity"
                        aria-describedby="itemquantity"
                        placeholder="Picture"
                      />
                    </div>
                  </div>

                  <div class="col-md-2 col-12 mb-50">
                    <div class="mb-1">
                      <button class="btn btn-outline-danger text-nowrap px-1" data-repeater-delete type="button">
                        <i data-feather="x" class="me-25"></i>
                        
                      </button>
                    </div>
                  </div>
                </div>
                <hr />
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <button class="btn btn-icon btn-primary" type="button" data-repeater-create>
                  <i data-feather="plus" class="me-25"></i>
                  <span>Add New</span>
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    
    
     <div class="row invoice-add">
    <!-- Invoice Add Left starts -->
    <div class="col-xl-9 col-md-8 col-12">
      <div class="card invoice-preview-card">
        <!-- Header starts -->
      
        <!-- Header ends -->

        <hr class="invoice-spacing" />

        <!-- Address and Contact starts -->
       
        <!-- Address and Contact ends -->

        <!-- Product Details starts -->
        <div class="card-body invoice-padding invoice-product-details">
          <form class="source-item">
            <div data-repeater-list="group-a">
              <div class="repeater-wrapper" data-repeater-item>
                <div class="row">
                  <div class="col-12 d-flex product-details-border position-relative pe-0">
                    <div class="row w-100 pe-lg-0 pe-1 py-2">
                      <div class="col-lg-5 col-12 mb-lg-0 mb-2 mt-lg-0 mt-2">
                        <p class="card-text col-title mb-md-50 mb-0">Item</p>
                        <select class="form-select item-details">
                          <option value="App Design">App Design</option>
                          <option value="App Customization" selected>App Customization</option>
                          <option value="ABC Template">ABC Template</option>
                          <option value="App Development">App Development</option>
                        </select>
                        <textarea class="form-control mt-2" rows="1">Customization & Bug Fixes</textarea>
                      </div>
                      <div class="col-lg-3 col-12 my-lg-0 my-2">
                        <p class="card-text col-title mb-md-2 mb-0">Cost</p>
                        <input type="text" class="form-control" value="24" placeholder="24" />
                        <div class="mt-2">
                          <span>Discount:</span>
                          <span class="discount">0%</span>
                          <span class="tax-1 ms-50" data-bs-toggle="tooltip" data-bs-placement="top" title="Tax 1"
                            >0%</span
                          >
                          <span class="tax-2 ms-50" data-bs-toggle="tooltip" data-bs-placement="top" title="Tax 2"
                            >0%</span
                          >
                        </div>
                      </div>
                      <div class="col-lg-2 col-12 my-lg-0 my-2">
                        <p class="card-text col-title mb-md-2 mb-0">Qty</p>
                        <input type="number" class="form-control" value="1" placeholder="1" />
                      </div>
                      <div class="col-lg-2 col-12 mt-lg-0 mt-2">
                        <p class="card-text col-title mb-md-50 mb-0">Price</p>
                        <p class="card-text mb-0">$24.00</p>
                      </div>
                    </div>
                    <div
                      class="
                        d-flex
                        flex-column
                        align-items-center
                        justify-content-between
                        border-start
                        invoice-product-actions
                        py-50
                        px-25
                      "
                    >
                      <i data-feather="x" class="cursor-pointer font-medium-3" data-repeater-delete></i>
                      <div class="dropdown">
                        <i
                          class="cursor-pointer more-options-dropdown me-0"
                          data-feather="settings"
                          id="dropdownMenuButton"
                          role="button"
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                        </i>
                        <div
                          class="dropdown-menu dropdown-menu-end item-options-menu p-50"
                          aria-labelledby="dropdownMenuButton"
                        >
                          <div class="mb-1">
                            <label for="discount-input" class="form-label">Discount(%)</label>
                            <input type="number" class="form-control" id="discount-input" />
                          </div>
                          <div class="form-row mt-50">
                            <div class="mb-1 col-md-6">
                              <label for="tax-1-input" class="form-label">Tax 1</label>
                              <select name="tax-1-input" id="tax-1-input" class="form-select tax-select">
                                <option value="0%" selected>0%</option>
                                <option value="1%">1%</option>
                                <option value="10%">10%</option>
                                <option value="18%">18%</option>
                                <option value="40%">40%</option>
                              </select>
                            </div>
                            <div class="mb-1 col-md-6">
                              <label for="tax-2-input" class="form-label">Tax 2</label>
                              <select name="tax-2-input" id="tax-2-input" class="form-select tax-select">
                                <option value="0%" selected>0%</option>
                                <option value="1%">1%</option>
                                <option value="10%">10%</option>
                                <option value="18%">18%</option>
                                <option value="40%">40%</option>
                              </select>
                            </div>
                          </div>
                          <div class="dropdown-divider my-1"></div>
                          <div class="d-flex justify-content-between">
                            <button type="button" class="btn btn-outline-primary btn-apply-changes">Apply</button>
                            <button type="button" class="btn btn-outline-secondary">Cancel</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row mt-1">
              <div class="col-12 px-0">
                <button type="button" class="btn btn-primary btn-sm btn-add-new" data-repeater-create>
                  <i data-feather="plus" class="me-25"></i>
                  <span class="align-middle">Add Item</span>
                </button>
              </div>
            </div>
          </form>
        </div>
        <!-- Product Details ends -->

      </div>
    </div>
    <!-- Invoice Add Left ends -->

    <!-- Invoice Add Right starts -->
    
    <!-- Invoice Add Right ends -->
  </div>