<x-guest-layout>
    @auth
        <a href="{{ url('/dashboard') }}" class="login">Home</a>
    @else
        <a href="{{ route('login') }}" class="login">Log in</a>

        @if (Route::has('register'))
            <a href="{{ route('register') }}" class="login">Register</a>
        @endif
    @endauth
  </div>
  <div class="overlay">
    <h1 class="title"><span class="leader">micro</span><span class="leader">computer</span></h1>
    <p class="sublead">How Computers Became Personal</p>
    <a href="gallery.php" class="bg-danger btn btn-link btn-sm fw-bold text-decoration-none text-white" type="button">Our Collection</a>
  </div>
</x-guest-layout>