"use strict";
let evts, events = [];
evts = JSON.parse(document.querySelector("#eventFromDB").value);
 
evts.forEach(element => {
    events.push({
        id: element.id,
        title: element.eventTitle,
        start: element.startDate,
        end: element.endDate,
        url: element.eventURL,
        extendedProps: {
            location: element.location,
            guests: JSON.parse(element.guests),
            calendar: element.eventLabel,
            description: element.eventDescription
        },
        display: "block",
        // allDay: Boolean(Number(element.allDay))
    });
});
 
window.events = events;
// console.log(events);
