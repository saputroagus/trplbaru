@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/promos') }}">Promo</a> :
@endsection
@section("contentheader_description", $promo->$view_col)
@section("section", "Promos")
@section("section_url", url(config('laraadmin.adminRoute') . '/promos'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Promos Edit : ".$promo->$view_col)

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
				{!! Form::model($promo, ['route' => [config('laraadmin.adminRoute') . '.promos.update', $promo->id ], 'method'=>'PUT', 'id' => 'promo-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'tgl_mulai')
					@la_input($module, 'tgl_berakhir')
					@la_input($module, 'nama_promo')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/promos') }}">Cancel</a></button>
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
	$("#promo-edit-form").validate({
		
	});
});
</script>
@endpush
