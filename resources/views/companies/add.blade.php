<x-app-layout>
    <x-slot name="header">
        {{ __('Add companies') }}
    </x-slot>
    <div class="row">
                <!-- [ form-element ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Dane kontaktowe</h5>
                        <hr>
                    </div>
                    <div class="card-body">
           
                        <div class="row">
                            <div class="col-lg-6">
                                <form action="{{ route('companies.store') }}" method="post">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label">Nazwa</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label">Nazwa skrócona</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label">Adres</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="ulica">
                                        </div>                                        
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label"></label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" placeholder="miasto">
                                        </div>
                                        <div class="col-sm-3 mt-2-sm">
                                            <input type="text" class="form-control" placeholder="kod pocztowy">
                                        </div>                                        
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label">Telefon (komórkowy)</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="+00 000 000 000">
                                        </div>                                        
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label">Telefon (stacjonarny)</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="(00) 000 00 00">
                                        </div>                                        
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label">Informacje dodatkowe</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" name="description"></textarea>
                                        </div>                                        
                                    </div>
                                    
                        
                                    <div class="form-group row">
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn  btn-primary">{{ __('Save') }}</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                           
                        </div>
                        
                    </div>
            </div>

            <!-- [ form-element ] end -->
    </div>
 </x-app-layout>