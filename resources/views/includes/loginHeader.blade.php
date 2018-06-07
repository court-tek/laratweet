<header>
  <div class="head-container">

    <div class="logo flex-game">
      <a class ="insta" href="">
        Laratweet
      </a>
    </div>

    @guest
    <div class="login-area">
        <form method="POST" action="{{ route('login') }}">
            @csrf
          <table cellspacing="0" role="presentation">
            <tbody>
              <tr>
                <td class="html7magic">
                  <label for="email" class="col">{{ __('E-Mail Address') }}</label>
                </td>
                <td class="html7magic">
                  <label for="password" class="col">{{ __('Password') }}</label>
                </td>
              </tr>
              <tr>
                <td>
                  <input id="email" type="email" class="soul-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                  @if ($errors->has('email'))
                      <span class="invalid-feedback">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                  @endif
                </td>
                <td>
                  <input id="password" type="password" class="soul-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                  @if ($errors->has('password'))
                      <span class="invalid-feedback">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif
                </td>
                <td>
                  <button type="submit" class="btn">
                      {{ __('Login') }}
                  </button>
                </td>
              </tr>
              <tr>
                <td class="login_form_label"></td>
                <td class="login_form_label">
                  <div class="password_forgot">
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </form>
      </div> {{-- login area ends here --}}

      @else
        <div class="user-info">
          <ul>
            <li>
              <a href="#">
                {{ Auth::user()->username }}
              </a>
            </li>
            <li>
              <a href="#">
                Home
              </a>
            </li>
          </ul>
        </div>{{-- user-info ends --}}
        <div class="user-dash">
          <ul>
            <li>
              <a href="#">
                <i class="fas fa-users"></i>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fas fa-comments"></i>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="far fa-bell"></i>
              </a>
            </li>
          </ul>
        </div>{{-- user_dash ends --}}
          <div class="options-dropdown">
            <i class="fas fa-caret-down"></i>

            {{-- <div id="myDropdown" class="dropdown-content">
              <a href="#">Link 1</a>
              <a href="#">Link 2</a>
              <a class="dropdown-item" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                 document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
            </div>{{-- myDropdown ends here --}}
          </div>{{-- options_dropdown ends here --}}
        </div>
        <div class="search-area">
          <ul>
            <li>
              <i class="fas fa-search"></i>
            </li>
            <li>
              <input type="text" name="" value="">
            </li>
            <li>
              <a href="#">
                <i class="fas fa-times"></i>
              </a>
            </li>
          </ul>
        </div>
      @endguest
    </div> {{-- head container end here --}}
  </header>
