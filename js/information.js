let infos=document.querySelectorAll('.infos');
let carte2=document.getElementsByClassName("carte2");


  window.onload=function(){
      console.log("hello");
     
   
      TweenMax.staggerTo(infos,0.5,{x:0,ease: Back.easeOut.config(1.7), stagger : 0.1});
      TweenMax.from(carte2,2,{scale:0,opacity:0,ease:Back.easeOut.config(3.7)});
 } 