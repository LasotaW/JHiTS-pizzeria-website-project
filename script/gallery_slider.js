const imgs = [  
    'img/gallery/pexels-lawrence-suzara-1581554.jpg',
    'img/gallery/pexels-life-of-pix-67468.jpg',
    'img/gallery/pexels-max-avans-5056625.jpg',
    'img/gallery/pexels-max-avans-5056618.jpg'
    ];
    
    const alts =[
        'wnętrze restauracji 1',
        'wnętrze restauracji 2',
        'surowa pizza',
        'kucharz z pizzą'
    ];
    
    for(let i = 0; i < imgs.length; i++){
        document.querySelector('#thumb-imgs').innerHTML += `<img src="${imgs[i]}" alt="${alts[i]}" class="small-img">`;
    }
    const gallery = document.querySelector("#thumb-imgs");
    const bigImg = document.querySelector("#big-img");
    
    let a = document.querySelectorAll(".small-img");
    
    a.forEach(elem => elem.addEventListener("click", function (e){
        bigImg.src = e.target.src;
        bigImg.alt = e.target.alt;
    }));
    
    const arrowLeft = document.querySelector(".arrow.left");
    const arrowRight = document.querySelector(".arrow.right");
    
    let i = 0;
    
    arrowLeft.addEventListener("click", function (){
        i > 0 ? i-- : i = imgs.length-1;
        bigImg.src = imgs[i];
        bigImg.alt = alts[i];
    })
    
    arrowRight.addEventListener("click", function (){
        i < imgs.length-1 ? i++ : i = 0;
        bigImg.src = imgs[i];
        bigImg.alt = alts[i];
    })
    