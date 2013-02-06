$(function(){
    $.getJSON("achievements.json", function(data){
           console.log(data); 
           
           $("#gameName").text(data.playerstats.gameName);
        });
});