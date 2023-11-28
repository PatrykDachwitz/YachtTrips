export class Calendar {

    #date;
    #currentYear;
    #currentMonth;
    #countDay;

    #changeDate(month, year) {
        //SetDefaultVar
        this.#currentYear = year;
        this.#currentMonth = month;
        this.#date = new Date(this.#currentYear, this.#currentMonth, 1);
        this.#countDay = this.#getCountDayMonth(month + 1);

        return this.#getDays();
    }

    #getNextPreviousYearMonth() {
        const previousData = new Date(this.#currentYear, this.#currentMonth - 1, 1);
        const nextData = new Date(this.#currentYear, this.#currentMonth + 1, 1);

        return {
            previousYear: previousData.getFullYear(),
            nextYear: nextData.getFullYear(),
            previousMonth: previousData.getMonth(),
            nextMonth: nextData.getMonth()
        }
    }

    getCalendar(month, year) {
        const days = this.#changeDate(month, year);


        const previousAndNextMontYear = this.#getNextPreviousYearMonth();

        return {
            nextYear: previousAndNextMontYear.nextYear,
            currentYear: this.#currentYear,
            previousYear: previousAndNextMontYear.previousYear,
            nextMonth: previousAndNextMontYear.nextMonth,
            currentMonth: this.#currentMonth,
            previousMonth: previousAndNextMontYear.previousMonth,
            days: days
        }
    }

    #getPreviousDay(firstDay, days) {

        let lastDayInPreviousMonth = this.#getCountDayMonth(this.#date.getMonth());
        let month = this.#date.getMonth() - 1;

        if (firstDay === 0 ) {
            firstDay = 7 ;
        }
        for (let i = firstDay - 2; i >= 0; i--) {
            days.push({
                month: month,
                day: lastDayInPreviousMonth - i,
            })
        }
        return days

    }

    #getLastDay() {
        let month = this.#date.getMonth();
        let date = new Date(this.#currentYear, month, this.#countDay);

        return date.getDay();
    }
    #getDays() {
        let days = [];
        let firstDay = this.#date.getDay();
        let lastDay = this.#getLastDay();
        let currentMonth = this.#date.getMonth();

        days = this.#getPreviousDay(firstDay, days);

        for (let i = 1; i <= this.#countDay; i++) {
            days.push({
                month: currentMonth,
                day: i,
            })
        }

        let numberDayNextWeek = 1;
        for (let i = lastDay; i < 7; i++) {
            days.push({
                month: currentMonth + 1,
                day: numberDayNextWeek,
            })
            numberDayNextWeek++;
        }

        return days;
    }
    #getCountDayMonth(month) {
        const nextMonth = new Date(this.#currentYear, month, 0);
        return nextMonth.getDate();
    }

}
