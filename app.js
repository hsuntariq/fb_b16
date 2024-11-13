let bi =document.querySelector(".bi-eye-slash");
let pass =document.querySelector(".pass");
let btn_green=document.querySelector(".btn-green");
let under= document.querySelector(".underlay");
let card= document.querySelector(".reg-card");
let cross=document.querySelector(".cross");
let danger = document.querySelector(".text-danger")

bi.style.display = "none";

bi.addEventListener("click", () => {
  bi.classList.toggle("bi-eye");

  if (pass.getAttribute("type") == "text") {
    pass.setAttribute("type", "password");
  } else {
    pass.setAttribute("type", "text");
    
  }
});

    pass.addEventListener('keyup' , ()=>{
     
        if(pass.value.length > 0){
            bi.style.display = 'block'
            
        }
        else{
            bi.style.display = 'none'

        }
    })


    btn_green.addEventListener("click", ()=>{
      under.style.transform = "translateY(0)"
      setTimeout(() => {
        card.style.opacity = "1"
      }, 700);

    })

    cross.addEventListener("click", ()=>{
      card.style.opacity = "0"
      setTimeout(() => {
        under.style.transform = "translateY(-110%)"
      }, 700);
    })

    setTimeout(() => {

      danger.style.opacity = "0";
    }, 3000);
    




    
