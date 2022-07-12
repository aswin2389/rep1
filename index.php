<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body>
Enter IP <input type="text" id="ip"/><br>
<input type="button" value="ok" id="getlocation"/><br>
<div id="result">

</div>
<script type="text/javascript">
    $(document).ready(function(){


  
//$("#p2").html("<b> Name: </b>" + emp.city + "<br> <b> continent code: </b>" + emp.continent code + "<b> <br> </b>" + emp.city);  
        $("#getlocation").click(function(event){
		
            var IP=$("#ip").val();
            var URL="http://api.ipstack.com/"+IP;
			//alert(URL);
            $.ajax({
                type:"GET",
                url:URL,
                data:{
                    access_key:"335b01f3f37c585fd974b9926eababeb"
                },
                Cache:false,
                success:function(data){
				
				//alert("test");
                    $("#result").empty();
					
					
					var arr=jQuery.parseJSON(JSON.stringify(data));
					//console.log(arr);
					//alert(arr.continent_name);
					
					
					
					var finalresult="<b>Continent: </b>" + arr.continent_name;
					
                    $("#result").html(finalresult);
                    
                    
                }
            });
            
        });

});
    </script>
</body>
</html>
