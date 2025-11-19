<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>.
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton&family=Electrolize&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
   
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="logo-div"><img src="img/dijaparfumerielogo.jpg" alt="" srcset="" class="logo-img"></div>
            <ul>
                <li><a href="/index.html">Accueil</a></li>
                <li><a href="">Parfums</a></li>
                <li><a href="">Nouveautés</a></li>
                <li><a href="#about">À propos</a></li>
                <li><a href="#contacts">Contact</a></li>                   
            </ul>

            <div class="icons-div">
                <div class="compteicon-div">
                    <a href="#" ><img src="img/compteicon.jpg" alt="" srcset="" class="compte-img"  id="compte-btn"></a>
                </div>
           <div class="panier-div">
                <a href=""><img src="img/shoppingcard.jpg" alt="" srcset="" class="panier-img" ></a>
            <span class="quantity">0</span>
           </div> 
            </div>
        </nav>
        <div class="second-navbar">
     <button class="hamburger" id="hamburger-btn" aria-label="Menu de navigation">
         <span class="trait"></span>
         <span class="trait"></span>
         <span class="trait"></span>
     </button>
         <div class="icons-div"><a href=""><img src="img/compteicon.jpg" alt="" srcset="" class="panier-img"></a>
            <a href=""><img src="img/shoppingcard.jpg" alt="" srcset="" class="compte-img panier-img"></a></div>
       </div>     
    </header>

    <section>
        <div class="hero-div"> <img src="img/prfemme.jpg" alt="" srcset="" class="hero-img">
            <h1>Bienvenu chez Dija Parfumerie</h1>
            <h2 class="credo">L'ESSENCE DE L'ELEGANCE</h2>
           
        </div>
    </section>
    <section class="gammes">
        <p>
            Nous avons des parfums de classe, pour femme, pour homme et des parfums unisexe. N'hésitez pas de visiter notre catalogue de produits. Nous livrons partouts au Sénégal, vous pouvez nous contacter via nos différentes plateforme.
            Découvrez nos gammee <span  class="jour">Essence du Jour</span>, avec un prix <span class="jambaar">Jàmbaar</span> et nos gammes Premium <span class="nuit">Nuit D'or</span> avec un prix <span class="ndaanaan">Ndaanaan</span>
        </p> 
    </section>
    
    <section class="product-sec">
           <div class="product-box">
            <img src="img/musouf.jpg" alt="Parfum L'Élégance" class="product-image"  height="200px"  width="200px">
            <h3 class="product-name">Musouf</h3>
            <p class="product-description">Notes florales et boisé subtil.</p>
            <p class="product-price">7000 FCFA</p>
            <button class="add-to-cart">Ajouter au Panier</button>
        </div>

        <div class="product-box">
            <img src="img/khamrah.jpg" alt="Parfum L'Élégance" class="product-image"  height="200px"  width="200px">
            <h3 class="product-name">khamrah</h3>
            <p class="product-description">Un oriental épicé pour la soirée.</p>
            <p class="product-price">7000 FCFA</p>
            <button class="add-to-cart">Ajouter au Panier</button>
        </div>

        <div class="product-box">
           <img src="img/musouf.jpg" alt="Parfum L'Élégance" class="product-image"  height="200px"  width="200px">
            <h3 class="product-name">La Fraîcheur</h3>
            <p class="product-description">Hespéridé et aquatique, idéal été.</p>
            <p class="product-price">7000 FCFA</p>
            <button class="add-to-cart">Ajouter au Panier</button>
        </div>
        <div class="product-box">
           <img src="img/musouf.jpg" alt="Parfum L'Élégance" class="product-image"  height="200px"  width="200px">
            <h3 class="product-name">La Fraîcheur</h3>
            <p class="product-description">Hespéridé et aquatique, idéal été.</p>
            <p class="product-price">7000 FCFA</p>
            <button class="add-to-cart">Ajouter au Panier</button>
        </div>
        
    </section>

    <section class="about-sec">
<h2 class="about-title">A propos: </h2>
    <div id="about" class="about-div">
        
        <div class="admin">
           
            <img class="admi-img" src="img/fondateur.png" alt="">
            <h3>Mots du Fondateur</h3>
            <p style="font-size: 16px; line-height: 1.6; color: #333;">
                Je suis <strong>Mamadou Abib KEBE</strong>, fondateur et administrateur de cet espace. Ma passion ? Partager l'art de la parfumerie et vous guider vers le sillage qui raconte votre histoire.
                Nous avons créé ce site non pas pour vendre des produits, mais pour offrir des expériences, des émotions et des découvertes.
            </p>
           
        </div>

           <div class="about-text">
            <h2 class="about-hero">Notre histoire: </h2>
            <p style="font-size: 16px; line-height: 1.6; color: #333;">
            L'histoire de <span class="site-name">Dija Parfumerie</span>, votre destination privilégiée de la parfumerie est née d'une passion pour les fragrances exceptionnelles. Un parfum est bien plus qu'une odeur; c'est une signature, un souvenir, une expression de soi. C'est pourquoi nous sélectionnons méticuleusement des gammes qui résonnent avec l'élégance internationale et les traditions olfactives locales. Que vous cherchiez un classique intemporel, une exclusivité rare, ou le parfait cadeau pour un événement, nous vous offrons une expérience d'achat aussi authentique que nos produits.
            </p>
        </div>
     
    </div>
    </section>

     <div class="fond" id="popupFond" >  
        <div class="popupContenu">

           <div class="exit-div"><a href="#" id="popup-exit">x</a></div> 

             <h2 class="popup-hero">Se connecter</h2>
             <form action="data.php" method="post">

                <div class="compte-link">
                     <h3 >Avez vous un compte?</h3>
                     <a href="#"  id="inscrire-btn">S'inscrire ici.</a>
                </div>
          
            <div class="form-group">
                <label for="email">Adresse e-mail :</label><br>
                <input type="email" id="email" name="email" required placeholder="exemple@domaine.com">
            </div>
            <div class="form-group">
                <label for="password">Mot de pass: </label><br>
                <input type="password" id="password" name="password" required minlength="8" placeholder="8 caractères minimum">
            </div>
           
            <button class="btn-submit" type="submit">Se connecter</button>
            
        </form>
                        

        
        </div>
    

    </div>




<footer class="footer-div">
    
        <div id="contacts" class="contact">
            <h3>Aide & Contact</h3>
            <ul>
                <li><a href="/faq">Foire aux Questions (FAQ)</a></li>
                <li><a href="/suivi-commande">Suivi de Commande</a></li>
                <li><a href="/retours">Retours & Échanges</a></li>
                <li><a href="mailto:contact@essence.com">Nous Contacter</a></li>
            </ul>
        </div>

        <div class="nous">
            <h3>Modes de Paiement :</h3>
            <ul>
                <li><a href="/ingredients">Orange Money</a></li>
                <li><a href="/engagements">Wave</a></li>
                <li><a href="/revendeurs">Visa</a></li>
                <li><a href="/revendeurs">MasterCard</a></li>
                <li><a href="/revendeurs">PayPal</a></li>
            </ul>
        </div>
 
            <div class="media">
                <h3>Nos différents réseaux</h3>
                <ul>
                    <li><a href="#">Facbook</a></li>
                    <li><a href="#">instagram</a></li>
                    <li><a href="#">Whatsapp</a></li>
                    <li><a href="#">Linkedin</a></li>
                </ul>  
            </div>
        
   
</footer>


 


<div class="copyright">© 2025 Dija Parfumerie. Tous droits réservés.</div>




 <div class="inscrire-fond"  >  
        <div class="inscrire-popup">

           <div class="exit-div"><a href="#" id="inscrire-popup-exit">x</a></div> 

             <h2 class="popup-hero">Espace clients</h2>
             <form action="data.php" method="post">
               
             <div class="form-group">
                <label for="prenom">Prénom: </label><br>
                <input type="text" id="prenom" name="prenom">
             </div>
             <div class="form-group">
                <label for="nom">Nom: </label><br>
                <input type="text" id="nom" name="nom">
             </div>
            <div class="form-group">
                <label for="email">Adresse e-mail :</label><br>
                <input type="email" id="email" name="email" required placeholder="exemple@domaine.com">
            </div>
            <div class="form-group">
                <label for="password">Mot de pass: </label><br>
                <input type="password" id="password" name="password" required minlength="8" placeholder="8 caractères minimum">
            </div>
           
            <button class="btn-submit" type="submit" name="submit">S'inscrire</button>
            
        </form>
                        

        
        </div>
    

    </div>



 <script src="javascript.js"></script>
  


</body>

  
  

</html>