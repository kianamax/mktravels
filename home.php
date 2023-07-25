<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width= device-width, initial-scale=1.0">
    <title>Max kiana</title>
    <link rel="stylesheet" href="style.css">
</head>
<style type="text/css">
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    scroll-behavior: smooth;
    font-family: 'Times New Roman', Times, serif;
}

header {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    padding: 20px 100px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    z-index: 10000;
    backdrop-filter: blur(20px);
}

header .logo {
    position: relative;
    color: #fff;
    text-decoration: none;
    font-weight: 700;
    font-size: 2em;
}

header ul {
    position: relative;
    display: flex;
    gap: 40px;
}

header ul li {
    list-style: none;
}

header ul li a {
    text-decoration: none;
    color: #fff;
    font-weight: 500;
    font-size: 1.25em;
}

header ul li.active a,
header ul li:hover a {
    color: #30fe6c;
}

#Home {
    position: relative;
    width: 100%;
    min-height: 100vh;
    background: #222;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 100px;
}


/**#Home::before {
    content: '';
    position: absolute;
    bottom: 0;
    right: 0;
    width: 50vw;
    height: 25vw;
    background: #30fe6c;
    border-top-right-radius: 25vw;
    border-top-left-radius: 25vw;
}**/

#Home .content {
    position: relative;
    display: flex;
    flex-direction: column;
    gap: 10px;
    max-width: 650px;
    z-index: 10;
}

#Home .content h2 {
    position: relative;
    font-size: 5em;
    color: #30fe6c;
}

#Home .content p {
    position: relative;
    font-size: 1.25em;
    color: #fff;
    line-height: 1.6em;
}

.btn {
    position: relative;
    display: inline-block;
    max-width: 200px;
    background: #30fe6c;
    color: #222;
    text-align: center;
    padding: 18px 30px;
    font-weight: 500;
    letter-spacing: 0.05em;
    text-decoration: none;
    margin-top: 10px;
}

#Home .men {
    position: absolute;
    bottom: 10px;
    right: 50px;
    max-height: 70vh;
}

#Services,
#Contact,
#Portfolio,
#Offers {
    position: relative;
    background: #34353a;
    min-height: 100vh;
    padding: 120px 100px;
    display: flex;
    justify-content: center;
    flex-direction: column;
}

.sectext {
    position: relative;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}

.sectext h2 {
    font-size: 3em;
    color: #fff;
}

.sectext p {
    max-width: 700px;
    text-align: center;
    color: #aaa;
    font-size: 1.1em;
    line-height: 1.5em;
}

#Services .content {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    grid-gap: 20px;
    margin: 40px 0;
}

#Services .content .service-box {
    background: #2e2f34;
    padding: 50px 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    gap: 20px;
    border: 2px solid #2e2f34;
}

#Services .content .service-box:hover {
    border: 2px solid #30fe6c;
}

#Services .content .service-box img {
    max-width: 100px;
    filter: invert(1);
    opacity: 0.5;
    transition: 0.5s;
}

#Services .content .service-box:hover {
    opacity: 1;
}

#Services .content .service-box h3 {
    color: #fff;
    font-weight: 500;
    color: #30fe6c;
}

.center {
    width: 100%;
    text-align: center;
}


/*#Portfolio {
    background: #2e2f34;
    text-align: center;
}

#Portfolio .content {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 20px;
    margin: 20px 0;
}

#Portfolio .content .service-box {
    position: relative;
}

#Portfolio .content .service-box img {
    max-width: 80%;
}*/

#Contact .content {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    grid-gap: 20px;
    margin: 40px 0;
}

#Contact .content a {
    background: #2e2f34;
    height: 120px;
    display: flex;
    justify-content: center;
    align-items: center;
    text-decoration: none;
    font-size: 1.2em;
    color: #fff;
    transition: 0.5s;
}

#Contact .content a:hover {
    background: #30fe6c;
}

#Contact .content a ion-icon {
    color: #30fe6c;
    font-size: 1.5em;
    margin-right: 10px;
    transition: 0.5s;
}

#Contact .content a:hover,
#Contact .content a:hover ion-icon {
    color: #222;
}
#Offers .content {
    display: flex;
    justify-content: space-between; /* This will evenly space the items horizontally */

}

/* Style for the service-box divs */
#Offers .service-box {
    background: #2e2f34;
    flex: 0 0 auto; /* Ensures the boxes won't grow or shrink */
    width: 25%; /* Set the width to 25% to fit 4 items horizontally */
    text-align: center; /* Optional: Center the content horizontally */
}
#Offers .content .service-box {
    background: #2e2f34;
    padding: 50px 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    gap: 20px;
    border: 2px solid #2e2f34;
}
#Offers .content .service-box:hover {
    border: 2px solid #30fe6c;
}
/* Style for the images inside service-box divs */
#Offers .content .service-box img {
    max-width: 100%; /* This will make the image resize to fit the container width */
}
#Offers .content .service-box h3 {
    color: #fff;
    font-weight: 500;
    color: #30fe6c;
}
@media (max-width: 900px) {
    header {
        padding: 20px 50px;
    }
    #Home {
        padding: 150px 50px;
        flex-direction: column;
        padding-bottom: 0;
    }
    #Home .content h2 {
        font-size: 4em;
    }
    .btn {
        max-width: 160px;
        padding: 10px 20px;
    }
    #Home .men {
        position: absolute;
        height: 50vh;
        right: 0;
    }
    .sectext h2 {
        font-size: 2em;
        text-align: center;
    }
    #Services,
    #Contact {
        padding: 100px 50px;
    }
    #Services .content,
    #Contact .content {
        grid-template-columns: repeat(2, 1fr);
    }
    .menu {
        position: relative;
        width: 30px;
        height: 20px;
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
        background: #f00;
    }
    .menu::before {
        content: '';
        position: absolute;
        width: 100%;
        height: 2px;
        background: #fff;
        transform: translateY(-10px);
        transition: 0.5s;
        box-shadow: 0 10px #fff;
    }
    .menu::after {
        content: '';
        position: absolute;
        width: 100%;
        height: 2px;
        background: #fff;
        transform: translateY(10px);
        transition: 0.5s;
    }
    header.active .menu::before {
        transform: translateY(0px)rotate(45deg);
    }
    header ul {
        display: none;
    }
}

@media (max-width: 700px) {
    #Home .content h2 {
        font-size: 3em;
    }
    #Home::before {
        width: 80vw;
        height: 40vw;
        border-top-right-radius: 80vw;
        border-top-left-radius: 80vw;
    }
    #Home .men {
        height: 40vh;
    }
    #Services .content,
    #Contact .content {
        grid-template-columns: repeat(1, 1fr);
    }
    #Contact .content a {
        height: 80px;
    }
}

</style>
<body>
    <header>
        <a href="" class="logo">Travel with Kiana</a>
        <div class="menu"></div>
        <ul class="nav">
            <li class="active"><a href="#Home">Home</a></li>
            <li><a href="#Services">Services</a></li>
            <li><a href="#Contact">Contact</a></li>
            <li><a href="#Offers">Offers</a></li>
        </ul>
    </header>
    <section id="Home">
        <div class="content">
            <h2>MK Tours and Safaris</h2>
            <p>At MK Tours and Safaris, we believe that every journey should be an unforgettable adventure. As a premier travel company, we specialize in crafting extraordinary safari experiences that showcase the awe-inspiring beauty of nature and the vibrant cultures of our destinations.</p>
            <a href="" class="btn">Contact Me</a>
        </div>
        <img src="kk.png" alt="" class="men">
    </section>
    <section id="Services">
        <div class="sectext">
            <h2>What we offer</h2>
            <p>Whether you dream of witnessing the majestic wildlife of the African savannah, exploring the hidden gems of exotic destinations, or immersing yourself in the rich cultural heritage of diverse communities, we are here to bring your dreams to life.</p>
        </div>
        <div class="content">
            <div class="service-box">
                <img src="safari.png" alt="">
                <h3>Safaris</h3>
            </div>
            <div class="service-box">
                <img src="infrastructure.png" alt="">
                <h3>Transport</h3>
            </div>
            <div class="service-box">
                <img src="accommodation.png" alt="">
                <h3>Accomodation</h3>
            </div>
            <div class="service-box">
                <img src="apartment-for-rent.png" alt="">
                <h3>car hire</h3>
            </div>
        </div>
        <div class="center">
            <a href="#Offers" class="btn">Book Now</a>
        </div>
    </section>
    <section id="Contact">
        <div class="sectext">
            <h2>Ways to Contact Me</h2>
            <p>Am a photographer, web developer and an android developer. With good creativity skills and problem solving skills</p>
        </div>
        <div class="content">
            <a href="#">
                <ion-icon name="mail-open-outline"></ion-icon> Kianamuchiri@gmail.com
            </a>
            <a href="#">
                <ion-icon name="call-outline"></ion-icon> +254 797684879
            </a>
            <a href="#">
                <ion-icon name="logo-twitter"></ion-icon> @kianamax
            </a>
            <a href="#">
                <ion-icon name="logo-instagram"></ion-icon> @kiana
            </a>
        </div>
    </section>
    <section id="Offers">
        <div class="sectext">
            <h2>Offers available</h2>
            <p>These are some of the offers we have available</p>
        </div>
        <div class="content">
            <div class="service-box">
                <img src="six.jpg" alt="">
                <h3>Maasai Mara</h3>
            </div>
            <div class="service-box">
                <img src="lodge (2).jpg" alt="">
                <h3>Nakuru</h3>
            </div>
            <div class="service-box">
                <img src="zanzibar (2).jpg" alt="">
                <h3>Zanzibar</h3>
            </div>
            <div class="service-box">
                <img src="diani.jpg" alt="">
                <h3>Diani</h3>
            </div>
            
        </div>
        <div class="center">
            <a href="safari.php" class="btn">Book Now</a>
        </div>
        
    </section>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script>
        let list = document.querySelectorAll('.nav li');

        function active() {
            list.forEach((i) =>
                i.classList.remove('active'));
            this.classList.add('active');
        }
        list.forEach((i) =>
            i.addEventListener('click', active));

        let menu = document.querySelector('.menu');
        let header = document.querySelector('.header');
        menu.onClick = function() {
            header.classList.toggle('active');
        }
    </script>
</body>

</html>