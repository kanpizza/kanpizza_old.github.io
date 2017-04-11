
var province;
var firstname;
var lastname;
var gender ;
var age;
var noti;
var check;
var yearb;
$.male= function(){

		if (age < "13"){
			$("body").css("background", "url(02.jpg)").css("font-family","Freckle Face","Pattaya").css("background-attachment","fixed");
			$("header h1").css("color","black");
			$(".information").css("background","rgba(250,204,96,0.9)");
			$(".button").css("background","rgba(250,204,96,0.9)");
							$(".pic,.detail").css("background","rgba(255,153,153,0.9)");
			$("body").css("color","#FFF");
			$("header h1").css("text-shadow","0.1em 0.1em #906");
		}
		else if (age >= "13"){
			$("body").css("background", "url(01.jpg)").css("font-family","Berkshire Swash").css("background-attachment","fixed");
			$("header h1").css("color","#FF0");
			$(".information").css("background","rgba(166,161,148,0.9)");
			$(".button").css("background","rgba(166,161,148,0.9)");
			$(".pic,.detail").css("background","rgba(166,161,148,0.9)");
			$("body").css("color","#FFF");
			$("header h1").css("text-shadow","0.1em 0.1em #906");

		}
}
 $.female = function() {
                $(".information").css("background","rgba(255,204,255,0.8)");
			    $(".button").css("background","rgba(255,204,255,1)");
				$(".pic,.detail").css("background","rgba(255,153,153,0.9)");
				$("body").css("color","#000");
				$("header h1").css("text-shadow","0.1em 0.1em #000");
		if(age < "13"){
			$("body").css("background", "url(03.jpg)").css("font-family","Freckle Face").css("background-attachment","fixed");
			$("header h1").css("color","#F03");
		}
		else if (age >= "13"){
			$("body").css("background", "url(04.jpg)").css("font-family","Berkshire Swash").css("background-attachment","fixed");
			$("header h1").css("color","#F00");
		}
    };



$.checkgender = function(){

		if ($('#Male').is(":checked")) {
			gender = "male";
			}
		else if ($('#Female').is(":checked")){
			gender = "female"
			}
		else {
			noti = noti+"please select your gender "
			check=false;
		}

}


$.checkYear= function(){

		var date = $("#mydate").val()
		var bd = new Date(date);
		yearb = bd.getFullYear();

		var now= new Date();
		var yearn = now.getFullYear();
		age = yearn-yearb;
}
$.loaddata= function() {
 var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    $("#sign").html("<img src = '/hw5/"+$('#province').val()+".png'></>");
	$("#province_text").html(this.responseText);

    }
  };
  xhttp.open("GET","/hw5/"+$("#province").val()+".txt", true);
  xhttp.send();
}


$(document).ready(function(){


    $(".set_data").click(function(){
        if($(this).prop("checked")==true){
            var indexObj=$(this).index(".set_data");
            $(".set_data").not(":eq("+indexObj+")").prop( "checked", false );
        }
    });

    $("#form_checkbox1").submit(function(){
        if($(".set_data:checked").length==0){
            alert("NO");
            return false;
        }
    });


    $("#submit").click(function(){
		noti="";
		check=true;
		$.loaddata();
		province = $("#province").val()
		firstname = $("#Firstname").val()
		lastname = $("#Lastname").val()
		$.checkYear();



		if (firstname==""){
			noti = noti+"please insert firstname" + "\n"
			check=false;
		}
		if(lastname==""){
			noti = noti+"please insert lastname" + "\n"
			check=false;
		}
		if (isNaN(yearb)==true){
			noti = noti+"please insert your birthday (DD/MM/YYYY)" + "\n"
			check=false;
		}

		$.checkgender();
		if(check == false){
			alert(noti);
			check == true;
		}
		else {
			var msg = "Welcome to website "+"\n"+firstname+ "	" +lastname+ "\n" + "Age: " + age + " years" +"\n"+ "Gender: " +gender;
		alert(msg);
 		$("#sign").css("display","block");
		$("#province_text").css("display","block");
			if(gender == "female"){
		         $.female();
			}
			else if(gender == "male"){
		         $.male();
				 }
		}

    });

});
