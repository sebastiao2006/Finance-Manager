      
   
   <!-- Right Section -->
   <div class="right-section">
    <div class="nav">
        <button id="menu-btn">
            <span class="material-icons-sharp">
                menu
            </span>
        </button>
        <div class="dark-mode">
            <span class="material-icons-sharp active">
                light_mode
            </span>
            <span class="material-icons-sharp">
                dark_mode
            </span>
        </div>

           <!-- Perfil com clique -->
    <div class="profile" onclick="toggleUserMenu()" style="cursor: pointer;">
      <div class="info">
          <p>Hey, <b>Reza</b></p>
          <small class="text-muted">Admin</small>
      </div>
      <div class="profile-photo">
          <img src="images/profile-1.jpg">
      </div>
  </div>
  
  <div id="userDropdown" style="display: none; position: absolute; top: 60px; right: 20px; background-color: white; border: 1px solid #ccc; border-radius: 8px; box-shadow: 0 5px 15px rgba(0,0,0,0.3); width: 180px; z-index: 999;">
      <ul style="list-style: none; margin: 0; padding: 10px;">
          <li><a href="/perfil" style="display: block; padding: 10px; color: #333; text-decoration: none;">Perfil</a></li>
          <li><a href="/notificacoes" style="display: block; padding: 10px; color: #333; text-decoration: none;">Notificações</a></li>
          <li>
              <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  <button type="submit" style="background-color: transparent; border: none; display: block; width: 100%; padding: 10px; text-align: left; color: #333; cursor: pointer;">
                      Logout
                  </button>
              </form>
          </li>
      </ul>
  </div>

    </div>

    <script>
  function toggleUserMenu() {
      const dropdown = document.getElementById('userDropdown');
      dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
  }

  // Fecha o menu ao clicar fora
  window.addEventListener('click', function (event) {
      const dropdown = document.getElementById('userDropdown');
      const profile = document.querySelector('.profile');

      if (!profile.contains(event.target) && !dropdown.contains(event.target)) {
          dropdown.style.display = 'none';
      }
  });
</script>
    <!-- End of Nav -->
{{--     <div class="button-container">
        <div class="icon-button plus">
            <i class="fas fa-plus"></i>
        </div>
        <div class="icon-button">
            <i class="fas fa-expand-arrows-alt"></i>
        </div>
        <div class="icon-button">
            <i class="fas fa-search"></i>
        </div>
        <div class="icon-button">
            <i class="fas fa-ellipsis-v"></i>
        </div>
    </div> --}}
        
        


    </div>


</div>

<style>
.right-panel {
margin-top: 5%;
flex: 1;
display: flex;
flex-direction: column;
gap: 10px;
}

.info-box {
background: white;
padding: 20px;
border-radius: 20px;
box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
display: flex;
justify-content: space-between;
align-items: center;
width: 100%;
}

.info-text {
display: flex;
flex-direction: column;
}

.info-text span {
font-size: 14px;
color: gray;
}

.info-text strong {
font-size: 20px;
color: black;
font-weight: normal; /* Remover o negrito */
}

.icon-circle {
width: 40px;
height: 40px;
display: flex;
align-items: center;
justify-content: center;
border-radius: 50%;
color: white;
font-size: 20px;
}

.blue {
background-color: #007bff;
}

.green {
background-color: #28a745;
}

.red {
background-color: #dc3545;
}

.dark-green {
background-color: #046c4e;
}
.button-container {
    margin-top: 5px;
    margin-left: 5px;
            display: flex;
            gap: 15px;
        }
        .icon-button {
            width: 50px;
            height: 50px;
            background: white;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            cursor: pointer;
        }
        .icon-button i {
            font-size: 20px;
            color: #666;
        }
        .icon-button.plus i {
            color: red;
        }
</style>

{{--  <style>
.saldo-container {
    text-align: center;
    margin-top: 20px;
    padding: 15px;
    border-radius: 10px;
    max-width: 300px;
    margin: 20px auto;
}

.saldo-header {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 5px;
}

.saldo-header h3 {
    font-size: 16px;
    color: #777;
    margin: 0;
}

.dropdown-icon {
    font-size: 14px;
    cursor: pointer;
}

.saldo-descricao {
    font-size: 14px;
    color: #555;
    margin-bottom: 5px;
}

.saldo-valor {
    font-size: 24px;
    font-weight: bold;
    color: #ffbf00;
}

.icon-visibility {
    font-size: 20px;
    color: #777;
    cursor: pointer;
    transition: color 0.3s;
}

.icon-visibility:hover {
    color: #333;
}

</style> --}}