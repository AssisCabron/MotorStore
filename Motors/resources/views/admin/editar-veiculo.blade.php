<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edição de Veículo') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 shadow sm:rounded-lg">

                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                        <strong>Sucesso!</strong> {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <form action="{{ route('admin.salvar-edicao', $carroUnico->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered w-100 border-bottom align-middle">
                            <thead class="table-dark">
                                <tr class="text-center">
                                    <th>Marca</th>
                                    <th>Descrição</th>
                                    <th>Ano Fabricação</th>
                                    <th>Preço</th>
                                    <th>Cor</th>
                                    <th>Sobre</th>
                                    <th>KM Rodado</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td>
                                        <input type="text" name="marca" class="form-control text-center" value="{{ old('marca', $carroUnico->marca) }}">
                                        @error('marca')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </td>
                                    <td>
                                        <input type="text" name="descricao" class="form-control text-center" value="{{ old('descricao', $carroUnico->descricao) }}">
                                        @error('descricao')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </td>
                                    <td>
                                        <input type="number" name="Ano_fabricacao" class="form-control text-center" value="{{ old('Ano_fabricacao', $carroUnico->Ano_fabricacao) }}" min="1900" max="{{ date('Y') }}">
                                        @error('Ano_fabricacao')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </td>
                                    <td>
                                        <input type="text" name="preco" class="form-control text-center" value="{{ old('preco', $carroUnico->preco) }}">
                                        @error('preco')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </td>
                                    <td>
                                        <input type="text" name="cor" class="form-control text-center" value="{{ old('cor', $carroUnico->cor) }}">
                                        @error('cor')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </td>
                                    <td>
                                        <textarea name="sobre" class="form-control" rows="2">{{ old('sobre', $carroUnico->Sobre) }}</textarea>
                                        @error('sobre')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </td>
                                    <td>
                                        <input type="text" name="kmRodado" class="form-control text-center" value="{{ old('kmRodado', $carroUnico->kmRodado) }}">
                                        @error('kmRodado')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-4 border p-3 rounded shadow-sm">
                        <h4 class="text-center mb-3">Fotos Cadastradas</h4>
                        <div id="fotos-container">
                            @foreach($carroUnico->fotos as $index => $foto)
                                <div class="d-flex align-items-center mb-2 foto-item">
                                    <input type="hidden" name="fotos[{{ $index }}][id]" value="{{ $foto->id }}">
                                    <input type="text" name="fotos[{{ $index }}][url]" class="form-control me-2 flex-grow-1" value="{{ old("fotos.$index.url", $foto->link_foto) }}">
                                    <a href="{{ $foto->link_foto }}" target="_blank" class="btn btn-primary btn-sm me-2">Ver Foto</a>
                                    <button type="button" class="btn btn-danger btn-sm btn-remover">Remover</button>
                                    @error("fotos.$index.url")
                                        <small class="text-danger ms-2">{{ $message }}</small>
                                    @enderror
                                </div>
                            @endforeach
                        </div>
                        <button type="button" class="btn btn-primary mt-2" id="btn-add-foto">➕ Adicionar Foto</button>
                    </div>
                    

                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-success btn-lg px-5 shadow-lg rounded-pill">Salvar Alterações</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        let fotosContainer = document.getElementById('fotos-container');
        let btnAdd = document.getElementById('btn-add-foto');
        let fotoIndex = {{ $carroUnico->fotos->count() }}; 

        btnAdd.addEventListener('click', function() {
            let div = document.createElement('div');
            div.classList.add('d-flex', 'align-items-center', 'mb-2', 'foto-item');

            div.innerHTML = `
                <input type="text" name="fotos[${fotoIndex}][url]" class="form-control me-2 flex-grow-1" placeholder="Link da foto">
                {{-- Adicionei um link 'Ver Foto' dummy para consistência, mas sem href dinâmico --}}
                <a href="#" target="_blank" class="btn btn-secondary btn-sm me-2 disabled">Ver Foto</a> 
                <button type="button" class="btn btn-danger btn-sm btn-remover">Remover</button>
            `;
            fotosContainer.appendChild(div);
            fotoIndex++;
        });

        fotosContainer.addEventListener('click', function(e) {
            if (e.target.classList.contains('btn-remover')) {
                e.target.parentElement.remove();
            }
        });
    
        document.querySelectorAll('.btn-remover').forEach(button => {
            button.addEventListener('click', function() {
                this.closest('.foto-item').remove();
            });
        });
    </script>
</x-app-layout>