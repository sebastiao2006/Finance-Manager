@extends('layouts.app3')
@section('title', 'Kivula')
@section('content')

<main>
    <style>

.layout-wrapper {
    margin-top: 90px;
            display: flex;
            align-items: flex-start;
            gap: 20px;
        }
        .calendar-container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 500px;
            text-align: center;
        }
        .calendar-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-weight: bold;
            padding: 10px 0;
        }
        .calendar-header button {
            background: #007BFF;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
        }
        .calendar-header button:hover {
            background: #0056b3;
        }
        .calendar-days {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            text-align: center;
            gap: 5px;
        }
        .day {
            padding: 15px;
            cursor: pointer;
            border-radius: 5px;
            background: #f4f4f4;
        }
        .day:hover {
            background: #ddd;
        }
        .premium-box {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 300px;
            height: 200px;
        }
        .toggle-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
        }
    </style>

    

    <div class="layout-wrapper ">
        <div class="calendar-container">
            <div class="calendar-header">
                <button onclick="prevMonth()">&#9665;</button>
                <span id="monthYear"></span>
                <button onclick="nextMonth()">&#9655;</button>
            </div>
            <div class="calendar-days" id="calendarDays"></div>
        </div>
        <div class="premium-box">
            <div class="toggle-container">
                <label>Somente pendentes</label>
                <input type="checkbox">
            </div>
            <p>Funcionalidade Exclusiva Premium!</p>
        </div>
    </div>

    <div class="conversor">
        <h1>Câmbios</h1>
        <p class="updated">Actualizado em 11/04/2025 04:27:38</p>
      
        <div class="conversor-slider">
          <button class="arrow">&lt;</button>
      
          <div class="currency-card">
            <img src="https://flagcdn.com/w320/eu.png" alt="EUR">
            <h2>EUR</h2>
            <p class="name">Euro</p>
            <div class="rates">
              <p>Compra<br><span>1.040,756</span></p>
              <p>Venda<br><span>1.061,571</span></p>
            </div>
          </div>
      
          <div class="currency-card">
            <img src="https://flagcdn.com/w320/gb.png" alt="GBP">
            <h2>GBP</h2>
            <p class="name">Libra Esterlina</p>
            <div class="rates">
              <p>Compra<br><span>1.212,441</span></p>
              <p>Venda<br><span>1.236,690</span></p>
            </div>
          </div>
      
          <div class="currency-card">
            <img src="https://flagcdn.com/w320/us.png" alt="USD">
            <h2>USD</h2>
            <p class="name">Dólar Dos Estados Unidos</p>
            <div class="rates">
              <p>Compra<br><span>937,702</span></p>
              <p>Venda<br><span>956,456</span></p>
            </div>
          </div>
      
          <div class="currency-card">
            <img src="https://flagcdn.com/w320/za.png" alt="ZAR">
            <h2>ZAR</h2>
            <p class="name">Rand</p>
            <div class="rates">
              <p>Compra<br><span>48,354</span></p>
              <p>Venda<br><span>49,321</span></p>
            </div>
          </div>
      
          <button class="arrow">&gt;</button>
        </div>
      
        <div class="ver-todos">
          <button>Ver todos</button>
        </div>
      </div>
      
      <style>
        .conversor {
          background: #f6f9fc;
          text-align: center;
          padding: 40px 20px;
          font-family: Arial, sans-serif;
        }
      
        .conversor h1 {
          font-size: 36px;
          color: #00205b;
          margin-bottom: 5px;
        }
      
        .conversor .updated {
          font-size: 14px;
          color: #6e7c93;
          margin-bottom: 30px;
        }
      
        .conversor-slider {
          display: flex;
          justify-content: center;
          align-items: center;
          gap: 20px;
          flex-wrap: wrap;
          margin-bottom: 30px;
        }
      
        .conversor .arrow {
          font-size: 24px;
          background: none;
          border: none;
          cursor: pointer;
          color: #00205b;
        }
      
        .currency-card {
          background: white;
          border-radius: 12px;
          padding: 20px;
          width: 170px;
          box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }
      
        .currency-card img {
          width: 100%;
          height: auto;
          border-radius: 4px;
          margin-bottom: 10px;
        }
      
        .currency-card h2 {
          font-size: 22px;
          color: #001c54;
          margin: 5px 0;
        }
      
        .currency-card .name {
          font-size: 14px;
          color: #6e7c93;
          margin-bottom: 10px;
        }
      
        .currency-card .rates {
          font-size: 14px;
          color: #222;
          display: flex;
          justify-content: space-between;
        }
      
        .currency-card .rates span {
          display: block;
          color: #00a9e0;
          font-weight: bold;
          font-size: 15px;
        }
      
        .ver-todos button {
          background: #00a9e0;
          border: none;
          border-radius: 50px;
          color: white;
          padding: 12px 30px;
          font-size: 16px;
          cursor: pointer;
        }
      
        @media (max-width: 768px) {
          .conversor-slider {
            flex-direction: column;
          }
        }
      </style>
      

    <script>
        const monthYear = document.getElementById("monthYear");
        const calendarDays = document.getElementById("calendarDays");
        const today = new Date();
        let currentMonth = today.getMonth();
        let currentYear = today.getFullYear();

        function renderCalendar(month, year) {
            calendarDays.innerHTML = "";
            monthYear.textContent = new Intl.DateTimeFormat('pt-BR', { month: 'long', year: 'numeric' }).format(new Date(year, month));
            const firstDay = new Date(year, month, 1).getDay();
            const lastDate = new Date(year, month + 1, 0).getDate();
            for (let i = 0; i < firstDay; i++) {
                calendarDays.innerHTML += `<div class='day'></div>`;
            }
            for (let i = 1; i <= lastDate; i++) {
                calendarDays.innerHTML += `<div class='day'>${i}</div>`;
            }
        }

        function prevMonth() {
            currentMonth--;
            if (currentMonth < 0) {
                currentMonth = 11;
                currentYear--;
            }
            renderCalendar(currentMonth, currentYear);
        }

        function nextMonth() {
            currentMonth++;
            if (currentMonth > 11) {
                currentMonth = 0;
                currentYear++;
            }
            renderCalendar(currentMonth, currentYear);
        }

        renderCalendar(currentMonth, currentYear);
    </script>

    
</main>
@endsection