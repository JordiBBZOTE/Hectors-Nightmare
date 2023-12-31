@extends('layouts.plantillalogged')

@section('title', 'Bienvenid@')

@section('content')

<div class="supercontainer">

    <video autoplay muted loop>
        <source src="../images/Home.mkv" type="video/mp4" />
    </video>
    
<div class="usuario">
    @if(session('username'))
        <br>{{session('username')}}
    @endif
</div>
    <div class="TituloBanner">
        
        <h1>Bienvenid@ {{Auth::user()->username}}</h1>
        
    </div>
                
<div class="contieneHistorias">

        <button id="btn_hector_open" onclick="hector()" class="storybutton">Hector</button>
        <dialog id="modalhector">
            <h1>Hector</h1>
            <h2>Este es el relato en el cual se inspira el nombre y situación del videojuego: <br>
                Hector cuenta que después de un día largo y con mucha tarea por hacer, decidió 
                quedarse un poco más en la universidad para terminar con todos sus pendientes antes 
                de irse, moría de cansancio pero continuó con su tarea. Las horas pasaron y el sueño 
                finalmente lo venció, nadie se dio cuenta que el seguía adentro de la universidad, 
                por lo que no se molestaron en despertarlo, al despertar se encontraba encerrado y 
                solo, un sentimiento de extrañeza recorrió todo su ser y el miedo y la desesperación 
                se hicieron presentes en el... El resto de la historia valdrá la pena vivirla por ti 
                mismo durante esta experiencia</h2>
            <button id="btn_hector_close">Cerrar</button>
        </dialog>
        <br><br>

        <button id="btn_baños_open" onclick="baños()" class="storybutton">Baños del R</button>
        <dialog id="modalbaños">
            <h1>Los baños del R</h1>
            <h2>Es conocido por los estudiantes que los baños del R generan incomodidad y rechazo, 
                tanto es así que muchos creen en las leyendas sobre rituales satanicos, entes malignos, entre otros. <br>
                Muchos de los que han entrado aseguran escuchar voces de mujeres susurrando.</h2>
            <button id="btn_baños_close">Cerrar</button>
        </dialog>
        <br><br>

        <button id="btn_shusheos_open" onclick="shusheos()" class="storybutton">Shusheos y llamadas</button>
        <dialog id="modalshusheos">
            <h1>Shusheos y llamadas</h1>
            <h2>Se comenta que no es recomendable caminar pasadas las 9 de la noche por el estacionamiento de revolución a menos que te 
                quieras llevar un mal rato de paranoia, puesto que se habla de haber escuchado sonidos de lechuzas (siendo que no hay por la zona) 
                así como susurros y llamadas desde varios lados que buscan llamar tu atención.</h2>
            <button id="btn_shusheos_close">Cerrar</button>
        </dialog>
        <br><br>

        <button id="btn_asechadora_open" onclick="asechadora()" class="storybutton">Asechadora</button>
        <dialog id="modalasechadora">
            <h1>Asechadora</h1>
            <h2>El enemigo abordado en el videojuego hace referencia al relato (Basado en hechos reales modificado por respeto)
            de una chica de nuevo ingreso presuntamente con problemas de autoestima y dificultad para socializar, que asistió a 
            una fiesta de bienvenida para nuevos estudiantes dentro de CUCEI. <br>
            En dicha fiesta al estar sola y no terminar de encajar en el ambiente un grupo de personas la integran con la condición 
            de ingerir una cantidad exagerada de alcohol y… al pensar que es lo que le daría amigos, ella aceptó, se embriago a 
            tal nivel que casi perdia la razon, queria pedirles ayuda a sus “nuevos amigos” sin embargo no conseguía que salieran 
            las palabras de su boca, simplemente murmullos. <br>
            Pasaron las horas y ella se quedó sentada al lado de un barril con cerveza, todo el mundo creía que dormía por lo ebria que 
            estaba… sin embargo ella ya no estaba entre nosotros. <br>
            Dentro del videojuego (ficción) nos acechara e intentará acabar con nosotros, así como lo hicieron con ella en el pasado al aprovecharse de su ingenuidad. </h2>
            <button id="btn_asechadora_close">Cerrar</button>
        </dialog>
        <br><br>

        <button id="btn_wendy_open" onclick="wendy()" class="storybutton">Wendy</button>
        <dialog id="modalwendy">
            <h1>Wendy</h1>
            <h2>Se sabe y se murmura entre estudiantes, maestros y trabajadores de CUCEI que alrededor de los laboratorios del 
                edificio G se puede ver ocasionalmente lo que parece una niña cuya característica más representativa en su 
                apariencia es que se le aprecia con toda su ropa y el cabello mojados. <br><br>
                Cuenta la leyenda que dicha niña era hija una maestra de Ciencias Químicas, una tarde que no había quien la 
                cuidara los padres decidieron llevarla a la universidad en lo que terminaba su jornada, sin embargo dicha jornada 
                era extensa, y usualmente se terminaba a horas de la noche en la cual la mayoría de los alumnos ya habían 
                regresado a casa. En un momento que no se le prestó atención: dicha niña comenzó a vagar por la universidad, 
                típico de los niños, desgraciadamente al rondar y vagar cerca de una fuente que antes estaba en la zona… la 
                niña cayó. Cuando la madre se percató que la niña no estaba salió a buscarla y curiosamente comenzó a escuchar 
                pasos húmedos, como de unos piesitos mojados recorriendo el área hasta guiarla a donde yacía su cuerpo. <br> <br>
                Actualmente su presencia se sigue manifestando, ya que hay historias de los trabajadores de mantenimiento que 
                se encuentran con dicha niña con la ropa mojada, ella les dice “Ven ayúdame a buscar a mi mamá” e incluso menciona 
                su nombre al ser cuestionada “Me llamo Wendy”, ella sigue a quien la está guiando pero cuando llegan al jardín donde 
                pasaron los hechos… ella simplemente ya no está.</h2>

            <button id="btn_wendy_close">Cerrar</button>
        </dialog>
        <br><br>

        <button id="btn_rostros_open" onclick="rostros()" class="storybutton">Rostros en las ventanas</button>
        <dialog id="modalrostros">
            <h1>Rostros en las ventanas</h1>
            <h2>Solo quienes se han quedado hasta noche dentro de las instalaciones y son susceptibles o bien… Hubo algo 
                que los obligó a voltear: pueden constatar y dar fe de que es posible ver, aunque sea de reojo y por una 
                centésima de segundo: rostros humanos en las ventanas de los salones. <br><br>
                Se divulga por ahí que… Esto viene desde una época más antigua, de los inicios de CUCEI, cuando los movimientos 
                dentro de los comités electorales llegaron a ser tan fuertes que ocasionaron conflictos a tal escala que 
                estudiantes involucrados perdieron la vida. <br>
                Se cree que esos rostros que se ven… pertenecen a sus almas en pena.
                </h2>
            <button id="btn_rostros_close">Cerrar</button>
        </dialog>
    </div>


</div>


<script>
    function hector() {
       const btn_hector_open = document.querySelector("#btn_hector_open");
       const btn_hector_close = document.querySelector("#btn_hector_close");
       const modalhector = document.querySelector("#modalhector");

       btn_hector_open.addEventListener("click",()=>{
        modalhector.showModal();
       })
       btn_hector_close.addEventListener("click",()=>{
        modalhector.close();
       })
    }

    function baños() {
       const btn_baños_open = document.querySelector("#btn_baños_open");
       const btn_baños_close = document.querySelector("#btn_baños_close");
       const modalbaños = document.querySelector("#modalbaños");

       btn_baños_open.addEventListener("click",()=>{
       modalbaños.showModal();
       })
       btn_baños_close.addEventListener("click",()=>{
       modalbaños.close();
       })
    }

    function shusheos(){
        const btn_shusheos_open = document.querySelector("#btn_shusheos_open");
        const btn_shusheos_close = document.querySelector("#btn_shusheos_close");
        const modalshusheos = document.querySelector("#modalshusheos");

        btn_shusheos_open.addEventListener("click",()=>{
            modalshusheos.showModal();
        })

        btn_shusheos_close.addEventListener("click",()=>{
            modalshusheos.close();
        })
    }

    function asechadora(){
        const btn_asechadora_open = document.querySelector("#btn_asechadora_open");
        const btn_asechadora_close = document.querySelector("#btn_asechadora_close");
        const modalasechadora = document.querySelector("#modalasechadora");

        btn_asechadora_open.addEventListener("click",()=>{
            modalasechadora.showModal();
        })

        btn_asechadora_close.addEventListener("click",()=>{
            modalasechadora.close();
        })
   }

    function wendy(){
        const btn_wendy_open = document.querySelector("#btn_wendy_open");
        const btn_wendy_close = document.querySelector("#btn_wendy_close");
        const modalwendy = document.querySelector("#modalwendy");

        btn_wendy_open.addEventListener("click",()=>{
            modalwendy.showModal();
        })

        btn_wendy_close.addEventListener("click",()=>{
            modalwendy.close();
        })
    }

    function rostros(){
       
        const btn_rostros_open = document.querySelector("#btn_rostros_open");
        const btn_rostros_close = document.querySelector("#btn_rostros_close");
        const modalrostros = document.querySelector("#modalrostros");

        btn_rostros_open.addEventListener("click",()=>{
            modalrostros.showModal();
        })

        btn_rostros_close.addEventListener("click",()=>{
            modalrostros.close();
        })
    }
</script>
    
@endsection