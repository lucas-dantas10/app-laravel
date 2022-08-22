<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateProductRequest;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    private $request;

    public function __construct(Request $request)
    {
        $this->request = $request;

        //middleware no Controller
        // $this->middleware('auth');
        //especifica o método que vai ser aplicado o middleware
        // $this->middleware('auth')->only('create');
        //aplica em todo, exceto no método que voce especificar
        // $this->middleware('auth')->except('index');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        $products = Product::paginate(15); //pegar só os 15 primeiros do banco de dados

        //o compact cria um array associativo
        return view('admin.pages.products.index', [
            'products' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\StoreUpdateProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUpdateProductRequest $request)
    {

        //validações de campos no formulário (ESSE MÉTODO NAO É RECOMENDADO)
        
        /* $request->validate([
            'name' => 'required|min:3|max:255',
            'description' => 'nullable|min:3|max:10000',
            'photo' => 'required|image',
        ]); */


        dd('OK');

        // dd($request->all());
        // dd($request->only(['name', 'description']));
        // dd($request->description); dd($request->name);
        // dd($request->has('name')) retorno true or false;
        // dd($request->input('name', 'default'));
        // dd($request->except(['_token']));
        if ($request->file('photo')->isValid()) { //valida o arquivo (se foi uploaded com sucesso)
            // dd($request->photo->extension()); Pega a extensao do arquivo (ex: PDF, PNG, JPEG etc)
            //dd($request->photo->getClientOriginalName()); Pega o nome original do arquivo
            //dd($request->photo->store('products')); Guarda o arquivo dentro da pasta storage/products (products é o nome escolhido para a pasta)
            $nameFile = $request->name . '.' . $request->photo->extension();
            dd($request->photo->storeAs('products', $nameFile)); //escolhe um nome para o arquivo e armazena no storage
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return dd($this->request);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.pages.products.edit', compact('id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        dd("ATUALIZANDO O PRODUTO {$id}");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
