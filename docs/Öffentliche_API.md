# Öffentliche API 🌐

### Benutzung

Frage einen API Key an. Gehe dazu auf [https://awesomebible.de/kontakt](https://awesomebible.de/kontakt) und schreibe uns, wo und wofür du den API Key verwenden möchtest. Beispiel:

```jsx
Name: Max Mustermann
 
E-Mail: max.mustermann@mustermail.de
 
Nachricht: 
Hallo. Ich würde gerne einen API-Key für awesomeBible Verse bekommen.
Ich verwende awesomeBible Verse in meiner App. (https://the.appstore.com/app/maxes-coole-app).
Die App sendet alle 2 Sekunden einen API-Call und ich habe über 1 Million Nutzer.
```

Die API-Anfrage sollte so geformt sein: [https://verse.awesomebible.de/api/?key=DEIN_API_KEY&location=BIBELBUCH_KAPITEL_UND_VERS](https://verse.awesomebible.de/api/?key=DEIN_API_KEY&location=BIBELBUCH_KAPITEL_UND_VERS)

Beispiel: [https://verse.awesomebible.de/api/?key=api-key&location=Offenbarung4,11](https://verse.awesomebible.de/api/?key=api-key&location=Offenbarung4,11)

Zurück würde dann folgendes kommen:

```json
{"status":"200", "content":"https://raw.githubusercontent.com/awesomebible/verse/73636ef8254f94bd632eee22509686744e574dee/img/1.jpg"}
```

Alternativ kann noch zwischen den Formaten json und img gewechselt werden.

Beispiel: [https://verse.awesomebible.de/api/?key=api-key&location=Offenbarung4,11&output=image](https://verse.awesomebible.de/api/?key=api-key&location=Offenbarung4,11&output=image)

Standardmäßig gibt die API immer eine JSON Antwort.

### Status Codes

Die API liefert bei jeder Antwort einen Status mit.

| Statuscode | Status                  |
|------------|-------------------------|
| 200        | OK                      |
| 400        | Der API-Key ist falsch. |
| 404        | Keine Parameter angegeben. |
