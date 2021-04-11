// array of image sources:

let images = [
    'images/image1.png', 'images/image2.png', 'images/image3.png','images/image4.png'
]

var container = document.getElementById("canvas");

var i ;

document.querySelector("#right").addEventListener("click",function(){
  i = i < (images.length-1) ? ++i : 0;

  container.style.backgroundImage = 'url('+ images[i] +')'

})

document.querySelector("#left").addEventListener("click",function(){
  i = i > 0 ? --i : (images.length-1);

  container.style.backgroundImage = 'url('+ images[i] +')'

})

