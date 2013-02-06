$(function(){
    $.getJSON("http://api.steampowered.com/ISteamUserStats/GetPlayerAchievements/v0001/?appid=440&key=B288A76BB1621D6D9F02D6DA5DC54454&steamid=76561197960432907&jsoncallback=",
        {format: "json"}, function(data){
           console.log(data); 
        });    
});