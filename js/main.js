var meetPokemon = Math.floor(Math.random() * 11) + 20;
function onClick() {
		
    steps += 1;
    document.getElementById("steps").innerHTML = steps;

		if(steps % meetPokemon == 0) {
			meetPokemon += Math.floor(Math.random() * 11 + 20);
			$("#ag").toggle(function() {
					$("#ag2").toggle();
			});
			
		}
}
$(function() {
	var bg1 = $("#ad");
	var bg2 = $("#ad2");
	var protag = $("#rr");
	$("#ag2").click(function() {
		$("#ag2").toggle(function() {
			$("#ag").toggle();
		});
	});
	$("#ag").click(function() {
		if(parseInt(protag.css("left")) < 400) {
			protag.css("left", (parseInt(protag.css("left")) + 12 + "px"));
			return;
		}
		
		if(parseInt(bg1.css("left")) <= -1349) {
			bg1.css("left", "1349px");
			return;
		} else if(parseInt(bg2.css("left")) <= -1349) {
			bg2.css("left", "1349px");
			return;
		}
		bg1.css("left", (parseInt(bg1.css("left")) - 10 + "px"));
		bg2.css("left", (parseInt(bg2.css("left")) - 10 + "px"));
	});
});
var trainerid = new trainerid1();
function trainerid1(){
    this.pop = function () {
        var a = document.getElementById('red');
		a.style.display = "block";
		var b = document.getElementById('white');
		b.style.display = "block";
	};
	this.done = function(){
		document.getElementById('red').style.display = "none";
		document.getElementById('white').style.display = "none";
	}
}
var pokedex = new pokdex1();
function pokdex1(){
	this.pop = function () {
		var z = document.getElementById('pkmndex');
		z.style.display = "block";
		var x = document.getElementById('pokedex');
		x.style.display = "block";
	};
	this.done = function(){
		document.getElementById('pkmndex').style.display = "none";
		document.getElementById('pokedex').style.display = "none";
	}
}