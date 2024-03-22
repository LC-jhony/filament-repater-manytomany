<div>
    <table class="divide-y divide-gray-200 dark:divide-none">
        <thead class="bg-green-500">

        <tr class="text-white">
            <th class="p-2 text-start uppercase text-white font-medium text-xs border border-white">COD.</th>
            <th class="p-2 text-start uppercase text-white font-medium text-xs border border-white">Descripcion</th>
            <th class="p-2 text-start uppercase text-white font-medium text-xs border border-white">P:U</th>
            <th class="p-2 text-start uppercase text-white font-medium text-xs border border-white">U.M</th>
            <th class="p-2 text-start uppercase text-white font-medium text-xs border border-white">ingreso y egreso</th>
            <th class="p-2 text-start uppercase text-white font-medium text-xs border border-white">O/C</th>
            @foreach ($days as $dia)
            <th
                class="px-6 py-3 text-center
                text-xs font-medium whitespace-nowrap text-white uppercase tracking-wider dark:bg-gray-900
                dark:text-gray-400 border border-white">
                {{ $dia }}</th>
        @endforeach
        </tr>
        </thead>
        <tbody colspan="6" class="bg-white divide-y divide-gray-200 border border-slate-100">
        @foreach ($categoriesWithProducts as $category)
            <tr class="bg-rose-500 text-white font-medium text-xs uppercase">
                {{--<td colspan="36" rowspan="{{ $category->products->count() + 1 }}">{{ $category->name }}</td>--}}
                <td>{{$category->id}}</td>
                <td  colspan="36">{{$category->name}}</td>
            </tr>
            @foreach ($category->products as $product)
                <tr>
                    <td rowspan="2">{{ $product->code }}</td>
                    <td rowspan="2">{{ $product->name }}</td>
                    <td rowspan="2">{{ $product->pu }}</td>
                    <td rowspan="2">{{ $product->um }}</td>
                    <td class="px-2 border">Entrada</td>
                    <td rowspan="2">{{$product->oc}}</td>
                    @foreach ( $days as $day )
                        <td>{{ $product->quantity }}</td>
                    @endforeach
                    <!-- Agrega más columnas según tus necesidades -->
                </tr>
                <tr>
                    <td class="px-2 bg-gray-200 border">Salida</td>
                    @foreach ($days as $day)
                        <td class="px-2 bg-gray-200 border">
                            {{ $dates->where('dia', $day)->pluck($product->id)->first() ?:'-' }}
    
                        </td>
                    @endforeach
                </tr>
                
            @endforeach
        @endforeach
        </tbody>
    </table>
</div>






