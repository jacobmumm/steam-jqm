$(function(){
    $.getJSON("achievements.json", function(data){
           console.log(data); 
           
           $("#gameName").text(data.playerstats.gameName);
           
           for(var i=0; i<data.playerstats.achievements.length;i++){
               var newItem = $('<li></li>');
               var achievement = data.playerstats.achievements[i];
               newItem.text(achievement.apiname);
               newItem.attr('data-icon', achievement.achieved ? 'check' : 'minus');
               $("#achievementList").append(newItem);
           }
           
           $("#achievementList").listview("refresh");
        });
});