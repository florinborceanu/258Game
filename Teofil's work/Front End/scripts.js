  //Sory - - slides
  var slideIndex = 1;
  showSlides(slideIndex);
  
  function plusSlides(n) {
    showSlides(slideIndex += n);
  }
  
  function currentSlide(n) {
    showSlides(slideIndex = n);
  }
  var index = 0;
  function popup(n){
    var popUp = document.getElementsByClassName("popUpArt")[0];
    var closure = document.getElementsByClassName("closure")[0];
   // popUp.classname = popUp.className.replace(" none", " active");
    popUp.style.display = "block"; 
    closure.style.display = "block"; 
    if(n ==1){
      index = 1;
      var user1=document.getElementsByClassName("user1")[0];
      user1.style.display = "block"; 
    }
    if(n ==2){
      index = 2;
      var user2=document.getElementsByClassName("user2")[0];
      user2.style.display = "block"; 

    }
    if(n ==3){
      index = 3;
      var user3=document.getElementsByClassName("user3")[0];
      user3.style.display = "block"; 

    }
    if(n ==4){
      index = 4;
      var user4=document.getElementsByClassName("user4")[0];
      user4.style.display = "block"; 

    }
  }
  function closureFct(){
      var popUp = document.getElementsByClassName("popUpArt")[0];
      var closure = document.getElementsByClassName("closure")[0];
      popUp.classname = popUp.className.replace(" none", " active");
      popUp.style.display = "none"; 
      closure.style.display = "none"; 
      if(index ==1){
        var user1=document.getElementsByClassName("user1")[0];
        user1.style.display = "none"; 
      }
      if(index ==2){
        var user2=document.getElementsByClassName("user2")[0];
        user2.style.display = "none"; 
  
      }
      if(index ==3){
        var user3=document.getElementsByClassName("user3")[0];
        user3.style.display = "none"; 
  
      }
      if(index ==4){
        var user4=document.getElementsByClassName("user4")[0];
        user4.style.display = "none"; 
  
      }
      
  }
  function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
     if (n > slides.length) {
         slideIndex = 1
      }    
     if (n < 1) {
       slideIndex = slides.length
      }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
  }

  //Team - - images buttons