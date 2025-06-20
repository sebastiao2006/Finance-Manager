  <!-- ! Sidebar -->
<aside class="sidebar" style="background-color: #0f62e4 !important;">


    <div class="sidebar-start">
        <div class="sidebar-head">
            <a href="/" class="logo-wrapper" title="Home">
                <span class="sr-only">Home</span>
                <span class="icon logo" aria-hidden="true"></span>
                <div class="logo-text">
                    <span class="logo-title">Meu Kumbu</span>
                    <span class="logo-subtitle">Dashboard</span>
                </div>

            </a>
            <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
                <span class="sr-only">Toggle menu</span>
                <span class="icon menu-toggle" aria-hidden="true"></span>
            </button>
        </div>
        <div class="sidebar-body">
            <ul class="sidebar-body-menu">
                <li>
                    <a class="active" href="/"><span class="icon home" aria-hidden="true"></span>Dashboard</a>
                </li>
                <li>

                 <li>
                    <a href="{{ route('admin.home.index') }}">
                        <span class="icon folder" aria-hidden="true"></span>
                        Home
                    </a>
                    {{-- <span class="msg-counter">7</span> --}}
                </li>

                    
                </li>
                <li>
                    <a class="show-cat-btn" href="##">
                        <span class="icon document" aria-hidden="true"></span>Dicas de Finanças
                        <span class="category__btn transparent-btn" title="Open list">
                            <span class="sr-only">Open list</span>
                            <span class="icon arrow-down" aria-hidden="true"></span>
                        </span>
                    </a>
                    <ul class="cat-sub-menu">
                        <li>
                            <a href="posts.html">Ver todos</a>
                        </li>
                        <li>
                            <a href="new-post.html">Adicionar </a>
                        </li>
                    </ul>
                </li>
                
{{--                 <li>
                    <a class="show-cat-btn" href="##">
                        <span class="icon image" aria-hidden="true"></span>Planejamentos
                        <span class="category__btn transparent-btn" title="Open list">
                            <span class="sr-only">Open list</span>
                            <span class="icon arrow-down" aria-hidden="true"></span>
                        </span>
                    </a>
                    <ul class="cat-sub-menu">
                        <li>
                            <a href="media-01.html">Ver todos</a>
                        </li>
                        <li>
                            <a href="media-02.html">Adicionar</a>
                        </li>
                    </ul>
                </li> --}}
                <li>
                    <a class="show-cat-btn" href="##">
                        <span class="icon paper" aria-hidden="true"></span>Sobre Nós
                        <span class="category__btn transparent-btn" title="Open list">
                            <span class="sr-only">Open list</span>
                            <span class="icon arrow-down" aria-hidden="true"></span>
                        </span>
                    </a>
                    <ul class="cat-sub-menu">
                        <li>
                            <a href="{{ route('admin.partner.store') }}">Ver todos</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.partner.create') }}">Adicionar </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('admin.blog.index') }}">
                        <span class="icon message" aria-hidden="true"></span>
                        Blog
                    </a>
                    {{-- <span class="msg-counter">7</span> --}}
                </li>
            </ul>
            <span class="system-menu__title">system</span>
            <ul class="sidebar-body-menu">

                <li>
                    <a class="show-cat-btn" href="##">
                        <span class="icon category" aria-hidden="true"></span>Dicas
                        <span class="category__btn transparent-btn" title="Open list">
                            <span class="sr-only">Open list</span>
                            <span class="icon arrow-down" aria-hidden="true"></span>
                        </span>
                    </a>
                    <ul class="cat-sub-menu">
                        <li>
                            <a href="{{ route('admin.tip.index') }}">Dicas</a>
                        </li>
                        <li>
                            <a href="extention-02.html">Adicionar</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="show-cat-btn" href="##">
                        <span class="icon user-3" aria-hidden="true"></span>Users
                        <span class="category__btn transparent-btn" title="Open list">
                            <span class="sr-only">Open list</span>
                            <span class="icon arrow-down" aria-hidden="true"></span>
                        </span>
                    </a>
                    <ul class="cat-sub-menu">
                        <li>
                            <a href="{{ route('admin.user.index') }}">Registro</a>
                        </li>
                        <li>
                            <a href="users-02.html">Inicio de sessão</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('admin.kixi.index') }}"><span class="icon edit" aria-hidden="true"></span>Kixikila</a>
                </li>
                <li>
                    <a href="##"><span class="icon setting" aria-hidden="true"></span>Settings</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="sidebar-footer">
        <a href="##" class="sidebar-user">
            <span class="sidebar-user-img">
                <picture><source srcset="./img/avatar/avatar-illustrated-01.webp" type="image/webp"><img src="./img/avatar/avatar-illustrated-01.png" alt="User name"></picture>
            </span>
            <div class="sidebar-user-info">
                <span class="sidebar-user__title">Nafisa Sh.</span>
                <span class="sidebar-user__subtitle">Support manager</span>
            </div>
        </a>
    </div>
</aside>