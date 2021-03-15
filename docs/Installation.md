# Installation 🔧

## PHP Server

### Anforderungen

- PHP Server
- FTP Server / Zugang
- FTP Client: [Filezilla](https://filezilla-project.org/), [WinSCP](https://winscp.net/eng/docs/lang:de)

1. Lade awesomeBible Verse herunter.
- Gehe zu [https://github.com/awesomebible/verse/releases/latest](https://github.com/awesomebible/verse/releases/latest) und lade die „awesomeBibleVerse_Versionsnummer.zip“ herunter.
1. Öffne den FTP Client deiner Wahl und verbinde dich mit deinem Server.
2. Navigiere in das Verzeichnis wo du awesomeBible Verse haben möchtest und lade nun den Inhalt der .zip-Datei hoch.

Empfohlen ist, awesomeBible Verse auf einer Subdomain z.B. verse.deinedomain.de 
zu installieren – wenn dies dein Hosting Provider zur Verfügung stellt. 
Ansonsten einfach in einen seperaten Ordner. Wenn auf deinedomain.de/ 
z.B. eine Wordress Installation ist, dann kannst du die Dateien einfach in einem Unterverzeichnis der selben Domain ablegen. (Zum Beispiel: deinedomain.de/verse/)

### API Einrichtung

Wenn du die API benutzen möchtest, bearbeite auf dem Server im 
Verzeichnis api/ die Datei „keys.json“ und füge ein API-Schlüssel ein.

- Einen API-Schlüssel genererieren: besuche [https://duckduckgo.com/?q=uuid&t=h_&ia=answer](https://duckduckgo.com/?q=uuid&t=h_&ia=answer) und kopiere die lange Zeichenkette in die Datei.

Nun speichere.

![awesomeBible Verse API Schlüssel](https://user-images.githubusercontent.com/42138517/108625419-24944c80-744b-11eb-818d-2adc44cf349c.png)

### API Nutzung

1. Die API-Anfrage sollte so geformt sein: [https://verse.deinedomain.de/api/?key=DEIN_API_KEY&location=BIBELBUCH_KAPITEL_UND_VERS](https://verse.deinedomain.de/api/?key=DEIN_API_KEY&location=BIBELBUCH_KAPITEL_UND_VERS)

Beispiel: `https://verse.deinedomain.de/api/?key=api-key&location=Offenbarung4,11`

## Browser.js

### Anleitung

1. Füge das Browser.js Skript in deine Website ein. Dazu kannst du diese URL benutzen:

`https://cdn.jsdelivr.net/gh/awesomebible/verse@6ab6f6e36583be9e098abb4e3df23dc34d2b393f/browser.js`

1. Füge da wo das Versbild erscheinen soll, ein Image-Tag mit der Klasse „awb-verse“ ein.

`<img class="awb-verse"></img>`

## Node.js Server

Coming soon. [Lies, wie du helfen kannst](docs/Mitmachen.md).
