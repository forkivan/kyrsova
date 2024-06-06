document.addEventListener("DOMContentLoaded", function() {
    const id = document.getElementById("scheduleId").value; // Отримуємо значення id з прихованого input
    let selectedPosluga = document.querySelector('input[name="Act"]:checked').value; // Отримуємо значення вибраної послуги

    // Додаємо event listener для оновлення значення вибраної послуги при зміні
    document.querySelectorAll('input[name="Act"]').forEach(input => {
        input.addEventListener('change', function() {
            selectedPosluga = document.querySelector('input[name="Act"]:checked').value;
            updateLinks();
        });
    });

    fetch(`components/get_schedule.php?id=${id}`)
        .then(response => response.json())
        .then(data => {
            const times = document.getElementById("times");
            const hours = ["12:00", "13:00", "14:00", "15:00", "16:00"];
            const days = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri']; 
            days.forEach(day => {
                const column = document.createElement("div");
                column.classList.add("column");
                hours.forEach((hour, index) => {
                    const timeDiv = document.createElement("div");
                    timeDiv.classList.add("time");
                    const timeValue = data[`${day}${index + 1}`]; // Отримуємо значення часу з бази даних для відповідного дня
                    if (timeValue === null) {
                        timeDiv.classList.add("green");
                        const link = document.createElement("a");
                        link.href = `confirm.php?id=${id}&dayTime=${day}${index + 1}&posluga=${selectedPosluga}`;
                        link.style.display = 'block'; // Додаємо стиль для обгортки
                        link.style.height = '100%'; // Встановлюємо висоту для обгортки
                        link.appendChild(document.createTextNode(hour));
                        timeDiv.appendChild(link);
                    } else {
                        timeDiv.classList.add("red");
                        timeDiv.textContent = hour;
                    }
                    column.appendChild(timeDiv);
                });
                times.appendChild(column);
            });
        });

    function updateLinks() {
        document.querySelectorAll(".time a").forEach(link => {
            const url = new URL(link.href);
            url.searchParams.set('posluga', selectedPosluga);
            link.href = url.toString();
        });
    }
});
