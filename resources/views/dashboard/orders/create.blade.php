@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">Nova order</div>
				<div class="card-body">
					<form method="POST" action="{{route('order.store')}}">
						@csrf
						<div class="form-group row">
							<label for="email" class="col-md-4 col-form-label text-md-right">Status</label>
							<div class="col-md-6">
								<select id="status" name="status" class="form-control {{ $errors->has('status') ? 'is-invalid' : ''}}">
									<option value="">Selecione o status</option>
									<option value="cancel">Cancelado</option>
									<option value="pending">Pendente</option>
									<option value="delivered">Enviado</option>
								</select>
								@if($errors->has('status'))
									<span class="invalid-feedback" role="alert">
										<strong>
											{{ $errors->first('status') }}
										</strong>
									</span>
								@endif
							</div>

						</div>

						<div class="form-group row">
							<label for="email" class="col-md-4 col-form-label text-md-right">Código de rastreio</label>
							<div class="col-md-6">
								<input type="text" name="track_code" class="form-control  {{ $errors->has('track_code') ? 'is-invalid' : ''}}" value="" />
								@if($errors->has('track_code'))
									<span class="invalid-feedback" role="alert">
										<strong>
											{{ $errors->first('track_code') }}
										</strong>
									</span>
								@endif
							</div>
						</div>
						<div class="form-group row">
							<label for="email" class="col-md-4 col-form-label text-md-right"></label>
							<div class="col-md-6">
								<input type="submit" class="btn btn-primary" value= "Salvar" />
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
