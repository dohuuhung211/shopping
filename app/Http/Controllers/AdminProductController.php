<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Traits\StorageImageTrait;
use Illuminate\Support\Facades\Storage;
use App\Components\Recusive;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class AdminProductController extends Controller
{
    use StorageImageTrait;
    private $category;
    private $product;
    public function __construct(Category $category, Product $product)
    {
        $this->category = $category;
        $this->product = $product;

    }

    public function index(){
        return view('admin.product.index');
    }
    public function getCategory($parentId){
        $data = $this->category->all();
        $recusive = new Recusive($data);
        $htmlOption = $recusive->categoryRecusive($parentId);
        return $htmlOption;
    }
    public function create(){
        $htmlOption = $this->getCategory($parentId = '');
        return view('admin.product.add', compact('htmlOption'));
    }
    public function store(Request $request){
        $dataProductCreate = [
            'name' => $request->name,
            'price' => $request->price,
            'content' => $request->contents,
            'user_id' => auth()->id(),
            'category_id' => $request->category_id
        ];
        $dataUploadFeatureImage = $this->storageTraitUpload($request, 'feature_image_path', 'products');
        if (!empty($dataUploadFeatureImage)){
            $dataProductCreate['feature_image_name'] = $dataUploadFeatureImage['file_name'];
            $dataProductCreate['feature_image_path'] = $dataUploadFeatureImage['file_path'];
        }

        $product = $this->product->create($dataProductCreate);
        dd($product);
    }
}
