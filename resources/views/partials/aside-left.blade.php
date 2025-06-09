<!-- Sidebar Section -->
<aside>
    <div class="toggle">
        <div class="logo">
            <a href="{{ route('site.home.index') }}" style="display: inline-block; text-decoration: none;">
    <img src="/assets/img/logonovo.png" alt="Imagem de entradas" style="height: 140px; width: 100px; transition: transform 0.3s ease;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
        </div>
        <div class="close" id="close-btn">
            <span class="material-icons-sharp"> close </span>
        </div>
    </div>

 <div class="sidebar">
        <a href="{{ route('dashboard.index') }}" class="{{ request()->routeIs('dashboard.index') ? 'active' : '' }}">
            <span class="material-icons-sharp"> dashboard </span>
            <h3>Dashboard</h3>
        </a>
        <a href="{{ route('transaction.index') }}" class="{{ request()->routeIs('transaction.index') ? 'active' : '' }}">
            <span class="material-icons-sharp"> sync_alt </span>
            <h3>Transações</h3>
        </a>
        <a href="{{ route('planning.index') }}" class="{{ request()->routeIs('planning.index') ? 'active' : '' }}">
            <span class="material-icons-sharp"> flag </span>
            <h3>Planejamento</h3>
        </a>
        <a href="{{ route('report.index') }}" class="{{ request()->routeIs('report.index') ? 'active' : '' }}">
            <span class="material-icons-sharp"> assessment </span>
            <h3>Relatórios</h3>
        </a>

        <a href="{{ route('goals.index') }}" class="{{ request()->routeIs('goals.index') ? 'active' : '' }}">
            <span class="material-icons-sharp"> track_changes </span>
            <h3>Metas</h3>
        </a>
        <a href="{{ route('category.index') }}" class="{{ request()->routeIs('category.index') ? 'active' : '' }}">
            <span class="material-icons-sharp"> category </span>
            <h3>Categoria</h3>
        </a>

        <a href="{{ route('tip.index') }}" class="{{ request()->routeIs('tip.index') ? 'active' : '' }}">
            <span class="material-icons-sharp"> trending_up </span>
            <h3>Desempenho</h3>
        </a>

        <a href="{{ route('kixi.index') }}" class="{{ request()->routeIs('kixi.index') ? 'active' : '' }}">
            <span style="font-size: 24px; font-weight: bold; font-family: Arial, sans-serif;"> K </span>
            <h3>Kixikila</h3>
        </a>

        <a href="{{ route('settings.index') }}" class="{{ request()->routeIs('settings.index') ? 'active' : '' }}">
            <span class="material-icons-sharp"> settings </span>
            <h3>Definições</h3>
        </a>
        <div></div>
    </div>
</aside>
<!-- End of Sidebar Section -->

<!-- End of Sidebar Section -->
<style>
    .sidebar-link.active {
    background-color: #0f62e4; /* Altere a cor de fundo para o link ativo */
    color: white; /* Texto branco para o item ativo */
}

</style>

<script>
    // Selecione todos os links da sidebar
    const sidebarLinks = document.querySelectorAll('.sidebar-link');

    // Adiciona um evento de clique a cada link
    sidebarLinks.forEach(link => {
        link.addEventListener('click', function() {
            // Remove a classe 'active' de todos os links
            sidebarLinks.forEach(item => item.classList.remove('active'));

            // Adiciona a classe 'active' ao link clicado
            this.classList.add('active');
        });
    });
</script>
