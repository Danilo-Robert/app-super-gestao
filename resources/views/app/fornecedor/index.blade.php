<h3>Fornecedor</h3>

@php



@endphp

@isset($fornecedores)

    @forelse ($fornecedores as $indice => $fornecedor)
        Fornecedor: {{ $fornecedor['nome'] }}
        <br>
        Status: {{ $fornecedor['status'] }}
        <br>
        CNPJ: {{ $fornecedor['cnpj'] ?? '' }}
        <br>
        Telefone: ({{ $fornecedor['ddd'] ?? ''}}) {{ $fornecedor['telefone'] ?? ''}}
        @empty
        Não existe fornecedores cadastrados!
    @endforelse    
@endisset