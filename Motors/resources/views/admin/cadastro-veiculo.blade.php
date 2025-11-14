<x-app-layout>
    <x-slot name="header">
        <h2>Cadastro de Veículo</h2>
    </x-slot>

    <div class="admin-card">
        @if(session('success'))
            <div style="background: rgba(76, 175, 80, 0.2); border: 1px solid rgba(76, 175, 80, 0.5); color: #4caf50; padding: 1rem; border-radius: 10px; margin-bottom: 2rem;">
                <strong>Sucesso!</strong> {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('admin.salvar-veiculo') }}" method="POST">
            @csrf

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1.5rem; margin-bottom: 2rem;">
                <div>
                    <label style="display: block; color: #ffd700; font-weight: 600; margin-bottom: 0.5rem;">Marca *</label>
                    <input type="text" name="marca" value="{{ old('marca') }}" 
                           style="width: 100%; padding: 0.9rem; background: rgba(255, 255, 255, 0.1); border: 1px solid rgba(255, 215, 0, 0.3); border-radius: 10px; color: #fff; font-size: 1rem;"
                           placeholder="Ex: Porsche">
                    @error('marca')
                        <small style="color: #f44336; display: block; margin-top: 0.5rem;">{{ $message }}</small>
                    @enderror
                </div>

                <div>
                    <label style="display: block; color: #ffd700; font-weight: 600; margin-bottom: 0.5rem;">Descrição *</label>
                    <input type="text" name="descricao" value="{{ old('descricao') }}"
                           style="width: 100%; padding: 0.9rem; background: rgba(255, 255, 255, 0.1); border: 1px solid rgba(255, 215, 0, 0.3); border-radius: 10px; color: #fff; font-size: 1rem;"
                           placeholder="Ex: 911 Turbo S">
                    @error('descricao')
                        <small style="color: #f44336; display: block; margin-top: 0.5rem;">{{ $message }}</small>
                    @enderror
                </div>

                <div>
                    <label style="display: block; color: #ffd700; font-weight: 600; margin-bottom: 0.5rem;">Ano Fabricação *</label>
                    <input type="number" name="Ano_fabricacao" value="{{ old('Ano_fabricacao') }}" min="1900" max="{{ date('Y') }}"
                           style="width: 100%; padding: 0.9rem; background: rgba(255, 255, 255, 0.1); border: 1px solid rgba(255, 215, 0, 0.3); border-radius: 10px; color: #fff; font-size: 1rem;"
                           placeholder="Ex: 2023">
                    @error('Ano_fabricacao')
                        <small style="color: #f44336; display: block; margin-top: 0.5rem;">{{ $message }}</small>
                    @enderror
                </div>

                <div>
                    <label style="display: block; color: #ffd700; font-weight: 600; margin-bottom: 0.5rem;">Preço *</label>
                    <input type="text" name="preco" value="{{ old('preco') }}"
                           style="width: 100%; padding: 0.9rem; background: rgba(255, 255, 255, 0.1); border: 1px solid rgba(255, 215, 0, 0.3); border-radius: 10px; color: #fff; font-size: 1rem;"
                           placeholder="Ex: 500000">
                    @error('preco')
                        <small style="color: #f44336; display: block; margin-top: 0.5rem;">{{ $message }}</small>
                    @enderror
                </div>

                <div>
                    <label style="display: block; color: #ffd700; font-weight: 600; margin-bottom: 0.5rem;">Cor *</label>
                    <input type="text" name="cor" value="{{ old('cor') }}"
                           style="width: 100%; padding: 0.9rem; background: rgba(255, 255, 255, 0.1); border: 1px solid rgba(255, 215, 0, 0.3); border-radius: 10px; color: #fff; font-size: 1rem;"
                           placeholder="Ex: Preto">
                    @error('cor')
                        <small style="color: #f44336; display: block; margin-top: 0.5rem;">{{ $message }}</small>
                    @enderror
                </div>

                <div>
                    <label style="display: block; color: #ffd700; font-weight: 600; margin-bottom: 0.5rem;">KM Rodado *</label>
                    <input type="text" name="kmRodado" value="{{ old('kmRodado') }}"
                           style="width: 100%; padding: 0.9rem; background: rgba(255, 255, 255, 0.1); border: 1px solid rgba(255, 215, 0, 0.3); border-radius: 10px; color: #fff; font-size: 1rem;"
                           placeholder="Ex: 15000">
                    @error('kmRodado')
                        <small style="color: #f44336; display: block; margin-top: 0.5rem;">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <div style="margin-bottom: 2rem;">
                <label style="display: block; color: #ffd700; font-weight: 600; margin-bottom: 0.5rem;">Sobre</label>
                <textarea name="Sobre" rows="4"
                          style="width: 100%; padding: 0.9rem; background: rgba(255, 255, 255, 0.1); border: 1px solid rgba(255, 215, 0, 0.3); border-radius: 10px; color: #fff; font-size: 1rem; resize: vertical;"
                          placeholder="Descrição detalhada do veículo...">{{ old('Sobre') }}</textarea>
                @error('Sobre')
                    <small style="color: #f44336; display: block; margin-top: 0.5rem;">{{ $message }}</small>
                @enderror
            </div>

            <div style="background: rgba(255, 215, 0, 0.1); border: 1px solid rgba(255, 215, 0, 0.3); border-radius: 15px; padding: 2rem; margin-bottom: 2rem;">
                <h4 style="color: #ffd700; font-weight: 700; margin-bottom: 1.5rem; text-align: center;">Fotos (mínimo 3) *</h4>
                <div id="fotos-container">
                    @for($i = 0; $i < 3; $i++)
                        <div style="display: flex; gap: 1rem; margin-bottom: 1rem; align-items: center;">
                            <input type="text" name="fotos[{{ $i }}][url]" 
                                   value="{{ old("fotos.$i.url") }}"
                                   style="flex: 1; padding: 0.9rem; background: rgba(255, 255, 255, 0.1); border: 1px solid rgba(255, 215, 0, 0.3); border-radius: 10px; color: #fff; font-size: 1rem;"
                                   placeholder="Link da foto (URL)">
                            <button type="button" onclick="this.parentElement.remove()" 
                                    style="background: rgba(244, 67, 54, 0.2); color: #f44336; padding: 0.9rem 1.5rem; border: 1px solid #f44336; border-radius: 10px; cursor: pointer; font-weight: 600;">
                                Remover
                            </button>
                        </div>
                        @error("fotos.$i.url")
                            <small style="color: #f44336; display: block; margin-bottom: 1rem;">{{ $message }}</small>
                        @enderror
                    @endfor
                </div>
                <button type="button" id="btn-add-foto" 
                        style="background: linear-gradient(135deg, #ffd700 0%, #ffed4e 100%); color: #1a1a2e; padding: 0.8rem 1.5rem; border: none; border-radius: 10px; cursor: pointer; font-weight: 700; width: 100%;">
                    ➕ Adicionar Foto
                </button>
            </div>

            <div style="text-align: center;">
                <button type="submit" 
                        style="background: linear-gradient(135deg, #ffd700 0%, #ffed4e 100%); color: #1a1a2e; padding: 1.2rem 3rem; border: none; border-radius: 50px; font-weight: 800; font-size: 1.1rem; cursor: pointer; box-shadow: 0 4px 20px rgba(255, 215, 0, 0.4); transition: all 0.3s ease;">
                    Cadastrar Veículo
                </button>
            </div>
        </form>
    </div>

    <script>
        let fotosContainer = document.getElementById('fotos-container');
        let btnAdd = document.getElementById('btn-add-foto');
        let fotoIndex = 3;

        btnAdd.addEventListener('click', function() {
            let div = document.createElement('div');
            div.style.cssText = 'display: flex; gap: 1rem; margin-bottom: 1rem; align-items: center;';
            div.innerHTML = `
                <input type="text" name="fotos[${fotoIndex}][url]" 
                       style="flex: 1; padding: 0.9rem; background: rgba(255, 255, 255, 0.1); border: 1px solid rgba(255, 215, 0, 0.3); border-radius: 10px; color: #fff; font-size: 1rem;"
                       placeholder="Link da foto (URL)">
                <button type="button" onclick="this.parentElement.remove()" 
                        style="background: rgba(244, 67, 54, 0.2); color: #f44336; padding: 0.9rem 1.5rem; border: 1px solid #f44336; border-radius: 10px; cursor: pointer; font-weight: 600;">
                    Remover
                </button>
            `;
            fotosContainer.appendChild(div);
            fotoIndex++;
        });
    </script>
</x-app-layout>
