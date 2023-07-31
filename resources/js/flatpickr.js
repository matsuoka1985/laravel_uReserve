import flatpickr from "flatpickr";
import { Japanese } from "flatpickr/dist/l10n/ja.js";

// flatpickr(myElem, {
//     "locale":Japanese //locale for this instance only
// });

flatpickr("#event_date", {
    locale: Japanese,
    minDate: "today", //今日以降の日付しか表示しない。
    maxDate:new Date().fp_incr(30) //未来の日付については30日後までしか表示しない。
});

flatpickr("#calendar", {
    locale: Japanese,
    // minDate: "today",
    maxDate:new Date().fp_incr(30)
});

const setting = {
    "locale": Japanese,
    enableTime: true, //時間表示を可能にする。
    noCalendar: true, //日付カレンダーを非表示にする。
    dateFormat: "H:i",
    time_24hr: true,
    minTime: "10:00",
    maxTime: "20:00",
    minuteIncrement:30
};

flatpickr("#start_time",setting );
flatpickr("#end_time",setting );
