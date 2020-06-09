function navScroll() {
	document.querySelector('#main-navbar').scrollIntoView({ 
		behavior: 'smooth' 
	});
}

function backgroundScroll() {
	document.querySelector('#background-div-front').scrollIntoView({ 
		behavior: 'smooth' 
	});
}

function categoriesSelect(selected) {
	var classSelect = "." + selected;
	$('.main-content-div').css('display', 'none');
	$('.select-category').css('display', 'none');
	$(classSelect).css('display', 'inline');
}

function pointer() {
    var catEl = document.getElementById("categories");
    var navEl = document.getElementById("nav-top");

    if (catEl) {
    	document.querySelector('#categories').style.cursor = "pointer";
    }
    if (navEl) {
    	document.querySelector('#nav-top').style.cursor = "pointer";
    }
}
 
$(document).ready(pointer);