$(document).ready(function(){






	document.getElementById("btnSubmit").onclick = function() {
    var radios = document.getElementsByName("grupo1");
    
        if ($('input:radio[name=grupo1]:checked').val() === "F") {
            console.log("Escolha Correta: ");
            alert("Resposta Correta");
		}
            else{
            	console.log("Tente Novamente ");
            	alert("Resposta Errada");
            }

        }

document.getElementById("btnSubmit1").onclick = function() {
    var radios = document.getElementsByName("grupo2");
    
        if ($('input:radio[name=grupo2]:checked').val() === "F") {
            console.log("Escolha Correta: ");
            alert("Resposta Correta");
		}
            else{
            	console.log("Tente Novamente ");
            	alert("Resposta Errada");
            }

        }

        document.getElementById("btnSubmit2").onclick = function() {
    var radios = document.getElementsByName("grupo3");
    
        if ($('input:radio[name=grupo3]:checked').val() === "F") {
            console.log("Escolha Correta: ");
            alert("Resposta Correta");
		}
            else{
            	console.log("Tente Novamente ");
            	alert("Resposta Errada");
            }

        }

        document.getElementById("btnSubmit3").onclick = function() {
    var radios = document.getElementsByName("grupo4");
    
        if ($('input:radio[name=grupo4]:checked').val() === "F") {
            console.log("Escolha Correta: ");
            alert("Resposta Correta");
		}
            else{
            	console.log("Tente Novamente ");
            	alert("Resposta Errada");
            }

        }




    
});

