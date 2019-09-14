$(document).ready(function(){
    // console.log("ready");
    $("td").hover(function(){
       $(this).css("background-color", "purple");
     }, function(){
     $(this).css("background-color", "white");
    });

    $("td").click(function(){



      var a = $(this).text().split(" ");
      //alert(a);
      var a0 = a[0];
      var a2 = a[2];

      var a0int = parseInt(a0,10);
      var a2int = parseInt(a2,10);

      var res = a0int*a2int;
      var result = "rezultat množenja je: "  + a0 + " + " +a2 + " = " + res;
      alert(result);

      if(a0int!="" && a2int!=""){
    			$.ajax({
    				url: "class/calculator.class.php",
    				type: "POST",
    				data: {
    					first_number: a0int,
    					second_number: a2int,
    					result: res
    				},

            success:function(){
             alert('vasa pretraga upisana je u bazu! Hvala!');
            }

    			});
    		}







    });

});
