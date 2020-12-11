<div class="table-responsive-sm">
    <table class="table table-striped" id="orders-table">
        <thead>
        <tr>
            <th>@lang('models/myOrders.fields.id')</th>
            <th>@lang('models/myOrders.fields.companyName')</th>
            <th>@lang('models/myOrders.fields.projectName')</th>
            <th>@lang('models/myOrders.fields.address')</th>
            <th>@lang('models/myOrders.fields.zipcode')</th>
            <th>@lang('models/myOrders.fields.province')</th>
            <th>@lang('models/myOrders.fields.city')</th>
            <th>@lang('models/myOrders.fields.status')</th>
            <th colspan="3">@lang('crud.action')</th>
        </tr>
        </thead>
        <tbody>
        @foreach($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->companyName }}</td>
                <td>{{ $order->projectName }}</td>
                <td>{{ $order->address }}</td>
                <td>{{ $order->zipcode }}</td>
                <td>{{ $order->province }}</td>
                <td>{{ $order->city }}</td>
                <td>{{ $order->status }}</td>
                <td>
                    {!! Form::open(['route' => ['orders.destroy', $order->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('orders.show', [$order->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('orders.edit', [$order->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                         @can('delete_orders')

                                {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                        @endcan
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
