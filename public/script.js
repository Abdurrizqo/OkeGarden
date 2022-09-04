const DATE = new Date();
let thisMonth = DATE.getMonth();
let year = DATE.getFullYear();
let day = DATE.getDay();

const currentMonth = document.getElementById("currentMonth");
const month = document.getElementById("month");
const currentDay = document.getElementById("currentDay");
const calendar = document.getElementById("calendar");
const dateForm = document.getElementById("dateForm");
const inputPhone = document.getElementById("inputPhone");

const tes = () => {
    return (inputPhone.value = inputPhone.value.replace(/\D/g, ""));
};

const MONTHS = [
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

const DAYS = [
    "Sunday",
    "Monday",
    "Tuesday",
    "Wednesday",
    "Thursday",
    "Friday",
    "Saturday",
];

currentMonth.innerHTML = `${DATE.getDate()}/${MONTHS[thisMonth]}/${year}`;
currentDay.innerHTML = `${DAYS[day]}`;

const createCalendar = () => {
    month.innerHTML = `${MONTHS[thisMonth]} ${year}`;

    const dayOne = new Date(year, thisMonth).getDay();
    const monthDays = 32 - new Date(year, thisMonth, 32).getDate();

    date = 1;
    for (let i = 0; i < 6; i++) {
        let row = document.createElement("tr");
        row.className = "h-12";
        for (let j = 0; j < 7; j++) {
            let column = document.createElement("td");
            column.className = "cursor-pointer";
            if (date > monthDays) break;
            else if (i === 0 && j < dayOne) {
                let columnText = document.createTextNode("");
                column.appendChild(columnText);
                row.appendChild(column);
            } else {
                let columnText = document.createTextNode(date);
                column.appendChild(columnText);

                column.onclick = () => {
                    let d = new Date(
                        `${MONTHS[thisMonth]} ${column.textContent}, ${year}`
                    );
                    currentMonth.innerHTML = `${column.textContent}/${MONTHS[thisMonth]}/${year}`;
                    currentDay.innerHTML = `${DAYS[d.getDay()]}`;
                    dateForm.value = d
                        .toLocaleString("en-us", {
                            year: "numeric",
                            month: "2-digit",
                            day: "2-digit",
                        })
                        .replace(/(\d+)\/(\d+)\/(\d+)/, "$3-$1-$2");
                };

                row.appendChild(column);

                date++;
            }
        }
        calendar.appendChild(row);
    }
};

createCalendar();

const nextMonth = () => {
    thisMonth = thisMonth + 1;
    calendar.innerHTML = "";

    if (thisMonth > 11) {
        year = year + 1;
        thisMonth = 0;
    }
    createCalendar();
    return thisMonth;
};

const prevMonth = () => {
    thisMonth = thisMonth - 1;
    calendar.innerHTML = "";

    if (thisMonth < 0) {
        year = year - 1;
        thisMonth = 11;
    }
    createCalendar();
    return thisMonth;
};

let prev = document.getElementById("prev");
let next = document.getElementById("next");

prev.onclick = () => {
    prevMonth();
};

next.onclick = () => {
    nextMonth();
};
