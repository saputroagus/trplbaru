@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/cats') }}">Cat</a> :
@endsection
@section("contentheader_description", $cat->$view_col)
@section("section", "Cats")
@section("section_url", url(config('laraadmin.adminRoute') . '/cats'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Cats Edit : ".$cat->$view_col)

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
				{!! Form::model($cat, ['route' => [config('laraadmin.adminRoute') . '.cats.update', $cat->id ], 'method'=>'PUT', 'id' => 'cat-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'nama_cat')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/cats') }}">Cancel</a></button>
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
	$("#cat-edit-form").validate({
		
	});
});
</script>
@endpush
