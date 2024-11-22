<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<script src="https://cdn.tailwindcss.com"></script>
    <link href="input.css" rel="stylesheet" />
    <link href="public\style.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/b04d3e51a0.js" async></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arvo:ital,wght@0,400;0,700;1,400;1,700&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
	    <title> Projet Burger avec Tailwind CSS </title>
</head>
<body>
	<nav class="bg-cover bg-center p-5  w-full flex " 
         style="background-image:url('public/images/background-slate.jpg');"> 
        
        <div class="container mx-auto flex items-center justify-between">
            <div class="w-60">
                <a>
                    <img src="public/images/logo.png" class="ml-2">
                </a>
            </div>
        </div> 

        
        <ul class="text-lg uppercase font-bold flex text-white space-x-2 items-center ">
            <li> Menus </li>
            <li> Restaurant </li>
            <li> Contact </li>
        </ul>
    </nav>

    <section class="w-full bg-cover bg-center" style="background-image:url('public/images/background-slate.jpg');">
    <div class="container mx-auto flex h-96 justify-center">
        <!-- Colonne GAUCHE : Texte -->
        <div class="w-1/2 flex flex-col justify-center space-y-4 p-4">
            <h4 class="font-semibold text-6xl text-[#f8fafc] text-center font-arvo">Rapido Burger</h4>
            <p class="font-lato text-4xl text-[#FBB217] text-center">8,90 €</p>
            
            <div class="flex flex-col items-center justify-center">
                <button class=" flex items-center justify-center flex-col bg-red-500 text-white px-4 py-2 rounded max-w-sm  hover:bg-red-600">
                    Commander
                </button>
            </div>
        </div>
        
        <!-- Colonne DROITE: Image -->
        <div class="w-1/2 flex justify-center items-center">
            <img 
                class="h-full w-auto object-contain" 
                src="public/images/rapido-burger.png" 
                alt="Rapido Burger">
        </div>
    </div>
</section>



<section class="p-5">
    <!-- TITRE SUGGESTIONS -->
    <h3 class="w-full text-red-500 flex flex-row justify-center font-arvo font-bold text-2xl  pt-4"> 
        Nos suggestions 
    </h3>

<div class="flex flex-row ">

    <!-- CLASSIC BURGER -->
    <div class="container mx-auto lg:flex lg:space-x-10 flex items-center  justify-center">
            
        <div class="lg:w-1/3 text-center">
            <img src="public\images\classic-burger.jpg" class="content-center">
                <h5 class="bg-red-500 p-3 rounded-lg w-[200px] text-white inline-block px-3  py-2  mb-5"> Classic Burger </h5>

                <p class="text-justify"> Le Classic Burger allie simplicité et saveur :
                 un pain brioché moelleux, un steak juteux, du cheddar fondant, de la laitue croquante et une sauce maison savoureuse. <br>
                Une icône intemporelle pour les amateurs de burgers.</p>
                
                <p class="font-lato text-4xl text-[#E7272D] text-center font-bold py-5">
                    6,90 € 
                </p>
        </div>
     


    <!-- SUPREME BURGER -->
    <div class="text-center  lg:w-1/3">
        <img src="public\images\supreme-burger.jpg" class="mx-auto">
                <h5 class="bg-red-500 p-3 rounded-lg w-[200px] text-white inline-block px-3  py-2  mb-5"> 
                    Suprême Burger 
                </h5>
           
                <p class="text-justify">
                Suprême Burger contient un mélange généreux de steak juteux, cheddar fondant, et une sauce crémeuse, le tout dans un pain brioché doré. 
                Une explosion de saveurs à chaque bouchée.
                </p>
                
                <p class="font-lato font-bold py-5 text-4xl text-[#E7272D] text-center">7,90 €</p>
    </div>
    

    <!-- KINGDOM BURGER -->
    <div class="text-center  lg:w-1/3">
        <img src="public\images\kingdom-burger.jpg" class="mx-auto">      
            <h5 class="bg-red-500 p-3 rounded-lg w-[200px] text-white inline-block px-3  py-2  mb-5"> 
                Kingdom Burger 
            </h5>

            <p>
            Kingdom Burger est une création royale avec double steak, fromage, oignons caramélisés, et une sauce BBQ fumée, servi dans un pain moelleux. 
            Une expérience digne d’un festin.
            </p>
                
            <p class="font-lato text-4xl py-5 text-[#E7272D] text-center font-bold">8,90 €</p>
    </div>
    
    
    </div> 
</div>
</section>


<!-- BLOC NEWSLETTER-->
<section class="bg-[#FBB217] pb-5">
    <h3 class="w-full text-red-500 flex flex-row justify-center font-arvo font-bold text-2xl pb-4  pt-4">
        Inscrivez-vous à notre newsletter
    </h3>

    <div class="flex flex-row items-center justify-center">
        <input class="mr-4 pl-1" type="text" id="nom" name="nom" placeholder="Nom" required   />   
        <input class="ml-4 pl-1" type="text" id="email" name="email" placeholder="Email" required  /> 

        <button class="bg-red-500 ml-4 rounded-lg w-[100px] text-white inline-block px-3  py-2">
            Inscription
        </button>

    </div>
</section>













<!-- CLIENT-->
<section class="p-5">
    <!-- TITRE SUGGESTIONS -->
    <h3 class="w-full pb-12 text-red-500 flex flex-row justify-center font-arvo font-bold text-2xl  pt-4"> 
        Nos clients témoignent 
    </h3>

<div class="container mx-auto grid gap-2 grid-cols-1 md:grid-cols-2 lg:grid-cols-4">

    <!-- 1er CLIENT -->
    <div class="flex flex-col items-center justify-between text-center h-full">        
        <img src="public/images/avatar1.jpg" 
            class="w-1/2 mx-auto border-solid rounded-full border-4 border-red-500"
            alt="Ella Deutranche">

        <!-- Nom -->
        <h5 class="text-xl text-red-500 my-3 text-center"> 
            Ella DEUTRANCHE 
        </h5>

        <!-- Étoiles jaunes -->
        <p>
            <span class="text-yellow-500 text-2xl">★</span>
            <span class="text-yellow-500 text-2xl">★</span>
            <span class="text-yellow-500 text-2xl">★</span>
            <span class="text-yellow-500 text-2xl">★</span>
            <span class="text-yellow-500 text-2xl">★</span> 
        </p>

        <!-- Texte de description -->
        <p class="mt-3 text-justify mr-4"> 
            Expérience de qualité, alliant ingrédients frais, recettes savoureuses et service attentionné. 
            Chaque plat est préparé avec soin.
        </p>
    </div>


   <!-- 2ème CLIENT -->
<div class="flex flex-col items-center justify-between text-center h-full">
    <!-- Image avec bordure rouge -->
    <img src="public/images/avatar2.jpg" 
        class="w-1/2 mx-auto border-solid rounded-full border-4 border-red-500" 
        alt="Lambert Goer">

    <!-- Nom -->
    <h5 class="text-xl text-red-500 my-3 text-center">
        Lambert GOER  
    </h5>

    <!-- Étoiles jaunes -->
    <p>
        <span class="text-yellow-500 text-2xl">★</span>
        <span class="text-yellow-500 text-2xl">★</span>
        <span class="text-yellow-500 text-2xl">★</span>
        <span class="text-yellow-500 text-2xl">★</span>
        <span class="text-gray-500 text-2xl">★</span> <!-- Correction de "grey" à "gray" pour une classe valide -->
    </p>

    <!-- Texte de description -->
    <p class="mt-3 text-justify mr-4">
        Les burgers sont délicieux, avec des ingrédients frais et une cuisson parfaite. Le service est rapide et chaleureux.
    </p>
</div>

    

    <!-- 3ème CLIENT -->
<div class="flex flex-col items-center justify-between text-center h-full">
    <!-- Image avec bordure rouge -->
    <img src="public/images/avatar3.jpg" 
        class="w-1/2 mx-auto border-solid rounded-full border-4 border-red-500" 
        alt="Eva DeVoret">

    <!-- Nom -->
    <h5 class="text-xl text-red-500 my-3 text-center">
        Eva DEVORET
    </h5>

    <!-- Étoiles jaunes -->
    <p>
        <span class="text-yellow-500 text-2xl">★</span>
        <span class="text-yellow-500 text-2xl">★</span>
        <span class="text-yellow-500 text-2xl">★</span>
        <span class="text-yellow-500 text-2xl">★</span>
        <span class="text-yellow-500 text-2xl">★</span>
    </p>

    <!-- Texte de description -->
    <p class="mt-3 text-justify  mr-4">
        Le burger était savoureux et bien présenté, et les frites croustillantes à souhait.
        L'ambiance du restaurant est agréable, et le personnel est aux petits soins. 
        Je recommande vivement !
    </p>
</div>



<!-- 4ème CLIENT -->
<div class="text-center">
    <!-- Image avec bordure rouge -->
    <img src="public/images/avatar4.jpg" 
        class="w-1/2 mx-auto border-solid rounded-full border-4 border-red-500" 
        alt="Jean Reveu">

    <!-- Nom -->
    <h5 class="text-xl text-red-500 my-3 text-center">
        Jean REVEU
    </h5>

    <!-- Étoiles jaunes -->
    <p>
        <span class="text-yellow-500 text-2xl">★</span>
        <span class="text-yellow-500 text-2xl">★</span>
        <span class="text-yellow-500 text-2xl">★</span>
        <span class="text-yellow-500 text-2xl">★</span>
        <span class="text-yellow-500 text-2xl">★</span>
    </p>

    <!-- Texte de description -->
    <p class="mt-3 text-justify  mr-4">
        Excellent restaurant ! Les portions sont généreuses, les saveurs au rendez-vous, et le service impeccable.
        J'ai apprécié la fraîcheur des ingrédients. Une adresse à ne pas manquer !
    </p>
</div>

</div> 
</section>






<!-- FOOTER -->
<footer class="bg-cover bg-center p-5  w-full flex" 
         style="background-image:url('public/images/background-slate.jpg');"> 
        
        <div class="container flex flex-col items-center lg:w-1/3">
            <div class="w-60">
                <img src="public/images/logo.png" class="ml-2">
            </div>
        </div> 

        <div class="container flex flex-col items-center lg:w-1/3">
            <div class="w-60">
                <h3 class="text-[#E7272D] text-2xl"> Informations </h3>
                <ul class="text-[#FBB217]">
                    <li>Mentions légales</li>
                    <li>Conditions de vente</li>
                    <li>Contact</li>
                </ul>
            </div>
        </div> 

        <div class="text-center">
        <h3 class="text-2xl text-[#E7272D] mb-4"> Nous suivre </h3>
        <ul class="text-[#FBB217] flex justify-center space-x-4 text-3xl ">
            <li> <i class="fa-brands fa-instagram"></i> </li>
            <li> <i class="fa-brands fa-facebook"></i> </li>
            <li> <i class="fa-brands fa-youtube"></i> </li>
            <li> <i class="fa-brands fa-twitter"></i> </li>
        </ul>
        </div>

</footer>
















</body>
</html>


