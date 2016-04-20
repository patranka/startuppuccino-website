/* Filters functions */

var old_target;
var view_all = true;

function filterResults(target, button){

	// toggle styles of filter buttons
	button.classList.toggle("filter_menu__button--active");


		if(!old_target || (old_target == target && view_all)){

			renderUserCards(target);

		} else if (old_target != target) {

			// toggle the other filter button
			other_filter = document.getElementById("filter_button--"+old_target);

			if(other_filter.classList.contains("filter_menu__button--active"))
				other_filter.classList.toggle("filter_menu__button--active");

			renderUserCards(target);

		} else {

			renderAllUserCards();

		}

	// store new filter target
	if(old_target != target)
		old_target = target;

}

function renderUserCards(target){
	// toggle cards visibility
	cards = document.getElementsByClassName("card");
	for (var i = cards.length - 1; i >= 0; i--) {
		if (cards[i].classList.contains("card--"+target))
			cards[i].classList.remove("card--hidden");
		else
			cards[i].classList.add("card--hidden");
	}

	view_all = false;
}

function renderAllUserCards(){
	cards = document.getElementsByClassName("card");
	for (var i = cards.length - 1; i >= 0; i--) {
		cards[i].classList.remove("card--hidden");
	}

	view_all = true;
}