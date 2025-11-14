<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Veículos Cadastrados') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 shadow sm:rounded-lg">
                <p class="text-dark">Aqui vai a grid/lista dos veículos cadastrados...</p>
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-25xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 shadow sm:rounded-lg">
                <table class="table table-striped table-bordered w-100 border-bottom align-middle">
                    <thead class="table-dark">
                        <tr class="text-center">
                            <th class="px-4 py-3">Marca</th>
                            <th class="px-4 py-3">Descrição</th>
                            <th class="px-4 py-3">Ano Fabricação</th>
                            <th class="px-4 py-3">Preço</th>
                            <th class="px-4 py-3">Cor</th>
                            <th class="px-4 py-3">Sobre</th>
                            <th class="px-4 py-3">KM Rodado</th>
                            <th class="px-4 py-3">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($carros as $carro)
                            <tr class="text-center">
                                <td class="text-truncate border border-dark">{{ $carro->marca }}</td>
                                <td class="text-truncate border border-dark">{{ $carro->descricao }}</td>
                                <td class="text-truncate border border-dark">{{ $carro->Ano_fabricacao }}</td>
                                <td class="text-truncate border border-dark">R$ {{ number_format($carro->preco, 2, ',', '.') }}</td>
                                <td class="text-truncate border border-dark">{{ $carro->cor }}</td>
                                <td class="text-truncate border border-dark" style="max-width: 800px;" title="{{ $carro->Sobre }}">{{ $carro->Sobre }}</td>
                                <td class="text-truncate border border-dark">{{ $carro->kmRodado }}</td>
                                <td class="text-truncate border border-dark">
                                <a href="{{route('admin.editar-veiculo', ['id' => $carro->id ])}}" class="btn btn-warning btn-sm me-2">🛠</a>
                                <a href="{{ route('admin.deletar-veiculo', ['id' => $carro->id]) }}" class="btn btn-danger btn-sm me-2" onclick="return confirm('Tem certeza que deseja deletar este veículo?')">⚔</a>
                            </td>
                            @endforeach
                        </tbody>
                </table>
            </div>
        </div>
    </div>

</x-app-layout>
