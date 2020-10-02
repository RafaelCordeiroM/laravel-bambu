@extends('components.admin.layout')
@section('head')
    <!-- dependencies -->
    <link href="{{asset('admin/assets/libs/dropzone/min/dropzone.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css')}}" rel="stylesheet" />
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
                                    <h4 class="mb-0 font-size-18">Adicionar Produto</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                            <li class="breadcrumb-item active">Adicionar Produto</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                    
                        <div class="row">
                            <div class="col-12">
                                        @if(Session::has('created'))
                                            @if(Session::get('created'))
                                                <div class="alert alert-success">{{Session::get('message') }}</div>
                                            @else
                                                <div class="alert alert-danger">{{Session::get('message')}}</div>
                                            @endif
                                        @endif
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <h5>Selecione o tipo do Produto:</h5>
                                                <div class="form-group d-flex bg-light p-4 shadow">

                                                    <label for="">Bambu</label>
                                                    <input type="radio" name="form-type" value="bambu" class="form-control" checked="checked">
                                                    <label for="">Cachepot</label>
                                                    <input type="radio" name="form-type" value="cachepot" class="form-control">
                                                    <label for="">Ambos</label>
                                                    <input type="radio" name="form-type" value="all" class="form-control">

                                                </div>
                                            </div>
                                        </div>
                                        <h4 class="card-title">Informações Básicas:</h4>
                                        <br>
                                        <form class="form-flexible" action="{{route('admin.product.create')}}" method="post" enctype="multipart/form-data" id="form-bambu" style="display:block;">
                                            @csrf
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input type="hidden" name="key" value="bambu">
                                                    <div class="form-group">
                                                        <label for="productname">Nome do Bambu</label>
                                                        <input id="productname" name="name" type="text" class="form-control" value="das" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="price">Preço</label>
                                                        <input id="price" name="price" type="text" class="form-control" value="213" required>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <label for="height">Altura
                                                                <input id="height" name="height" id="" type="text"
                                                                    class="form-control bambu-group" value="12" required>
                                                            </label>
                                                        </div>
                                                        <div class="col-6">
                                                            <label for="weight">Peso
                                                                <input id="weight" name="weight" type="text"
                                                                    class="form-control" value="132" required>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">

                                                    <div class="form-group">
                                                        <label for="materials">Materiais</label>
                                                        <textarea class="form-control" name="materials" id="materials" rows="5" required>dsa</textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="description">Descrição</label>
                                                        <textarea class="form-control" name="description" id="description" rows="5" required>das</textarea>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="dropzone" >
                                                <div class="fallback">
                                                    <input name="file" type="file" required />
                                                </div>

                                                <div class="dz-message needsclick">
                                                    <div class="mb-3">
                                                        <i class="display-4 text-muted bx bxs-cloud-upload"></i>
                                                    </div>

                                                    <h4>Drop files here or click to upload.</h4>
                                                </div>
                                            </div>
                                            <br>
                                            <button type="submit" class="btn btn-primary btn-block btn-lg mr-1 waves-effect waves-light">Criar</button>
                                        </form>
                                    <form class="form-flexible" action="{{route('admin.product.create')}}" method="post" enctype="multipart/form-data" id="form-cachepot" style="display:none;">
                                            @csrf
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input type="hidden" name="key" value="cachepot">
                                                    <div class="form-group">
                                                        <label for="name">Nome do Cachepot</label>
                                                        <input id="name" name="name" type="text" class="form-control" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="price">Preço</label>
                                                        <input id="price" name="price" type="text" class="form-control" required>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-8">
                                                            Dimensões:
                                                            <div class="input-group">
                                                                <input type="number" name="length" class="form-control" placeholder="Comprimento" min="0" required>
                                                                <input type="number" name="width" class="form-control" placeholder="Largura" min="0" required>
                                                                <input type="number" name="height" class="form-control" placeholder="Altura" min="0" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <label for="weight">Peso
                                                                <input id="weight" name="weight" type="text"
                                                                    class="form-control" required>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">

                                                    <div class="form-group">
                                                        <label for="materials">Materiais</label>
                                                        <textarea class="form-control" name="materials" id="materials" rows="5" required></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="description">Descrição</label>
                                                        <textarea class="form-control" name="description" id="description" rows="5" required></textarea>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="dropzone" >
                                                <div class="fallback">
                                                    <input name="file" type="file" required />
                                                </div>

                                                <div class="dz-message needsclick">
                                                    <div class="mb-3">
                                                        <i class="display-4 text-muted bx bxs-cloud-upload"></i>
                                                    </div>

                                                    <h4>Drop files here or click to upload.</h4>
                                                </div>
                                            </div>
                                            <br>
                                            <button type="submit" class="btn btn-primary btn-block btn-lg mr-1 waves-effect waves-light">Criar</button>
                                        </form>
                                        <form class="form-flexible"action="{{route('admin.product.create')}}" method="post" enctype="multipart/form-data" id="form-all" style="display:none;">
                                        @csrf
                                        <style>
                                                /* HIDE RADIO */
                                                
                                                .labelFormAll [type=radio] {
                                                    position: absolute;
                                                    opacity: 0;
                                                    width: 0;
                                                    height: 0;
                                                }
                                                /* IMAGE STYLES */
                                                
                                                .labelFormAll [type=radio]+img {
                                                    cursor: pointer;
                                                }
                                                /* CHECKED STYLES */
                                                
                                                .labelFormAll [type=radio]:checked+img {
                                                    outline: 2px dashed rgb(158, 29, 29);
                                                    border: 4px solid white;
                                                }
                                            </style>
                                            <div class="row">
                                                    <input type="hidden" name="key" value="all">
                                                <div class="col-6">
                                                    @foreach ($bambus as $bambu)
                                                    <div class="col-sm-12">
                                                    <div class="form-group ajax-select mt-3 mt-lg-0">
                                                        <label class="labelFormAll row">
                                                            <div class="col-6">
                                                            <input type="radio" name="bambu" value="{{$bambu->id}}" checked>
                                                                <img src="{{asset('images/'.$bambu->image->src)}}" width="200px">
                                                            </div>
                                                            <div class="col-6">
                                                            <h5>{{$bambu->name}}</h5>
                                                                <hr>
                                                                <p>
                                                                    {{$bambu->description}}
                                                                </p>
                                                            </div>
                                                        </label>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                </div>
                                                

                                                <div class="col-6">
                                                    @foreach ($cachepots as $cachepot)
                                                    <div class="col-sm-12">
                                                    <div class="form-group ajax-select mt-3 mt-lg-0">
                                                        <label class="labelFormAll row">
                                                            <div class="col-6">
                                                                <input type="radio" name="cachepot" value="{{$cachepot->id}}" checked>
                                                                <img src="{{asset('images/'.$cachepot->image->src)}}" width="200px">
                                                            </div>
                                                            <div class="col-6">
                                                                <h5>{{$cachepot->name}}</h5>
                                                                <hr>
                                                                <p>
                                                                    {{$cachepot->description}}
                                                                </p>
                                                            </div>
                                                        </label>
                                                    </div>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <div class="dropzone">
                                                <div class="fallback">
                                                    <input name="file" type="file" required />
                                                </div>

                                                <div class="dz-message needsclick">
                                                    <div class="mb-3">
                                                        <i class="display-4 text-muted bx bxs-cloud-upload"></i>
                                                    </div>

                                                    <h4>Drop files here or click to upload.</h4>
                                                </div>
                                            </div>
                                            <br>
                                            <button type="submit" class="btn btn-primary btn-block btn-lg mr-1 waves-effect waves-light" id="btn-create">Criar</button>
                                        </form>
                                    </div>
                                </div>

                                <!-- end card-->

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

        {{-- Modals --}}
        

        @endsection
        @section('js')
            <!-- dependencies -->
            <script src="{{asset('admin/assets/libs/dropzone/min/dropzone.min.js')}}"></script>
            <script src="{{asset('admin/assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js')}}"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js" integrity="sha384-FzT3vTVGXqf7wRfy8k4BiyzvbNfeYjK+frTVqZeNDFl8woCbF0CYG6g2fMEFFo/i" crossorigin="anonymous"></script>
            <script>
                $("input[name='height'].bambu-group").TouchSpin({
                    verticalbuttons: true,
                    min: 0,
                    max: 400,
                    prefix: 'cm'
                });
                $("input[name='weight']").TouchSpin({
                    verticalbuttons: true,
                    min: 0,
                    max: 400,
                    prefix: 'Kg'
                });
                $("input[name='price']").TouchSpin({
                    verticalbuttons: true,
                    min: 0,
                    max: 1000,
                    prefix: 'R$'
                });
                $("div#dropzone").dropzone({
                    url: "{{route('admin.product.create')}}"
                });
            </script>
            <script>
////////////////////////////////////////////////////////////// VIEW //////////////////////////////////////
            let View = (function() {
                    let DOMstrings = {
                        radioSelectType: document.querySelectorAll('[name = "form-type"]'),
                        forms: document.querySelectorAll('.form-flexible'),
                    }

                    return {
                        DOMstrings: DOMstrings,
                        changeForm: function(key) {
                            let forms = Array.from(DOMstrings.forms)
                            forms.forEach((el) => {
                                //position 1 is the display
                                if (el.style.display == "block") el.style.display = "none";
                            });

                            let form_selected = document.querySelector(`#form-${key}`);
                            form_selected.style.display = "block";

                        }
                    }
                })();
/////////////////////////////////////////////////////////// MODAL //////////////////////////////////////
                let Model = (function() {
                    let create = (data,key)=>{
                        data = $(data).serialize()+'&key='+key;
                        $.ajax({
                            url: "{{route('admin.product.create')}}",
                            data: data,
                            type:'post',
                            dataType: 'json',
                            success: function(response){
                                console.log(response)
                            }
                        });
                    }

                    return {
                        create: create
                    }
                })();
////////////////////////////////////////////////////// CONTROLLER //////////////////////////////////////
                let Controller = (function(Model, View) {
                    let DOM = View.DOMstrings;

                    function listenersFormType() {

                        let inputsRadio = Array.from(DOM.radioSelectType);

                        inputsRadio.forEach((el) => {
                            el.addEventListener('change', (obj) => {
                                View.changeForm(obj.target.value);
                            });
                        });
                    }
                    function listenersFormSubmit(){

                        // let forms = Array.from(DOM.forms)

                        // forms.forEach((el)=>{
                        //     el.addEventListener('submit',(obj)=>{
                        //         obj.preventDefault();
                        //         let urlKey = document.querySelector('[name = "form-type"]:checked').value;
                        //         Model.create(obj.target,urlKey);
                        //     });
                        // });
                    }
                    let setupEventListeners = function() {
                        listenersFormType();
                        listenersFormSubmit();
                    }

                    return {
                        init: function() {
                            setupEventListeners();
                        }
                    }
                })(Model, View);

                Controller.init();
        </script>
        <!-- App js -->
        <script src="{{asset('admin/assets/js/pages/ecommerce-add-product.js')}}"></script>
        @endsection
