<x-app-layout>
	<x-slot name="header">
		Nowy kontakt osobowy
	</x-slot>

	<div class="box row row-cards">

		<div class="col-sm-6">		
			<div class="card">

				<!-- <div class="card-header">
					<h3 class="card-title">Dane kontaktowe</h3>


				</div> -->
				<div class="card-body">
					<div class="form-group">
						<label class="form-label">Imię</label>
						<input type="text" name="first_name" class="form-control">
					</div>
					<div class="form-group">
						<label class="form-label">Nazwisko</label>
						<input type="text" name="last_name" class="form-control">
					</div>
					<div class="form-group">
						<label class="form-label">Stanowisko</label>
						<input type="text" name="workstand" class="form-control">
					</div>
					<div class="form-group">
						<label class="form-label">Telefon</label>
						<input type="text" name="phone_number" class="form-control">
					</div>
					<div class="form-group">
						<label class="form-label">Email</label>
						<input type="text" name="email" class="form-control">
					</div>
					<div class="form-group">
						<label class="form-label">Podmiot</label>
						<select class="form-select">
							@foreach($companies as $company)
							@if($company->id == $current_company)
							<option value="{{$company->id}}" selected="">{{$loop->iteration }}. {{$company->name}}</option>
							@else
							<option value="{{$company->id}}">{{$loop->iteration }}. {{$company->name}}</option>
							@endif
							@endforeach
						</select>
					</div>
					<div class="form-group">
						<label class="form-label">Informacje dodatkowe</label>
						<textarea class="form-control" rows="6"></textarea>
					</div>
					
					
				</div> <!-- card-body -->
				<div class="card-footer">
					<button class="btn btn-primary">Save</button>
				</div>


			</div>
		</div>


	</div>


</div>




</div>
</x-app-layout>