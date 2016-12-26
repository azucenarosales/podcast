$(document).ready(function() {    
    var link;

    var podcast = document.createElement('audio');
           
    podcast.addEventListener('ended', function() {
        this.play();         
    }, false);
    
    podcast.addEventListener("canplay",function() {
        $("#title").text(podcast.title);
    });
    
    podcast.addEventListener("timeupdate",function() {
        $("#currentTime").text('  - [' + Math.floor(podcast.currentTime) + ']');
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

    $('#next').click(function() {
        alert($(track).text());        
    });
          
    $('.link').click(function(event) { 
        event.preventDefault();
        podcast.setAttribute('src', $(this).attr('href'));                    
        podcast.setAttribute('title', $(this).text());
        $('#controls').css('display', '');    
        podcast.play();        
    });
      
});