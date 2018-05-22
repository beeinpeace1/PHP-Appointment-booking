$(document).ready(()=>{
    $('#calendar').fullCalendar({
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
        },
        dayClick: function(date, jsEvent) {
            document.querySelector('.time').classList.add('display-time');
            func = (e)=>{
                console.log(`Selected Date: ${date.format()} and time: ${e.target.innerHTML}`)
            }
        },
        events: [
            {
              title  : '8 appointments',
              start  : '2018-05-22',
            }
        ]
      });
})

$('.times').click(function(e){
    document.querySelector('.time').classList.remove('display-time');
    func(e);
})