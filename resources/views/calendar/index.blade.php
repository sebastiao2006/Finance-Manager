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