<script>
    export let year;
    export let month;

    function createCalendar() {
        const monthYearHeader = getMonthName(month) + " " + year;
        const firstDay = new Date(year, month, 1).getDay();
        const daysInMonth = new Date(year, month + 1, 0).getDate();

        let date = 1;
        let calendar = [];

        for (let i = 0; i < 6; i++) {
            let row = [];

            for (let j = 0; j < 7; j++) {
                if (i === 0 && j < firstDay) {
                    row.push({ day: "" });
                } else if (date > daysInMonth) {
                    break;
                } else {
                    const isToday = checkIfToday(date);
                    row.push({ day: date, isToday });
                    date++;
                }
            }

            calendar.push(row);
        }

        return { monthYearHeader, calendar };
    }

    function getMonthName(month) {
        const months = [
            "January",
            "February",
            "March",
            "April",
            "May",
            "June",
            "July",
            "August",
            "September",
            "October",
            "November",
            "December",
        ];
        return months[month];
    }

    function checkIfToday(day) {
        const today = new Date();
        return (
            day === today.getDate() &&
            month === today.getMonth() &&
            year === today.getFullYear()
        );
    }

    const { monthYearHeader, calendar } = createCalendar();
</script>

<div class="container mx-auto px-4 py-8">
    <div class="text-center font-bold text-lg mb-4">{monthYearHeader}</div>
    <table class="w-full">
        <thead>
            <tr>
                <th class="p-2">Sun</th>
                <th class="p-2">Mon</th>
                <th class="p-2">Tue</th>
                <th class="p-2">Wed</th>
                <th class="p-2">Thu</th>
                <th class="p-2">Fri</th>
                <th class="p-2">Sat</th>
            </tr>
        </thead>
        <tbody>
            {#each calendar as row}
                <tr>
                    {#each row as cell}
                        <td class="p-2 {cell.isToday ? 'today' : ''}"
                            >{cell.day}</td
                        >
                    {/each}
                </tr>
            {/each}
        </tbody>
    </table>
</div>

<style>
    .today {
        background-color: #ff9999;
    }
</style>
