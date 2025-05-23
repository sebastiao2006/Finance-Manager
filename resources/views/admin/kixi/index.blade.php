@extends('admin.layouts.app')

@section('title', 'Simulações de Kixikila')

@section('content')
  <style>
    .kixi-container {
      padding: 20px;
      background: #fff;
      border-radius: 8px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
      font-family: sans-serif;
    }

    .kixi-container h1 {
      font-size: 24px;
      color: #333;
      margin-bottom: 20px;
    }

    .kixi-table {
      width: 100%;
      border-collapse: collapse;
    }

    .kixi-table th,
    .kixi-table td {
      padding: 12px 15px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    .kixi-table th {
      background-color: #f4f4f4;
      color: #333;
      font-weight: bold;
    }

    .kixi-table tbody tr:hover {
      background-color: #f9f9f9;
    }

    .kixi-table td {
      color: #555;
    }
  </style>

  <div class="kixi-container">
    <h1>Simulações de Kixikila</h1>

    <table class="kixi-table">
      <thead>
        <tr>
          <th>Usuário</th>
          <th>Finalidade</th>
          <th>Valor</th>
          <th>Prazo</th>
          <th>Mensalidade</th>
          <th>Participantes</th>
          <th>Data</th>
        </tr>
      </thead>
      <tbody>
        @foreach($kixis as $kixi)
          <tr>
            <td>{{ $kixi->user->name ?? 'N/A' }}</td>
            <td>{{ $kixi->finalidade }}</td>
            <td>{{ number_format($kixi->valor, 2, ',', '.') }} Kz</td>
            <td>{{ $kixi->prazo }} meses</td>
            <td>{{ number_format($kixi->mensalidade, 2, ',', '.') }} Kz</td>
            <td>{{ $kixi->participantes }}</td>
            <td>{{ $kixi->created_at->format('d/m/Y') }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
