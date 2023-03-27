
window.addEventListener("load", function() {
	const loadingScreen = document.querySelector("#loading-screen");
	loadingScreen.style.opacity = 0;
	setTimeout(function() {
		loadingScreen.style.display = "none";
	  }, 1000); 
});

  
// 

function JoinBtn(){
	document.getElementById('modal').style.visibility='visible';
	document.getElementById('overlay').style.visibility='visible';
}


function Close(){
	document.getElementById('modal').style.visibility='hidden';
	document.getElementById('overlay').style.visibility='hidden';
}

function booking(){
	document.getElementById('modal_book').style.visibility='visible';
	document.getElementById('overlay').style.visibility='visible';
}

function book_close(){
	document.getElementById('modal_book').style.visibility='hidden';
	document.getElementById('overlay').style.visibility='hidden';
}

// 

// 


