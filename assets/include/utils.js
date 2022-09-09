/* util file for smsccw */
/* version 1.0 */

function hideAllCards(ppl = 'none') {
    var cards = document.querySelectorAll(".namecard");
     /* console.log(cards); */
    for (var i = 0, element; element = cards[i]; i++) {
        console.log(element.classList[1]);
        if (element.classList[1] == ppl+'-card'){
            continue;
        }
        element.style.display = 'none';
    }
}


function card_onclick(name){
    console.log(name+" is clicked!");
    hideAllCards(name);

    var ele = document.getElementsByClassName(name+'-card')[0];

    if (ele.style.display == 'none'){
        ele.style.display = '';
    }else{
        ele.style.display = 'none';
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



const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.target.className.includes("up-wrapper",0) == true){
          var animation = 'up-animation';
          var name = '.up';
      }
      else if (entry.target.className.includes("down-wrapper",0) == true){
        var animation = 'down-animation';
        var name = '.down';
      }
      
      const element = entry.target.querySelector(name);
  
      if (entry.isIntersecting) {
          element.classList.add(animation);
          return; // if we added the class, exit the function
      }
  
      // We're not intersecting, so remove the class!
      element.classList.remove(animation);
    });
});
  
observer.observe(document.querySelector('.up-wrapper'));
//observer.observe(document.querySelector('.up-wrapper1'));
observer.observe(document.querySelector('.up-wrapper2'));
observer.observe(document.querySelector('.down-wrapper'));
observer.observe(document.querySelector('.down-wrapper1'));
