<?php
// function to send email
function sendEmail($to, $subject, $txt, $headers) {
    if (mail($to, $subject, $txt, $headers)) {
        return true;
    } else {
        return false;
    }
}

function randomQuote(){
    $randomQT = random_int(1,5);
if ($randomQT == 1){
$txt = "Ovatpa meille rakkahat\r
koskemme kuohuineen, \r
ikuisten honkain huminat, \r
täht yömme, kesät kirkkahat, \r
kaik kuvineen ja lauluineen\r
mi painui sydämeen.";

}
elseif ($randomQT == 2){
    $txt = "Kaiken kantanut kausi kumartaa,\r
    hiljaa kääntyvä aika katsoo myötä.\r
    Taivaalla taittuvat tiehyet,\r
    muinaisten tinojen toteutuneet taiat.\r
    Uudemman ajan tiiviimmät terälehdet.";

}
elseif ($randomQT == 3){
    $txt = "Syliisi synnyin, lähelläsi oli kaikki.\r 
    Pieni ikuisuus aikaa askeleesi kuulin.\r
    Saattoivat matkaan tärkeimmän,\r
    kauneimman sielun. Kaunis ja ääretön.\r 
    Tiedän, tunsit sinne jo tiesi.";

}
elseif ($randomQT == 4){
    $txt = "Sydäntalvi käy edelläsi.\r
    Lämmin valo lahjoittaa välkkyvät värit,\r
    tummanvihreä tuttu tervehtii.\r
    Kultainen hiljaisuus kuiskaa kovimmin.\r
    Juhlatulet saattavat hopeanheleät sielut alemmas.\r
    Koruton sydän ripustaa ikävän mietteet.";

}
elseif ($randomQT == 5){
    $txt = "Lämpimän loimun lisääjä,\r
    kevyen kiillon tuoja. Takkatulen riemu,\r
    kynttilän kevyt kantamus.\r
    Sinun pilkahtava sielusi asuu meissä,\r
    siirtää hehkusi lukemattomiin virtoihin.";
 
}
else {
    echo "no mitä v";
}
return $txt;
}
?>