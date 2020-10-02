<!doctype html>
<html lang="en">

<head>
    <title>Sidebar 01</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <!--Font awesome-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.2.0/css/all.css">
    <link rel="stylesheet" href="https://static.fontawesome.com/css/fontawesome-app.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Compiled and minified CSS -->

    
    <link rel="stylesheet" href="ecommerce/assets/css/filter.css">
    <link rel="stylesheet" href="ecommerce/assets/css/style.css">
    <link rel="stylesheet" href="ecommerce/assets/css/cart.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.0/dist/aos.css">
</head>

<body class="">

    <div class="wrapper d-flex align-items-stretch ">
        <nav id="sidebar">

            <div class="p-4 pt-5">
                <a href="#" class="img logo mb-5" style="background-image: url('images/logo-inverse.png');"></a>
                <ul class="list-unstyled components mb-5">
                    <li>
                        <a href="{{route('view.site.home')}}">Home</a>
                    </li>
                    <li>
                        <a href="{{route('view.site.gallery')}}">Galeria</a>
                    </li>
                    <li>
                        <a href="{{route('view.site.contacts')}}">Contato</a>
                    </li>
                                <li class="active">
                                    <a href="{{route('view.ecommerce')}}">E-commerce</a>
                                </li>
                </ul>

                <div class="footer">
                    <p>
                        <div class="icons-brand">
                            <a class="btn" href="https://www.facebook.com/bambuartificialdf/" target="_blank">
                                <i class="fa fa-facebook-square"></i>
                            </a>
                            <a class="btn" href="https://www.instagram.com/bambuartificialdf/" target="_blank">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>


                    </p>
                </div>

            </div>
        </nav>
        

        <!-- Page Content  -->
        <div id="content" class="">

            <nav class="m-4 navbar navbar-expand-lg navbar-light navbar-cart">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-primary mr-4">
                        <i class="fa fa-bars"></i>
                        <span class="sr-only">Toggle Menu</span>
                    </button>
                    <ul class="nav navbar-nav ml-4">
                        <li class="nav-item">
                            <a class="nav-link btn" href="#">
                                <i class="far fa-shopping-cart" style="font-size:25px;"></i>
                                <sup class="cart-count">0</sup>
                            </a>

                        </li>
                        <li class="nav-item">
                            <a href="#" data-toggle="modal" data-target="#modalPersonaliseProduct"
                                class="btn nav-link"><i class="far fa-plus" style="font-size:25px;"></i></a>
                        </li>

                    </ul>
                </div>
            </nav>
            <style>
                #carouselHeaderMain .carousel-item img {
                    max-height: 50vh;
                    min-height: 50vh;
                    min-width: 100vh;
                    object-fit: cover;
                }
            </style>

            <div class="container layer-back">

                <div class="row">
                    <div class="col-sm-12">


                        <div id="carouselHeaderMain" class="carousel slide m-0" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselHeaderMain" data-slide-to="0" class="active"></li>
                                <!-- <li data-target="#carouselExampleControls" data-slide-to="1"></li>
                                <li data-target="#carouselExampleControls" data-slide-to="2"></li> -->
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="parallax carousel-img carousel-img-1"></div>
                                    <div class="carousel-caption d-none d-md-block">
                                    </div>
                                </div>
                                <!-- <div class="carousel-item ">
                                    <div class="parallax carousel-img carousel-img-2"></div>
                                    <div class="carousel-caption d-none d-md-block">
                                    </div>
                                </div>
                                <div class="carousel-item ">
                                    <div class="parallax carousel-img carousel-img-3"></div>
                                    <div class="carousel-caption d-none d-md-block">
                                    </div>
                                </div> -->
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <nav class="navbar navbar-expand-lg navbar-light justify-content-between navbar-search ">

                            <div class="btn-group">
                                
                               
                            </div>
                            <form class="form-inline">
                                <input class="form-control mr-sm-2" type="search" placeholder="Procurar"
                                    aria-label="Search">
                                <button class="btn btn-dark my-2 my-sm-0" type="submit"><i
                                        class="fa fa-search"></i></button>
                            </form>

                        </nav>
                    </div>
                </div>
                <style>
                    .div-input-filter{
                        margin-left:5px;
                        margin-right:5px;
                        text-align: center !important
                    }
                    .div-input-filter label{
                        text-align: center !important
                    }
                </style>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="container">
                                
                                <input type="radio" class="filter" id="all" name="categories" value="Todos" checked>
                                <input type="radio" class="filter" id="bambumosso" name="categories" value="Bambu Mossô">
                                <input type="radio" class="filter" id="bambusa5hastes" name="categories" value="Bambusa 5 Hastes">
                                <input type="radio" class="filter" id="bambusa7hastes" name="categories" value="Bambusa 7 Hastes">
                                <ol class="filters active"  id="sidebar-filter">
                                    <li>
                                    <label for="all"><i class="fa fa-tree"></i>Todos</label>
                                    </li>
                                    <li>
                                    <label for="bambumosso"><i class="fa fa-tree"></i>Bambu Mossô</label>
                                    </li>
                                    <li>
                                    <label for="bambusa5hastes"><i class="fa fa-tree"></i>Bambusa 5 Hastes</label>
                                    </li>
                                    <li>
                                    <label for="bambusa7hastes"><i class="fa fa-tree"></i>Bambusa 7 Hastes</label>
                                    </li>
                                </ol>
                                <ol class="products row" >
                                    @foreach($products as $product)
                                    <div class="product col-md-4 card-container mt-2 mb-2" data-category="all bambumosso">
                                        <div class="card-hover">
                                            <div class="card card-flip">
                                                <div class="front card-block">
                                                    <!-- To add FontAwesome Icons use Unicode characters and to set size use font-size instead of fa-*x because when calculating the height (see js), the size of the icon is not calculated if using classes -->
                                                    <span class="card-img-top fa" style="font-size: 4em">
                                                        <div class="effect-view-img">
                                                            <img src="{{asset('images').'/'.$product->image->src}}" alt="" class="img-product">
                                                            <div class="middle">
                                                                <span class="icon-view far fa-eye"
                                                                    data-id="{{$product->id}}" data-toggle="modal"
                                                                    data-target="#modal-image"></span>
                                                            </div>
                                                        </div>
                                                    </span>
                                                    <h4 class="card-title">{{$product->bambu->name}}</h4>
                                                    <h6 class="card-subtitle text-muted">{{$product->cachepot->name}}</h6>
                                                    <hr style="border-top: 1px solid rgba(0, 0, 0, 0.25);">
                
                                                    <button class="btn btn-light btn-description">
                                                        informações <i class="fa fa-info-circle" aria-hidden="true"></i>
                                                    </button>
                                                    <button class="btn btn-outline-dark far fa-shopping-cart" data-toggle="modal"
                                                        data-target="#modal-confirm-cart"></button>
                
                                                </div>
                                                <div class="back card-block">
                                                    <button class="btn btn-outline-success btn-description"><i
                                                            class="fa fa-arrow-left"></i></button>
                                                    <p>
                                                        <?php
                                                            $dim = explode('-',$product->cachepot->dimensions); 
                                                            $dim = $dim[0].'-'.$dim[1].'-'.($dim[2]+$product->bambu->height);
                                                        ?>
                                                        <table class="table table-striped table-bordered"style="width:100%">


                                                            <thead>
                                                                <th>Altura</th>
                                                                <th>Peso</th>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        {{
                                                                            $dim[3]+$product->bambu->height.'cm'
                                                                        }}
                                                                        
                                                                    </td>
                                                                    <td>{{($product->bambu->weight+$product->cachepot->weight).'Kg'}}</td>
                                                                </tr>
                                                            </tbody>


                                                            <thead>
                                                                <th colspan="2">Dimensões Cachepot(cm)</th>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td colspan="2">{{$product->cachepot->dimensions}}</td>
                                              
                                                                </tr>
                                                            </tbody>

                                                            <thead>
                                                                <th colspan="2"><span class="text-muted">Materiais</span></th>
                                                            </thead>
                                                            <thead>
                                                                <th>Bambu</th>
                                                                <th>Cachepot</th>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>{{$product->bambu->materials}}</td>
                                                                    <td>{{$product->cachepot->materials}}</td>
                                                                </tr>
                                                            </tbody>


                                                            <thead>
                                                                <th colspan="2"><span class="text-muted">Descrição</span></th>
                                                            </thead>
                                                            <thead>
                                                                <th>Bambu</th>
                                                                <th>Cachepot</th>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>{{$product->bambu->description}}</td>
                                                                    <td>{{$product->cachepot->description}}</td>
                                                                </tr>
                                                            </tbody>
                 
                                                        </table>
                                                    
                                                </div>
                
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                  </ol>
                            </div>

                            
                            <div class="divider"></div>
                            
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <!--  Modals  -->
    @include('site.components.modals.modal-confirm-cart')
    @include('site.components.modals.modal-personalise')
    <x-modal_view_image_product></x-modal-view-image-product>
        <!-- Compiled and minified JavaScript -->
        <script src="ecommerce/assets/js/jquery.min.js"></script>
        <script src="ecommerce/assets/js/popper.js"></script>
        <script src="ecommerce/assets/js/bootstrap.min.js"></script>
        <script src="ecommerce/assets/js/main.js"></script>
        <script src="ecommerce/assets/js/mvc.js"></script>
        <script src="ecommerce/assets/js/cart.js"></script>
        <script src="https://unpkg.com/aos@2.3.0/dist/aos.js"></script>
        <script>
            $('#myCarousel').carousel({
                pause: 'none'
            })
        </script>
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
        ////////////////////////////////////---VIEW---///////////////////////////////
            let View = (function(){
                let DOM = {

                }
                return{

                }
            })();
        ////////////////////////////////////---MODEL---///////////////////////////////
            let Model = (function(){
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
                return{
                    setData,
                    data,
                    getDataById: (id) => {
                        let arr,product;
                        //get product by id
                        data.products.forEach((el) => {
                            if(el.id == id) {
                                console.log(el)
                                //get bambu by id
                                data.bambus.forEach((e) =>{
                                    
                                    console.log(e.id)
                                    if(el.bambu_id == e.id) arr.bambu = e;
                                   
                                })
                                //get cachepot by id
                                data.cachepots.forEach((e) =>{
                                    if(el.cachepot_id == e.id)  arr.cachepot = e;
                                })
                            } 
                        })
                        return arr
                    }
                }
            })();
            ////////////////////////////////////---CONTROLLER---///////////////////////////////
            let Controller = (function(){

                let setupEventListeners = ()=>{
                    Model.setData();
                }

                return{
                    init: function(){
                        setupEventListeners();
                    }
                }
            })();
            Controller.init()

        </script>
</body>

</html>