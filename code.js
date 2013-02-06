$(function(){
    $.getJSON("achievements.json", function(data){
           console.log(data); 
           
           $("#gameName").text(data.playerstats.gameName);
           
           for(var i=0; i<data.playerstats.achievements.length;i++){
               var newItem = $('<li></li>');
               newItem.text(data.playerstats.achievements[i].apiname);
               $("#achievementList").append(newItem);
           }
           
           $("#achievementList").listview("refresh");
        });
});