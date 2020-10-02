@extends('components.admin.layout')
@section('head')
<style>
    .fade-modal{
    background-image: url('https://startbootstrap.com/assets/img/overlay.svg'),linear-gradient(to bottom,#e1e1e1,white,white,white,white);
    background-repeat: no-repeat;
    background-size: cover;
    }
    .img-modal{
        -webkit-box-shadow: 0px 0px 21px 0px rgba(0,0,0,0.75);
        -moz-box-shadow: 0px 0px 21px 0px rgba(0,0,0,0.75);
        box-shadow: 0px 0px 21px 0px rgba(0,0,0,0.75);
        transition-duration:0.2s;
        z-index:100
    }
    .img-modal:hover{
        transform: scale(1.1);
    }
</style>
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
                                <h4 class="mb-0 font-size-18">Produtos</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                        <li class="breadcrumb-item active">Produtos</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-lg-12">

                            <div class="row mb-3">
                                <div class="col-12">
                                    <form class="mt-4 mt-sm-0 float-sm-right form-inline">
                                        <div class="search-box mr-2">
                                            <div class="position-relative">
                                                <input type="text" class="form-control border-0" placeholder="Procurar...">
                                                <i class="bx bx-search-alt search-icon"></i>
                                            </div>
                                        </div>
                                        <ul class="nav nav-pills product-view-nav ">
                                            <li class="nav-item text-center">
                                                Adicionar Produto
                                                <a class="nav-link active text-center" href="{{route('view.admin.ecommerce.addProduct')}}">
                                                    <i class="bx bx-plus"></i>
                                                </a>
                                            </li>
                                        </ul>


                                    </form>
                                </div>
                            </div>
                            @if(Session::has('updated'))
                            @if(Session::get('updated'))
                                <div class="alert alert-success">{{Session::get('message') }}</div>
                            @else
                                <div class="alert alert-danger">{{Session::get('message')}}</div>
                            @endif
                        @endif
{{-- ///////////////////////////////////////Products ////////////////////////////////////// --}}
                            <div class="row">
                                <div class="col-sm-12 text-center" id="row-products">
                                  <h2>Produto</h2>
                                </div>
                                @foreach ($products as $product)
                                    
                                
                                <div class="col-xl-4 col-sm-6" data-id="{{$product->id}}">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="product-img position-relative">
                                                {{-- <div class="avatar-sm product-ribbon">
                                                    <span class="avatar-title rounded-circle  bg-primary">
                                                        - 25 %
                                                    </span>
                                                </div> --}}
                                                <img src="{{asset('images/'.$product->image->src)}}" alt="" class="img-fluid mx-auto d-block">
                                            </div>
                                            <div class="mt-4 text-center">
                                                <h5 class="mb-3 text-truncate">
                                                    <a href="ecommerce-products.html#" class="text-dark">
                                                        {{$product->bambu->name}}
                                                        <span class="text-muted">
                                                            {{$product->cachepot->name}}
                                                        </span>
                                                    </a>
                                                </h5>
                                                <h5 class="my-0">
                                                <b>R${{$product->bambu->price+$product->cachepot->price}}</b>
                                                </h5>

                                            </div>
                                            <div class="mt-4 text-center">
                                                <div class="btn-group">
                                                    <button class="btn btn-outline-primary" data-toggle="modal" data-target="#modal-edit-modal" id="btn-open-edit-modal" data-id="{{$product->id}}" data-db="product" onClick="Controller.listenerModalEdit(this.dataset.db,{{$product->id}})"><i class="fa fa-edit"></i></button>
                                                <button class="btn btn-primary" data-toggle="modal" data-target="#modal-view-product" data-bambu_id="{{$product->bambu_id}}" data-cachepot_id="{{$product->cachepot_id}}" onClick="Controller.listenerModalView('product',{bambu_id:this.dataset.bambu_id, cachepot_id:this.dataset.cachepot_id,product_id: {{$product->id}} })"><i class="fa fa-eye"></i></button>
                                                    <button class="btn btn-outline-primary" data-toggle="modal" data-target="#modal-delete-product" onClick="Controller.listenerModaldelete('product',{{$product->id}})"><i class="fa fa-trash-alt"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
{{-- ///////////////////////////////////////Bambu ////////////////////////////////////// --}}
                            <div class="row" id="row-bambus">
                                <div class="col-sm-12 text-center">
                                 <h2>Bambu</h2>
                                </div>
                                @foreach ($bambus as $bambu)
                                    
                                
                                <div class="col-xl-4 col-sm-6" data-id="{{$bambu->id}}">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="product-img position-relative">
                                                <img src="{{asset('images/'.$bambu->image->src)}}" alt="" class="bambu-img img-fluid mx-auto d-block">
                                            </div>
                                            <div class="mt-4 text-center">
                                                <h5 class="mb-3 text-truncate">
                                                    <a href="ecommerce-products.html#" class="bambu-name text-dark">{{$bambu->name}}</a>
                                                </h5>
                                                <h5 class="my-0">
                                                    <b class="bambu-price">R${{$bambu->price}}</b>
                                                </h5>

                                            </div>
                                            <div class="mt-4 text-center">
                                                <div class="btn-group">
                                                    <button class="btn btn-outline-primary" data-toggle="modal" data-target="#modal-edit-modal" id="btn-open-edit-modal" data-id="{{$bambu->id}}" data-db="bambu" onClick="Controller.listenerModalEdit(this.dataset.db,{{$bambu->id}})"><i class="fa fa-edit"></i></button>
                                                <button class="btn btn-primary" data-toggle="modal" data-target="#modal-view-bambu" onClick="Controller.listenerModalView('bambu','{{$bambu->id}}')"><i class="fa fa-eye"></i></button>
                                                    <button class="btn btn-outline-primary" data-toggle="modal" data-target="#modal-delete-product" onClick="Controller.listenerModaldelete('bambu',{{$bambu->id}})"><i class="fa fa-trash-alt"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
{{-- ///////////////////////////////////////Cachepots ////////////////////////////////////// --}}
                            <div class="row" id="row-cachepots">
                                <div class="col-sm-12 text-center">
                                  <h2>Cachepots</h2>
                                </div>
                                @foreach ($cachepots as $cachepot)
                                    
                                
                                <div class="col-xl-4 col-sm-6" data-id="{{$cachepot->id}}">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="product-img position-relative">

                                                <img src="{{asset('images/'.$cachepot->image->src)}}" alt="" class="img-fluid mx-auto d-block">
                                            </div>
                                            <div class="mt-4 text-center">
                                                <h5 class="mb-3 text-truncate"><a href="ecommerce-products.html#" class="text-dark cachepot-name">{{$cachepot->name}} </a></h5>
                                                <h5 class="my-0">
                                                <b class="cachepot-price">R${{$cachepot->price}}</b>
                                                </h5>

                                            </div>
                                            <div class="mt-4 text-center">
                                                <div class="btn-group">
                                                    <button class="btn btn-outline-primary" data-id="{{$cachepot->id}}" data-db="cachepot" onClick="Controller.listenerModalEdit(this.dataset.db,{{$cachepot->id}})" data-toggle="modal" data-target="#modal-edit-modal" ><i class="fa fa-edit"></i></button>
                                                    <button class="btn btn-primary" data-toggle="modal" data-target="#modal-view-cachepot" onClick="Controller.listenerModalView('cachepot',{{$cachepot->id}})"><i class="fa fa-eye"></i></button>
                                                    <button class="btn btn-outline-primary" data-toggle="modal" data-target="#modal-delete-product" onClick="Controller.listenerModaldelete('cachepot',{{$cachepot->id}})"><i class="fa fa-trash-alt"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <!-- end row -->

                            {{-- <div class="row">
                                <div class="col-lg-12">
                                    <ul class="pagination pagination-rounded justify-content-center mt-4">
                                        <li class="page-item disabled">
                                            <a href="ecommerce-products.html#" class="page-link"><i
                                                    class="mdi mdi-chevron-left"></i></a>
                                        </li>
                                        <li class="page-item active">
                                            <a href="ecommerce-products.html#" class="page-link ">1</a>
                                        </li>
                                        <li class="page-item">
                                            <a href="ecommerce-products.html#" class="page-link"><i
                                                    class="mdi mdi-chevron-right"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div> --}}
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
            {{-- view --}}
    <x-admin.modals.modal-view-bambu></x-admin.modals.modal-view-bambu>
    <x-admin.modals.modal-view-cachepot></x-admin.modals.modal-view-cachepot>
    <x-admin.modals.modal-view-product></x-admin.modals.modal-view-product>
            {{-- delete --}}
    <x-admin.modals.modal-delete-product></x-admin.modals.modal-delete-product>
            {{-- edit --}}
    <x-admin.modals.modal-edit-modal></x-admin.modals.modal-edit-modal>

    @section('js')
    <!-- Ion Range Slider-->
  
    <script src="{{asset('admin/assets/libs/ion-rangeslider/js/ion.rangeSlider.min.js')}}"></script>

    <!-- init js -->
    <script src="{{asset('admin/assets/js/pages/product-filter-range.init.js')}}"></script>

    <script>
        class Bambu{
            constructor(id,name,height,weight,materials,description,image,image_id,price){
                this.id = id;
                this.name = name;
                this.height = height;
                this.weight = weight;
                this.materials = materials;
                this.description = description;
                this.price = price;
                this.image = image;
                this.image_id = image_id;
            }
        }
        class Cachepot{
            constructor(id,name,dimensions,weight,materials,description,image,image_id,price){
                this.id = id;
                this.name = name;
                this.dimensions = dimensions;
                this.weight = weight;
                this.materials = materials;
                this.description = description;
                this.price = price;
                this.image = image;
                this.image_id = image_id;
            }
        }
        class Product{
            constructor(id,bambu_id,cachepot_id,image,image_id){
                this.id = id
                this.bambu_id = bambu_id
                this.cachepot_id = cachepot_id
                this.image = image
                this.image_id = image_id
            }
        }
        ////////////////////////////////////////////////////////////// VIEW //////////////////////////////////////
                    let View = (function() {
                            let DOMstrings = {
                                //placeholders modal bambu
                                placeModalViewBambuName: document.querySelector('#modal-view-bambu-name'),
                                placeModalViewBambuImg: document.querySelector('#modal-view-bambu-img'),
                                placeModalViewBambuPrice: document.querySelector('#modal-view-bambu-price'),
                                placeModalViewBambuDescription: document.querySelector('#modal-view-bambu-description'),
                                placeModalViewBambuHeight: document.querySelector('#modal-view-bambu-height'),
                                placeModalViewBambuMaterials: document.querySelector('#modal-view-bambu-materials'),
                                placeModalViewBambuWeight: document.querySelector('#modal-view-bambu-weight'),
                                //placeholders modal cachepot
                                placeModalViewCachepotName: document.querySelector('#modal-view-cachepot-name'),
                                placeModalViewCachepotImg: document.querySelector('#modal-view-cachepot-img'),
                                placeModalViewCachepotPrice: document.querySelector('#modal-view-cachepot-price'),
                                placeModalViewCachepotDescription: document.querySelector('#modal-view-cachepot-description'),
                                placeModalViewCachepotDimensions: document.querySelector('#modal-view-cachepot-dimensions'),
                                placeModalViewCachepotMaterials: document.querySelector('#modal-view-cachepot-materials'),
                                placeModalViewCachepotWeight: document.querySelector('#modal-view-cachepot-weight'),
                                //placeholders modal product
                                    placeModalViewProductImg: document.querySelector('#modal-view-product-img'),
                                    placeModalViewProductPrice: document.querySelector('#modal-view-product-price'),
                                            //cachepot
                                    placeModalViewProductCachepotName: document.querySelectorAll('#modal-view-product-cachepot-name'),
                                    placeModalViewProductCachepotImg: document.querySelector('#modal-view-product-cachepot-img'),
                                    placeModalViewProductCachepotPrice: document.querySelector('#modal-view-product-cachepot-price'),
                                    placeModalViewProductCachepotDescription: document.querySelector('#modal-view-product-cachepot-description'),
                                    placeModalViewProductCachepotDimensions: document.querySelector('#modal-view-product-cachepot-dimensions'),
                                    placeModalViewProductCachepotMaterials: document.querySelector('#modal-view-product-cachepot-materials'),
                                    placeModalViewProductCachepotWeight: document.querySelector('#modal-view-product-cachepot-weight'),
                                            //bambu
                                    placeModalViewProductBambuName: document.querySelectorAll('#modal-view-product-bambu-name'),
                                    placeModalViewProductBambuImg: document.querySelector('#modal-view-product-bambu-img'),
                                    placeModalViewProductBambuPrice: document.querySelector('#modal-view-product-bambu-price'),
                                    placeModalViewProductBambuDescription: document.querySelector('#modal-view-product-bambu-description'),
                                    placeModalViewProductBambuHeight: document.querySelector('#modal-view-product-bambu-height'),
                                    placeModalViewProductBambuMaterials: document.querySelector('#modal-view-product-bambu-materials'),
                                    placeModalViewProductBambuWeight: document.querySelector('#modal-view-product-bambu-weight'),
                                //placeholders modal delete
                                    placeModalDeleteImg: document.querySelector('#modal-delete-img'),
                                    placeModalDeleteName: document.querySelector('#modal-delete-name'),
                                    placeModalDeleteBtn: document.querySelector('#modal-delete-btn'),
                                //rows
                                rowProducts: document.querySelector('#row-products'),
                                rowBambus: document.querySelector('#row-bambus'),
                                rowCachepots: document.querySelector('#row-cachepots'),
                                //btn edit 
                                btnOpenEditModal: document.querySelector('#btn-open-edit-modal'),
                                //forms
                                
                                    
                            }

                            function setDataModalView(data,key){
                                switch(key){
                                    case 'bambu':
                                        DOMstrings.placeModalViewBambuName.textContent = data.name;
                                        DOMstrings.placeModalViewBambuImg.src = "{{asset('images')}}"+"/"+data.image;
                                        DOMstrings.placeModalViewBambuPrice.textContent = "R$ "+data.price;
                                        DOMstrings.placeModalViewBambuDescription.textContent = data.description;
                                        DOMstrings.placeModalViewBambuHeight.textContent = data.height;
                                        DOMstrings.placeModalViewBambuMaterials.textContent = data.materials;
                                        DOMstrings.placeModalViewBambuWeight.textContent = data.weight;
                                    break;
                                    case 'cachepot':
                                        DOMstrings.placeModalViewCachepotName.textContent = data.name;
                                        DOMstrings.placeModalViewCachepotImg.src = "{{asset('images')}}"+"/"+data.image;
                                        DOMstrings.placeModalViewCachepotPrice.textContent = "R$ "+data.price;
                                        DOMstrings.placeModalViewCachepotDescription.textContent = data.description;
                                        DOMstrings.placeModalViewCachepotDimensions.textContent = data.dimensions;
                                        DOMstrings.placeModalViewCachepotMaterials.textContent = data.materials;
                                        DOMstrings.placeModalViewCachepotWeight.textContent = data.weight;
                                    break;
                                    case 'product':
                                        
                                        let name;

                                        //product
                                        DOMstrings.placeModalViewProductImg.src = "{{asset('images')}}"+"/"+data.product.image;
                                        DOMstrings.placeModalViewProductPrice.textContent = data.cachepot.price+data.bambu.price

                                        //cachepot
                                        name = Array.from(DOMstrings.placeModalViewProductCachepotName)
                                        name.forEach((el) => {
                                            el.textContent = data.cachepot.name;
                                        })
                                        
                                        DOMstrings.placeModalViewProductCachepotImg.src = "{{asset('images')}}"+"/"+data.cachepot.image;
                                        DOMstrings.placeModalViewProductCachepotPrice.textContent = "R$ "+data.cachepot.price;
                                        DOMstrings.placeModalViewProductCachepotDescription.textContent = data.cachepot.description;
                                        DOMstrings.placeModalViewProductCachepotDimensions.textContent = data.cachepot.dimensions;
                                        DOMstrings.placeModalViewProductCachepotMaterials.textContent = data.cachepot.materials;
                                        DOMstrings.placeModalViewProductCachepotWeight.textContent = data.cachepot.weight;

                                        //bambu
                                        name = Array.from(DOMstrings.placeModalViewProductBambuName)
                                        name.forEach((el) => {
                                            el.textContent = data.bambu.name;
                                        })
                                        DOMstrings.placeModalViewProductBambuImg.src = "{{asset('images')}}"+"/"+data.bambu.image;
                                        DOMstrings.placeModalViewProductBambuPrice.textContent = "R$ "+data.bambu.price;
                                        DOMstrings.placeModalViewProductBambuDescription.textContent = data.bambu.description;
                                        DOMstrings.placeModalViewProductBambuHeight.textContent = data.bambu.height;
                                        DOMstrings.placeModalViewProductBambuMaterials.textContent = data.bambu.materials;
                                        DOMstrings.placeModalViewProductBambuWeight.textContent = data.bambu.weight;
                                    break;
                                }
                            }
                            function setDataModalDelete(data,db){
                                switch(db){
                                    case 'cachepot':
                                    case 'bambu':
                                    case 'product':
                                        DOMstrings.placeModalDeleteImg.src ="{{asset('images')}}"+"/"+data.image;
                                        DOMstrings.placeModalDeleteName.textContent = data.name;
                                        DOMstrings.placeModalDeleteBtn.dataset.id = data.id;
                                        DOMstrings.placeModalDeleteBtn.dataset.db = db;
                                    break;
  
                                }
                            }
                            function setDataModalEdit(data,db){
                                    let content;
                                    switch(db){
                                        case 'bambu':
                                                content = `
                                                            <form class="form-flexible" action="{{route('admin.product.image.update')}}" method="post" enctype="multipart/form-data" id="form-image-update" style="display:block;">
                                                                    @csrf   
                                                                        <div class="row">
                                                                            <input type="hidden" name="image_id" value="${data.image_id}" />
                                                                            <input type="hidden" name="db" value="${db}" />
                                                                            <div class="col-sm-6">
                                                                                <img src="{{asset('images')}}/${data.image}" width="200px" /> 
                                                                            </div>
                                                                            <div class="col-sm-6 ">
                                                                                <input type="file" name="file" />
                                                                            </div>
                                                                            <div class="col-sm-12 mt-4">
                                                                                <button type="submit" class="btn btn-outline-primary btn-block btn-lg">Atualizar</button>
                                                                            </div>
                                                                        </div>
                                                            </form>
                                                            <hr>
                                                            <form class="form-flexible" action="{{route('admin.product.update')}}" method="post" enctype="multipart/form-data" id="form-bambu-update" onsubmit="Controller.ListenerFormUpdate(event,'bambu')" style="display:block;">
                                                                @csrf
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <input type="hidden" name="key" value="${db}">
                                                                    <input type="hidden" name="id" value="${data.id}">
                                                                    <div class="form-group">
                                                                        <label for="productname">Nome do Bambu</label>
                                                                        <input id="productname" name="name" type="text" class="form-control" value="${data.name}" required>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="price">Preço</label>
                                                                        <input id="price" name="price" type="text" class="form-control" value="${data.price}" required>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-6">
                                                                            <label for="height">Altura
                                                                                <input id="height" name="height" id="" type="text"
                                                                                    class="form-control bambu-group" value="${data.height}" required>
                                                                            </label>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <label for="weight">Peso
                                                                                <input id="weight" name="weight" type="text"
                                                                                    class="form-control" value="${data.weight}" required>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-6">

                                                                    <div class="form-group">
                                                                        <label for="materials">Materiais</label>
                                                                        <textarea class="form-control" name="materials" id="materials" rows="5" required>${data.materials}</textarea>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="description">Descrição</label>
                                                                        <textarea class="form-control" name="description" id="description" rows="5" required>${data.description}</textarea>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            
                                                            <button type="submit" class="btn btn-primary btn-block btn-lg mr-1 waves-effect waves-light">Atualizar</button>
                                                        </form>`;
                                                        document.querySelector('#modal-edit-modal-content').innerHTML = content;
                                            
                                        break;
                                        case 'cachepot':
                                            
                                            let dimensions = data.dimensions.split('-')
                                            console.log(dimensions)
                                            
                                            content = `
                                                <form class="form-flexible" action="{{route('admin.product.image.update')}}" method="post" enctype="multipart/form-data" id="form-image-update"  style="display:block;">
                                                @csrf
                                                    <div class="row">
                                                        <input type="hidden" name="image_id" value="${data.image_id}" />
                                                        <input type="hidden" name="db" value="${db}" />
                                                        <div class="col-sm-6">
                                                            <img src="{{asset('images')}}/${data.image}" width="200px" /> 
                                                        </div>
                                                        <div class="col-sm-6 ">
                                                            <input type="file" name="file" />
                                                        </div>
                                                        <div class="col-sm-12 mt-4">
                                                            <button type="submit" class="btn btn-outline-primary btn-block btn-lg">Atualizar</button>
                                                        </div>
                                                    </div>
                                                </form>
                                                <form class="form-flexible" action="{{route('admin.product.update')}}" method="post" enctype="multipart/form-data" id="form-cachepot" onsubmit="Controller.ListenerFormUpdate(event,'cachepot')">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <input type="hidden" name="key" value="cachepot">
                                                        <input type="hidden" name="id" value="${data.id}">
                                                        <div class="form-group">
                                                            <label for="name">Nome do Cachepot</label>
                                                            <input id="name" name="name" type="text" class="form-control" required value="${data.name}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="price">Preço</label>
                                                            <input id="price" name="price" type="text" class="form-control" required value="${data.price}">
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-8">
                                                                Dimensões:
                                                                <div class="input-group">
                                                                    <input type="number" name="length" class="form-control" placeholder="Comprimento" min="0" required value="${dimensions[0]}">
                                                                    <input type="number" name="width" class="form-control" placeholder="Largura" min="0" required value="${dimensions[1]}">
                                                                    <input type="number" name="height" class="form-control" placeholder="Altura" min="0" required value="${dimensions[2]}">
                                                                </div>
                                                            </div>
                                                            <div class="col-4">
                                                                <label for="weight">Peso
                                                                    <input id="weight" name="weight" type="text"
                                                                        class="form-control" required value="${data.weight}">
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">

                                                        <div class="form-group">
                                                            <label for="materials">Materiais</label>
                                                            <textarea class="form-control" name="materials" id="materials" rows="5" required>${data.materials}</textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="description">Descrição</label>
                                                            <textarea class="form-control" name="description" id="description" rows="5" required>${data.description}</textarea>
                                                        </div>

                                                    </div>
                                                </div>

                                                <button type="submit" class="btn btn-primary btn-block btn-lg mr-1 waves-effect waves-light">Atualizar</button>
                                            </form>
                                                `;
                                                document.querySelector('#modal-edit-modal-content').innerHTML = content;
                                        break;
                                        case 'product':
                                            content = `
                                            <form class="form-flexible" action="{{route('admin.product.image.update')}}" method="post" enctype="multipart/form-data" id="form-image-update"  style="display:block;">
                                            @csrf
                                                    <div class="row">
                                                        <input type="hidden" name="image_id" value="${data.image_id}" />
                                                        <input type="hidden" name="db" value="${db}" />
                                                        <div class="col-sm-6">
                                                            <img src="{{asset('images')}}/${data.image}" width="200px" /> 
                                                        </div>
                                                        <div class="col-sm-6 ">
                                                            <input type="file" name="file" />
                                                        </div>
                                                        <div class="col-sm-12 mt-4">
                                                            <button type="submit" class="btn btn-outline-primary btn-block btn-lg">Atualizar</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            `;
                                            
                                            document.querySelector('#modal-edit-modal-content').innerHTML = content;
                                        break;
                                    }
                    }


                            function deleteProduct(db,id){
                                switch(db){
                                    case 'cachepot':
                                        case 'bambu':
                                            case 'product':
                                                document.querySelector(`#row-${db}s`).removeChild(document.querySelector(`[data-id="${id}"]`));
                                            break;
                                }
                            }
                            function updateProduct(data,db){
                                let element = document.querySelector(`#row-${db}s [data-id='${data.id.value}']`);
                                switch(db){
                                    case "bambu":
                                        element.querySelector('.bambu-name').textContent = data.name.value;
                                        element.querySelector('.bambu-price').textContent = '$'+data.price.value;
                                    break;
                                    case "cachepot":
                                        element.querySelector('.cachepot-name').textContent = data.name.value;
                                        element.querySelector('.cachepot-price').textContent = '$'+data.price.value;
                                    break;
                                }

                                $('.modal').modal('hide')
                            }
                            
                            return {
                                DOMstrings,
                                setDataModalView,
                                setDataModalDelete,
                                setDataModalEdit,
                                deleteProduct,
                                updateProduct

                            }
                        })();
        /////////////////////////////////////////////////////////// MODAL //////////////////////////////////////
                        let Model = (function() {
                         let data = {
                             products:[],
                             bambus:[],
                             cachepots:[]
                         }
                         function setData(){
                            @foreach($bambus as $bambu)
                                    arr = [
                                        {{$bambu->id}},
                                        "{{$bambu->name ? $bambu->name: " "}}",
                                        {{$bambu->height ? $bambu->height: -1}},
                                        {{$bambu->weight ? $bambu->weight: -1}},
                                        "{{$bambu->materials ? $bambu->materials: " "}}",
                                        "{{$bambu->description ? $bambu->description: " "}}",
                                        "{{$bambu->image_id ? $bambu->image->src: -1}}",
                                        {{$bambu->image_id ? $bambu->image_id: -1}},
                                        {{$bambu->price ? $bambu->price: -1}}
                                    ]
                                    this.data.bambus.push(new Bambu(...arr));
                                @endforeach
                                @foreach($cachepots as $cachepot)
                                    arr = [
                                        {{$cachepot->id}},
                                        "{{$cachepot->name ? $cachepot->name: " "}}",
                                        "{{$cachepot->dimensions ? $cachepot->dimensions: " "}}",
                                        {{$cachepot->weight ? $cachepot->weight: -1}},
                                        "{{$cachepot->materials ? $cachepot->materials: " "}}",
                                        "{{$cachepot->description ? $cachepot->description: " "}}",
                                        "{{$cachepot->image_id ? $cachepot->image->src: -1}}",
                                        {{$cachepot->image_id ? $cachepot->image_id: -1}},
                                        {{$cachepot->price ? $cachepot->price: -1}}
                                    ]
                                    this.data.cachepots.push(new Cachepot(...arr));
                                @endforeach

                                @foreach($products as $product)
                                    arr = [
                                        {{$product->id}},
                                        {{$product->bambu_id ? $product->bambu_id: -1}},
                                        {{$product->cachepot_id ? $product->cachepot_id: -1}},
                                        "{{$product->image_id ? $product->image->src: -1}}",
                                        {{$product->image_id ? $product->image_id: -1}},

                                    ]
                                    this.data.products.push(new Product(...arr));
                                @endforeach
                         }
                         function deleteProduct(id,db){
                            
                             let condition = false;
                            switch(db){
                                case 'cachepot':
                                    case 'bambu':
                                        case 'product':
                                            $.ajaxSetup({
                                                headers: {
                                                    'X-CSRF-TOKEN': '{{csrf_token()}}'
                                                }
                                            });
                                            $.ajax({
                                                    url: '{{route("admin.product.delete")}}',
                                                    type: 'post',
                                                    data: 'id='+id+'&db='+db,
                                                    dataType: 'json',
                                                    success: function(response){
                                                        if(response.condition) View.deleteProduct(db,id);
                                                    }
                                                });
                                        break;
                            }
                           
                         }
                         function updateProduct(data,db){
                             console.log(data)
                            $.ajax({
                                url: '{{route("admin.product.update")}}',
                                type: 'post',
                                data: $(data).serialize()+"&db="+db,
                                dataType: 'json',
                                success: function(response){
                                    if(response.condition){
                                         Model.data[db+'s'].forEach((el)=>{
                                             if(el.id == data.id.value){

                                                switch(db){
                                                    case 'bambu':
                                                        el.name = data.name.value;
                                                        el.price = data.price.value;
                                                        el.description = data.description.value;
                                                        el.materials = data.materials.value;
                                                        el.height = data.height.value;
                                                        el.weight = data.weight.value;
                                                    break;
                                                    case 'cachepot':
                                                        el.name = data.name.value;
                                                        el.price = data.price.value;
                                                        el.description = data.description.value;
                                                        el.materials = data.materials.value;
                                                        el.height = data.height.value;
                                                       
                                                        el.dimensions = data.length.value+"-"+data.width.value+"-"+data.height.value;
                                                    break;



                                                }

                                             }
                                         });
                                         View.updateProduct(data,db)
                                    }
                                }
                            });
                         }
                            return {
                                data: data,
                                setData,
                                getDataById: function(db,id){
                                    let data;
                                    this.data[db].forEach(function(el)  {
                                        if(el.id == parseInt(id)) data = el;
                                        
                                    });
                                    return data
                                },
                                deleteProduct,
                                updateProduct
                            }
                        })();
        ////////////////////////////////////////////////////// CONTROLLER //////////////////////////////////////
                        var Controller = (function(Model, View) {
                            let DOM = View.DOMstrings;

                            let setupEventListeners = function() {
                                Model.setData();
                                DOM.placeModalDeleteBtn.addEventListener('click',(el)=>{
                                    Model.deleteProduct(el.target.dataset.id,el.target.dataset.db);
                                })
                              
                            }
                            function ListenerFormUpdate(event,db){
                                event.preventDefault()
                                Model.updateProduct(event.target,db)
                            }

                            // CRUD VIEWS
                            function listenerModalEdit(db,id){
                                 //check creadibility
                                    let arr = ["bambu","cachepot","product"]
                                    if(arr.includes(db)){
                                        let data = Model.getDataById(`${db}s`,id);
                                        View.setDataModalEdit(data,db);
                                    }
                            }
                            function listenerModalView(key,id){
                                let data;
                                switch(key){
                                    case 'bambu':

                                        //get data by id
                                        data = Model.getDataById('bambus',id);
                                        //set data in modal
                                        View.setDataModalView(data,key);
                                    break;
                                    case 'cachepot':

                                        //get data by id
                                        data = Model.getDataById('cachepots',id);
                                        //set data in modal
                                        View.setDataModalView(data,key);
                                    break;
                                    case 'product':
                                        //get data by id
                                       
                                        bambu_data = Model.getDataById('bambus',id.bambu_id);
                                        cachepot_data = Model.getDataById('cachepots',id.cachepot_id);
                                        product_data = Model.getDataById('products',id.product_id);
                                        data = {
                                            bambu: bambu_data,
                                            cachepot: cachepot_data,
                                            product: product_data
                                        }
                                        //set data in modal
                                        View.setDataModalView(data,key);
                                    break;
                                }
                            }
                            function listenerModaldelete(db,id){
                                let data;
                                switch(db){
                                    case 'cachepot':
                                    case 'bambu':
                                    case 'product':
                                        //get data by id
                                        data = Model.getDataById(`${db}s`,id)
                                        //set parameters in modal
                                        View.setDataModalDelete(data,db);
                                    break;
                                }
                            }
        
                            return {
                                init: function() {
                                    setupEventListeners();
                                },
                                listenerModalView,
                                listenerModaldelete,
                                listenerModalEdit,
                                ListenerFormUpdate
                            }
                        })(Model, View);
        
                        Controller.init();
                </script>
    @endsection
@endsection