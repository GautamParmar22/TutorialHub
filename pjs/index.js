var progressBar = $('#progress-bar'),
    width = 0;

progressBar.width(width);


var interval = setInterval(function() {
    width += 2;
    progressBar.css('width', width + '%');
    document.getElementById("progress-bar").innerHTML = width;
    if (width >= 100) {
        clearInterval(interval);
    }
}, 100);