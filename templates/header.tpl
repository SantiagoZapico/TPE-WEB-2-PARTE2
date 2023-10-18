    <header>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="/TPE-WEB2-Parte2/home">PRADO</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                    {if isset($smarty.session.EMAIL_USER)}
                        <li class="nav-item ml-auto">
                            <a class="navbar-brand" href="logout">{$smarty.session.EMAIL_USER} (LOGOUT)</a>
                        </li>
                    {/if}
                    </ul>
                </div>
            </div>
            </nav>
    </header>