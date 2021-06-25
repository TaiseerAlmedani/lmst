<x-layouts.app>
    <div class="columns">
        <div class="column is-3 is-offset-two-fifths">
            <section class="container " style="margin-bottom: 30px;margin-top: 100px">
                <form method="POST" action="{{ route('login') }}">
                    @csrf


                    <div class="field">
                        <label class="label" for="email">{{ __('E-Mail Address') }}</label>
                        <div class="control">
                            <input  id="email" type="email" class="input @error('email') is-danger @enderror" name="email"
                                value="{{ $email ?? old('email') }}" required autocomplete="email">
                        </div>
                        @error('email')
                            <p class="help is-danger" role="alert">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>



                    <div class="field">
                        <label class="label" for="password">{{ __('Password') }}</label>
                        <div class="control">
                            <input id="password" type="password" class="input @error('password') is-danger @enderror"
                                name="password" required autocomplete="new-password">
                        </div>

                        @error('password')
                            <p class="help is-danger" role="alert">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>


                    <hr>

                    <div class="field is-form-action-buttons">
                        <button type="submit" class="button is-primary">
                            {{ __('Login') }}
                        </button>

                        <a class="button is-text" href="{{ route('register') }}">
                            {{ __('Register') }}
                        </a>
                    </div>
                </form>
            </section>
        </div>
    </div>
</x-layouts.app>
