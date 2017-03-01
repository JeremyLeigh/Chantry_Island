
(function(){
	console.log("working from mainJQ");
	var cooperThumb = document.querySelectorAll(".thumbInfo"),
	largeImage =document.querySelector("#largeImg"),
	httpRequest;

	function makeRequest(){
		httpRequest = new XMLHttpRequest();


		if(!httpRequest){
			console.log('please update browser');
			return false;
		}
		httpRequest.onreadystatechange = showImg;
		httpRequest.open('GET', 'includes/ajaxQuery.php' + '?image=' + this.id);
		httpRequest.send();
	}

	function showImg(){
		if(httpRequest.readyState === XMLHttpRequest.DONE && httpRequest.status === 200){
			var imgData = JSON.parse(httpRequest.responseText);
			//cooperHeader.firstChild.nodeValue = cData.;

			largeImage.src = "images/gallery/"+imgData.img_large;
			//priceInfo.firstChild.nodeValue = cooperData.pricing;
		}
	}

	[].forEach.call(cooperThumb, function(img) {
		img.addEventListener("click", makeRequest, false);
	});


})();
