@extends('admin.layouts.app')

@section('title', 'Simulações de Kixikila')

@section('content')
  <h1>Simulações de Kixikila</h1>

  <table>
    <thead>
      <tr>
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
          <td>{{ $kixi->finalidade }}</td>
          <td>{{ $kixi->valor }}</td>
          <td>{{ $kixi->prazo }}</td>
          <td>{{ $kixi->mensalidade }}</td>
          <td>{{ $kixi->participantes }}</td>
          <td>{{ $kixi->created_at->format('d/m/Y') }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection
