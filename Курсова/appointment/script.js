document.addEventListener("DOMContentLoaded", function() {
    const id = document.getElementById("scheduleId").value; // Отримуємо значення id з прихованого input
    fetch(`get_schedule.php?id=${id}`)
        .then(response => response.json())
        .then(data => {
            const times = document.getElementById("times");
            const hours = ["12:00", "13:00", "14:00", "15:00", "16:00"];
            
            const days = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri']; // Додаємо день вівторок
            days.forEach(day => {
                const column = document.createElement("div");
                column.classList.add("column");
                hours.forEach((hour, index) => {
                    const timeDiv = document.createElement("div");
                    timeDiv.classList.add("time");
                    const timeValue = data[`${day}${index + 1}`]; // Отримуємо значення часу з бази даних для відповідного дня
                    if (timeValue === null) {
                        timeDiv.classList.add("green");
                    } else {
                        timeDiv.classList.add("red");
                    }
                    timeDiv.textContent = hour; // Встановлюємо відповідний час
                    column.appendChild(timeDiv);
                });
                times.appendChild(column);
            });
        });
});
