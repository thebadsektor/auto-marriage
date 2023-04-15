{{-- <script>

    document.addEventListener('DOMContentLoaded', function() {
      var calendarEl = document.getElementById('calendar');
      var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'resourceTimelineWeek'
      });
      calendar.render();
    });

  </script> --}}
{{-- {{ URL::asset('demo1/plugins/custom/fullcalendar/fullcalendar.bundle.css'); }} --}}
{{-- <link href="demo1/plugins/custom/fullcalendar/fullcalendar.bundle.csss" rel="stylesheet" /> --}}
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.5/index.global.min.js'></script>
<!-- Moment.js -->
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script> --}}
<script>
    document.addEventListener('DOMContentLoaded', function() {

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

            events: "/api/events/fetch",

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
