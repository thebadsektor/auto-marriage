<style>
    .fc-day-sat {
        color:#337ab7;
        border-color: black;
        background-color: #fffb8c; }
    .fc-day-sun {
        color:#337ab7;
        border-color: black;
        background-color: #ffa58c; }
</style>
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.5/index.global.min.js'></script>
<!-- Moment.js -->
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script> --}}
<script>
    document.addEventListener('DOMContentLoaded', function() {

        const philippineHolidays = [
            { title: 'New Year\'s Day', date: '2023-01-01' },
            { title: 'Araw ng Kagitingan', date: '2023-04-09' },
            { title: 'Maundy Thursday', date: '2023-04-06' },
            { title: 'Good Friday', date: '2023-04-07' },
            { title: 'Eid\'l Fitr', date: '2023-04-21' },
            { title: 'Labor Day', date: '2023-05-01' },
            { title: 'Independence Day', date: '2023-06-12' },
            { title: 'National Heroes Day', date: '2023-08-28' },
            { title: 'Bonifacio Day', date: '2023-11-30' },
            { title: 'Christmas Day', date: '2023-12-25' },
            { title: 'Rizal Day', date: '2023-12-30' },
            { title: 'EDSA People Power Revolution Anniversary', date: '2023-02-25' },
            { title: 'Black Saturday', date: '2023-04-08' },
            { title: 'Ninoy Aquino\'s Day', date: '2023-08-21' },
            { title: 'All Saint\'s Day', date: '2023-11-01' },
            { title: 'Feast of the Immaculate Conception of Mary', date: '2023-12-08' },
            { title: 'Last Day of the Year', date: '2023-12-31' },
            { title: 'Additional special (non-working day)', date: '2023-01-02' },
            { title: 'Additional special (non-working day)', date: '2023-11-02' },
        ];

        var calendarEl = document.getElementById("kt_docs_fullcalendar_selectable");

        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialDate: new Date(),
            headerToolbar: {
                left: "prev,next today",
                center: "title",
                right: "dayGridMonth,timeGridWeek,timeGridDay"
            },
            navLinks: true, // can click day/week names to navigate views
            selectable: true,
            selectMirror: true,

            eventSources: [
                {
                    url: '/api/events/fetch'
                },
                {
                    events: philippineHolidays
                }
            ],

            // Create new event
            select: function(arg) {
                Swal.fire({
                    title: 'Create New Event',
                    html: '<input type="text" class="form-control mb-2" name="event_name" placeholder="Event Name">' +
                        '<div class="input-group">' +
                            '<span class="input-group-text">Start</span>' +
                            '<input type="datetime-local" class="form-control" name="start_date" value="' + arg.startStr + '">' +
                        '</div>' +
                        '<div class="input-group">' +
                            '<span class="input-group-text">End</span>' +
                            '<input type="datetime-local" class="form-control" name="end_date" value="' + arg.endStr + '">' +
                        '</div>',
                    showCancelButton: true,
                    buttonsStyling: false,
                    confirmButtonText: 'Create',
                    cancelButtonText: 'Cancel',
                    customClass: {
                        confirmButton: 'btn btn-primary',
                        cancelButton: 'btn btn-active-light'
                    }
                }).then(function(result) {
                    if (result.isConfirmed) {
                        var title = document.querySelector('input[name="event_name"]').value;
                        var start = document.querySelector('input[name="start_date"]').value;
                        var end = document.querySelector('input[name="end_date"]').value;

                        // Send data to the server
                        axios.post("/api/events/process", {
                            title: title,
                            start: start,
                            end: end,
                            all_day: arg.allDay,
                        }).then(function(response) {
                            // Add the event to the calendar
                            calendar.addEvent({
                                id: response.data.id,
                                title: title,
                                start: start,
                                end: end,
                                allDay: arg.allDay,
                            });
                        }).catch(function(error) {
                            console.error(error);
                        });
                    }
                });
            },

            // Delete event
            eventClick: function(arg) {
                Swal.fire({
                    text: "Are you sure you want to delete this event?",
                    icon: "warning",
                    showCancelButton: true,
                    buttonsStyling: false,
                    confirmButtonText: "Yes, delete it!",
                    cancelButtonText: "No, return",
                    customClass: {
                        confirmButton: "btn btn-primary",
                        cancelButton: "btn btn-active-light"
                    }
                }).then(function(result) {
                    if (result.value) {
                        // Send data to the server
                        axios
                            .delete("/api/events/delete/" + arg.event.id, {
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                },
                                data: {
                                    id: arg.event.id
                                }
                            })
                            .then(function(response) {
                                // Remove the event from the calendar
                                arg.event.remove();
                            })
                            .catch(function(error) {
                                console.error(error);
                            });
                    } else if (result.dismiss === "cancel") {
                        Swal.fire({
                            text: "Event was not deleted!.",
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn btn-primary",
                            }
                        });
                    }
                });
            },

            editable: true,
            dayMaxEvents: true, // allow "more" link when too many events
        });

        calendar.render();
    });
</script>
<x-base-layout>
    <div id='kt_docs_fullcalendar_selectable'></div>
</x-base-layout>
