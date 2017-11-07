@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/detail_orders') }}">Detail Order</a> :
@endsection
@section("contentheader_description", $detail_order->$view_col)
@section("section", "Detail Orders")
@section("section_url", url(config('laraadmin.adminRoute') . '/detail_orders'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Detail Orders Edit : ".$detail_order->$view_col)

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
				{!! Form::model($detail_order, ['route' => [config('laraadmin.adminRoute') . '.detail_orders.update', $detail_order->id ], 'method'=>'PUT', 'id' => 'detail_order-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'jumlah_barang')
					@la_input($module, 'harga_barang')
					@la_input($module, 'id_barang')
					@la_input($module, 'id_order')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/detail_orders') }}">Cancel</a></button>
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
	$("#detail_order-edit-form").validate({
		
	});
});
</script>
@endpush
