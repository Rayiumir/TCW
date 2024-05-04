// Portfolios

const filterableButtons = document.querySelectorAll(".buttons button");
const filterableCards = document.querySelectorAll(".cards .card");

const filterCrads = e => {

    filterableCards.forEach(card => {

        card.classList.add("hide");

        if(card.dataset.name === e.target.dataset.name || e.target.dataset.name === "all"){
            card.classList.remove("hide");
        }

    });
        
};

filterableButtons.forEach(button => {
    button.addEventListener("click", filterCrads);
});