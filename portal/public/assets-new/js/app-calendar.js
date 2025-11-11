"use strict";
let direction = "ltr";
isRtl && (direction = "rtl");
document.addEventListener("DOMContentLoaded", function () {
    const v = document.getElementById("calendar"),
        m = document.querySelector(".app-calendar-sidebar"),
        p = document.getElementById("addEventSidebar"),
        f = document.querySelector(".app-overlay"),
        g = {
            Business: "primary",
            Holiday: "success",
            Personal: "danger",
            Family: "warning",
            ETC: "info"
        },
        h = document.querySelector(".offcanvas-title"),
        b = document.querySelector(".btn-toggle-sidebar"),
        y = document.querySelector('button[type="submit"]'),
        S = document.querySelector(".btn-delete-event"),
        L = document.querySelector(".btn-cancel"),
        E = document.querySelector("#eventTitle"),
        k = document.querySelector("#eventStartDate"),
        w = document.querySelector("#eventEndDate"),
        q = document.querySelector("#eventURL"),
        x = $("#eventLabel"),
        D = $("#eventGuests"),
        P = document.querySelector("#eventLocation"),
        M = document.querySelector("#eventDescription"),
        // T = document.querySelector(".allDay-switch"),
        A = document.querySelector(".select-all"),
        F = [].slice.call(document.querySelectorAll(".input-filter")),
        Y = document.querySelector(".inline-calendar");
    let a, l = events, i = !1, e;
    const C = new bootstrap.Offcanvas(p);

    function t(e) {
        return e.id ? "<span class='badge badge-dot bg-" + $(e.element).data("label") + " me-2'> </span>" + e.text : e.text;
    }
 
    function n(e) {
        return e.id ?
            "<div class='d-flex flex-wrap align-items-center'>" +
            e.text +
            "</div>" :
            e.text;
    }
 
    var d, o;
 
    function s() {
        var e = document.querySelector(".fc-sidebarToggle-button");
        for (e.classList.remove("fc-button-primary"), e.classList.add("d-lg-none", "d-inline-block", "ps-0"); e.firstChild;) e.firstChild.remove();
        e.setAttribute("data-bs-toggle", "sidebar"), e.setAttribute("data-overlay", ""), e.setAttribute("data-target", "#app-calendar-sidebar"), e.insertAdjacentHTML("beforeend", '<i class="ti ti-menu-2 ti-sm text-heading"></i>');
    }
    x.length &&
        x.wrap('<div class="position-relative"></div>').select2({
            placeholder: "Sélectionnez la valeur",
            dropdownParent: x.parent(),
            templateResult: t,
            templateSelection: t,
            minimumResultsForSearch: -1,
            escapeMarkup: function (e) {
                return e;
            },
        }),
        D.length &&
        D.wrap('<div class="position-relative"></div>').select2({
            placeholder: "Sélectionnez la valeur",
            dropdownParent: D.parent(),
            closeOnSelect: !1,
            templateResult: n,
            templateSelection: n,
            escapeMarkup: function (e) {
                return e;
            },
        }),
        k &&
        (d = k.flatpickr({
            enableTime: !0,
            altFormat: "Y-m-dTH:i:S",
            onReady: function (e, t, n) {
                n.isMobile && n.mobileInput.setAttribute("step", null);
            },
        })),
        w &&
        (o = w.flatpickr({
            enableTime: !0,
            altFormat: "Y-m-dTH:i:S",
            onReady: function (e, t, n) {
                n.isMobile && n.mobileInput.setAttribute("step", null);
            },
        })),
        Y && (e = Y.flatpickr({
            monthSelectorType: "static",
            inline: !0,
            locale: "fr"
        }));
    let r = new Calendar(v, {
        initialView: "dayGridMonth",
        locale: "fr",
        events: function (e, t) {
            let n = (function () {
                let t = [],
                    e = [].slice.call(document.querySelectorAll(".input-filter:checked"));
                return (
                    e.forEach((e) => {
                        t.push(e.getAttribute("data-value"));
                    }),
                    t
                );
            })();
            t(
                l.filter(function (e) {
                    return n.includes(e.extendedProps.calendar.toLowerCase());
                })
            );
        },
        plugins: [dayGridPlugin, interactionPlugin, listPlugin, timegridPlugin],
        editable: !0,
        dragScroll: !0,
        dayMaxEvents: 2,
        eventResizableFromStart: !0,
        customButtons: {
            sidebarToggle: {
                text: "Sidebar"
            }
        },
        headerToolbar: {
            start: "sidebarToggle, prev,next, title",
            end: "dayGridMonth,timeGridWeek,timeGridDay,listMonth"
        },
        buttonText: {
            today: "Aujourd'hui",
            month: "Mois",       
            week: "Semaine",     
            day: "Jour",         
            list: "Liste"        
        },
        direction: direction,
        initialDate: new Date(),
        navLinks: !0,
        eventClassNames: function ({
            event: e
        }) {
            return ["fc-event-" + g[e._def.extendedProps.calendar]];
        },
        dateClick: function (e) {
            e = moment(e.date).format("YYYY-MM-DD");
            u(), C.show(), h && (h.innerHTML = "Planifier une réunion"), (y.innerHTML = "Ajouter"), y.classList.remove("btn-update-event"), y.classList.add("btn-add-event"), S.classList.add("d-none"), (k.value = e), (w.value = e);
        },
        // eventClick: function (e) {
        // e.preventDefault();
        //     (e = e),
        //     (a = e.event);
        //     const userEmail = $("#getHost").val();
        // // console.log(userEmail);
        //     if (a.extendedProps.guests.includes(userEmail)) {
        //         S.classList.add("d-none");
        //         y.classList.add("d-none");
        //         L.classList.add("d-none");
        //     } else {
        //         S.classList.remove("d-none");
        //         y.classList.remove("d-none");
        //         L.classList.remove("d-none");
        //     }
        //     C.show();
        //     h && (h.innerHTML = "Mettre à jour réunion");
        //     y.innerHTML = "Mettre à jour";
        //     y.classList.add("btn-update-event");
        //     y.classList.remove("btn-add-event");
        //     // S.classList.remove("d-none");
        //     (E.value = a.title),
        //     (q.value = a.url),
        //     d.setDate(a.start, !0, "Y-m-d"),
        //     null !== a.end ? o.setDate(a.end, !0, "Y-m-d") : o.setDate(a.start, !0, "Y-m-d"),
        //     x.val(a.extendedProps.calendar).trigger("change"),
        //     void 0 !== a.extendedProps.location && (P.value = a.extendedProps.location),
        //     void 0 !== a.extendedProps.guests && D.val(a.extendedProps.guests).trigger("change"),
        //     void 0 !== a.extendedProps.description && (M.value = a.extendedProps.description);
        // },
        eventClick: function (e) {
            e.jsEvent.preventDefault();  // Prevent default action to stop URL from opening automatically
            
            a = e.event;
        
            const userEmail = $("#getHost").val();
            if (a.extendedProps.guests.includes(userEmail)) {
                S.classList.add("d-none");
                y.classList.add("d-none");
                L.classList.add("d-none");
            } else {
                S.classList.remove("d-none");
                y.classList.remove("d-none");
                L.classList.remove("d-none");
            }
            C.show();
            h && (h.innerHTML = "Mettre à jour réunion");
            y.innerHTML = "Mettre à jour";
            y.classList.add("btn-update-event");
            y.classList.remove("btn-add-event");
        
            E.value = a.title;
            q.value = a.url;
            d.setDate(a.start, !0, "Y-m-d");
            null !== a.end ? o.setDate(a.end, !0, "Y-m-d") : o.setDate(a.start, !0, "Y-m-d");
            x.val(a.extendedProps.calendar).trigger("change");
            void 0 !== a.extendedProps.location && (P.value = a.extendedProps.location);
            void 0 !== a.extendedProps.guests && D.val(a.extendedProps.guests).trigger("change");
            void 0 !== a.extendedProps.description && (M.value = a.extendedProps.description);
        },
        
        datesSet: function () {
            s();
        },
        viewDidMount: function () {
            s();
        },
    });
    r.render(), s();
    var c = document.getElementById("eventForm");
 
    function u() {
        (w.value = ""), (q.value = ""), (k.value = ""), (E.value = ""), (P.value = ""), D.val("").trigger("change"), (M.value = "");
    }
    FormValidation.formValidation(c, {
        fields: {
            eventTitle: {
                validators: {
                    notEmpty: {
                        message: "Please enter event title "
                    }
                }
            },
            eventStartDate: {
                validators: {
                    notEmpty: {
                        message: "Please enter start date "
                    }
                }
            },
            eventEndDate: {
                validators: {
                    notEmpty: {
                        message: "Please enter end date "
                    }
                }
            },
        },
        plugins: {
            trigger: new FormValidation.plugins.Trigger(),
            bootstrap5: new FormValidation.plugins.Bootstrap5({
                eleValidClass: "",
                rowSelector: function (e, t) {
                    return ".mb-3";
                },
            }),
            submitButton: new FormValidation.plugins.SubmitButton(),
            autoFocus: new FormValidation.plugins.AutoFocus(),
        },
    })
        .on("core.form.valid", function () {
            i = !0;
        })
        .on("core.form.invalid", function () {
            i = !1;
        });
 
    b &&
        b.addEventListener("click", (e) => {
            L.classList.remove("d-none");
        });
    y.addEventListener("click", function (e) {
        e.preventDefault();
        if (i) {
            if (y.classList.contains("btn-add-event")) {
                const formData = {
                    eventTitle: E.value,
                    startDate: k.value,
                    endDate: w.value,
                    eventURL: q.value,
                    location: P.value,
                    host: $("#getHost").val(),
                    guests: JSON.stringify(D.val()),
                    eventLabel: x.val(),
                    eventDescription: M.value,
                };
                let timeClashResponse = checkForTimeClashes(formData, l);
                if (timeClashResponse) {
                    alert(timeClashResponse);
                } else {
                    $.ajax({
                    type: "POST",
                    url: $("#getBaseUrl").val() + "calendar/create",
                    data: formData,
                    dataType: 'json',
                    success: function (response) {
                        if (response.success) {
                            var n = {
                                    id: response.data,
                                    title: E.value,
                                    start: k.value,
                                    end: w.value,
                                    startStr: k.value,
                                    endStr: w.value,
                                    display: "block",
                                    extendedProps: {
                                        location: P.value,
                                        guests: D.val(),
                                        calendar: x.val(),
                                        description: M.value
                                    },
                                    url: q.value,
                                };
                                l.push(n);
                                r.refetchEvents();
                                C.hide();
                        }
                    },
                    error: function(error) {
                        // console.error("Error:", error);
                    }
                });
                }
            }
            else if (y.classList.contains("btn-update-event")) {
                const formData = {
                    id: a.id,
                    eventTitle: E.value,
                    startDate: k.value,
                    endDate: w.value,
                    eventURL: q.value,
                    location: P.value,
                    guests: JSON.stringify(D.val()),
                    eventLabel: x.val(),
                    eventDescription: M.value,
                };
                let timeClashResponse = checkForTimeClashes(formData, l);
                if (timeClashResponse) {
                    alert(timeClashResponse);
                } else {
                    $.ajax({
                    type: "POST",
                    url: $("#getBaseUrl").val() + "calendar/update",
                    data: formData,
                    dataType: 'json',
                    success: function (response) {
                        if (response.success) {
                            n = {
                                id: formData.id,
                                title: E.value,
                                start: k.value,
                                end: w.value,
                                url: q.value,
                                extendedProps: {
                                    location: P.value,
                                    guests: D.val(),
                                    calendar: x.val(),
                                    description: M.value
                                },
                                display: "block",
                            };
 
                            t = n;
                            t.id = parseInt(t.id);
                            l[l.findIndex((e) => e.id === t.id)] = t;
                            r.refetchEvents();
                            C.hide();
                        } 
                    },
                    error: function(error) {
                        // console.log("Error: ", error);
                    }
                });
                }
            }
        }
    });
 
    S.addEventListener("click", (e) => {
        var eventId = parseInt(a.id);
        $.ajax({
            type: 'POST',
            url: $("#getBaseUrl").val() + "calendar/delete",
            data: { eventId: eventId },
            success: function (response) {
                if (response.success) {
                    l = l.filter(function (e) {
                        return e.id != eventId;
                    });
                    r.refetchEvents();
                    C.hide();
                }
            },
            error: function (error) {
                // console.log("Error:", error);
            }
        });
    });
 
    p.addEventListener("hidden.bs.offcanvas", function () {
        u();
    });
 
    b.addEventListener("click", (e) => {
        h && (h.innerHTML = "Planifier une réunion"), (y.innerHTML = "Ajouter"), y.classList.remove("btn-update-event"), y.classList.add("btn-add-event"), S.classList.add("d-none"), m.classList.remove("show"), f.classList.remove("show");
    });
 
    A &&
        A.addEventListener("click", (e) => {
            e.currentTarget.checked ?
                document.querySelectorAll(".input-filter").forEach((e) => (e.checked = 1)) :
                document.querySelectorAll(".input-filter").forEach((e) => (e.checked = 0));
            r.refetchEvents();
        });
 
    F &&
        F.forEach((e) => {
            e.addEventListener("click", () => {
                document.querySelectorAll(".input-filter:checked").length < document.querySelectorAll(".input-filter").length ?
                    (A.checked = !1) :
                    (A.checked = !0);
                r.refetchEvents();
            });
        });
 
    e.config.onChange.push(function (e) {
        r.changeView(r.view.type, moment(e[0]).format("YYYY-MM-DD")), s(), m.classList.remove("show"), f.classList.remove("show");
    });
});
 
 
 
function checkForTimeClashes(newEvent, eventsArray) {
    // Convert start and end dates to moment objects for easier comparison
    const newEventStart = moment(newEvent.startDate);
    const newEventEnd = moment(newEvent.endDate);
 
    let affectedGuests = [];
 
    // Iterate through existing events to check for clashes
    for (const existingEvent of eventsArray) {
        // Skip comparison if it's the same event (ignoring the current event)
        if (existingEvent.id === newEvent.id) {
            continue;
        }
 
        const commonGuests = JSON.parse(newEvent.guests).filter(guest => existingEvent.extendedProps.guests.includes(guest));
 
        if (commonGuests.length > 0) {
            // Check if the new event overlaps with any existing event
            const existingEventStart = moment(existingEvent.start);
            const existingEventEnd = moment(existingEvent.end);
 
            if (
                (newEventStart.isSameOrAfter(existingEventStart) && newEventStart.isBefore(existingEventEnd)) ||
                (newEventEnd.isAfter(existingEventStart) && newEventEnd.isSameOrBefore(existingEventEnd))
            ) {
                affectedGuests = affectedGuests.concat(commonGuests);
            }
 
        }
    }
 
    // Remove duplicates from the affected guests list
    affectedGuests = Array.from(new Set(affectedGuests));
    if (affectedGuests.length > 0) {
        // No time clash for guests, return the list of clashed guests
        return `Guest clash! ${affectedGuests.join(', ')} is already fixed for the same time.`;
    }
 
    // No clashes found
    return false;
}