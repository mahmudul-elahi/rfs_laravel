<nav class="navbar navbar-expand-md" id="navbar">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset($settings['site_logo']) }}" alt="לוגו">
        </a>
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
            aria-label="תפריט ניווט">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">דף הבית</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('products.all') }}">מוצרים</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">השכרת מערכות</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">נגישות</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('projects.all') }}">פרויקטים</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">אודותינו</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link last-button" href="#">צור קשר</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
