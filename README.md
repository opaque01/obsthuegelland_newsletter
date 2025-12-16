# Obsthuegelland Newsletter (TYPO3 12 + direct_mail)

Dieses Extension-Package liefert:
- Einen **einspaltigen Newsletter-Wrapper** (tabellenbasiert) für direct_mail
- **E-Mail-kompatible Fluid-Templates** für fluid_styled_content Content-Elemente:
  - Text (Regular Text)
  - Text & Media (Textmedia)
  - Images only (Image)
  - Header only (Header)
  - Bullet List (Bullets)
  - Divider (Div)

## Installation
1. Extension installieren (Composer) und aktivieren.
2. Im Newsletter-SysFolder/Seitenbaum das Static TypoScript **„Obsthuegelland Newsletter (direct_mail, tables)”** einbinden.
3. Zusätzlich (empfohlen) die direct_mail Static Templates einbinden:
   - Direct Mail Content Boundaries
   - Direct Mail Plain Text (falls Text-Version verschickt werden soll)

## Wichtige Konstanten
- `plugin.tx_obsthuegellandnewsletter.unsubscribePid`  
  Seite, auf der registeraddress den delete/opt-out verarbeitet.
- `plugin.tx_obsthuegellandnewsletter.headerImageUrl`  
  Absolute URL zu Header/Banner-Bild.
- `plugin.tx_obsthuegellandnewsletter.containerWidth`  
  Breite (px) des Newsletter-Containers.

## Unsubscribe (registeraddress + registeraddress_logger)
Der Abmeldelink nutzt:
`tx_registeraddress_registerform[hash]=###USER_registeraddresshash###` + delete/Address Controller.

Wichtig:
- direct_mail muss den Marker `###USER_registeraddresshash###` kennen (über `plugin.tx_directmail.userFunc.registeraddresshash`).
- Je nach registeraddress_logger Version muss ggf. der Namespace/Hook angepasst werden.

Viel Erfolg!
