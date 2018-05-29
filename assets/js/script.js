$(() => {
    $('#calendar').fullCalendar({
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
        },
        events: [],
        eventClick: function (calEvent, jsEvent, view) {
            var check = calEvent.start.format("YYYY-MM-DD");
            var today = moment().format("YYYY-MM-DD");
            if (check < today) {
            }
            else {
                document.querySelector('.time').classList.add('display-time');

                var grid = document.getElementById('time-grid');
                grid.innerHTML = '';

                var timingsSession = JSON.parse(sessionStorage.getItem('data'));
                var timeData = timingsSession[calEvent.start._i].toString().split(',');

                timeData.map((t, i) => {
                    var opt = document.createElement('div');
                    opt.innerHTML = t;
                    opt.className = `times time${i}`;
                    grid.appendChild(opt);
                })

                $('.times').click(function (e) {
                    document.querySelector('.time').classList.remove('display-time');
                    func(e);
                })

                $('#time-date-holder').html(`${calEvent.start.format('MMMM Do YYYY')}`);

                func = (e) => {
                    $('#confirm-doc-time').val(`${calEvent.start.format('MMMM Do YYYY')} at ${e.target.innerHTML}`);
                    $('#date-time').html(`Appointment Date: <strong>${calEvent.start.format('MMMM Do YYYY')} at ${e.target.innerHTML}</strong>`);
                    $('#date-time-input').val(`<strong>${calEvent.start.format('MMMM Do YYYY')} at ${e.target.innerHTML}</strong>`);
                    $('#date-time-input2').val(`${calEvent.start._i}__${e.target.innerHTML}`);
                }
            }
        }
    });
})

function fillCalendarPost(data) {
    var events = [];

    data.map((app) => {
        if(app.appointments.length > 0) {
            var appointments_array = app.appointments.split(',');
            var date = app.DATE;
            events.push({ title: `${appointments_array.length} Apts`, start: date, color: 'white' })
        } else {
            var date = app.DATE;
            events.push({ title: `No Apts`, start: date, color: 'white' })
        }
    })

    $('#calendar').fullCalendar('removeEvents');
    $('#calendar').fullCalendar('addEventSource', {
        events: events
    });
}

function fillCalendar(value) {
    const dept_name = $(`select[name="doc-name"] option[value="${value}"]`).html();
    const doc_id = $(`select[name="doc-name"] option[value="${value}"]`).val().split('___')[2];

$("#hidden-doc-id").val(doc_id);
    
    fetch("/booking/booking/getappointments?doc_id=" + doc_id)
        .then(e => e.json())
        .then(e => {
            var data = {};
            e.data.map((o) => {
                data[o.DATE] = o.appointments;
            })

            sessionStorage.setItem('data', JSON.stringify(data));
            fillCalendarPost(e.data);
        });
}

$('.next-button.doctor').click(() => {
    $('.doctor').fadeOut();
    $('.users').fadeIn();
})

$('.next-button.users').click(() => {
    $('.users').fadeOut();
    $('.confirm').fadeIn();

    $('#confirm-name').val($('#name').val());
    $('#confirm-email').val($('#email').val());
    $('#confirm-inputAddress').val($('#inputAddress').val());
    $('#confirm-others').val($('#others').val());
    $('#confirm-phone').val($('#phone').val());
    $('#confirm-note').val($('#note').val());
    $('#confirm-gender').val($("input[name='gender']:checked").val());

    // doctors
    $('#confirm-doc-dept').val($(`select[name="doc-dept"] option[value="${$('select[name="doc-dept"]').val()}"]`).html());
    $('#confirm-doc-name').val($(`select[name="doc-name"] option[value="${$('select[name="doc-name"]').val()}"]`).html());
})

function fillDoctors(value) {
    const dept_name = $(`select[name="doc-dept"] option[value="${value}"]`).html();

    var select = document.getElementById('docs');
    select.innerHTML = '<option value="" disabled selected>Choose your option</option>';

    fetch("/booking/booking/getdoctors?dept=" + dept_name)
        .then(e => e.json())
        .then(e => {
            if (e.data.length > 0) {
                for (var i = 0; i < e.data.length; i++) {
                    var opt = document.createElement('option');
                    opt.value = `${e.data[i].name}___${e.data[i].dept_id}___${e.data[i].id}`;
                    opt.innerHTML = e.data[i].name;
                    select.appendChild(opt);
                }
            } else {
                var opt = document.createElement('option');
                opt.value = "No Doctors available...";
                opt.innerHTML = "No Doctors available...";
                select.appendChild(opt);
            }
        });
}

$('#close-time').click(() => {
    document.querySelector('.time').classList.remove('display-time');
})