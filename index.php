<!DOCTYPE html>
<html lang="fr" class="w-full h-full">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://cdn.tailwindcss.com"></script>
    <link href="input.css" rel="stylesheet" />
    <link href="public\style.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/b04d3e51a0.js" async></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arvo:ital,wght@0,400;0,700;1,400;1,700&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
	
    <title> Projet Burger avec Tailwind CSS </title>
</head>
<body class="w-full h-full m-0 p-0">
	<!-- Navigation -->
<nav class="bg-cover bg-center p-5 w-full" style="background-image:url('public/images/background-slate.jpg');">
    <div class="container mx-auto flex items-center justify-between">
        <!-- Logo -->
        <div class="w-60">
            <a href="#">
                <img src="public/images/logo.png" alt="Logo" class="ml-2">
            </a>
        </div>

        <!-- Menu Items (Desktop) -->
        <ul class="hidden sm:flex text-sm uppercase font-bold text-white space-x-4">
            <li><a href="#">Menus</a></li>
            <li><a href="#">Restaurant</a></li>
            <li><a href="#">Contact</a></li>
        </ul>

        <!-- BOUTON Hamburger -->
        <button id="hamburger-btn" 
                class="block sm:hidden text-white text-2xl focus:outline-none">
            ☰
        </button>
    </div>

    <div id="mobile-menu" class="hidden flex flex-col bg-[#FBB217] text-white uppercase font-bold text-sm p-5 space-y-3">
        <a href="#">Menus</a>
        <a href="#">Restaurant</a>
        <a href="#">Contact</a>
    </div>
</nav>

    <!-- JavaScript -->
    <script>
       const hamburgerBtn = document.getElementById('hamburger-btn');
       const mobileMenu = document.getElementById('mobile-menu');

       hamburgerBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden'); 
});

    </script>


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





<div class="flex flex-wrap justify-center space-x-5 
            sm:flex-col sm:space-y-5 sm:space-x-0 
            lg:flex-row lg:space-x-5">



    <div class="flex flex-wrap justify-center lg:justify-between gap-5">

    <!-- CLASSIC BURGER -->
    <div class="text-center flex-1 min-w-[300px] max-w-[400px]">
        <img src="public/images/classic-burger.jpg" class="mx-auto">
        <h5 class="bg-red-500 p-3 rounded-lg text-white inline-block mb-5">Classic Burger</h5>
        <p class="text-justify">Le Classic Burger allie simplicité et saveur : un pain brioché moelleux, un steak juteux, du cheddar fondant, de la laitue croquante et une sauce maison savoureuse. Une icône intemporelle pour les amateurs de burgers.</p>
        <p class="font-lato text-4xl text-[#E7272D] text-center font-bold py-5">6,90 €</p>
    </div>

    <!-- SUPREME BURGER -->
    <div class="text-center flex-1 min-w-[300px] max-w-[400px]">
        <img src="public/images/supreme-burger.jpg" class="mx-auto">
        <h5 class="bg-red-500 p-3 rounded-lg text-white inline-block mb-5">Suprême Burger</h5>
        <p class="text-justify">Suprême Burger contient un mélange généreux de steak juteux, cheddar fondant, et une sauce crémeuse, le tout dans un pain brioché doré. Une explosion de saveurs à chaque bouchée.</p>
        <p class="font-lato text-4xl text-[#E7272D] text-center font-bold py-5">7,90 €</p>
    </div>

    <!-- KINGDOM BURGER -->
    <div class="text-center flex-1 min-w-[300px] max-w-[400px]">
        <img src="public/images/kingdom-burger.jpg" class="mx-auto">
        <h5 class="bg-red-500 p-3 rounded-lg text-white inline-block mb-5">Kingdom Burger</h5>
        <p>Kingdom Burger est une création royale avec double steak, fromage, oignons caramélisés, et une sauce BBQ fumée, servi dans un pain moelleux. Une expérience digne d’un festin.</p>
        <p class="font-lato text-4xl text-[#E7272D] text-center font-bold py-5">8,90 €</p>
    </div>
</div>







    
</div>


</section>



































<section class="bg-[#FBB217] pb-5">
    <h3 class="w-full text-red-500 flex flex-row justify-center font-arvo font-bold text-2xl pb-4 pt-4">
        Inscrivez-vous à notre newsletter
    </h3>

    <div class="flex flex-col sm:flex-row items-center justify-center sm:space-x-4 sm:space-y-0 space-y-4 text-center">
    <input class="pl-1" type="text" id="nom" name="nom" placeholder="Nom" required />   
    <input class="pl-1" type="text" id="email" name="email" placeholder="Email" required /> 

    <button class="bg-red-500 sm:ml-4 sm:mt-0 mt-2 rounded-lg w-[100px] text-white inline-block px-3 py-2">
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
<footer class="bg-cover bg-center p-5" style="background-image:url('public/images/background-slate.jpg');"> 
    <!-- Conteneur principal pour aligner les colonnes -->
    <div class="flex flex-wrap lg:flex-row md:flex-col md:space-y-5 lg:space-y-0 justify-around items-start">
        
        <!-- IMAGE LOGO -->
        <div class="w-full md:w-full lg:w-1/3 flex justify-center lg:justify-start">
            <img src="public/images/logo.png" class="w-40">
        </div>

        <!-- BLOC INFORMATIONS -->
        <div class="w-full md:w-full lg:w-1/3 flex flex-col items-center lg:items-start">
            <h3 class="text-[#E7272D] text-2xl mb-3">Informations</h3>
            <ul class="text-[#FBB217] space-y-2">
                <li>Mentions légales</li>
                <li>Conditions de vente</li>
                <li>Contact</li>
            </ul>
        </div>

        <!-- BLOC NOUS SUIVRE -->
        <div class="w-full md:w-full lg:w-1/3 flex flex-col items-center">
            <h3 class="text-2xl text-[#E7272D] mb-3">Nous suivre</h3>
            <ul class="text-[#FBB217] flex justify-center space-x-4 text-3xl">
                <li><i class="fa-brands fa-instagram"></i></li>
                <li><i class="fa-brands fa-facebook"></i></li>
                <li><i class="fa-brands fa-youtube"></i></li>
                <li><i class="fa-brands fa-twitter"></i></li>
            </ul>
        </div>

    </div>
</footer>

















</body>
</html>


