let pro =document.querySelectorAll(".prod");
let procl =document.querySelectorAll(".btn");



procl.forEach( e => {
    e.addEventListener("click",()=>{
              let n =e.getAttribute("id");
              document.cookie=`s=${n}`;
              console.log(e);
            })
          });
          
          