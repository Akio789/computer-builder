@extends('layouts.main')

@section('content')

<div class="container">
	<div class="d-flex justify-content-center">
		<div class="card">
			<div class="card-header">
				<h3>Add new slot</h3>
				<div class="d-flex justify-content-end social_icon">
				</div>
			</div>
			<div class="card-body">
            <form action="{{ route('motherboard.components.store', ['motherboard' => $motherboard->id]) }}" method="POST">
                @csrf
                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-microchip"></i></span>
						</div>
						<select name="component" id="component" class="form-control">
                            <option value="" selected disabled hidden>Select a component</option>
                            @foreach ($components as $component)
                            <option value="{{ $component->id }}">{{ $component->name }}</option>
                            @endforeach
                        </select>
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-desktop"></i></span>
						</div>
						<input name="quantity" id="quantity" type="number" class="form-control" placeholder="quantity" value="1">
					</div>
                    <div class="form-group">
						<input type="submit" value="Add" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
			</div>
		</div>
	</div>
</div>

@endsection