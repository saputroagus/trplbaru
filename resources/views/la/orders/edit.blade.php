@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/orders') }}">Order</a> :
@endsection
@section("contentheader_description", $order->$view_col)
@section("section", "Orders")
@section("section_url", url(config('laraadmin.adminRoute') . '/orders'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Orders Edit : ".$order->$view_col)

@section("main-content")

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="box">
	<div class="box-header">
		
	</div>
	<div class="box-body">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				{!! Form::model($order, ['route' => [config('laraadmin.adminRoute') . '.orders.update', $order->id ], 'method'=>'PUT', 'id' => 'order-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'tgl_order')
					@la_input($module, 'nama_pembeli')
					@la_input($module, 'alamat_pembeli')
					@la_input($module, 'id_toko')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/orders') }}">Cancel</a></button>
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>

@endsection

@push('scripts')
<script>
$(function () {
	$("#order-edit-form").validate({
		
	});
});
</script>
@endpush
