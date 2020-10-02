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
                                <h4 class="mb-0 font-size-18">Read Email</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Email</a></li>
                                        <li class="breadcrumb-item active">Read Email</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <!-- Left sidebar -->
                            <div class="email-leftbar card">
                                <div class="mail-list mt-4">
                                    <a href="email-read.html#" class="active"><i class="mdi mdi-email-outline mr-2"></i>
                                        Inbox <span class="ml-1 float-right">(18)</span></a>
                                    <a href="email-read.html#"><i class="mdi mdi-trash-can-outline mr-2"></i>Trash</a>
                                </div>
                            </div>
                            <!-- End Left sidebar -->

                            <!-- Right Sidebar -->
                            <div class="email-rightbar mb-3">

                                <div class="card">
                                    <div class="btn-toolbar p-3" role="toolbar">
                                        <div class="btn-group mr-2 mb-2 mb-sm-0">
                                            <button type="button" class="btn btn-primary waves-light waves-effect"><i
                                                    class="fa fa-check"></i></button>
                                            <button type="button" class="btn btn-primary waves-light waves-effect"><i
                                                    class="far fa-trash-alt"></i></button>
                                        </div>

                                    </div>

                                    <div class="card-body">
                                        <div class="media mb-4">
                                            <img class="d-flex mr-3  avatar-sm" src="../images/avatar-user.png">
                                            <div class="media-body">
                                                <h5 class="font-size-14 mt-1">Name of the Client</h5>
                                                <small class="text-muted">client@gmail.com</small>
                                            </div>
                                        </div>
                                        <table class="table table-hover table-light">
                                            <tr>
                                                <td><span>Endereço:</span></td>
                                                <td>
                                                    <h6 class="mt-0 font-size-16">
                                                        Djalma Torres Street 342, Ap: 304
                                                        <span class="badge-danger">Unaí-MG</span>
                                                    </h6>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><span>Contato:</span></td>
                                                <td>
                                                    <h6 class="mt-0 font-size-16">(38) 99824-6027</h6>
                                                </td>
                                            </tr>
                                        </table>

                                        <hr>
                                        <table class="table table-hover table-light">
                                            <tr>
                                                <td><span>Mensagem:</span></td>
                                                <td>
                                                    <h6 class="mt-0 font-size-16">
                                                        Vestibulum blandit rutrum magna, a dignissim augue pulvinar nec. Donec faucibus enim quis turpis pellentesque porttitor sit amet vel massa. Proin id felis odio. Cras volutpat, sem eget porttitor mollis, lorem ipsum maximus dolor, quis blandit ex augue
                                                        ac tortor. Morbi at viverra neque, eu convallis nulla. Proin vitae eros risus. Mauris porttitor erat ut ante vulputate tempus. Donec accumsan egestas metus sed bibendum. Donec a interdum ex, ut lacinia
                                                        quam. Donec faucibus efficitur ornare.
                                                    </h6>
                                                </td>
                                            </tr>

                                        </table>

                                        <hr />
                                        <h4>Produtos:</h4>
                                        <div class="row">
                                            <div class="col-xl-4 col-sm-6">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <span class="badge-light"> 2x </span>
                                                        <div class="product-img position-relative">
                                                            <div class="avatar-sm product-ribbon">
                                                                <span class="avatar-title rounded-circle  bg-primary">
                                                                    - 25 %
                                                                </span>
                                                            </div>
                                                            <img src="assets/images/product/img-1.png" alt="" class="img-fluid mx-auto d-block">
                                                        </div>
                                                        <div class="mt-4 text-center">
                                                            <h5 class="mb-3 text-truncate"><a href="ecommerce-products.html#" class="text-dark">Half sleeve T-shirt </a></h5>
                                                            <h5 class="my-0">
                                                                <span class="text-muted mr-2">
                                                                    <del>$500</del>
                                                                </span>
                                                                <b>$450</b>
                                                            </h5>

                                                        </div>
                                                        <div class="mt-4 text-center">
                                                            <div class="btn-group">

                                                                <button class="btn btn-primary"><i class="fa fa-eye"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-sm-6">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <span class="badge-light"> 1x </span>
                                                        <div class="product-img position-relative">
                                                            <div class="avatar-sm product-ribbon">
                                                                <span class="avatar-title rounded-circle  bg-primary">
                                                                    - 25 %
                                                                </span>
                                                            </div>
                                                            <img src="assets/images/product/img-1.png" alt="" class="img-fluid mx-auto d-block">
                                                        </div>
                                                        <div class="mt-4 text-center">
                                                            <h5 class="mb-3 text-truncate"><a href="ecommerce-products.html#" class="text-dark">Half sleeve T-shirt </a></h5>
                                                            <h5 class="my-0">
                                                                <span class="text-muted mr-2">
                                                                    <del>$500</del>
                                                                </span>
                                                                <b>$450</b>
                                                            </h5>

                                                        </div>
                                                        <div class="mt-4 text-center">
                                                            <div class="btn-group">

                                                                <button class="btn btn-primary"><i class="fa fa-eye"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 text-right" style="border-top:1px solid black;">
                                                Sub total: 820,0 R$
                                                <br> Transporte: 0,00 R$
                                                <br>
                                                <hr> Total: 820,0 R$
                                            </div>
                                            <div class="col-sm-12">
                                                <button class="btn btn-primary btn-block btn-lg">
                                                    <i class="fa fa-check"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- card -->

                        </div>
                        <!-- end Col-9 -->

                    </div>

                </div>
                <!-- End row -->
            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <!-- Modal -->
        <div class="modal fade" id="composemodal" tabindex="-1" role="dialog" aria-labelledby="composemodalTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="composemodalTitle">New Message</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="To">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Subject">
                            </div>
                            <div class="form-group">
                                <div class="summernote">
                                    <h6>Hello Summer note</h6>
                                    <ul>
                                        <li>
                                            Select a text to reveal the toolbar.
                                        </li>
                                        <li>
                                            Edit rich document on-the-fly, so elastic!
                                        </li>
                                    </ul>
                                    <p>
                                        End of air-mode area
                                    </p>

                                </div>
                            </div>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Send <i
                                class="fab fa-telegram-plane ml-1"></i></button>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- end layout-wrapper-->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    @section('js')
    <!-- Summernote js -->
    <script src="assets/libs/summernote/summernote-bs4.min.js"></script>

    <!-- email summernote init -->
    <script src="assets/js/pages/email-summernote.init.js"></script>

    @endsection
@endsection