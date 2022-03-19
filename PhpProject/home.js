/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function demo(){
   var result = document.getElementById('result2');
    
    var dateTime = new Date();
    var hours = dateTime.getHours();
     var minutes = dateTime.getMinutes();
      var sec = dateTime.getSeconds();
      
   var Watch =   hours+':' + minutes+':'+ sec;
      
      result.innerHTML = Watch;
}
setInterval(demo, 1000);

//function, milliseconds (html dom property)