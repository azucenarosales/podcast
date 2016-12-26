$(document).ready(function() {    
    var link;
    var podcast = document.createElement('audio');
    // Cuando el podcast termine lo vuelve a reproducir
    podcast.addEventListener('ended', function() {
        this.play();         
    }, false);
    // Cuando el podcast esta listo para reproducirse, agrega el ttítulo del podcast
    podcast.addEventListener("canplay",function() {
        $("#title").text(podcast.title);
    });

    $('#play').click(function() {      
        podcast.play();
    });
    
    $('#pause').click(function() {
        podcast.pause();
    });
    
    $('#restart').click(function() {
        podcast.currentTime = 0;
    });
    // Al dar clic en nombre del podcast, lo reproduce   
    $('.link').click(function(event) { 
        event.preventDefault();
        podcast.setAttribute('src', $(this).attr('href'));                    
        podcast.setAttribute('title', $(this).text());
        $('#controls').css('display', '');
        podcast.play();
    });
      
});