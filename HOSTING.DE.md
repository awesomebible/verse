# awesomeBible Verse selbst hosten

## PHP Server 

### Anforderungen
- PHP Server
- FTP Server / Zugang
- FTP Client: [Filezilla](https://filezilla-project.org/), [WinSCP](https://winscp.net/eng/docs/lang:de)

### Anleitung
1. Lade awesomeBible Verse herunter.
  - Kopiere https://raw.githubusercontent.com/awesomebible/verse/master/index.php in eine leere Textdatei und speichere sie als index.php ab.
2. Öffne den FTP Client deiner Wahl und verbinde dich mit deinem Server.
3. Navigiere in das Verzeichnis wo du awesomeBible Verse haben möchtest und lade nur die index.php hoch.

Empfohlen ist, awesomeBible Verse auf einer Subdomain z.B. verse.deinedomain.de zu installieren - wenn dies dein Hosting Provider zur Verfügung stellt.
Ansonsten einfach in einen seperaten Ordner. Wenn auf deinedomain.de/ z.B. eine Wordress Installation ist dann in einem Unterverzeichnis z.B. unter deinedomain.de/verse/ die Datei ablegen.

## Browser.js
### Anleitung
1. Füge das Browser.js Skript in deine Website ein. Dazu kannst du diese URL benutzen: [https://cdn.jsdelivr.net/gh/awesomebible/verse@f9f6ca7e9ea48b5f69ae012e0a60f6c19494a7f1/browser.js](https://cdn.jsdelivr.net/gh/awesomebible/verse@f9f6ca7e9ea48b5f69ae012e0a60f6c19494a7f1/browser.js)

`<script defer src="https://cdn.jsdelivr.net/gh/awesomebible/verse@f9f6ca7e9ea48b5f69ae012e0a60f6c19494a7f1/browser.js"></script>`

2. Füge da wo das Versbild erscheinen soll, ein img-Tag mit der Klasse (class="awb-verse") "awb-verse" ein.

`<img class="awb-verse"></img>`

## Node.js Server
#### Coming soon.
