# awesomeBible Verse selbst hosten

## PHP Server 

### Anforderungen
- PHP Server
- FTP Server / Zugang
- FTP Client: [Filezilla](https://filezilla-project.org/), [WinSCP](https://winscp.net/eng/docs/lang:de)

### Anleitung
1. Lade awesomeBible Verse herunter.
  - Gehe zu https://github.com/awesomebible/verse/releases/latest und lade die "awesomeBibleVerse_Versionsnummer.zip" herunter.
2. Öffne den FTP Client deiner Wahl und verbinde dich mit deinem Server.
3. Navigiere in das Verzeichnis wo du awesomeBible Verse haben möchtest und lade nun den Inhalt der .zip-Datei hoch.

Empfohlen ist, awesomeBible Verse auf einer Subdomain z.B. verse.deinedomain.de zu installieren - wenn dies dein Hosting Provider zur Verfügung stellt.
Ansonsten einfach in einen seperaten Ordner. Wenn auf deinedomain.de/ z.B. eine Wordress Installation ist dann in einem Unterverzeichnis z.B. unter deinedomain.de/verse/ die Datei ablegen.

#### API Einrichtung
Wenn du die API benutzen möchtest, bearbeite auf dem Server im Verzeichnis api/ die Datei "keys.json" und füge ein API-Schlüssel ein.
- Einen API-Schlüssel genererieren: besuche https://duckduckgo.com/?q=uuid&t=h_&ia=answer und kopiere die lange Zeichenkette in die Datei.

Nun speichere.

#### API Nutzung
1. Die API-Anfrage sollte so geformt sein: https://verse.deinedomain.de/api/?key=DEIN_API_KEY&location=BIBELBUCH_KAPITEL_UND_VERS

Beispiel: `https://verse.deinedomain.de/api/?key=api-key&location=Offenbarung4,11`

## Browser.js
### Anleitung
1. Füge das Browser.js Skript in deine Website ein. Dazu kannst du diese URL benutzen: [https://cdn.jsdelivr.net/gh/awesomebible/verse@6ab6f6e36583be9e098abb4e3df23dc34d2b393f/browser.js](https://cdn.jsdelivr.net/gh/awesomebible/verse@6ab6f6e36583be9e098abb4e3df23dc34d2b393f/browser.js)

`<script defer src="https://cdn.jsdelivr.net/gh/awesomebible/verse@6ab6f6e36583be9e098abb4e3df23dc34d2b393f/browser.js"></script>`

2. Füge da wo das Versbild erscheinen soll, ein img-Tag mit der Klasse (class="awb-verse") "awb-verse" ein.

`<img class="awb-verse"></img>`

## Node.js Server
#### Coming soon.
