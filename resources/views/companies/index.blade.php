<x-app-layout>
	<x-slot name="header">
			{{ __('Companies') }}
	</x-slot>

	<div class="row">

			<div class="col-xl-12">
				<div class="card">
					<div class="card-header">
						<h5>Lista firma współpracujących</h5>
						<span class="d-block m-t-5">wybierz <code>firmę</code>, żeby zobaczyć szczegóły</span>
					</div>
					<div class="card-block table-border-style">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>#</th>
									<th>Nazwa pełna</th>
									<th>Nazwa skrócona</th>
								</tr>
							</thead>
							<tbody>
								@foreach($companies as $company)
								<tr>
									<td>{{ $loop->iteration }}</td>
									<td><a href="{{ route('companies.show', $company->id)}}">{{ $company->name }}</a></td>
									<td>{{ $company->short_name }}</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>





	</div>
</x-app-layout>