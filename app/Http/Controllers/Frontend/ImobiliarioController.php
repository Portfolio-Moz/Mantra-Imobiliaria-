<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use Illuminate\Http\Request;
use App\Http\Requests\ImobiliarioFromRequest;
use App\Models\imobiliario;
use App\Models\imobiliarioImagem;
use App\Models\produto;
use Illuminate\Support\Facades\File;

class ImobiliarioController extends Controller
{
    public function index()
    { 
       
        $novaImobiliario = imobiliario::latest()->take(16)->get();
        return view('frontend.imobiliario.index',compact('novaImobiliario'));
    }

    public function create()
    {
        $categoria = Categoria::all();
        $novaImobiliario = imobiliario::latest()->take(16)->get();
        return view('frontend.imobiliario.criar',compact('categoria','novaImobiliario'));

    }

    public function guardar(ImobiliarioFromRequest $request)
    {

        $validatedData = $request->validated();
       /* $categoria = Categoria::findOrFail($validatedData['categoria_id']);
        $imobiliario = new imobiliario;
        $imobiliario -> categoria_id = $validatedData['categoria_id'];
        $imobiliario -> nome = $validatedData['nome'];
        $imobiliario -> p_discricao = $validatedData['p_discricao'];
        $imobiliario -> disc = $validatedData['disc'];
        $imobiliario -> local = $validatedData['local'];
        $imobiliario -> montante = $validatedData['montante'];
        $imobiliario -> quartos = $validatedData['quartos'];
        $imobiliario -> numero = $validatedData['numero'];
        $imobiliario -> casaBanho = $validatedData['casaBanho'];
        $imobiliario ->estado = $request->estado ==true ? '1':'0'; */

        
        $categoria = Categoria::findOrFail($validatedData['categoria_id']);
        $imobiliario = $categoria->imobiliario()->create([
            'categoria_id' => $validatedData['categoria_id'],
            'nome' => $validatedData['nome'],
            'p_discricao' => $validatedData['p_discricao'],
            'disc' => $validatedData['disc'],
            'local' => $validatedData['local'],
            'montante' => $validatedData['montante'],
            'quartos' => $validatedData['quartos'],
            'numero' => $validatedData['numero'],
            'casaBanho' => $validatedData['casaBanho'],
            'estado' => $request->estado ==true ? '1':'0',
            'destaque' => $request->destaque ==true ? '0':'1',
        ]);
    
              
    
       
         if($request->hasfile('image')){
            $uploadPath ='uploads/imobiliario/';
    
            $i = 1;
            foreach($request->file('image') as $imageFile){
                $extention = $imageFile->getClientOriginalExtension();
                $filename = time().$i++.'.'.$extention;
                $imageFile->move($uploadPath,$filename);
                $finalImagePathName = $uploadPath.$filename;
    
                $imobiliario->imobiliarioImages()->create([
                    'imobiliario_id'=>$imobiliario->id,
                    'image'=>$finalImagePathName,
                ]);
    
            }
            
        }
        return redirect('/imobiliario')->with('message','Produto adicionado com sucesso');
    
    }
    
}
