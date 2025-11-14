<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carro;
use App\Models\Fotos;

class AdminCOntroller extends Controller
{
    public function index(){
        $carros = Carro::all();

        return view('admin.veiculos', compact('carros'));
    }

    public function cadastro(){
        return view('admin.cadastro-veiculo');
    }

    public function deletar($id){
        $carro = Carro::findOrFail($id);
        $carro->delete();

        return redirect()->route('admin.veiculos')->with('success', 'Veículo deletado com sucesso!');
    }

    public function editar($id){
        $carroUnico = Carro::with('fotos')->find($id);

        return view('admin.editar-veiculo', compact('carroUnico'));
    }

    public function salvar(Request $request, $id){
        $carro = Carro::findOrFail($id);

        $request->validate([
            'marca' => 'required|string|min:3|max:30',
            'descricao' => 'required|string|max:255',
            'Ano_fabricacao' => 'required|digits:4|integer|min:1900|max:' . date('Y'),
            'preco' => 'required|numeric',
            'cor' => 'required|string|max:30',
            'Sobre' => 'nullable|string|max:500',
            'kmRodado' => 'required|numeric',
            'fotos.*.url' => 'nullable|url|max:255',
        ], [
            'marca.min' => 'Marca deve ter no mínimo 3 caracteres.',
            'marca.max' => 'Marca deve ter no máximo 30 caracteres.',
            'Ano_fabricacao.digits' => 'Ano de fabricação deve ter 4 dígitos.',
            'Ano_fabricacao.integer' => 'Ano de fabricação deve ser numérico.',
            'Ano_fabricacao.min' => 'Ano de fabricação não pode ser menor que 1900.',
            'Ano_fabricacao.max' => 'Ano de fabricação não pode ser maior que o ano atual.',
            'preco.numeric' => 'Preço deve ser numérico.',
            'kmRodado.numeric' => 'KM Rodado deve ser numérico.',
            'fotos.*.url.url' => 'O link da foto deve ser uma URL válida.',
        ]);

        $carro->update($request->only(['marca', 'descricao', 'Ano_fabricacao', 'preco', 'cor', 'Sobre', 'kmRodado']));

        if ($request->has('fotos')) {
            foreach ($request->fotos as $fotoData) {
                if (!empty($fotoData['id'])) {
                    $foto = $carro->fotos()->find($fotoData['id']);
                    if ($foto) {
                        if (!empty($fotoData['url'])) {
                            $foto->update(['link_foto' => $fotoData['url']]);
                        } else {
                            $foto->delete();
                        }
                    }
                } else if (!empty($fotoData['url'])) {
                    $carro->fotos()->create(['link_foto' => $fotoData['url']]);
                }
            }
        }

        return redirect()->route('admin.veiculos')->with('success', 'Veículo e fotos atualizados com sucesso!');
    }


    public function create(){
        return view('admin.cadastro-veiculo'); // retorna o formulário Blade
    }

    public function cadastrarSalvar(Request $request){
        $request->validate([
            'marca' => 'required|string|min:3|max:30',
            'descricao' => 'required|string|max:255',
            'Ano_fabricacao' => 'required|digits:4|integer|min:1900|max:' . date('Y'),
            'preco' => 'required|numeric',
            'cor' => 'required|string|max:30',
            'Aobre' => 'nullable|string|max:500',
            'kmRodado' => 'required|numeric',
            'fotos' => 'required|array|min:3',
            'fotos.*.url' => 'required|url|max:255',
        ], [
            'marca.min' => 'Marca deve ter no mínimo 3 caracteres.',
            'marca.max' => 'Marca deve ter no máximo 30 caracteres.',
            'Ano_fabricacao.digits' => 'Ano de fabricação deve ter 4 dígitos.',
            'Ano_fabricacao.integer' => 'Ano de fabricação deve ser numérico.',
            'Ano_fabricacao.min' => 'Ano de fabricação não pode ser menor que 1900.',
            'Ano_fabricacao.max' => 'Ano de fabricação não pode ser maior que o ano atual.',
            'preco.numeric' => 'Preço deve ser numérico.',
            'kmRodado.numeric' => 'KM Rodado deve ser numérico.',
            'fotos.required' => 'É necessário informar pelo menos 3 fotos.',
            'fotos.min' => 'É necessário informar pelo menos 3 fotos.',
            'fotos.*.url.required' => 'Cada foto deve ter um link válido.',
            'fotos.*.url.url' => 'O link da foto deve ser uma URL válida.',
        ]);

        // Cria veículo
        $carro = Carro::create($request->only(['marca', 'descricao', 'Ano_fabricacao', 'preco', 'cor', 'Sobre', 'kmRodado']));

        // Cria fotos
        foreach ($request->fotos as $fotoData) {
            $carro->fotos()->create([
                'link_foto' => $fotoData['url']
            ]);
        }

        return redirect()->route('admin.veiculos')->with('success', 'Veículo cadastrado com sucesso!');
    }
}
