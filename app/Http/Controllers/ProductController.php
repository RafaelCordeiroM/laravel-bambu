<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use App\Bambu;
use App\Cachepot;
use App\Product;
use App\Image;

class ProductController extends Controller
{
    /**
     * CREATE
     */
    private function createBambu($request)
    {
        $validation = $request->validate([
            'name' => 'required|max:255',
            'materials' => 'required|max:255',
            'height' => 'required',
            'weight' => 'required',
            'price' => 'required',
            'description' => 'required'
        ]);
        if ($id = $this->storeFile("bambus")) {
            if ($bambu = Bambu::create([
                'name' => $request->name,
                'materials' => $request->materials,
                'height' => $request->height,
                'weight' => $request->weight,
                'price' => $request->price,
                'description' => $request->description,
                'image_id' => $id
            ])) return true;
        }
    }
    private function createCachepot($request)
    {
        if(!$request->validate([
            'name' => 'required|max:255',
            'materials' => 'required|max:255',
            'height' => 'required',
            'length' => 'required',
            'width' => 'required',
            'weight' => 'required',
            'price' => 'required',
            'file' => 'required|file',
            'description' => 'required'
            ])) return json_encode([
                'condition' => false,
                'message'  => 'Data sent not correct!'
            ]);
        $dimensions = $request->length."-".$request->width."-".$request->height;

        if($id = $this->storeFile('cachepots')){
         if(Cachepot::create([
             'name' => $request->name,
             'materials' => $request->name,
             'height' => $request->height,
             'length' => $request->length,
             'width' => $request->width,
             'weight' => $request->weight,
             'price' => $request->price,
             'description' => $request->description,
             'dimensions' => $dimensions,
             'image_id' => $id
             ]))  return true;
            } 
    }

    private function createProductComplete($request)
    {
        if($id = $this->storeFile("products")){
            if(Product::create([
                'bambu_id' => $request->bambu,
                'cachepot_id' => $request->cachepot,
                'image_id' => $id
                ])) return true;
        }
    }
    protected function storeFile($path)
    {
        $file = request()->file('file');
        if ($url = $file->store('uploads/'.$path)) {
            if (Image::create(['src' => $url])) {
                return Image::all()->last()->id;
            } else return false;
        }
    }
    public function createProduct(Request $request)
    {
        
        $condition = false;
        //creating
        switch ($request->key) {
            case 'bambu':
                if($this->createBambu($request)) $condition = true;
                break;
            case 'cachepot':
                if($this->createCachepot($request)) $condition = true;
                break;
            case 'all':
                if($this->createProductComplete($request)) $condition = true;
                break;
                }
            // returning values
            if($condition) return redirect()->route('view.admin.ecommerce.addProduct')->with([
                'created'=> true,
                'message' => "Criado"
            ]);
            else return redirect()->route('view.admin.ecommerce.addProduct')->with([
                'created'=> false,
                'message' => "Algo deu errado"
            ]);
        
    }
    public function deleteProduct(Request $request){
        switch($request->db){
            case 'cachepot':
                if(Cachepot::find($request->id)->delete()){
                    return json_encode(['condition'=>true]);
                };
            break;
            case 'bambu':
                if(Bambu::find($request->id)->delete()){
                    return json_encode(['condition'=>true]);
                };
            break;
            case 'product':
                if(Product::find($request->id)->delete()){
                    return json_encode(['condition'=>true]);
                };
            break;
        }
    }
    private function updateBambu($request){
        $validation = $request->validate([
            'name' => 'required|max:255',
            'materials' => 'required|max:255',
            'height' => 'required',
            'weight' => 'required',
            'price' => 'required',
            'description' => 'required'
        ]);

            if (Bambu::where('id',$request->id)->update([
                'name' => $request->name,
                'materials' => $request->materials,
                'height' => $request->height,
                'weight' => $request->weight,
                'price' => $request->price,
                'description' => $request->description,
            ])) return true;
        
    }
    private function updateCachepot($request){
        $validation = $request->validate([
            'name' => 'required|max:255',
            'materials' => 'required|max:255',
            'length' => 'required',
            'width' => 'required',
            'height' => 'required',
            'weight' => 'required',
            'price' => 'required',
            'description' => 'required'
        ]);

        $dimensions = $request->length."-".$request->width."-".$request->height;
            if (Cachepot::where('id',$request->id)->update([
                'name' => $request->name,
                'materials' => $request->materials,
                'dimensions' => $dimensions,
                'weight' => $request->weight,
                'price' => $request->price,
                'description' => $request->description,
            ])) return true;
        
    }
    public function updateProduct(Request $request){
        $condition = false;
        switch($request->db){
            case 'bambu':
                if($this->updateBambu($request)) $condition = true;
            break;
            case 'cachepot':
                if($this->updateCachepot($request)) $condition = true;
            break;
        }

        return json_encode([
            'condition' => $condition? $condition :false
        ]);

    }
    public function updateProductImage(Request $request){
        $condition = false;
        $credentials = ['product','bambu','cachepot'];
        if(in_array($request->db,$credentials)){
            $file = request()->file('file');
            if ($url = $file->store('uploads/'.$request->db.'s')) {
                if (Image::find($request->image_id)->update(['src' => $url]))$condition = true;
            }
        }

        if($condition) return redirect()->route('view.admin.ecommerce.products');
        else return redirect()->route('view.admin.ecommerce.products')->with([
            'updated'=> false,
            'message' => "Algo deu errado"
        ]);;

       
    }  
}
