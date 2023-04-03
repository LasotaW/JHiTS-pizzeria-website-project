const opinions = document.querySelectorAll(".opinion");
const opWrapper = document.querySelector(".op-wrapper");
let count = 0;

  setInterval(function() {
    if(count < opinions.length) {
        opinions[count].style.opacity = "1";
        if(count-1 < 0){
            opinions[opinions.length-1].style.opacity = "0";
        }else{
            opinions[count-1].style.opacity = "0";
        }
        count++;
    }
    else if(count = opinions.length) {
        opinions[count-1].style.opacity = "1";
        count = 0;
    }
  }, 3000);
