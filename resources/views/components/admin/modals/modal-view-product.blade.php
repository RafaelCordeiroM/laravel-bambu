<!-- Modal -->
<div class="modal fade" id="modal-view-product" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header fade-modal">
          <h5 class="modal-title" id="exampleModalLabel"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="container fade-modal">
            <div class="row">
              <div class="col-sm-12 text-center mb-4">
                <style>
                  #modal-view-product-price:before{
                    content: 'R$'
                  }
                </style>
                <h2 id="modal-view-product-bambu-name"></h2>
                <h2 id="modal-view-product-cachepot-name"></h2>
                <h3 id="modal-view-product-price" class="text-muted"></h3>
                    <img src="" alt="" width="250px" class="img-modal" id="modal-view-product-img">
              </div>
              <div class="col-sm-12 col-lg-6">
                <div class="row">
                    <div class="col-sm-6">
                      <img src="{{asset('images/bambus/bambu_1.jpg')}}" alt="" width="250px" class="img-modal" id="modal-view-product-bambu-img">
                    </div>
                    <div class="col-sm-6">
                      <div>
                          <h2 id="modal-view-product-bambu-name">Bambu Tal</h2>
                          <h3 id="modal-view-product-bambu-price" class="text-muted">R$400,00</h3>
                      </div>
                        <hr>
                        <span id="modal-view-product-bambu-description">hsdnasd jasdjkas djkas djas djad ajd mas dhas dfnb asbd nb ghd nas bd g dnavtx snmbdvgadvasbvdjha </span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 text-center">
                      <table class="table table-hover table-bordered " >
                          <thead>
                              <th>Altura(cm)</th>
                              <th>Peso(Kg)</th>
                          </thead>
                          <tbody>
                              <tr>
                                  <td id="modal-view-product-bambu-height">23</td>
                                  <td id="modal-view-product-bambu-weight">0</td>
                              </tr>
                          </tbody>
                          <thead>
                              <th colspan="2">Materiais</th>
                              
                          </thead>
                          <tbody>
                              <tr>
                                  <td id="modal-view-product-bambu-materials" colspan="2">Bambu natural e folhas de seda</td>
                              </tr>
                          </tbody>
                        
                      </table>
                    </div>
                </div>
              </div>
              <div class="col-sm-12 col-lg-6">
                <div class="row">
                    <div class="col-sm-6">
                      <div class="text-right">
                          <h2 id="modal-view-product-cachepot-bambu-name">Bambu Tal</h2>
                          <h3 id="modal-view-product-cachepot-price" class="text-muted">R$400,00</h3>
                      </div>
                        <hr>
                        <span id="modal-view-product-cachepot-description">hsdnasd jasdjkas djkas djas djad ajd mas dhas dfnb asbd nb ghd nas bd g dnavtx snmbdvgadvasbvdjha </span>
                    </div>
                    <div class="col-sm-6">
                      <img src="{{asset('images/bambus/bambu_1.jpg')}}" alt="" width="250px" class="img-modal" id="modal-view-product-cachepot-img">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 text-center">
                      <table class="table table-hover table-bordered " >
                          <thead>
                              <th>Dimensões(cm)</th>
                              <th>Peso(Kg)</th>
                          </thead>
                          <tbody>
                              <tr>
                                <td id="modal-view-product-cachepot-dimensions">0</td>
                                  <td id="modal-view-product-cachepot-weight">23</td>
                              </tr>
                          </tbody>
                          <thead>
                              <th colspan="2">Materiais</th>
                          </thead>
                          <tbody>
                              <tr>
                                  <td id="modal-view-product-cachepot-materials" colspan="2">Bambu natural e folhas de seda</td>
                              </tr>
                          </tbody>
                        
                      </table>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">fechar</button>
        </div>
      </div>
    </div>
  </div>