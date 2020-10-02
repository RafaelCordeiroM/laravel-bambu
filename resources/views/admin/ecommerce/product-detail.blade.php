@extends('components.admin.layout')
@section('body')
<div id="layout-wrapper">
<x-admin.navbar_sidebar></x-admin.navbar_sidebar>
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0 font-size-18">Detalhes do Produto</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                        <li class="breadcrumb-item active">Detalhes do Produto</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="product-detai-imgs">
                                                <div class="row">
                                                    <div class="col-md-2 col-sm-3 col-4">
                                                        <div class="nav flex-column nav-pills " id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                            <a class="nav-link active" id="product-1-tab" data-toggle="pill" href="ecommerce-product-detail.html#product-1" role="tab" aria-controls="product-1" aria-selected="true">
                                                                <img src="assets/images/product/img-7.png" alt="" class="img-fluid mx-auto d-block rounded">
                                                            </a>
                                                            <a class="nav-link" id="product-2-tab" data-toggle="pill" href="ecommerce-product-detail.html#product-2" role="tab" aria-controls="product-2" aria-selected="false">
                                                                <img src="assets/images/product/img-8.png" alt="" class="img-fluid mx-auto d-block rounded">
                                                            </a>
                                                            <a class="nav-link" id="product-3-tab" data-toggle="pill" href="ecommerce-product-detail.html#product-3" role="tab" aria-controls="product-3" aria-selected="false">
                                                                <img src="assets/images/product/img-7.png" alt="" class="img-fluid mx-auto d-block rounded">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7 offset-md-1 col-sm-9 col-8">
                                                        <div class="tab-content" id="v-pills-tabContent">
                                                            <div class="tab-pane fade show active" id="product-1" role="tabpanel" aria-labelledby="product-1-tab">
                                                                <div>
                                                                    <img src="assets/images/product/img-7.png" alt="" class="img-fluid mx-auto d-block">
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade show " id="product-2" role="tabpanel" aria-labelledby="product-2-tab">
                                                                <div>
                                                                    <img src="assets/images/product/img-8.png" alt="" class="img-fluid mx-auto d-block">
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-6">
                                            <div class="mt-4 mt-xl-3">
                                                <h4 class="mt-1 mb-3">Bambu</h4>
                                                <h6 class="text-success text-uppercase">20 % Off</h6>
                                                <h5 class="mb-4">Preço : <span class="text-muted mr-2"><del>R$ 240</del></span> <b>R$225</b></h5>
                                                <p class="text-muted mb-4">To achieve this, it would be necessary to have uniform grammar pronunciation and more common words If several languages coalesce</p>
                                                <div class="row mb-3">
                                                    <div class="col-md-6">
                                                        <div>
                                                            <p class="text-muted"><i class="bx bx-shape-triangle font-size-16 align-middle text-primary mr-1"></i> Dimensões(cm): 40 x 40 x 180</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div>
                                                            <p class="text-muted"><i class="bx bx-layer font-size-16 align-middle text-primary mr-1"></i> Materiais: </p>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- end row -->

                                    <div class="mt-5">
                                        <h5 class="mb-3">Specifications :</h5>

                                        <div class="table-responsive">
                                            <table class="table mb-0 table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <th scope="row" style="width: 400px;">Category</th>
                                                        <td>Headphone</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Brand</th>
                                                        <td>JBL</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Color</th>
                                                        <td>Black</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Connectivity</th>
                                                        <td>Bluetooth</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Warranty Summary</th>
                                                        <td>1 Year</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- end Specifications -->

                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row mt-3">
                        <div class="col-lg-12">
                            <div>
                                <h5 class="mb-3">Outros Produtos :</h5>

                                <div class="row">
                                    <div class="col-xl-4 col-sm-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row align-items-center">
                                                    <div class="col-md-4">
                                                        <img src="assets/images/product/img-7.png" alt="" class="img-fluid mx-auto d-block">
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="text-center text-md-left pt-3 pt-md-0">
                                                            <h5 class="mb-3 text-truncate"><a href="ecommerce-product-detail.html#" class="text-dark">Bambu</a></h5>
                                                            <h5 class="my-0"><span class="text-muted mr-2"><del>$240</del></span> <b>$225</b></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-sm-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row align-items-center">
                                                    <div class="col-md-4">
                                                        <img src="assets/images/product/img-7.png" alt="" class="img-fluid mx-auto d-block">
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="text-center text-md-left pt-3 pt-md-0">
                                                            <h5 class="mb-3 text-truncate"><a href="ecommerce-product-detail.html#" class="text-dark">Bambu</a></h5>
                                                            <h5 class="my-0"><span class="text-muted mr-2"><del>$240</del></span> <b>$225</b></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-sm-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row align-items-center">
                                                    <div class="col-md-4">
                                                        <img src="assets/images/product/img-7.png" alt="" class="img-fluid mx-auto d-block">
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="text-center text-md-left pt-3 pt-md-0">
                                                            <h5 class="mb-3 text-truncate"><a href="ecommerce-product-detail.html#" class="text-dark">Bambu</a></h5>
                                                            <h5 class="my-0"><span class="text-muted mr-2"><del>$240</del></span> <b>$225</b></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- end row -->
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    @section('js')

    @endsection
@endsection