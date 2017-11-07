@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/barang_promos') }}">Barang Promo</a> :
@endsection
@section("contentheader_description", $barang_promo->$view_col)
@section("section", "Barang Promos")
@section("section_url", url(config('laraadmin.adminRoute') . '/barang_promos'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Barang Promos Edit : ".$barang_promo->$view_col)

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
				{!! Form::model($barang_promo, ['route' => [config('laraadmin.adminRoute') . '.barang_promos.update', $barang_promo->id ], 'method'=>'PUT', 'id' => 'barang_promo-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'harga_potongan')
					@la_input($module, 'id_barang')
					@la_input($module, 'id_promo')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/barang_promos') }}">Cancel</a></button>
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
	$("#barang_promo-edit-form").validate({
		
	});
});
</script>
@endpush
