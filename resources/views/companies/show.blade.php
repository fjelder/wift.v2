<x-app-layout>
	<x-slot name="header">
		{{ __('Companies') }}
	</x-slot>

	<div class="box row row-cards">

		<div class="col-sm-8">		
			<div class="card">

				<div class="card-header d-print-none">
					<h3 class="card-title">Dane kontaktowe</h3>


				</div>
				<div class="card-body">
					<dl class="row">
						<dt class="col-sm-3">Pełna nazwa</dt>
						<dd class="col-sm-9">{{ $company-> name }}</dd>

						<dt class="col-sm-3">Nazwa skrócona</dt>
						<dd class="col-sm-9">{{ $company-> short_name }}</dd>

						<dt class="col-sm-3">Dane teleadresowe</dt>
						<dd class="col-sm-9">
							<p class="m-0">{{ $company-> street }}</p>
							<p>{{ $company-> post_code }} {{ $company-> city }}</p>  
							<p><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-md" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"></path><rect x="7" y="4" width="10" height="16" rx="1"></rect><line x1="11" y1="5" x2="13" y2="5"></line><line x1="12" y1="17" x2="12" y2="17.01"></line></svg> {{ $company-> phone_number_1 }}</p>
							<p>
								<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-md" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"></path><path d="M4 4h5l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v5a1 1 0 0 1 -1 1a16 16 0 0 1 -16 -16a1 1 0 0 1 1 -1"></path><path d="M15 7a2 2 0 0 1 2 2"></path><path d="M15 3a6 6 0 0 1 6 6"></path></svg> {{ $company-> phone_number_2 }}</p>
								<p><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-md" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"></path><rect x="3" y="5" width="18" height="14" rx="2"></rect><polyline points="3 7 12 13 21 7"></polyline></svg> biuro@biuro.pl</p>
							</dd>

						</dl>


						<div class="hr-text">Info</div>
						<p class="text-muted">Ostatnia aktualizacja danych: {{ $company-> updated_at->format('d.m.Y') }}r.</p>
					</div>


				</div>
			</div>

			<div class="col-sm-4">		
				<div class="card">

					<div class="card-header d-print-none">
						<h3 class="card-title">Pracownicy</h3>
						<div class="card-options">
							<a href="{{ route('people.create', ['company' => $company->id]) }}" class="btn btn-primary">
								<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-md" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"></path><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg> Nowy
							</a>
              </div>

					</div>
					<div class="card-body">
						@foreach($company->people as $person)
						{{ $loop->iteration }}.
						<a href="{{ route('people.show', $person->id) }}">
							{{ $person->first_name }}
							{{ $person->last_name }}
						</a>
					</br>
					@endforeach
				</div>
			</div>


		</div>


	</div>




</div>
</x-app-layout>