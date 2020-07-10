<div class="card son-form">
    <div class="card-body">
        <div class="row">
            <table class="table table-sm  table-bordered">
                <thead>
                <tr>
                    <th width="3%" class="text-center">#</th>
                    <th width="50%">Produto</th>
                    <th width="10%">Data</th>
                    <th width="10%" class="text-center">Quant Entrada</th>
                    <th width="10%" class="text-center">Estoque Atual</th>
                    <th width="10%" class="text-right">Valor</th>
                </tr>
                </thead>
                <tbody>
                @foreach($movements as $movement)
                <tr>
                    <td class="text-center">{{$movement->id}}</td>
                    <td>{{$movement->product->name}}</td>
                    <td>{{$movement->product->created_at->format('d/m/Y')}}</td>
                    <td class="text-center">{{$movement->quantidade}}</td>
                    <td class="text-center">{{$movement->product->estoque}}</td>
                    <td class="text-right">R$ {{number_format($movement->product->valor, 2, ',','.') }}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
