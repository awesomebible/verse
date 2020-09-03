# awesomeBible Verse API

### Benutzung
1. Frage einen API Key an. Gehe dazu auf https://awesomebible.de/kontakt und schreibe uns, wo und wofür du den API Key verwenden möchtest.
  Beispiel:
  ```
  Name: Max Mustermann
  
  E-Mail: max.mustermann@mustermail.de
  
  Nachricht: 
  Hallo. Ich würde gerne einen API-Key für awesomeBible Verse bekommen.
  Ich verwende awesomeBible Verse in meiner App. (https://the.appstore.com/app/maxes-coole-app).
  Die App sendet alle 2 Sekunden einen API-Call und ich habe über 1 Million Nutzer.
  ```


2. Die API-Anfrage sollte so geformt sein: https://verse.awesomebible.de/api/?key=DEIN_API_KEY&location=BIBELBUCH_KAPITEL_UND_VERS

Beispiel: https://verse.awesomebible.de/api/?key=api-key&location=Offenbarung4,11


### Error-Codes
Wenn ein Fehler auftritt, gibt die API einen JSON-Fehlercode zurück.
Folgende Fehler sind möglich:

| Fehler  | Fehlercode  |
|---|---|
| Ungültiger API-Key  | 234  |
|   |   |