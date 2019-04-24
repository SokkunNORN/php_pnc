
$(document).ready(function() {
    $('#calendar').fullCalendar( {
        defaultView: 'agendaWeek',
        allDaySlot: false,
        weekends: false,
        minTime: '07:00:00',
        maxTime: '22:00:00',
        header: {
            left: 'prev, next, today',
            center: 'title',
            right: 'month, agendaWeek, agendaDay'
        },
        navLinks: true,
        selectable: true,
        selectHelper: true,
        select: function(start, end) {
            var title = prompt('Agenda Event:');
            var red = Math.floor(Math.random() * 256);
            var green = Math.floor(Math.random() * 256);
            var blue = Math.floor(Math.random() * 256);
            var color = 'rgb('+red+','+green+','+blue+')';
            var eventData;
            if(title) {
                eventData= {
                    title: title,
                    start: start,
                    end: end,
                    // textColor: '$#fff',
                    // color: color
                },
                $('#calendar').fullCalendar('renderEvent', eventData, true);
            };
            $('#calendar').fullCalendar('unselect');
        },
        // defaultDate:'2020-2-20',
        editable: true,
        eventLimit: true,
        events: [
            {
                title: 'Sleep All Of You',
                start: '2019-02-01T07:00:00',
                end: '2019-02-01T10:30:00'
            }
        ]
    })
})




