@extends('admin.layouts.app')

@section('title', 'Blog')

@section('content')
<style>
  main {
    max-width: 900px;
    margin: 2rem auto;
    padding: 1rem;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  }

  form {
    background: #f9f9f9;
    padding: 1rem 1.5rem;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0,0,0,0.05);
    margin-bottom: 2rem;
  }

  form input[type="text"],
  form input[type="file"] {
    width: 100%;
    padding: 0.6rem 0.8rem;
    margin: 0.5rem 0 1rem 0;
    border: 1.5px solid #ccc;
    border-radius: 5px;
    font-size: 1rem;
    box-sizing: border-box;
  }

  form button {
    background-color: #007bff;
    color: white;
    padding: 0.6rem 1.4rem;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 1rem;
    transition: background-color 0.3s ease;
  }

  form button:hover {
    background-color: #0056b3;
  }

  h3 {
    margin-bottom: 1rem;
    font-weight: 600;
    color: #333;
  }

  .card-list {
    display: grid;
    grid-template-columns: repeat(auto-fill,minmax(280px,1fr));
    gap: 1.5rem;
    margin-bottom: 2rem;
  }

  .card {
    background: white;
    border-radius: 8px;
    box-shadow: 0 2px 8px rgb(0 0 0 / 0.1);
    padding: 1rem;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
  }

  .card img {
    width: 100%;
    height: 160px;
    object-fit: cover;
    border-radius: 6px;
    margin-bottom: 0.8rem;
  }

  .card p {
    font-size: 1rem;
    color: #444;
    margin-bottom: 0.8rem;
    flex-grow: 1;
  }

  .card form {
    margin: 0;
  }

  .card button {
    background-color: #dc3545;
    padding: 0.4rem 1rem;
    font-size: 0.9rem;
  }

  .card button:hover {
    background-color: #a71d2a;
  }

  /* Responsividade */
  @media (max-width: 600px) {
    main {
      padding: 1rem;
    }

    .card-list {
      grid-template-columns: 1fr;
    }
  }
</style>

<main>
    <form action="{{ route('admin.blog.update') }}" method="POST">
        @csrf
        <input type="text" name="titulo" value="{{ $blog->titulo ?? '' }}" placeholder="Título da Seção" required>
        <input type="text" name="link_blog" value="{{ $blog->link_blog ?? '' }}" placeholder="Link do Blog" required>
        <button type="submit">Salvar</button>
    </form>
    <h3>Criar Novo Blog</h3>
        <form action="{{ route('admin.blog.card.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <input type="file" name="imagem" required>
      <input type="text" name="titulo" required placeholder="Título do artigo">
      <input type="text" name="link" required placeholder="Link do artigo">
      <button type="submit">Adicionar</button>
    </form>

    <h3>Cards</h3>
    <div class="card-list">
      @foreach ($cards as $card)
        <div class="card">
          <img src="{{ asset('storage/'.$card->imagem) }}" alt="{{ $card->titulo }}">
          <p>{{ $card->titulo }}</p>
          <form action="{{ route('admin.blog.card.destroy', $card->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Apagar</button>
          </form>
        </div>
      @endforeach
    </div>


</main>
@endsection
