<x-layouts.app>

    <section class="section">
        <form action="{{ route('profile.update' , $profile) }}" method="POST">
            @csrf
            <input type="hidden" name="_method" value="PUT">
            <div class="field">
              <label class="label">Name</label>
              <div class="control">
                <input class="input @error('name')is-danger @enderror" value="{{ $profile->name  }}" type="text" placeholder="profile name" name="name">
              </div>
              @error('name')
                <p class="help is-danger">{{ $message }}</p>
              @enderror
            </div>
            <div class="field">
              <label class="label">Slug</label>
              <div class="control">
                <input class="input @error('slug') is-danger  @enderror" value="{{ $profile->slug }}" type="text" placeholder="Slug" name="slug">
              </div>
              @error('slug')
                <p class="help is-danger">{{ $message }}</p>
              @enderror
            </div>
            <div class="field">
                <label class="label">Country</label>
                <div class="control">
                  <input class="input @error('country')is-danger @enderror" value="{{ $profile->country  }}" type="text" placeholder="profile country" name="country">
                </div>
                @error('country')
                  <p class="help is-danger">{{ $message }}</p>
                @enderror
              </div>

              <div class="field">
                <label class="label">About</label>
                <div class="control">
                  <input class="input @error('about')is-danger @enderror" value="{{ $profile->about  }}" type="text" placeholder="About" name="about">
                </div>
                @error('about')
                  <p class="help is-danger">{{ $message }}</p>
                @enderror
              </div>
            <div class="field is-grouped">
              <div class="control">
                <button class="button is-link">Submit</button>
              </div>
              <div class="control">
                <button class="button is-link is-light">Cancel</button>
              </div>
            </div>
          </form>

    </section>
    </x-layouts.app>
