<html>
Amb el nou sistema cal autenticar sempre amb l'usuari del domini principal, encara que seguireu rebent correus de la resta de dominis redirigits.</br>
</br>
Configuració comptes de correu</br>
1 - en general , la configuració actual es compatible amb el nou servidor</br>
2 - si voleu millora la seguertat aquest nou servidor accepta configuracions mes segures de correu que us detallem a continuació.</br>
3 - si teniu cap dubte, ....</br>
</br>
Un cop creades les comptes de correu heu de recordar que podeu patir una tallada de servei a la hora de rebre’ls i heu de seguir les configuracions següents: Pel que fa al mode d'accedir al correu un cop migrat aquest, en cas d'utilitzar un client d'escriptori (Outlook, Thunderbird...) us passem les 2 possibles configuracions que podeu triar (la recomanada és amb SSL):</br>
</br>
Configuració amb SSL (mes segur)</br>
Servidor SMTP/POP/IMAP: mail.<?= $host ?></br>
Port SMTP: 465</br>
Port POP: 995</br>
Port IMAP: 993</br>
Cal habilitar autenticació tant per a enviar com per a rebre correu. Tingueu en compte que caldrà que accepteu el certificat SSL no-signat.</br>
</br>
Configuració sense SSL (menys segur)</br>
Servidor SMTP/POP/IMAP: mail.<?= $host ?></br>
Port SMTP: 25</br>
Port POP: 110</br>
Port IMAP: 143</br>
Cal habilitar autenticació tant per a enviar com per a rebre correu.</br>
</br>
A banda d'això, sapigueu que també podeu accedir via Webmail: <a href="https://webmail.<?= $host ?>">https://webmail.<?= $host ?></a></br>
</br>
Per si teniu cap dubte o incidencia relativa a la configuració del correu us adjuntem un manual de configuració per a diferents clients. (Adjuntar manual).</br>
</br>
Us recordem que aquesta gestió serà totalment gratuïta.</br>
Disculpeu les molèsties que aquestes millores en la seguretat us puguin ocasionar i no dubteu en posar-vos en contacte amb nosaltres per resoldre qualsevol dubte.</br>
</br>
Atentament,</br>
Departament d'atenció al client de Ilimit</br>
</html>