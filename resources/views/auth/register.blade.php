<x-layouts.app>
    <div class="columns">
        <div class="column is-3 is-offset-two-fifths">
            <section class="container " style="margin-bottom: 30px;margin-top: 100px">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="field">
                        <label class="label" for="email">{{ __('Name') }}</label>
                        <div class="control">
                            <input id="name" type="text" class="input @error('name') is-danger @enderror" name="name"
                                value="{{ old('name') }}" required autocomplete="name" autofocus>
                        </div>

                        @error('name')
                            <p class="help is-danger" role="alert">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

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

                    {{-- <div class="select is-success" > --}}
                        {{-- <select name="role" > --}}
                            <input type="hidden" value="1" name="role">
                          {{-- <option value="1" type="hidden">1</option> --}}
                        {{-- </select> --}}
                      {{-- </div> --}}

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

                    <div class="field">
                        <label class="label" for="password-confirm">{{ __('Confirm Password') }}</label>
                        <div class="control">
                            <input id="password-confirm" type="password" class="input" name="password_confirmation" required
                                autocomplete="new-password">
                        </div>
                    </div>

                    <hr>

                    <div class="field is-form-action-buttons">
                        <button type="submit" class="button is-primary">
                            {{ __('Register') }}
                        </button>

                        <a class="button is-text" href="{{ route('login') }}">
                            {{ __('Login') }}
                        </a>
                    </div>
                </form>
            </section>
        </div>
    </div>
</x-layouts.app>
