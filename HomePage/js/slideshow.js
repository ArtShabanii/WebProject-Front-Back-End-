var images = ['../Images/bbimg2.jpg', '../Images/slide2.jpg', '../Images/slide1.jpg', '../Images/slide3.jpeg'];
var nextButton = document.getElementById('next');
var prevButton = document.getElementById('prev');

var i = 0;

nextButton.addEventListener("click", function(){
    if(i == 0){
        slideShow(1);
        i++;
    }else if(i == 1){
        slideShow(2);
        i++;
    }else if(i == 2){
        slideShow(3);
        i++;
    }else{
        slideShow(0);
        i = 0;
    }
});
function slideShow(i){
    document.getElementById("banner").style.backgroundImage = 'linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url(' + images[i] + ')';
}

prevButton.addEventListener("click", function(){
    if(i == 0){
        slideShowPrev(3);
        i = 3;
    }else if(i == 3){
        slideShowPrev(2);
        i = 2;
    }else if(i == 2){
        slideShowPrev(1);
        i = 1;
    }else if(i == 1){
        slideShowPrev(0);
        i = 0;
    }
});
function slideShowPrev(j){
    document.getElementById("banner").style.backgroundImage = 'linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url(' + images[i] + ')';
}