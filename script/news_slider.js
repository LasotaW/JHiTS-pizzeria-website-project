const newsLarrow = document.querySelector("#news-larrow");
const newsRarrow = document.querySelector("#news-rarrow");
const postsContainer = document.querySelector(".posts-container");
const posts = document.querySelectorAll(".post");
let postIndex = 0;

newsLarrow.addEventListener("click", function (){
    if(postIndex !== 0){
        postIndex++;
    }
    postsContainer.style.transform = `translate(${postIndex * 540}px)`;
});

newsRarrow.addEventListener("click", function (){
    if(-postIndex < posts.length-3){
        postIndex--;
    }
    postsContainer.style.transform = `translate(${postIndex * 540}px)`;
});