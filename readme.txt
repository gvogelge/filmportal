---README---

1.- XAMPP (https://www.apachefriends.org/de/index.html) herunterladen


2.- XAMPP installieren:

--Nach dem Herunterladen haben Sie die Datei als ZIP vorliegen

--Rechte Maustaste zum Entpacken der Datei

--Es wird ein Ordner vorgeschlagen – nutzen Sie am besten direkt auf c:\

--Unter C:\ haben Sie nun ein Verzeichnis c:\xampp (Es ist wichtig, dass dieses Verzeichnis direkt unter Root kommt, sonst gibt es Probleme beim Starten vom Apache-Server!)

--Im Verzeichnis c:\xampp können sie nun XAMPP starten und von hier aus de Apache server und Mysql starten.

--Zum Test der Installation starten Sie einen Browser und geben als URL dann „localhost“ ein. Wenn alles gut gelaufen ist haben sie hier die Oberfläche von XAMPP sehen!

--Wenn der Webserver Apache funktioniert und die Oberfläche von XAMPP startet. Sie können die Sprache auswählen und bekommen die Verwaltungsoberfläche zu sehen.



2.- Laden sie den Ordner fallstudie_gruppe1 herunter und verschieben diesen in den Ordner xamp/htdocs



3.- Datenbank erstellen

 
Sie können nun von ihrem cmd (oder terminal bei Mac) mit "cd" (change directory) in den unterodner "fallstudie_gruppe1/data" navigieren und hier: 
a) im fall von macintosh die Datei 'create_database.sh' auführen mit dem Befehl:  'bash create_database.sh'
b) im fall von Windows 'create_database.bat'  direkt ausführen.

!!notiz: in der datei create_database.sh und create_database.bat wird nach einem Passwort gefragt, wenn Sie eins gesetzt haben, müssen Sie dieses auf Anfrage 4 mal eingeben, ansonsten einfach 4 mal die Taste "enter" drücken.


4.- Webseite aufrufen:
Geben sie im Browser "localhost" ein und clicken sie auf die Datei fallstudie_gruppe1 die nun sichtbar ist.


5.- Sollte alles fehlerfrei gelaufen sein, befinden sie sich jetzt auf dem M & G Filmportal und können diese betätigen.
--Sie können sich nun registrieren und/oder einloggen.
--zum Testen bestehen die User: "bluetrain", "blackspace", oder "erikamoon". Für jeden dieser ist das Password "Berlin1!" gesetzt.

6.- Der Admin-Bereich hat einen eigenen Zugang dafür geben sie in Ihrem browser "localhost/fallstudie_gruppe1/admin" ein.
--Sie gelangen direkt zu dem Admin-login.
--Zum Testen besteht hier ein admin: (Max Mustermann) Logindaten sind: User: "admin", Passwort: "admin".


7.- Es befinden sich weitere Testdaten die der Admin auf der Seite json hochladen kann unter folgendem pfad "fallstudie_gruppe1/test/testdaten/json".






