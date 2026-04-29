<header class="cabecalho">
    <nav class="nav">
        <x-application-logo/>

        <div class="nav-links">
            <a href="#funcionalidades">Funcionalidades</a>
            <a href="#plataformas">Plataformas</a>
        </div>

        <div class="nav-ctas">
            <x-botao corTexto="white"
                link="{{route('login')}}"
                class="btn-ghost btn-sm"
            />
            <x-botao cor="var(--blue)"
                texto="Começar grátis →"
                corTexto="white"
                link="{{route('register')}}"
                class="btn-primary btn-sm"
            />
        </div>
    </nav>
</header>
