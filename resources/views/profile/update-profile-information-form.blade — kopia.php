<x-jet-form-section submit="updateProfileInformation">
    <x-slot name="title">
        Informacje o profilu
    </x-slot>

    <x-slot name="form">
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">My Profile</h3>
          </div>
          <div class="card-body">
              <form>
                <div class="row mb-3">
                  <div class="col-auto">
                    <span class="avatar avatar-lg" style="background-image: url(static/avatars/004f.jpg)"></span>
                </div>
                <div class="col">
                    <div class="mb-2">
                      <label class="form-label">Email-Address</label>
                      <input class="form-control" placeholder="your-email@domain.com"/>
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
      </form>
  </div>
    </x-slot>
    
    <div class="box">

  <div class="card">

    <div class="card-title">
        <x-slot name="description">

        </x-slot>
    </div>


    <x-slot name="form">
        <!-- Profile Photo -->
        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
        <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 sm:col-span-4">
            <!-- Profile Photo File Input -->
            <input type="file" class="hidden"
            wire:model="photo"
            x-ref="photo"
            x-on:change="
            photoName = $refs.photo.files[0].name;
            const reader = new FileReader();
            reader.onload = (e) => {
            photoPreview = e.target.result;
        };
        reader.readAsDataURL($refs.photo.files[0]);
        " />

        <x-jet-label for="photo" value="{{ __('Photo') }}" />

        <!-- Current Profile Photo -->
        <div class="mt-2" x-show="! photoPreview">
            <img src="{{ $this->user->profile_photo_url }}" alt="{{ $this->user->name }}" class="rounded-full h-20 w-20 object-cover">
        </div>

        <!-- New Profile Photo Preview -->
        <div class="mt-2" x-show="photoPreview">
            <span class="block rounded-full w-20 h-20"
            x-bind:style="'background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url(\'' + photoPreview + '\');'">
        </span>
    </div>

    <x-jet-secondary-button class="mt-2 mr-2" type="button" x-on:click.prevent="$refs.photo.click()">
        {{ __('Select A New Photo') }}
    </x-jet-secondary-button>

    @if ($this->user->profile_photo_path)
    <x-jet-secondary-button type="button" class="mt-2" wire:click="deleteProfilePhoto">
        {{ __('Remove Photo') }}
    </x-jet-secondary-button>
    @endif

    <x-jet-input-error for="photo" class="mt-2" />
</div>
@endif

<!-- Name -->
<div class="col-span-6 sm:col-span-4">
    <x-jet-label for="name" value="{{ __('Name') }}" />
    <x-jet-input id="name" type="text" class="mt-1 block w-full" wire:model.defer="state.name" autocomplete="name" />
    <x-jet-input-error for="name" class="mt-2" />
</div>

<!-- Email -->
<div class="col-span-6 sm:col-span-4">
    <x-jet-label for="email" value="{{ __('Email') }}" />
    <x-jet-input id="email" type="email" class="mt-1 block w-full" wire:model.defer="state.email" />
    <x-jet-input-error for="email" class="mt-2" />
</div>
</x-slot>

<x-slot name="actions">
    <x-jet-action-message class="mr-3" on="saved">
        {{ __('Saved.') }}
    </x-jet-action-message>

    <x-jet-button>
        {{ __('Save') }}
    </x-jet-button>
</x-slot>
</div>
</div>
</x-jet-form-section>
