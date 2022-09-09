/* util file for smsccw */
/* version 1.0 */

function start(){
    hideAllCards();
    card_onclick('ymc');
}

function hideAllCards(ppl = 'none') {
    var cards = document.querySelectorAll(".namecard");
     /* console.log(cards); */
    for (var i = 0, element; element = cards[i]; i++) {
        //console.log(element.classList[1]);
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
    var line = document.getElementById("line");
    line.style = "";
    //console.log(ele.style.display);
    if (ele.style.display == 'none'){
        ele.style.display = '';
        connect(name);
    }else{
        ele.style.display = 'none';
    }
}


timeline(document.querySelectorAll('.timeline'), {
        forceVerticalMode: 800,
        mode: 'horizontal',
        visibleItems: 4
});


const getOffset = (el) => {
    const rect = el.getBoundingClientRect();
    console.log(rect.top);
    return {
      left: rect.left + window.pageXOffset,
      top: rect.top + window.pageYOffset,
      width: rect.width || el.offsetWidth,
      height: rect.height || el.offsetHeight
    };
}

function connect(name){
    var ele1 = document.getElementsByClassName(name+'-card')[0];
    var ele2 = document.getElementsByClassName(name)[0];
    var line = document.getElementById("line");
    var color = "black";
    var thickness = 3;
    const off1 = getOffset(ele1);
    const off2 = getOffset(ele2);

    const x1 = off1.left + (off1.width/2);
    const y1 = off1.top + (off1.height/2);

    mod_list = ['py' , 'jy' , 'pig' , 'Chen' , 'Ha' , 'Chris'];

    if (mod_list.includes(name)){
        y2 = off2.top + (off2.height);
    }else{
        y2 = off2.top + (off2.height/2);
    }
    const x2 = off2.left + (off2.width/2);
    

    const length = Math.sqrt(((x2 - x1) * (x2 - x1)) + ((y2 - y1) * (y2 - y1)));

    const cx = ((x1 + x2) / 2) - (length / 2);
    const cy = ((y1 + y2) / 2) - (thickness / 2);

    const angle = Math.atan2((y1 - y2), (x1 - x2)) * (180 / Math.PI);

    line.style = "background-image : url('/assets/arrow_next.png'); border-top: 4px dotted ;padding:0px; margin:0px; height:" + thickness + "px; line-height:1px; position:absolute; left:" + cx + "px; top:" + cy + "px; width:" + length + "px; -moz-transform:rotate(" + angle + "deg); -webkit-transform:rotate(" + angle + "deg); -o-transform:rotate(" + angle + "deg); -ms-transform:rotate(" + angle + "deg); transform:rotate(" + angle + "deg);z-index:-1";
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
  
window.addEventListener('resize', function(event){
    var line = document.getElementById("line");
    line.style = "";

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
});

observer.observe(document.querySelector('.up-wrapper'));
//observer.observe(document.querySelector('.up-wrapper1'));
observer.observe(document.querySelector('.up-wrapper2'));
observer.observe(document.querySelector('.down-wrapper'));
observer.observe(document.querySelector('.down-wrapper2'));
