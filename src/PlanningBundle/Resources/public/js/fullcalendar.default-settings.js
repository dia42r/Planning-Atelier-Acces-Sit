var $$calendarHolder = $('#calendar-holder');
$(function () {
    $('#calendar-holder').fullCalendar({
        header: {
            left: 'prev, next',
            center: 'title',
            right: 'month, agendaWeek, agendaDay'
        },
        displayEventEnd:true,
        timezone: ('Europe/London'),
        allDaySlot: true,
        selectable: true,
        // eventClick: function(event, element) {
        //
        //     event.title = "CLICKED!";
        //
        //     $('#calendar-holder').fullCalendar('updateEvent', event);
        //
        // },

        timeFormat: 'HH:mm'
    });
});
