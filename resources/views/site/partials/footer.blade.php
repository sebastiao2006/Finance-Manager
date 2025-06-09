<footer id="footer" class="footer bg-dark text-light py-5">
  <div class="container">
    <div class="row gy-4">

      <!-- Sobre o Kumbu -->
      <div class="col-lg-4 col-md-6 footer-about">
        <a href="{{ route('site.home.index') }}" class="d-flex align-items-center mb-3 text-decoration-none">
          <h2 class="fw-bold text-primary">Meu Kumbu</h2>
        </a>
        <p>Seu assistente inteligente para controle financeiro pessoal. Simplifique suas finanças, acompanhe gastos e conquiste seus objetivos.</p>
        <div class="footer-contact mt-3">
          <p><strong>Endereço:</strong> Rua Exemplo, 123 - Luanda, Angola</p>
          <p><strong>Telefone:</strong> +244 912 345 678</p>
          <p><strong>Email:</strong> <a href="mailto:contato@kumbu.com" class="text-light">contato@kumbu.com</a></p>
        </div>
      </div>

      <!-- Links úteis -->
      <div class="col-lg-2 col-md-3 footer-links">
        <h5 class="mb-3">Links úteis</h5>
        <ul class="list-unstyled">
          <li><a href="{{ route('site.home.index') }}" class="text-light text-decoration-none d-block py-1">Início</a></li>
          <li><a href="#" class="text-light text-decoration-none d-block py-1">Sobre Nós</a></li>
          <li><a href="#" class="text-light text-decoration-none d-block py-1">Serviços</a></li>
          <li><a href="#" class="text-light text-decoration-none d-block py-1">Termos de Uso</a></li>
        </ul>
      </div>

      <!-- Serviços -->
      <div class="col-lg-2 col-md-3 footer-links">
        <h5 class="mb-3">Serviços</h5>
        <ul class="list-unstyled">
          <li><a href="#" class="text-light text-decoration-none d-block py-1">Gestão Financeira</a></li>
          <li><a href="#" class="text-light text-decoration-none d-block py-1">Relatórios</a></li>
          <li><a href="#" class="text-light text-decoration-none d-block py-1">Metas Financeiras</a></li>
          <li><a href="#" class="text-light text-decoration-none d-block py-1">Suporte</a></li>
        </ul>
      </div>

      <!-- Redes Sociais -->
      <div class="col-lg-4 col-md-12">
        <h5 class="mb-3">Siga o Kumbu</h5>
        <p>Conecte-se conosco nas redes sociais e fique sempre por dentro das novidades e dicas financeiras.</p>
        <div class="social-links d-flex gap-3 fs-4">
          <a href="#" class="text-light"><i class="bi bi-twitter"></i></a>
          <a href="#" class="text-light"><i class="bi bi-facebook"></i></a>
          <a href="#" class="text-light"><i class="bi bi-instagram"></i></a>
          <a href="#" class="text-light"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>

    </div>
  </div>

  <div class="container text-center mt-4 border-top border-secondary pt-3">
    <p class="mb-0 small">&copy; {{ date('Y') }} <strong>Kumbu</strong>. Todos os direitos reservados.</p>
    <p class="small">Desenvolvido com ❤️ por <a href="https://seusite.com" target="_blank" class="text-primary text-decoration-none">SALITAR</a></p>
  </div>
</footer>

<!-- Adicionar CSS customizado para responsividade se necessário -->
<style>
  @media (max-width: 767px) {
    .footer-about, .footer-links, .col-lg-4, .col-lg-2 {
      text-align: center;
    }
    .social-links {
      justify-content: center !important;
    }
  }
  .footer a:hover {
    color: #0d6efd !important;
  }
</style>
