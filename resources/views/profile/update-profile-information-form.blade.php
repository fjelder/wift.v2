<x-jet-form-section submit="updateProfileInformation" type="error">
    <x-slot name="title">
        Mój profil
    </x-slot>

    <x-slot name="description">
        Zaktualizuj swoje dane koleżko
    </x-slot>

    <x-slot name="form">


        <div class="row mb-3">
          <div class="col-auto">
            <span class="avatar avatar-lg" style="background-image: url(static/avatars/004f.jpg)"></span>
        </div>
        <div class="col">
            <div class="mb-2">
              <label class="form-label">Login:</label>
              <input class="form-control" value="{{ Auth::user()->name }}" readonly="" />
            </div>
            <div class="mb-2">
              <label class="form-label">Adres email</label>
              <input class="form-control" value="{{ Auth::user()->email }}" readonly="" />
            </div>
            

      </div>
  </div>

  <div class="mb-2">
      <label class="form-label">Bio</label>
      <textarea class="form-control" rows="5">Big belly rude boy, million dollar hustler. Unemployed.</textarea>
  </div>
  <div class="mb-2">
      <label class="form-label">Email-Address</label>
      <input class="form-control" placeholder="your-email@domain.com"/>
  </div>
  <div class="mb-2">
      <label class="form-label">Password</label>
      <input type="password" class="form-control" value="password"/>
  </div>
  <div class="form-footer">
      <button class="btn btn-primary btn-block">Save</button>
  </div>


</x-slot>


</x-jet-form-section>
