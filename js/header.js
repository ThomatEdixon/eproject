var slide = document.querySelector('.slide1');
// var prev = document.querySelector('.prev');
// var next = document.querySelector('.next');
var list_img = document.querySelectorAll('.list-img img');
var currentindex = 0;   
   $(".prev").click( e=>{
        if(currentindex == 0){
            currentindex = list_img.length - 1;
        }else{
            currentindex--;
        }
        $(".prev").click( e=>{
            slide.style.opacity = '0';
            setTimeout(() => {
                slide.src = list_img[currentindex].getAttribute('src');                
                slide.style.opacity = '1';
                        }, 300)
                })
            })
    $(".next").click( e=>{
        if(currentindex == list_img.length - 1){
            currentindex = 0;
        }else{
            currentindex++;
        }
        $(".next").click( e=>{
            slide.style.opacity = '0';
            setTimeout(() => {
            slide.src = list_img[currentindex].getAttribute('src');
            slide.style.opacity = '1';
                }, 300)
            })
        })