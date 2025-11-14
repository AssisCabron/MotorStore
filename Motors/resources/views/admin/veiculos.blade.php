<x-app-layout>
    <x-slot name="header">
        <h2>Veículos Cadastrados</h2>
    </x-slot>

    <div class="admin-card">
        <div style="margin-bottom: 2rem; display: flex; justify-content: space-between; align-items: center;">
            <h3 style="font-size: 1.5rem; font-weight: 700; color: #ffd700;">Total: {{ $carros->count() }} veículo(s)</h3>
            <a href="{{ route('admin.cadastro-veiculo') }}" style="background: linear-gradient(135deg, #ffd700 0%, #ffed4e 100%); color: #1a1a2e; padding: 0.8rem 1.5rem; border-radius: 10px; text-decoration: none; font-weight: 700; transition: all 0.3s ease;">
                ➕ Novo Veículo
            </a>
        </div>

        <div style="overflow-x: auto;">
            <table style="width: 100%; border-collapse: collapse;">
                <thead>
                    <tr style="background: rgba(255, 215, 0, 0.1); border-bottom: 2px solid #ffd700;">
                        <th style="padding: 1rem; text-align: left; color: #ffd700; font-weight: 700;">Marca</th>
                        <th style="padding: 1rem; text-align: left; color: #ffd700; font-weight: 700;">Descrição</th>
                        <th style="padding: 1rem; text-align: left; color: #ffd700; font-weight: 700;">Ano</th>
                        <th style="padding: 1rem; text-align: left; color: #ffd700; font-weight: 700;">Preço</th>
                        <th style="padding: 1rem; text-align: left; color: #ffd700; font-weight: 700;">Cor</th>
                        <th style="padding: 1rem; text-align: left; color: #ffd700; font-weight: 700;">KM</th>
                        <th style="padding: 1rem; text-align: center; color: #ffd700; font-weight: 700;">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($carros as $carro)
                        <tr style="border-bottom: 1px solid rgba(255, 215, 0, 0.1); transition: background 0.3s ease;" onmouseover="this.style.background='rgba(255, 215, 0, 0.05)'" onmouseout="this.style.background='transparent'">
                            <td style="padding: 1rem; color: rgba(255, 255, 255, 0.9);">{{ $carro->marca }}</td>
                            <td style="padding: 1rem; color: rgba(255, 255, 255, 0.9); max-width: 300px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">{{ $carro->descricao }}</td>
                            <td style="padding: 1rem; color: rgba(255, 255, 255, 0.9);">{{ $carro->Ano_fabricacao }}</td>
                            <td style="padding: 1rem; color: #ffd700; font-weight: 700;">R$ {{ number_format($carro->preco, 2, ',', '.') }}</td>
                            <td style="padding: 1rem; color: rgba(255, 255, 255, 0.9);">{{ $carro->cor }}</td>
                            <td style="padding: 1rem; color: rgba(255, 255, 255, 0.9);">{{ number_format($carro->kmRodado, 0, ',', '.') }} km</td>
                            <td style="padding: 1rem; text-align: center;">
                                <div style="display: flex; gap: 0.5rem; justify-content: center;">
                                    <a href="{{ route('admin.editar-veiculo', ['id' => $carro->id]) }}" style="background: rgba(255, 193, 7, 0.2); color: #ffc107; padding: 0.5rem 1rem; border-radius: 8px; text-decoration: none; font-weight: 600; transition: all 0.3s ease; border: 1px solid #ffc107;">
                                        ✏️ Editar
                                    </a>
                                    <a href="{{ route('admin.deletar-veiculo', ['id' => $carro->id]) }}" 
                                       onclick="return confirm('Tem certeza que deseja deletar este veículo?')"
                                       style="background: rgba(244, 67, 54, 0.2); color: #f44336; padding: 0.5rem 1rem; border-radius: 8px; text-decoration: none; font-weight: 600; transition: all 0.3s ease; border: 1px solid #f44336;">
                                        🗑️ Deletar
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
