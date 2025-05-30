@extends('admin.layouts.app')

@section('title', 'Portfolio')

@section('content')

<main>
<style>
  .form-container {
    max-width: 600px;
    margin: 40px auto;
    padding: 30px;
    background: #f9f9f9;
    border-radius: 12px;
    box-shadow: 0 0 15px rgba(0,0,0,0.1);
    font-family: sans-serif;
  }

  .form-container label {
    display: block;
    margin-bottom: 6px;
    font-weight: bold;
    color: #333;
  }

  .form-container input[type="text"],
  .form-container textarea,
  .form-container input[type="file"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 6px;
    font-size: 14px;
  }

  .form-container textarea {
    resize: vertical;
    min-height: 80px;
  }

  .form-container img {
    display: block;
    margin-top: -10px;
    margin-bottom: 20px;
    border-radius: 6px;
    width: 100px;
    height: auto;
    box-shadow: 0 2px 6px rgba(0,0,0,0.1);
  }

  .form-container button {
    background-color: #6c63ff;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    font-weight: bold;
    transition: background 0.3s;
  }

  .form-container button:hover {
    background-color: #574dcf;
  }
</style>

<form action="{{ route('admin.home.update') }}" method="POST" enctype="multipart/form-data" class="form-container">
    @csrf

    <label for="title">Título:</label>
    <input type="text" id="title" name="title" value="{{ old('title', $section->title) }}">

    <label for="subtitle">Subtítulo:</label>
    <textarea id="subtitle" name="subtitle">{{ old('subtitle', $section->subtitle) }}</textarea>

    <label for="image1">Imagem 1:</label>
    <input type="file" id="image1" name="image1">
    @if ($section->image1)
        <img src="{{ asset('storage/' . $section->image1) }}" alt="Imagem 1">
    @endif

    <label for="image2">Imagem 2:</label>
    <input type="file" id="image2" name="image2">
    @if ($section->image2)
        <img src="{{ asset('storage/' . $section->image2) }}" alt="Imagem 2">
    @endif

    <button type="submit">Salvar</button>
</form>


</main>
@endsection
