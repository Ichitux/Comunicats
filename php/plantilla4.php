<?php
$date = $_POST['dataMigracio'];
$host = $_POST['domini'];
?>

Benvolgut client

Ens posem en contacte amb vosaltres en referència als serveis d'allotjament (hosting) que actualment teniu contractats amb ILIMIT. Com us vem comentar en un correu previ, és necessari actualitzar la versió de PHP de la plataforma d'hostatjament per donar un millor servei, oferir les noves característiques de les versions actuals i disposar d'un entorn amb les darreres actualitzacions en matèria de seguretat per evitar quedar exposat a riscos innecessaris.

El (<?= $date ?>) començarem el procés de migració del vostre web i correu cap a una nova plataforma de hosting amb versions al dia i actualitzables amb la qual poder brindar-vos el millor suport.  Des de ILIMIT som conscients que aquests moviments us poden crear alguns inconvenients, però esperem que entengueu que són causa natural de l'evolució de la tecnologia i de cara a una millora en la seguretat de tots.

Accès al nou panell

Durant el procès de migració rebreu un correu que us proporcionarà les dades d'accès al nou Panell de Control del vostre hosting. Si hi accediu abans d'acabat el procès de migració, tingueu en compte que és possible que no s'hagin creat tots els recursos. No creeu ni modifiqueu res fins que us comuniquem que hem finalitzat la migració.

Configuració comptes de correu

En general, la configuració de correu que utilitzeu actualment al vostre client de correu d'escriptori (Outlook, Mail, Thunderbird...) és compatible amb el nou servidor. Si voleu millorar la protecció del vostre compte de correu, aquest nou servidor accepta configuracions més segures que us detallem a continuació. Hi han 2 possibles configuracions que podeu triar (la recomanada és amb SSL):

Configuració amb SSL (mes segur)
Servidor SMTP/POP/IMAP: mail.<?= $host ?>
Port SMTP: 465
Port POP: 995
Port IMAP: 993
Cal habilitar autenticació tant per a enviar com per a rebre correu. Tingueu en compte que caldrà que accepteu el certificat SSL no-signat.

Configuració sense SSL (menys segur)
Servidor SMTP/POP/IMAP: mail.<?= $host ?>
Port SMTP: 25
Port POP: 110
Port IMAP: 143
Cal habilitar autenticació tant per a enviar com per a rebre correu.

A banda d'això, també podeu accedir al correu a través d'un navegador via Webmail: <a href="https://webmail.<?= $host ?>">https://webmail.<?= $host ?></a>

Per si teniu cap dubte o incidencia relativa a la configuració del correu us adjuntem un manual de configuració per a diferents clients. (Adjuntar manual)

Us recordem que aquesta gestió serà totalment gratuïta. Disculpeu les molèsties que aquestes millores us puguin ocasionar i no dubteu en posar-vos en contacte amb nosaltres per resoldre qualsevol dubte.

Atentament,
Departament d'atenció al client de Ilimit