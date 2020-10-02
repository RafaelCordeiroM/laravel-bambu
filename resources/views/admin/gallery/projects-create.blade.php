@extends('components.admin.layout')
@section('head')
    <!-- dependencies -->
    <link href="assets/libs/dropzone/min/dropzone.min.css" rel="stylesheet" type="text/css" />
@endsection
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
                                <h4 class="mb-0 font-size-18">Criar Projeto</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Projetos</a></li>
                                        <li class="breadcrumb-item active">Criar Novo</li>
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
                                    <h4 class="card-title mb-4">Criar Novo</h4>
                                    <form method="post" enctype="multipart/form-data">
                                        <div class="form-group row mb-4">
                                            <label for="projectname" class="col-form-label col-lg-2">Título</label>
                                            <div class="col-lg-10">
                                                <input id="projectname" name="projectname" type="text" class="form-control" placeholder="Digite título do projeto...">
                                            </div>
                                        </div>
                                        <div class="form-group row mb-4">
                                            <label for="projectdesc" class="col-form-label col-lg-2">Descrição</label>
                                            <div class="col-lg-10">
                                                <textarea class="form-control" id="projectdesc" rows="3" placeholder="Digite a descrição do projeto..."></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-4">
                                            <label class="col-form-label col-lg-2">Data</label>
                                            <div class="col-lg-10">
                                                <div class="input-daterange input-group" data-provide="datepicker" data-date-format="dd M, yyyy" data-date-autoclose="true">
                                                    <input type="text" class="form-control" placeholder="Data" name="start" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dropzone" id="dropzone">
                                            <div class="fallback">
                                                <input name="file" type="file" multiple />
                                            </div>

                                            <div class="dz-message needsclick">
                                                <div class="mb-3">
                                                    <i class="display-4 text-muted bx bxs-cloud-upload"></i>
                                                </div>

                                                <h4>Drop files here or click to upload.</h4>
                                            </div>
                                        </div>
                                    </form>

                                    <div class="row justify-content-end">
                                        <div class="col-lg-10 pt-4">
                                            <button type="submit" class="btn btn-primary btn-block btn-lg">Criar</button>
                                        </div>
                                    </div>

                                </div>
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
    <!-- bootstrap datepicker -->
    <script src="assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

    <!-- dropzone plugin -->
    <script src="assets/libs/dropzone/min/dropzone.min.js"></script>
    <script>
        $("div#dropzone").dropzone({
            url: "/file/post"
        });
    </script>

    @endsection
@endsection