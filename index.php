<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Vizsgamunka</title>
</head>
    <div class="fejlec"><img src="hero-image.png" alt=""></div>
<body>
    <header>
        <h1>Kedves Leendő Ügyfelünk!
        </h1>
        <h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates corrupti nam corporis.</p>
        </h3>
    </header>
    <br><br>
    <form action="feldolgozo.php" method="post">
        <div class="container">
            <div class="szemelyesadatok">
                <h1>Személyes adatok</h1>
                <hr>
                <div class="neve">
                    <h3>Neve
                </div>
                <div class="neve_input">
                    <p>Lorem ipsum dolor sit amet.</p>
                    <input type="text" name="firstname" id="firstname" placeholder="Vezetéknév"> <input type="text"
                            name="lastname" id="lastname" placeholder="Keresztnév"></h3>
                </div>
        
                <br><br>
                <h3>Telefonszáma <input type="tel" name="telefon" id="telefon" placeholder="Telefonszám"></h3>
                <p>Lorem ipsum dolor sit amet.</p>
                <br><br>
                <h3>Külföldi állampolgár vagy <br> külföldi állandó lakcímmel jelentkezik?</h3>
                <div class="valasz">
                    <div id="d-label">
                        <label for="igen"><span><input type="checkbox" name="igen" id="igen">Igen</span></label>
                    <label for="nem"><span><input type="checkbox" name="nem" id="nem">Nem</span></label></div>
                    <br>
                    </div>
                <h3>Okmányok feltöltése</h3>
                <p>Okmányainál személyi igazolvány <br> (mindkét oldal) vagy jogosítvány
                    (mindkét oldal) <br> vagy útlevél illetve a lakcím kártya <br> lakcímet tartalmazó
                    oldala szükséges <br> (amennyiben Ön külföldi vagy más <br> okmányokkal
                    rendelkezik,<br> úgy telefonos egyeztetés alapján).
                </p>
                <div class="filefeltoltes">
                    <h2>Húzza be a fájlokat</h2>
                    <p>vagy <u>kattintson ide</u> a fájlok böngészéséhez</p>
                </div>
            </div>
            <br><br>
                <div class="penzadatok">
                    <h1>Vagyonnal kapcsolatos adatok</h1>
                    <hr>
                    <h3>Mekkora a teljes vagyonának volumene?</h3>
                    <div class="vagyonok"><input type="radio" name="radio" <?php if(isset($radio) && $radio=="150-300 millió HUF") print "checked";?> value ="150-300 millió HUF"><p><b>150-300 millió HUF</b></p></div>
                    <div class="vagyonok"><input type="radio" name="radio" <?php if(isset($radio) && $radio=="300-1000 millió HUF") print "checked;"?> value="300-1000 millió HUF" checked="check" ><p><b>300-1000 millió HUF</b></p></div>
                    <div class="vagyonok"><input type="radio" name="radio" <?php if(isset($radio) && $radio=="1-5 milliárd HUF") print "checked";?> value="1-5M HUF"><p><b>1-5 milliárd HUF</b></p></div>
                    <div class="vagyonok"><input type="radio" name="radio" <?php if(isset($radio) && $radio=="5 milliárd HUF feletti") print "checked";?> value="5 milliárd HUF feletti"><p><b>5 milliárd HUF feletti</b></p></div>
                </div>
                <div class="tervek">
                    <h1>Mire szeretné használni a számlát és havonta mekkora forgalmat tervez rajta bonyolítani?</h1>
                    <p>A csúszkát állítsa be minden sorban a kívánt mértékig</p>
                    <hr>
                    <br>
                                <div class="block_volume">
                                <input class="munkaber" type="range" id="vol" name="munkaber" min="0" max="100000" value="2000"><b>Munkabér (nyugdíj, ösztöndíj,stb.) és járulék jellegű utalások</b>
                                    <h3>Nem tervez</h3>
                                </div>
                                <div class="block_volume">
                                    <label for="vol"></label>
                                    <input type="range" id="vol" name="egyeb" min="0" max="500000" value="100000"><b>Egyéb fenntartási költségek (pl. rezsi, iroda bérleti díj, stb.)</b>
                                    <h3>0 - 500 000 Ft / hó</h3>
                                </div>
                                <div class="block_volume">
                                    <label for="vol"></label>
                                    <input type="range" id="vol" name="card" min="500001" max="1000000" value="650000"><b>Bankkártyás vásárlások</b>
                                    <h3>500 001 - 1 000 000 Ft / hó</h3>
                                </div>
                                <div class="block_volume">
                                    <label for="vol"></label>
                                    <input type="range" id="vol" name="utalas" min="1000001" max="3000000" value="3100000"><b>Belföldi utalások jóváírás</b>
                                    <h3>1 000 001 - 3 000 000 Ft / hó</h3>
                                </div>
                                <div class="block_volume">
                                    <label for="vol"></label>
                                    <input type="range" id="vol" name="terheles" min="8000001" max="20000000" value="15000000"><b>Belföldi utalások - terhelés (fentiektől eltérő jogcímen)</b>
                                    <h3>8 000 001 - 20 000 000 Ft / hó</h3>
                                </div>
                                <div class="block_volume">
                                    <label for="vol"></label>
                                    <input type="range" id="vol" name="jovairas" min="100000000" max="500000000" value="495000000"><b>Külföldi utalások - jóváírás</b>
                                    <h3>100 000 000 Ft felett / hó</h3>
                                </div>
                                <div class="block_volume">
                                    <label for="vol"></label>
                                    <input type="range" id="vol" name="kulfold" min="3000001" max="5000000" value="4500000"><b>Külföldi utalások terhelés</b>
                                    <h3>3 000 001 - 5 000 000 Ft / hó</h3>
                                </div>
                                <div class="block_volume">
                                    <label for="vol"></label>
                                    <input type="range" id="vol" name="kp" min="5000001" max="8000000" value="7700000"><b>Készpénz tranzakciók (ATM, pénztár)</b>
                                    <h3>5 000 001 - 8 000 000 Ft / hó</h3>
                                </div>
                </div>
            </div>
        </div>
        <button class="submit">Küldés</button>
    </form>
</body>

</html>