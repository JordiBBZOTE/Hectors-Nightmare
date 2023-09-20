$(document).ready(function() {
    $(".menu-button").on("click", function() {
        $(".menu-dropdown").toggle();
    });
    
    // Opcional: Ocultar el menú desplegable al hacer clic fuera de él.
    $(document).on("click", function(event) {
        if (!$(event.target).closest(".menu-container").length) {
            $(".menu-dropdown").hide();
        }
    });
});


const btn_baños_open = document.querySelector("#btn_baños_open");
const btn_baños_close = document.querySelector("#btn_baños_close");
const modalbaños = document.querySelector("#modalbaños");

btn_baños_open.addEventListener("click",()=>{
    modalbaños.showModal();
})

btn_baños_close.addEventListener("click",()=>{
    modalbaños.close();
})


const btn_shusheos_open = document.querySelector("#btn_shusheos_open");
const btn_shusheos_close = document.querySelector("#btn_shusheos_close");
const modalshusheos = document.querySelector("#modalshusheos");

btn_shusheos_open.addEventListener("click",()=>{
    modalshusheos.showModal();
})

btn_shusheos_close.addEventListener("click",()=>{
    modalshusheos.close();
})



const btn_asechadora_open = document.querySelector("#btn_asechadora_open");
const btn_asechadora_close = document.querySelector("#btn_asechadora_close");
const modalasechadora = document.querySelector("#modalasechadora");

btn_asechadora_open.addEventListener("click",()=>{
    modalasechadora.showModal();
})

btn_asechadora_close.addEventListener("click",()=>{
    modalasechadora.close();
})


const btn_wendy_open = document.querySelector("#btn_wendy_open");
const btn_wendy_close = document.querySelector("#btn_wendy_close");
const modalwendy = document.querySelector("#modalwendy");

btn_wendy_open.addEventListener("click",()=>{
    modalwendy.showModal();
})

btn_wendy_close.addEventListener("click",()=>{
    modalwendy.close();
})




const btn_rostros_open = document.querySelector("#btn_rostros_open");
const btn_rostros_close = document.querySelector("#btn_rostros_close");
const modalrostros = document.querySelector("#modalrostros");

btn_rostros_open.addEventListener("click",()=>{
    modalrostros.showModal();
})

btn_rostros_close.addEventListener("click",()=>{
    modalrostros.close();
})
