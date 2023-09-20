@extends('layouts.plantillalogged')

@section('title', 'Bienvenid@')

@section('content')

<div class="supercontainer">

    <form action="home" method="POST">
        @csrf
        
    </form>

    <video autoplay muted loop>
        <source src="../images/Home.mkv" type="video/mp4" />
    </video>
    
<div class="usuario">
    @if(session('username'))
        <br>{{session('username')}}
    @endif
</div>
    <div class="Recuadro"></div>
    <div class="TituloBanner">
        
        <h1>Bienvenido {{Auth::user()->username}}</h1>
        
    </div>
        
                
<div class="contieneHistorias">
        <button id="btn_baños_open">Baños del R</button>
        <dialog id="modalbaños">
            <h1>Los baños del R</h1>
            <h2>Se comenta entre los mismos estudiantes acerca de una sensación de incomodidad y vértigo en los baños del edificio R, se habla desde rituales satánicos hasta presencias malignas que te acechan y causan rechazo incluso antes de entrar a dicho espacio.
            Incluso hay relatos acerca de hombres que aseguran haber escuchado mujeres susurrando en el baño de hombres y al salir es como si no hubiera pasado.</h2>
            <button id="btn_baños_close">Cerrar</button>
        </dialog>
        <br><br>

        <button id="btn_shusheos_open">Shusheos y llamadas</button>
        <dialog id="modalshusheos">
            <h1>Shusheos y llamadas</h1>
            <h2>Se comenta que no es recomendable caminar pasadas las 9 de la noche por el estacionamiento de revolución a menos que te quieras llevar un mal rato de paranoia, puesto que se habla de haber escuchado sonidos de lechuzas (siendo que no hay por la zona) así como susurros y llamadas desde varios lados que buscan llamar tu atención.</h2>
            <button id="btn_shusheos_close">Cerrar</button>
        </dialog>
        <br><br>

        <button id="btn_asechadora_open">Asechadora</button>
        <dialog id="modalasechadora">
            <h1>Asechadora</h1>
            <h2>El enemigo abordado en el videojuego hace referencia al relato (Basado en hechos reales modificado por respeto)
            de una chica de nuevo ingreso presuntamente con problemas de autoestima y dificultad para socializar, que asistió a una fiesta de bienvenida para nuevos estudiantes dentro de CUCEI. En dicha fiesta al estar sola y no terminar de encajar en el ambiente un grupo de personas la integran con la condición de ingerir una cantidad exagerada de alcohol y… al pensar que es lo que le daría amigos, ella aceptó, se embriago a tales niveles que casi perdia la razon, queria pedirles ayuda a sus “nuevos amigos” sin embargo no conseguía que salieran las palabras de su boca, simplemente murmullos. Pasaron las horas y ella se quedó sentada al lado de un barril con cerveza, todo el mundo creía que dormía por lo ebria que estaba… sin embargo ella ya no estaba entre nosotros.
            Dentro del videojuego (ficción) nos acechara e intentará acabar con nosotros, así como lo hicieron con ella en el pasado al aprovecharse de su ingenuidad. </h2>
            <button id="btn_asechadora_close">Cerrar</button>
        </dialog>
        <br><br>

        <button id="btn_wendy_open">Wendy</button>
        <dialog id="modalwendy">
            <h1>Wendy</h1>
            <h2>Se sabe y se murmura entre estudiantes, maestros y trabajadores de CUCEI que alrededor de los laboratorios del edificio G se puede ver ocasionalmente lo que parece una niña cuya característica más representativa en su apariencia es que se le aprecia con toda su ropa y el cabello mojados.
            Cuenta la leyenda que dicha niña era hija una maestra de Ciencias Químicas, una tarde que no había quien la cuidara los padres decidieron llevarla a la universidad en lo que terminaba su jornada, sin embargo dicha jornada era extensa, y usualmente se terminaba a horas de la noche en la cual la mayoría de los alumnos ya habían regresado a casa. En un momento que no se le prestó atención: dicha niña comenzó a divagar por la universidad, típico de los niños, desgraciadamente al rondar y divagar cerca de una fuente que antes estaba en la zona… la niña cayó. Cuando la madre se percató que la niña no estaba salió a buscarla y curiosamente comenzó a escuchar pasos húmedos, como de unos piesitos mojados recorriendo el área hasta guiarla a donde yacía su cuerpo.
            Actualmente su presencia se sigue manifestando, ya que hay historias de los trabajadores de mantenimiento que se encuentran con dicha niña con la ropa mojada, ella les dice “Ven ayúdame a buscar a mi mamá” e incluso menciona su nombre al ser cuestionada “Me llamo Wendy”, ella sigue a quien la está guiando pero cuando llegan al jardín donde pasaron los hechos… ella simplemente ya no está.</h2>

            <button id="btn_wendy_close">Cerrar</button>
        </dialog>
        <br><br>

        <button id="btn_rostros_open">Rostros en las ventanas</button>
        <dialog id="modalrostros">
            <h1>Rostros en las ventanas</h1>
            <h2>Solo quienes se han quedado hasta noche dentro de las instalaciones y son susceptibles o bien… Hubo algo que los obligó a voltear: pueden constatar y dar fe de que es posible ver, aunque sea de reojo y por una centésima de segundo: rostros humanos en las ventanas de los salones.
                Se divulga por ahí que… Esto viene desde una época más antigua, de los inicios de CUCEI, cuando los movimientos dentro de los comités electorales llegaron a ser tan fuertes que ocasionaron conflictos a tal escala que estudiantes involucrados perdieron la vida.
                Se cree que esos rostros que se ven… pertenecen a sus almas en pena.
                </h2>
            <button id="btn_rostros_close">Cerrar</button>
        </dialog>
    </div>


</div>
</div>
    

@endsection