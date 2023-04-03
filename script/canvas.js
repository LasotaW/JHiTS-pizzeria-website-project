try{
    const canvas = document.getElementById("canvas");
    const ctx = canvas.getContext('2d');
    
    canvas.height = window.innerHeight;
    canvas.width = window.innerWidth;
    
    let colors = document.querySelectorAll(".color");
    
    colors.forEach(color => color.addEventListener("click", function (e){
        ctx.strokeStyle = window.getComputedStyle(e.target).backgroundColor;
    }));
    
    let painting = false;
    
    function startPosition(e){
        painting = true;
        draw(e);
    }
    
    function endPosition(){
        painting = false;
        ctx.beginPath();
    }
    
    function draw(e){
        if(!painting) return;
        ctx.lineWidth = 10;
        ctx.lineCap = 'round';
    
        ctx.lineTo(e.clientX, e.clientY+32);
        ctx.stroke();
        ctx.beginPath();
        ctx.moveTo(e.clientX, e.clientY+32);
    }
    
    canvas.addEventListener("mousedown", startPosition);
    canvas.addEventListener("mouseup", endPosition);
    canvas.addEventListener("mousemove", draw);
    canvas.addEventListener("mouseleave", endPosition);
}catch{
    
}

