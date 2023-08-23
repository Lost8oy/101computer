<div class="navbar-11">
    <div class="content">
      <div class="column">
        <img class="logo-icon" id="logo" alt="" src="{{ asset('photo/public/IcBaselineMenu.svg') }}" />
        <img class="logo-icon" id="logo" alt="" src="{{ asset('photo/public/COMPUTER101.svg') }}" />
      </div>
      <div class="column1">
          <div>{{ Auth::user()->name }}</div>

          <img id="dropbtn2"
            class="chevron-down-icon"
            alt=""
            src="{{ asset('photo/public/BxChevronRight.svg') }}"
          />
      </div>
    </div>
    <div class="content1e" id="dropdown2">
      <div class="menu" id="menu2">
        <div class="hide2">
          <div class="menu-item">
            <a href= "{{ route('profile.edit') }}"><div class="content2">
              <div class="page-one">Profile</div>
            </div></a>
          </div>
          <div class="menu-item">
            <form method="POST" action="{{ route('logout') }}">
              @csrf

              <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                <div class="content2">
                  <div class="page-one">Log Out</div>
                </div>
              </a>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="content1" id="dropdown">
      <div class="menu">
        <div class="menu-item">
          <img
            class="chevron-down-icon"
            alt=""
            src="{{ asset('photo/public/IcRoundHome.svg') }}"
          />

          <a href="dashboard"><div class="content2">
            <div class="page-one">Home</div>
          </div></a>
        </div>
        <div class="menu-item">
          <img
            class="chevron-down-icon"
            alt=""
            src="{{ asset('photo/public/PhComputerTowerFill.svg') }}"
          />

          <a href="index.php"><div class="content2">
            <div class="page-one">Items</div>
          </div></a>

          <img id="dropbtn"
            class="chevron-down-icon"
            alt=""
            src="{{ asset('photo/public/BxChevronRight.svg') }}"
          />
        </div>
        <div class="hide">
          <div class="menu-item">
            <img
              class="chevron-down-icon"
              alt=""
              src="{{ asset('photo/public/IcBaselineComputer.svg') }}"
            />
            <a href="index.css"><div class="content2">
              <div class="page-one">Computers</div>
            </div></a>
            </div>
            <div class="menu-item">
            <img
              class="chevron-down-icon"
              alt=""
              src="{{ asset('photo/public/IcBaselineKeyboard.svg') }}"
            />
            <a href="index.css"><div class="content2">
              <div class="page-one">Keyboards</div>
            </div></a>
            </div>
            <div class="menu-item">
            <img
              class="chevron-down-icon"
              alt=""
              src="{{ asset('photo/public/BxBxsJoystick.svg') }}"
            />
            <a href="index.css"><div class="content2">
              <div class="page-one">Joysticks</div>
            </div></a>
            </div>
            <div class="menu-item">
            <img
              class="chevron-down-icon"
              alt=""
              src="{{ asset('photo/public/IcBaselineMonitor.svg') }}"
            />
            <a href="index.css"><div class="content2">
              <div class="page-one">Monitors</div>
            </div></a>
          </div>
        </div>
        <div class="menu-item">
          <img
            class="chevron-down-icon"
            alt=""
            src="{{ asset('photo/public/BxImages.svg') }}"
          />

          <a href="index.css"><div class="content2">
            <div class="page-one">Image Gallery</div>
          </div></a>
        </div>
        <div class="menu-item">
          <img
            class="chevron-down-icon"
            alt=""
            src="{{ asset('photo/public/HeroiconsGlobeEuropeAfrica20Solid.svg') }}"
          />

          <a href="index.css"><div class="content2">
            <div class="page-one">Visit Us</div>
          </div></a>
        </div>
        <div class="menu-item">
          <img
            class="chevron-down-icon"
            alt=""
            src="{{ asset('photo/public/IcBaselineLocalPhone.svg') }}"
          />

          <a href="index.css"><div class="content2">
            <div class="page-one">Contact Us</div>
          </div></a>
        </div>
        <div class="menu-item">
          <img
            class="chevron-down-icon"
            alt=""
            src="{{ asset('photo/public/HeroiconsUserGroup20Solid.svg') }}"
          />

          <a href="index.css"><div class="content2">
            <div class="page-one">About Us</div>
          </div></a>
        </div>
      </div>
    </div>
  </div>