  //Team - - images buttons and close pop-up on closure (another click anywhere)
  var index = 0;
  function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
  }

  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
  }

  function popup(n){
    var popUp = document.getElementsByClassName("popUpArt")[0];
    var closure = document.getElementsByClassName("closure")[0];
    
    
   // popUp.classname = popUp.className.replace(" none", " active");
    popUp.style.display = "block"; 
    closure.style.display = "block"; 
    if(n ==1){
      index = 1;
      var user1=document.getElementsByClassName("author1Description")[0];
      var text1 = document.getElementsByClassName("author1Name")[0];
      user1.style.display = "block"; 
      text1.style.display = "block"; 
    }
    if(n ==2){
      index = 2;
      var user2=document.getElementsByClassName("author2Description")[0];
      var text2 = document.getElementsByClassName("author2Name")[0];
      user2.style.display = "block"; 
      text2.style.display = "block"; 
    }
    if(n ==3){
      index = 3;
      var user3=document.getElementsByClassName("author3Description")[0];
      var text3 = document.getElementsByClassName("author3Name")[0];
      user3.style.display = "block"; 
      text3.style.display = "block"; 
    }
    if(n ==4){
      index = 4;
      var user4=document.getElementsByClassName("author4Description")[0];
      var text4 = document.getElementsByClassName("author4Name")[0];
      user4.style.display = "block"; 
      text4.style.display = "block"; 
    }
  }
  function closureFct(){
      var popUp = document.getElementsByClassName("popUpArt")[0];
      var closure = document.getElementsByClassName("closure")[0];
      
      popUp.style.display = "none"; 
      closure.style.display = "none"; 
      if(index ==1){
        var user1=document.getElementsByClassName("author1Description")[0];
        var text1 = document.getElementsByClassName("author1Name")[0];
        user1.style.display = "none"; 
        text1.style.display = "none"; 
      }
      if(index ==2){
        var user2=document.getElementsByClassName("author2Description")[0];
        var text2 = document.getElementsByClassName("author2Name")[0];
        user2.style.display = "none"; 
        text2.style.display = "none";   
      }
      if(index ==3){
        var user3=document.getElementsByClassName("author3Description")[0];
        var text3 = document.getElementsByClassName("author3Name")[0];
        user3.style.display = "none"; 
        text3.style.display = "none";   
      }
      if(index ==4){
        var user4=document.getElementsByClassName("author4Description")[0];
        var text4 = document.getElementsByClassName("author4Name")[0];
        user4.style.display = "none"; 
        text4.style.display = "none"; 
      }
      
  }

  function noscroll() {
    window.scrollTo( 0, 0 );
  }
  




var modal = document.getElementById('id01');
var modal2 = document.getElementById('id02');
var modal3 = document.getElementById('id03');
var modal4 = document.getElementById('id04');
var modal5 = document.getElementById('id05');

        window.onclick = function (event) {
          window.addEventListener('scroll', noscroll);

            if (event.target == modal) {
                modal.style.display = "none";
                window.removeEventListener('scroll', noscroll);
            }else if (event.target == modal2) {
               modal2.style.display = "none";
               window.removeEventListener('scroll', noscroll);
            }else if (event.target == modal3) {
               modal3.style.display = "none";
               window.removeEventListener('scroll', noscroll);
            }else if (event.target == modal4) {
               modal4.style.display = "none";
               window.removeEventListener('scroll', noscroll);
            }else if (event.target == modal5) {
                modal5.style.display = "none";
                window.removeEventListener('scroll', noscroll);
       }
      }
