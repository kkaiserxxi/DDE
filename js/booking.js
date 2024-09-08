document.addEventListener('DOMContentLoaded', function() {
	var calendarEl = document.getElementById('calendar');

	var calendar = new FullCalendar.Calendar(calendarEl, {
		initialView: 'dayGridMonth',
		headerToolbar: {
			left: 'prev,next today',
			center: 'title',
			right: 'dayGridMonth,timeGridWeek,timeGridDay'
		},
		events: [
			{
				title: 'Event 1',
				start: '2024-09-10',
				status: 'completed' // Or 'not_completed' or 'under_work'
			},
			{
				title: 'Event 2',
				start: '2024-09-15',
				end: '2024-09-17',
				status: 'under_work'
			},
			{
				title: 'Event 3',
				start: '2024-09-20',
				status: 'not_completed'
			}
		],
		eventClassNames: function(arg) {
			var status = arg.event.extendedProps.status;
			if (status === 'completed') {
				return ['bg-green'];
			} else if (status === 'under_work') {
				return ['bg-yellow'];
			} else if (status === 'not_completed') {
				return ['bg-red'];
			}
		}
	});

	calendar.render();
});