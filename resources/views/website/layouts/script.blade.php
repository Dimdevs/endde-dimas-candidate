<script src="{{ asset('template/base-website/vendors/@popperjs/popper.min.js') }}"></script>
<script src="{{ asset('template/base-website/vendors/bootstrap/bootstrap.min.js') }}"></script>
<script src="{{ asset('template/base-website/vendors/is/is.min.js') }}"></script>
<script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
<script src="{{ asset('template/base-website/vendors/fontawesome/all.min.js') }}"></script>
<script src="{{ asset('template/base-website/assets/js/theme.js') }}"></script>

<link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&amp;family=Rubik:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">

<script>
    function startCountdown(elementId, targetDate, label, daysMissedEvent) {
    var countdownElement = document.getElementById(elementId);
    var countdownInterval = setInterval(function() {
        var now = new Date().toLocaleString('en-US', { timeZone: 'Asia/Jakarta' });
        now = new Date(now).getTime();
        var distance = targetDate - now;

        if (distance <= 0) {
            clearInterval(countdownInterval);
            if (distance < -(daysMissedEvent * 24 * 60 * 60 * 1000)) {
                countdownElement.innerHTML = "Missed";
                countdownElement.style.fontSize = "28px";
            } else {
                countdownElement.innerHTML = "Start";
                countdownElement.style.fontSize = "28px";
            }
        } else {
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            var labelText = label;
            if (labelText.toLowerCase() === 'days') {
                countdownElement.innerHTML = days;
            } else if (labelText.toLowerCase() === 'hours') {
                countdownElement.innerHTML = hours;
            } else if (labelText.toLowerCase() === 'minutes') {
                countdownElement.innerHTML = minutes;
            } else if (labelText.toLowerCase() === 'seconds') {
                countdownElement.innerHTML = seconds;
            }
            countdownElement.style.fontSize = '40px';
        }
    }, 1000);
}

var targetDateString = document.querySelector('.countdown-labels h3').getAttribute('data-date');
var targetDate = new Date(targetDateString).toLocaleString('en-US', { timeZone: 'Asia/Jakarta' });
targetDate = new Date(targetDate).getTime();

var daysMissedEvent = {!! isset($event_informations) ? json_encode($event_informations->duration) : 1 !!};
startCountdown('countdown-days', targetDate, 'Days', daysMissedEvent);
startCountdown('countdown-hours', targetDate, 'Hours', daysMissedEvent);
startCountdown('countdown-minutes', targetDate, 'Minutes', daysMissedEvent);
startCountdown('countdown-seconds', targetDate, 'Seconds', daysMissedEvent);
</script>
