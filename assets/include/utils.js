/* util file for smsccw */
/* version 1.0 */

function hideAllCards() {
    var cards = document.querySelectorAll("[id*='namecard']");
    console.log(cards)
    for (var card in cards){
        cards[card].style.display = 'none';
    }
}

function showNameCard(name) {

}

function showDonald() {
    console.log("hi!!!")
    hideAllCards();
}