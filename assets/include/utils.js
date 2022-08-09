/* util file for smsccw */
/* version 1.0 */

function hideAllCards() {
    var cards = document.querySelectorAll(".namecard");
     /* console.log(cards); */
    for (var i = 0, element; element = cards[i]; i++) {
        console.log(element);
        element.style.display = 'none';
    }
}


function card_onclick(name){
    console.log(name+" is clicked!");
    hideAllCards();

    switch(name){
        case "donald":
            var ele = document.getElementsByClassName('donald-card')[0];
            console.log(ele);
            ele.style.display = '';
            break;
        
        case "jy":
            var ele = document.getElementsByClassName('jy-card')[0];
            console.log(ele);
            ele.style.display = '';
            break;

        case "tkt":
            var ele = document.getElementsByClassName('tkt-card')[0];
            console.log(ele);
            ele.style.display = '';
            break;

        case "pig":
            var ele = document.getElementsByClassName('pig-card')[0];
            console.log(ele);
            ele.style.display = '';
            break;

        case "left":
            var ele = document.getElementsByClassName('left-card')[0];
            console.log(ele);
            ele.style.display = '';
            break;
        
        case "jamie":
            var ele = document.getElementsByClassName('jamie-card')[0];
            console.log(ele);
            ele.style.display = '';
            break;
    }
}

if (screen.width < 613){
    timeline(document.querySelectorAll('.timeline'), {
        forceVerticalMode: 800,
        mode: 'vertical',
        visibleItems: 4
    });
}else{
    timeline(document.querySelectorAll('.timeline'), {
        forceVerticalMode: 800,
        mode: 'horizontal',
        visibleItems: 4
    });
}
