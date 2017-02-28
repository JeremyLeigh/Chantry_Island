// JavaScript Document

(function () {
     "use strict";
	console.log("Main Working");
	var dynamicContent = {

	};

	var buttons = document.querySelectorAll(".btn");
	var theImages = document.querySelector("#bgImage");
	var theHeading = document.querySelector(".homepage h2");
	var theText = document.querySelector(".homepage p"), appliedClass;
	var box = document.querySelector("#box");

	function changeElements() {
			console.log("okay buddy");
			console.log(appliedClass);
			theHeading.classList.remove(appliedClass);

			appliedClass = this.id;


			theHeading.classList.add(this.id);
			theText.firstChild.nodeValue = dynamicContent[this.id].text;
			theHeading.firstChild.nodeValue = dynamicContent[this.id].headline;
			theImages.src = "images/"+(this.id)+".jpg";

			if(this.id === "team"){
				box.classList.remove("hidden");
			}else
			box.classList.add("hidden");
		}

	[].forEach.call(buttons, function(run) {
		run.addEventListener("click", changeElements, true);
	});
			theHeading.classList.add('home');
			theText.firstChild.nodeValue = dynamicContent['home'].text;



})();
