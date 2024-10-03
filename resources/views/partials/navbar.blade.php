<nav class="navbar navbar-expand-lg bg-body-tertiary  sticky-top">
    <div class="container">
      <a class="navbar-brand" href="/">Royandi Web</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link {{ ($title === 'Home') ? 'active' : '' }}" aria-current="page" href="/">Home</a>
          <a class="nav-link {{ ($title === 'About') ? 'active' : '' }}" href="/about">About</a>
          <a class="nav-link {{ ($title === 'Blog') ? 'active' : '' }}" href="/posts">Blog</a>
          <a class="nav-link {{ ($title === 'Aritmatika') ? 'active' : '' }}" href="/aritmatika">Logika</a>
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </div>
      </div>
    </div>
  </nav>
  