<?php
session_start();

?>
<!DOCTYPE html>
<html>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='./css/index.css' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <!-- <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script> -->
    <script src='./js/index.js'></script>

   <title>Home</title>
</head>

<body class='main'>
    <div id="navbar">
        <img id="logo-pic" src="../../photos/logo zi.png" alt="no pic found">
        <div id="nav-holder">
            <a href="#default" id="logo">Marakli T'Biciklave</a>
            <div id="navbar-right">
                <a class="link" href="../general components/index.php">Home</a>
                <a class="link" href="../events/Eventet.php">Eventet</a>
                <a class="link" href="../shop/shop.php">Shop</a>
                <!-- <?php if ($_SESSION['isLoged']): ?> -->
                    <a class="link" href="../profile/logout.php">Log out</a>
                    <a class="link" href="../profile/profile.php"><?php echo $_SESSION['emri']." ".$_SESSION['mbiemri'];?></a>
                

                <!-- <?php else: ?> -->
                    <a class="link" href="../profile/Login.php">Log in</a>
                    <a class="active" href="../profile/Sign up.php">Join Us</a>
                    <!-- <?php endif;?> -->
                <!-- <a class="link" href="../profile/Login.php">login</a>
                <a href='../profile/Sign up.html' class="active link" href="#">Join Us</a> -->
                <!-- <a class="link" href="../profile/profile.php">Profile</a> -->
            </div>
        </div>
    </div>


    <section id="one">
        <div class=" flexRow">
            <div data-aos="fade-right" data-aos-delay="300" data-aos-offset="0" class='content'>
                <h1 style='font-size:5vw;'>Q??llimi</h1>
                <p style='font-size:3vw;'> </p>
                <div>Marakli't biciklave eshte grupi me i madh ne ballkan i cili si qellim kryesor ka qe te ngris vetedijen njerzore ndaj qiklisteve dhe njekohesisht te ju ofroj qiklisteve mundsine e qiklimit ne grup.
                </div>

            </div>
            <div data-aos="fade-down" data-aos-delay="500" data-aos-offset="0" class="content" style="margin-left: 2%; width: 25%; text-align: right;">Ne cdo event prioritet per ne eshte siguria e qiklisteve andaj edhe munodhemi qe qiklistet te jene mbi 16 vjeq dhe me te pjekur ne menyre qe mos te hasim probleme gjate rruges.
                <div class="content" style="margin-left: 0%; width: auto; text-align: right; margin-top: 30px;">Ne mundohemi qe te sjellim nje lidhje te fort shoqerore mes qiklisteve duke i afruar sa me afer me njeri-tjetrin. Lumturia, largimi nga problemet e perditshme, kthjellimi i mendjes dhe trupit jane veqorite kyqe qe ne mundohemi si grup
                    cdo qiklist ti perjetoj</div>

            </div>

        </div>
    </section>



    <section id="two" style='margin-top: 100vh;'>

        <div class=" flexRow">
            <div data-aos="fade-right" data-aos-delay="700" data-aos-offset="0" class='content'>
                <h1 style='font-size:5vw;'>Historiku</h1>
                <div>Marakli t`Biciklave (MB) ??sht?? komuniteti m?? i madh i ??iklist??ve momentalisht n?? Kosov?? q?? rreth vet??s mbledh mbi 28 mij?? an??tar?? n?? rrjete sociale nga t?? gjitha moshat duke filluar nga mbi 16 vjecar??/e. MB ??sht?? themeluar tre vite m??
                    her??t nd??rsa qe nga 17 janari 2020 vepron edhe si Organizat?? joqeveritare q?? ka p??r q??llim: Avancimin e sportit t?? biciklizmit, krijimin e kushteve p??r aktivitete sportive dhe kualitative si dhe ngritjen e cil??sis?? s?? sportit t?? biciklizmit
                    duke promovuar jetes?? t?? sh??ndeteshme dhe ambientit t?? past??r. </div>
            </div>
            <div data-aos="fade-down" data-aos-delay="900" data-aos-offset="0" class="content" style="margin-left: 2%; width: 25%; text-align: right;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, porro. Laborum, ipsam accusantium et numquam repellat soluta nisi? Et fuga molestiae modi accusamus. Consectetur ex vitae natus. Ipsum, fugiat maxime.
                <div class="content" style="margin-left: 0%; width: auto; text-align: right; margin-top: 30px;">Jemi themeluar qe nga viti 2016 si nje grup shume i vogel prej 5 antaresh. Deshira e kryetarit te grupit per te krijuar diqka te madhe shtyu qe dita dites te rritej numri i pjestareve te grupit. Tashme kemi rreth 50 qiklist aktiv, ndersa
                    per evente masive numri arrin deri ne 300 qikliste nga secilia komune. Eshte knaqsi e jona te promovojme diqka te bukur qe le mbresa brezave qe do vijne. Marakli tBiciklave po ashtu jan?? pjes?? e disa projekteve dhe iniciativave t??
                    cilat kan?? p??r synim p??rmir??simin e infrastruktures rrugore p??r ??ikliz??m n?? Prishtin??, Fush?? Kosov??, Prizren, Podujev??, Pej??, Gjakov?? dhe qytete tjera t?? Kosov??s.</div>
            </div>
        </div>
    </section>



    <section id="three" style='margin-top: 100vh;'>
        <div class=" flexRow">
            <div data-aos="fade-right" data-aos-delay="700" data-aos-offset="0" class='content'>
                <h1 style='font-size:5vw;'>Imapkti</h1>

                <div>Me q??llim parandalimin e aksidenteve ,ngritjen e vet??dijes dhe nd??rgjegj??simin pjes??marr??sve n?? komunikacion p??r sigurin?? rrugore, uljen e shpejt??sis?? s?? qarkullimit n?? komunikacion t?? mjeteve motorike n?? 30kmh ne zona urbane , pran?? shkollave
                    dhe zona t?? tjera t?? caktuara p??r t?? shp??tuar jet?? n?? rrug??t e Republik??s s?? Kosov??s. Marakli t???Biciklave s?? bashku me Policin?? e Kosov??s dhe n?? bashk??punim me Komuna e Prishtin??s po shp??rndajn?? Flet??palosje informuese p??r ngas??sit
                    e mjeteve motorike n??p??r rrug??t e kryeqytetit t?? Kosov??s, Prishtin??s. Fletushka informuese ka k??shilla bazike p??r drejtuesit e mjeteve motorike, k??to k??shilla jan?? t?? r??nd??sishme dhe informacione t?? nevojshme rreth bi??iklet??s dhe ??iklizmit
                    ,ajo p??rmban informacione sa i p??rket distanc??s n?? mes t?? mjetit motorik dhe bi??iklet??s, kontrollin e gjendjes p??r rreth, sinjalizimin, shtigjet e bi??ikletave, shtigjet e k??mb??soreve, kontrolli k??ndit t?? vdekur dhe p??r rreth p??r ??iklist??
                    si dhe k??shilla t?? tjera.</div>
            </div>
            <div data-aos="fade-down" data-aos-delay="900" data-aos-offset="0" class="content" style="margin-left: 2%; width: 25%; text-align: right;">Kryeqyteti i bi??ikletave, Gjakova, me 30 Maj do t?? jet?? bashk??organizatore dhe nikoqire e eventit t?? turit sportivo-kulturor. Sot n??nshkruam memorandumin e bashk??punimit ku nd??r pikat kryesore p??rfshihet zhvillimi i nj?? turi i cili do jet??
                tradicional e q?? ka ka p??r q??llim rritjen e numrit t?? p??rdoruesve t?? bicikletave, si dhe promovimin e pikave turistike n?? komun??n e Gjakov??s. N?? dit??t ne vijm?? do publikojm?? detajet tjera rreth k??tij aktiviteti.

                <div class="content" style="margin-left: 0%; width: auto; text-align: right; margin-top: 30px;">N?? k??t?? takim u diskutua p??r gjendjen aktuale t?? shtigjeve t?? bi??ikletave n?? k??t?? qytet,si dhe u vler??suan nevoja dhe mund??sit ,t?? t?? gjith?? akter??ve p??rfshir?? edhe Komun??n dhe institucionet tjera relevante, p??r krijimin e kushteve dhe
                    rrethanave m?? t?? mira p??r sigurin?? e p??rgjithshme t?? ??iklist??ve n??p??r rrug??t e Gjakov??s , me theks t?? ve??ant krijimin e shtigjeve t?? reja t?? ??iklizmit dhe parkingjeve p??r bi??ikleta n?? pika t?? caktuara, brenda dhe jasht qytetit. Gjithashtu
                    pjes?? e diskutimeve ishte dhe mund??sia</div>
            </div>
        </div>
    </section>


    <section id="four" style='margin-top: 100vh; margin-bottom: 25vh;'>

        <div class="Join-us flexRow">
            <div data-aos="fade-right" data-aos-delay="700" data-aos-offset="0" class='content'>
                <h1 >JOIN US</h1> 
                <h2 >Aty ku na bashkon pasioni p??r ??iklizmin!</h2>        
                <button>
                    <a class="link" href="../profile/sign up.php">sign up</a>
                </button>                  
            </div>
        </div>
    </section>


    <div id="progress">

        <div id="div_t">

            <img id="terrain" src="../../photos/marakli ribon1.png" alt="no pic">
        </div>
        <div class="progress-container">
            <div class="progress-bar" id="myBar">
            </div>
            <img id="biker" src="../../photos/bike-biking.gif" alt="no img found">
        </div>
    </div>


    <img id="cave" src="../../photos/cave.png" alt="">

    <div id="main-body">

        <h1 style="text-align: center; padding: 0px 20px 20px 20px; margin-top: -60px; ">perks of our web page
        </h1>

        <div class="events">

            <div class="pic" data-aos="fade-up" data-aos-duration="3000">
                <div style=" background:none">
                    <img src="../../photos/sc2.png" width=500px alt="no picture">
                   
                </div>
            </div>
            <div class="text" data-aos="fade-up" data-aos-duration="1000">
                <h2>Marakli t'biciklave shop</h2>

                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita reiciendis similique aliquid. Suscipit sed vero fuga tenetur possimus est, ratione optio dolor nemo natus. Corporis non eius laborum ab dolore. tetur adipisicing elit.
                    Expedita reiciendis similique aliquid. Suscipit sed vero fuga tenetur possimus est, ratione optio dolor nemo natus. Corporis non eius laborum</p>
                <!-- <div class="test" style=" background: red;"> -->
            </div>

        </div>
        <div class="events">
            <div class="text" data-aos="fade-up" data-aos-duration="1000">
                <h2>Eventet e maraklive</h2>

                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita reiciendis similique aliquid. Suscipit sed vero fuga tenetur possimus est, ratione optio dolor nemo natus. Corporis non eius laborum ab dolore. tetur adipisicing elit.
                    Expedita reiciendis similique aliquid. Suscipit sed vero fuga tenetur possimus est, ratione optio dolor nemo natus. Corporis non eius laborum</p>
                <!-- <div class="test" style=" background: red;"> -->
            </div>

            <div class="pic" data-aos="fade-up" data-aos-duration="3000">
                <div style=" background:none">
                    <img src="../../photos/sc1.png" width=500px alt="no picture">
                    
                </div>
            </div>

        </div>

    </div>
    <h2 style="text-align: center; margin-bottom: 20px; font-size: 70px;">Our Team</h2>
    <div class="flexRow gallery">
        <i class="switch fa fa-caret-left" aria-hidden="true" onclick="prev()"></i>
        <!-- <i class='fas fa-caret-left'></i>  -->
        <div class="gallery-cell hiden">
            <img src="../../photos/28n.jpg" alt="">
            <div class="tekst">

                <h4>Betim Qiklisti5</h4>
                <h5>Menaxher Gjeneral</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco </p>
            </div>
            <div class="social">
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-linkedin"></a>
            </div>
        </div>
        <div class="gallery-cell">
            <img src="../../photos/marak4.jpg" alt="">
            <div class="tekst">

                <h4>Betim Qiklisti1</h4>
                <h5>Menaxher Gjeneral</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco </p>
            </div>
            <div class="social">
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-linkedin"></a>
            </div>
        </div>
        <div class="gallery-cell">
            <img src="../../photos/marak2.jpg" alt="">
            <div class="tekst">

                <h4>Betim Qiklisti2</h4>
                <h5>Menaxher Gjeneral</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco </p>
            </div>
            <div class="social">
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-linkedin"></a>
            </div>
        </div>
        <div class="gallery-cell">
            <img src="../../photos/marak3.jpg" alt="">
            <div class="tekst">

                <h4>Betim Qiklisti3</h4>
                <h5>Menaxher Gjeneral</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco </p>
            </div>
            <div class="social">
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-linkedin"></a>
            </div>

        </div>
        <div class="gallery-cell hiden">
            <img src="../../photos/marak1.jpg" alt="">
            <div class="tekst">

                <h4>Betim Qiklisti4</h4>
                <h5>Menaxher Gjeneral</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco </p>
            </div>
            <div class="social">
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-linkedin"></a>
            </div>
        </div>

        <i class="switch fa fa-caret-right" aria-hidden="true" onclick="next()" style="padding-left: 14px !important;"></i>
    </div>
    <div class="contact">
        <h2 style="margin-left: 20px; margin-bottom: 10px;"> contact us </h2>
        <div class="container">
            <form method="POST" action="../../controllers/emailSender.php">
                <label for="fname">First Name</label>
                <input type="text" id="fname" name="firstname" placeholder="Your name..">

                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lastname" placeholder="Your last name..">

                <label for="lname">E-mail</label>
                <input type="email" id="email" name="email" placeholder="Your last name..">

                <label for="subject">Subject</label>
                <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

                <input type="submit" name="submit" value="Submit">
            </form>
        </div>
    </div>
    

    <?php
        include './footer.php'
    ?>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>