<!-- Sidebar Section -->
<aside>
    <div class="toggle">
        <div class="logo">
            <img src="images/logo.png">
            <h2>KUMBU<span class="danger">.KZ</span></h2>
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
        <a href="{{ route('tip.index') }}" class="{{ request()->routeIs('tip.index') ? 'active' : '' }}">
            <span class="material-icons-sharp"> account_balance </span>
            <h3>Contas</h3>
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
        <a href="{{ route('tip.index') }}" class="{{ request()->routeIs('settings.index') ? 'active' : '' }}">
            <span class="material-icons-sharp"> lightbulb </span>
            <h3>Escola de Finanças</h3>
        </a>
        <a href="{{ route('goals.index') }}" class="{{ request()->routeIs('goals.index') ? 'active' : '' }}">
            <span class="material-icons-sharp"> track_changes </span>
            <h3>Metas</h3>
        </a>
        <a href="{{ route('category.index') }}" class="{{ request()->routeIs('category.index') ? 'active' : '' }}">
            <span class="material-icons-sharp"> category </span>
            <h3>Categoria</h3>
        </a>
        <a href="{{ route('calendar.index') }}" class="{{ request()->routeIs('calendar.index') ? 'active' : '' }}">
            <span class="material-icons-sharp"> calendar_today </span>
            <h3>Calendário</h3>
        </a>
        <a href="{{ route('tip.index') }}" class="{{ request()->routeIs('tip.index') ? 'active' : '' }}">
            <span class="material-icons-sharp"> trending_up </span>
            <h3>Desempenho</h3>
        </a>
        <a href="{{ route('settings.index') }}" class="{{ request()->routeIs('settings.index') ? 'active' : '' }}">
            <span style="font-size: 24px; font-weight: bold; font-family: Arial, sans-serif;"> K </span>
            <h3>Kixikila</h3>
        </a>
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
