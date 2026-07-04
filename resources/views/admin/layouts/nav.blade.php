<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}">管理画面</a>

        <button class="navbar-toggler" type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse show" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">設定</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">管理ユーザー</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">レッスンリソース</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">レッスン管理</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">ファイル管理</a>
                </li>
            </ul>

            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">管理ユーザー</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">ログアウト</a>
                </li>
            </ul>
        </div>
    </div>
</nav>