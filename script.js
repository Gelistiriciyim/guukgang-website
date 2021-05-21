//set default degree (360*5)
var degree = 1800;
//number of clicks = 0
var clicks = 0;

var gifts = {
  '7': [0,50], 
   '15': [51,100],
   '30': [101,150],
   '60': [151,200],
   '90': [201,250],
   '365': [251,300],
    'Sınırsız': [301,359]
};

function spin() {
  //add 1 every click
		clicks ++;
		
		/*multiply the degree by number of clicks
	  generate random number between 1 - 360, 
    then add to the new degree*/
		var newDegree = degree*clicks;
		var extraDegree = Math.floor(Math.random() * (360 - 1 + 1)) + 1;
		totalDegree = newDegree+extraDegree;
	
			$('.rouletteBase').css({
				'transform' : 'rotate(' + totalDegree + 'deg)'			
			});
    
    for (var giftCode in gifts) {
      console.log("derece: " + totalDegree%360);
      if (totalDegree%360 >= gifts[giftCode][0] && totalDegree%360 <= gifts[giftCode][1]) {
        
  
        setTimeout(function() {
          $("#h1").html('<div class="kart animate__animated animate__wobble"><h1 class="animate__animated animate__jello">'+giftCode + ' kazandınız</h1><br> <a href="/" class="but class="animate__animated animate__jello"">Anasayfa</a></div>');  

            $.ajax({
        url: "test.html",
          method:"POST",
        data: {'giftCode': giftCode}
      }).done(function(response) {
        console.log(response);
      }).fail(function(e1, e2) {
          console.log(e1);
          console.log(e2);
        });



        }, 5000);
   
            
      
        
        
        break;
      }
    }
}

$(document).ready(function(){
	
	/*WHEEL SPIN FUNCTION*/
  spin();
  
	$('#spin').click(function(){
		//spin();
	});//click
  
	
	
});//DOCUMENT READY
	



