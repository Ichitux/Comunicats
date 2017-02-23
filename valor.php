<?php
ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);


    $host = $_POST['domini'];
    $adress = $_POST['destination'];
    $output = "";
if(isset($_POST['selectComunicat'])){
    $select1 = $_POST['selectComunicat'];
    switch ($select1) {
        case 'com1':
            $output = " Benvolgut client,</br>
Ens posem en contacte amb vosaltres en relació als serveis d'allotjament (hosting) que actualment teniu contractats amb ILIMIT (<a href=". $host ."> ". $host ."</a> ).</br>
 Us informem que el període de suport de la versió de PHP utilitzada a la plataforma d'allotjament on esteu ubicats ha acabat, el que suposa que des de fa temps no es fan actualitzacions de seguretat i això suposa un risc així com una possible causa d'incidències. </br>
</br>
A continuació enumerem les versions i la data en que va acabar el període oficial de suport de PHP:</br>
</br>
* PHP 4.x (període de suport caducat fa més de 6 anys)</br>
* PHP 5.2 (període de suport caducat fa més de 4 anys)</br>
* PHP 5.3 (període de suport caducat fa més de d'1 any)</br>
</br>
Amb aquest motiu, properament us contactarem per coordinar una migració del vostre allotjament de hosting cap a una nova plataforma amb més possibilitats de millora i actualitzacions de seguretat.</br>
</br>
Si teniu cap dubte estem a la vostra disposició, podeu contactar amb nosaltres per telèfon o bé per correu a suport@ilimit.com.</br>
</br>
Salutacions cordials.</br>";
            break;
        case 'com2': handleCom2(); break;
    }
}
function handleCom2(){
		$select2 = $_POST['segonComunicat'];
		switch($select2) {
			case 'comSta': handleCom2Sta(); break;
			case 'comCold': comColdfusion(); break;
			case 'comDNS': break;
		}
}
function handleCom2Sta(){
	if(isset($_POST['selectSubclass'])){
		$select3 = $_POST['selectSubclass'];
		switch($select3) {
			case 'noAlias': break;
			case 'siAlias': break;
		}
	}
}
function comColdfusion() {
$output = "Benvolgut client,</br>
 </br>
Ens posem en contacte amb vosaltres en referència als serveis d'allotjament (hosting) que actualment teniu contractats amb ILIMIT. Com us vem comentar en un correu previ, és necessari actualitzar la versió de PHP de la plataforma d'hostatjament per donar un millor servei, oferir les noves característiques de les versions actuals i disposar d'un entorn amb les darreres actualitzacions en matèria de seguretat per evitar quedar exposat a riscos innecessaris.</br>
 </br>
El (XXXXXXXXXXXXXX) començarem el procés de migració del vostre web i correu cap a una nova plataforma de hosting amb versions al dia i actualitzables amb la qual poder brindar-vos el millor suport.  Des de ILIMIT som conscients que aquests moviments us poden crear alguns inconvenients, però esperem que entengueu que són causa natural de l'evolució de la tecnologia i de cara a una millora en la seguretat de tots.</br>
 </br>
<b></b>Configuració comptes de correu</b></br>
 </br>
En general, la configuració de correu que utilitzeu actualment al vostre client de correu d'escriptori (Outlook, Mail, Thunderbird...) és compatible amb el nou servidor. Si voleu millorar la protecció del vostre compte de correu, aquest nou servidor accepta configuracions més segures que us detallem a continuació. Hi han 2 possibles configuracions que podeu triar (la recomanada és amb SSL):</br>
 </br>
Configuració amb SSL (mes segur)</br>
Servidor SMTP/POP/IMAP: mail.". $host . "</br>
Port SMTP: 465</br>
Port POP: 995</br>
Port IMAP: 993</br>
Cal habilitar autenticació tant per a enviar com per a rebre correu. Tingueu en compte que caldrà que accepteu el certificat SSL no-signat.</br>
 </br>
Configuració sense SSL (menys segur)</br>
Servidor SMTP/POP/IMAP: mail.". $host . "</br>
Port SMTP: 25</br>
Port POP: 110</br>
Port IMAP: 143</br>
Cal habilitar autenticació tant per a enviar com per a rebre correu.</br>
 </br>
A banda d'això, també podeu accedir al correu a través d'un nevegador via Webmail: <a href='https://webmail'". $host ."'>https://webmail.". $host . "</a></br>
 </br>
Per si teniu cap dubte o incidencia relativa a la configuració del correu us adjuntem un manual de configuració per a diferents clients.</br>
 </br>
Us recordem que aquesta gestió serà totalment gratuïta. Disculpeu les molèsties que aquestes millores us puguin ocasionar i no dubteu en posar-vos en contacte amb nosaltres per resoldre qualsevol dubte.</br>
 </br>
Atentament,</br>";
}
echo $adress;
echo $output;
?>
