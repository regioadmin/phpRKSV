KOMSIS RESTful API Version 1.1
----------
Stand: 22.09.2016

API für den Zugriff auf die Immobiliendaten des Kommunalen Standortinformationssystems 
KOMSIS - ein Produkt der Wallenberger und Linhard Regionalberatung GmbH.

#### API-Endpunkte von www3.komsis.at (Production) bzw. dev.komsis.at (Development) 
Bei Verwendung der dev.komsis.at Endpunkte wird auf die Testdatenbank zugegriffen.
 

##### GET immobilie/{objektid}/{ref}/{ip}  
kompletter Datensatz einer Immobilie mit Objektdetaildaten, Objekdaten, Kontaktdaten, Widmungen, Gebäudezustand, Verkehrsinfrastruktur, Gebäudeinfrastruktur, Heizungsart, Brennstoffart, Bildern, Anhängen (Pdf,Word..), Regionen in der die Immobilie liegt, Referrer, Ablaufdatum 
    
    objektid: id des Objektes  
    ref: die aufrufende Quelle (M=Mostviertel Mitte, S=Standortfinder.at, H=komsis.at, X=Adminbereich, G=Gemeindehomepage, W=WOIWA)  
    ip: die IP der Quelle  
  
###### Beispiel:
  ``api/v1/immobilie/16273/S/192.168.0.1``

###### Ergebnis:
 ``{"objektDetail":{"abstellplaetzepkw":null,"adaptierungen":"Zum Verkauf gelangt eine komplett ausgestattete Tennisanlage.","baujahr":"","betriebskosten":"0.00","betriebskostenoeffentlich":1,"brennstoffid":2,"courtage":"3%","ea_fgee":"0.00","ea_hwb":"0.00","gas":0,"geschosse":0,"heizungsartid":1,"idnr":10293,"interneanmerkung":"INFO: Dieser Immobilieneintrag wird von der Firma WiV Zwettl gewartet.","kanal":0,"kaufpreis":"95000.00","kaufpreisoeffentlich":1,"kaution":"0.00","kautionoeffentlich":1,"miete":"0.00","mietpreisoeffentlich":1,"moeblierung":"voll","objektid":{"bildid":67482,"bildid1":67483,"breite":0,"code":"WIV244\/15454","code1":0,"code2":0,"email":"martin.stangl@w-i-v.at","geaendertvon":0,"grundflaeche":"8346.00","herkunftskennung":"WIV","idnr":16273,"imported":1,"inseratstatus":0,"ipvomanleger":null,"klicks":33,"kontaktdatenoeffentlich":1,"laenge":0,"lage":0,"lis_key":"244\/15454","markler":1,"mikana":0,"mikana1":1,"mikana2":0,"name1":"W-I-V","objektartid":{"__isInitialized__":true,"bezeichnung":"Wohnobjekte","bezeichnung_abfrage":"Haus","bezeichnung_abfrage_mehrzahl":"Wohnungen und H\u00e4user","czbezeichnung":"","idnr":4,"l10n":"woobjekt","plbezeichnung":"obiekt mieszkalny","skbezeichnung":"obytna budova","ukbezeichnung":"","__identity":4},"objekttitel":"TENNISANLAGE HEIDENREICHSTEIN","ort":"Horn","ort1":null,"planid":0,"planid1":0,"plz":"3580","plz1":null,"standortinfo":null,"strasse":null,"strasse1":null,"telefon1":"02822\/52681 , 0664\/627 52 62","userId":0,"veroeffentlichungsart":1,"vorname1":"Herr Martin Stangl - WIV","www":"www.w-i-v.at"},"objekttypid":2,"raeume":6,"sanierungen":null,"strom":0,"telefon":0,"wasser":0,"widmungsartid":0,"widmungvom":null,"wohnflaeche":"160.00","zustandid":6},"kontakt":{"firma":"","titel":"","name":"W-I-V","vorname":"Herr Martin Stangl - WIV","strasse":"","plz":"","ort":"","telefon1":"02822\/52681 , 0664\/627 52 62","email":"martin.stangl@w-i-v.at","www":"www.w-i-v.at","skype":""},"zustand":{"czzustand":"6","idnr":6,"plzustand":"nieznany","skzustand":"nezn\u00e1my","zustand":"   ohne Angabe"},"widmung":{"beschreibung":"unbekannt","beschreibung1":"unbekannt","beschreibung4":"unbekannt","beschreibung6":"unbekannt","idnr":0,"regionid":0},"authorized":1,"verkehrlist":[],"infrastrukturlist":[],"heizungsart":{"czheizungsart":null,"heizungsart":"Zentralheizung","idnr":1,"plheizungsart":"ogrzewanie centralne","skheizungsart":null},"brennstoffart":{"brennstoffart":"Gas","idnr":2,"plbrennstoffart":"gaz"},"images":[{"url_fullsize":"dev.komsis.at\/_Resources\/Static\/Packages\/WL.Komsis\/upload\/124WIVDB24415454_1F05.JPG","url_thumb":"dev.komsis.at\/_Resources\/Static\/Packages\/WL.Komsis\/thumbnails\/tn_124WIVDB24415454_1F05.JPG","filename":"124WIVDB24415454_1F05.JPG","path":"\/_Resources\/Static\/Packages\/WL.Komsis\/upload\/","beschreibung":"Ansicht mit Logo","groesse":53414,"idnr":67482},{"url_fullsize":"dev.komsis.at\/_Resources\/Static\/Packages\/WL.Komsis\/upload\/124WIVDB24415454_6819.JPG","url_thumb":"dev.komsis.at\/_Resources\/Static\/Packages\/WL.Komsis\/thumbnails\/tn_124WIVDB24415454_6819.JPG","filename":"124WIVDB24415454_6819.JPG","path":"\/_Resources\/Static\/Packages\/WL.Komsis\/upload\/","beschreibung":"Ansicht Tennispl\u00e4tze","groesse":60385,"idnr":67483},{"url_fullsize":"dev.komsis.at\/_Resources\/Static\/Packages\/WL.Komsis\/upload\/124WIVDB24415454_6187.JPG","url_thumb":"dev.komsis.at\/_Resources\/Static\/Packages\/WL.Komsis\/thumbnails\/tn_124WIVDB24415454_6187.JPG","filename":"124WIVDB24415454_6187.JPG","path":"\/_Resources\/Static\/Packages\/WL.Komsis\/upload\/","beschreibung":"Tennispl\u00e4tze","groesse":56755,"idnr":67484},{"url_fullsize":"dev.komsis.at\/_Resources\/Static\/Packages\/WL.Komsis\/upload\/124WIVDB24415454_2EF8.JPG","url_thumb":"dev.komsis.at\/_Resources\/Static\/Packages\/WL.Komsis\/thumbnails\/tn_124WIVDB24415454_2EF8.JPG","filename":"124WIVDB24415454_2EF8.JPG","path":"\/_Resources\/Static\/Packages\/WL.Komsis\/upload\/","beschreibung":"Gastzimmer","groesse":50056,"idnr":67485}],"attachments":[{"url":"dev.komsis.at\/_Resources\/Static\/Packages\/WL.Komsis\/upload\/966Gewerbegrund.pdf","beschreibung":"","filename":"Gewerbegrund.pdf","path":"\/_Resources\/Static\/Packages\/WL.Komsis\/upload\/","groesse":59995,"idnr":67480}],"expiredate":"Fri, 2 Sep 2016 04:00:00 GMT","regionen":[3,10],"referrer":"S"}``
 
 Anmerkung: Das Feld "adaptierungen" entspricht der Beschreibung der Immobilie
- - - - 
##### GET bezirke/alle/{bundesland}
alle Bezirke des Bundeslands - egal, ob aktive Objekte vorhanden sind oder nicht
   
    bundesland: entspricht erster Stelle der Gemeindekennzahl, 3=Nö, 6=Stmk ...  (siehe Anhang)
  
###### Beispiel:
  ``api/v1/bezirke/alle/3``  

###### Ergebnis:
``[{"code":309,"bezirk":"Gm\u00fcnd"},{"code":310,"bezirk":"Hollabrunn"},{"code":311,"bezirk":"Horn"},{"code":301,"bezirk":"Krems an der Donau(Stadt)"},{"code":313,"bezirk":"Krems(Land)"},{"code":314,"bezirk":"Lilienfeld"},{"code":315,"bezirk":"Melk"},{"code":316,"bezirk":"Mistelbach"},{"code":318,"bezirk":"Neunkirchen"},{"code":319,"bezirk":"Sankt P\u00f6lten(Land)"},{"code":322,"bezirk":"Waidhofen an der Thaya"},{"code":303,"bezirk":"Waidhofen an der Ybbs(Stadt)"},{"code":325,"bezirk":"Zwettl"}]``
- - - - 
##### GET gemeinden/{code}/[{verbund}] 
alle KOMSIS-Gemeinden in einem Bezirk/Verbund, die mindestens eine aktuelles Immobilienangebot haben
    
    code: die ersten drei Stellen der Gemeindekennzahl (=Bezirk) oder 0 für alle
    verbund: optionale Angabe eines Gemeindeverbunds, dreistelliger Code, z.B. VIE (siehe Wertevorrat) um Ergebis  auf Gemeinden aus Region Flughafen zu beschränken. Wenn ein Verbund angegeben ist, wird Parameter code ignoriert. Ein Vebund kann also aus Gemeinden verschiedener Bezirke bestehen
 
###### Beispiel:
  ``api/v1/gemeinden/311``  

###### Ergebnis:
``[{"idnr":105,"gort":"Brunn an der Wild","gplz":"3595"},{"idnr":116,"gort":"Drosendorf an der Thaya","gplz":"2095"},{"idnr":961,"gort":"Gars am Kamp","gplz":"3571"},{"idnr":962,"gort":"Geras","gplz":"2093"},{"idnr":124,"gort":"Horn","gplz":"3580"},{"idnr":966,"gort":"Langau","gplz":"2091"},{"idnr":969,"gort":"R\u00f6hrenbach","gplz":"3592"},{"idnr":971,"gort":"Rosenburg-Mold","gplz":"3573"},{"idnr":973,"gort":"Sigmundsherberg","gplz":"3751"},{"idnr":972,"gort":"St. Bernhard-Frauenhofen","gplz":"3580"},{"idnr":99,"gort":"Weitersfeld","gplz":"2084"}]``
- - - - 
##### GET aktivegemeinden/{code}/{komsis}/[{verbund}] 
alle aktiven KOMSIS-Gemeinden mit Link zum Bild des Standortbeauftragen in einem Bundesland - egal ob diese aktuell Objekte anbieten oder nicht
    
    code: die erste Stelle der Gemeindekennzahl (=Bundesland)   
    komsis: 1=KOMSIS  
    verbund: optionale Angabe eines Gemeindeverbunds, dreistelliger Code, z.B. VIE (siehe Wertevorrat) um Ergebis  auf Gemeinden aus Region Flughafen zu beschränken 
  
###### Beispiel:
  ``api/v1/aktivegemeinden/3/1``  

###### Ergebnis:
``[{"idnr":1358,"gort":"Friedberg","gplz":"8240","name":"Friedberg","kontaktperson":"Karin Hofer","gtelefon1":"03339\/25 110-10","fax":"03339\/25 110-20","email":"stadtgemeinde@friedberg.at","gstrasse":"Hauptplatz 20","homepage":"www.friedberg.at","oestatid":60706,"filename":"muster.jpg","url":"www3.komsis.at/34943/muster.jpg","hash":null},{"idnr":1359,"gort":"P\u00f6llau","gplz":"8225","name":"P\u00f6llau","kontaktperson":"unbekannt","gtelefon1":"03335\/2038","fax":"","email":"unbekannt@unbekannt.at","gstrasse":"Hauptplatz 3","homepage":"www.marktgemeinde-poellau.at","oestatid":62234,"filename":null,"hash":null}]``
- - - - 
##### GET regionen  
alle Bundesländer/Regionen, die mindestens ein aktuelles Objekt anbieten
  
###### Beispiel:
  ``api/v1/regionen``  

###### Ergebnis:
``[{"idnr":3,"name":" Nieder\u00f6sterreich","reihenfolge":10},{"idnr":10,"name":"-- Waldviertel","reihenfolge":11},{"idnr":9,"name":"-- Weinviertel","reihenfolge":12},{"idnr":14,"name":"-- N\u00d6 Mitte","reihenfolge":13},{"idnr":12,"name":"-- Industrieviertel","reihenfolge":14},{"idnr":11,"name":"-- Mostviertel","reihenfolge":15},{"idnr":1,"name":" Burgenland","reihenfolge":20},{"idnr":4,"name":" Ober\u00f6sterreich","reihenfolge":40},{"idnr":6,"name":" Steiermark","reihenfolge":60}]``
- - - -
##### GET suche/{regionid}/{arrgemeindeid}/{objektartid}/{miete}/{kauf}/{code}/{gruppe}/{herkunftskennung}/{bezirk}/[{limit}]
alle aktuellen Objekte, die den Suchkriterien entsprechen, optional kann das Ergebnis mit dem Parameter "limit" begrenzt werden
    
    regionid: die erste Stellen der Gemeindekennzahl (=Bundesland)  
    arrgemeindeid: ein Array der zu berücksichtigenden GemeindeIDs  
    objektartid:  die Objektart(1=Gewerbegrund, 2=Gewerbeobjekt,3=Baugrund,4=Wohnobjekt)  
    miete: 1=ja, 0=nein  
    kauf: 1=ja, 0=nein  
    code: zu suchender Objektcode (Ähnlichkeitsvergleich)
    gruppe: Gruppenzugehörigkeit der Gemeinde (WOIWA, STAMA, LIS, KOMSIS oder null)
    herkunftskennung: Datenquelle der Objekte (KOMSIS, ICO, SREAL, WIV, WAV oder null)
                      Datenquelle bezeichnet jene Organisation, die den DS eingepflegt hat, null=alle
    bezirk: ersten 3 Stellen des Gemeindecodes 
    limit: optional, nur die letzten x Objekte anfordern 
  
###### Beispiel (das neueste Wohnobjekt in der Gemeinden Horn vom Makler WIV:
  ``/api/v1/suche/3/124/4/1/null/null/null/WIV/null/1``  

###### Ergebnis:
``[{"idnr":6774,"plz":"3580","ort":"Horn","grundflaeche":"583.00","bezeichnung":"Wohnobjekte","bezeichnung_abfrage":"Wohnung","oestatid":31109,"gemeindeid":124,"wohnflaeche":"150.00","adaptierungen":"Jugendstilville mit Garten","raeume":5,"objekttypid":2,"kaufpreis":"250000.00","kaufpreisoeffentlich":0,"objekttitel":"Jugendstilvilla im Stadtkern","picid":9351,"download":0,"pic":"124P5150018.JPG","pic_url":"dev.komsis.at\/_Resources\/Static\/Packages\/WL.Komsis\/thumbnails\/tn_124P5150018.JPG","laenge":15.6541268,"breite":48.66323,"objektartid":4}]``  
Anmerkung: Feld "adaptierungen" im Ergebnis entspricht der Objektbeschreibung
- - - - 

##### GET erweitertesuche/{arrregionid}/{arrbezirkid}/{arrgemeindeid}/{objektartid}/{miete}/{kauf}/{code}/{gruppe}/{herkunftskennung}/{wohnung}/{haus}/{bauerhaus}/{limit}/{datum}'
alle aktuelle Objekte, die den Suchkriterien entsprechen ab dem Anlagedatum x 
    
    arrregionid: Array der Regionen (jeweils erste Stellen der Gemeindekennzahl entspricht dem Bundesland) 
    arrbezirkid: Array der Bezirke (jeweils ersten 3 Stellen der Gemeindekennzahl entsprechen dem Bezirk) oder null
    arrgemeindeid: ein Array der zu berücksichtigenden GemeindeIDs oder null
    objektartid:  die Objektart(1=Gewerbegrund, 2=Gewerbeobjekt,3=Baugrund,4=Wohnobjekt)  
    miete: 1=ja, 0=nein  
    kauf: 1=ja, 0=nein  
    code: Objektcode (Ähnlichkeitsvergleich)
    gruppe: Gruppenzugehörigkeit der Gemeinde (WOIWA, STAMA, LIS, KOMSIS oder null)
    herkunftskennung: Datenquelle der Objekte (KOMSIS, ICO, SREAL, WIV, WAV oder null)
                      Datenquelle bezeichnet jene Organisation, die den DS eingepflegt hat, null=alle
    wohnung: bei Kategorie Wohnobjekt Subkategorie "Wohnung" berücksichtigen(1=ja, 0=nein)
    haus: bei Kategorie Wohnobjekt Subkategorie "Haus" berücksichtigen (1=ja, 0=nein)
    bauernhaus: bei Kategorie Wohnobjekt Subkategorie "Bauernhaus" berücksichtigen (1=ja, 0=nein)
    limit: optional, nur die letzten x Objekte anfordern 
    datum: nur Objekte mit Anlagedatum >=datum selektieren (datum im Format yyyy-mm-dd)
  
###### Beispiel (Häuser und Wohnungen aus dem ganzen Bezirk Baden (306) und aus den Gemeinden 31109/31123 aus dem Bezirk Horn (311) mit Anlagedatum nach 01.01.2016):
  ``api/v1/erweitertesuche/3/306,311/31109,31123/1/1/null/null/null/4/1/1/0/999/2016-01-01'``  

###### Ergebnis:
``[{"idnr":16594,"plz":"3580","ort":"Horn","grundflaeche":"50.00","bezeichnung":"Wohnobjekte","bezeichnung_abfrage":"Wohnung","oestatid":31109,"gemeindeid":124,"wohnflaeche":"50.00","adaptierungen":" Helle 3 Zimmer Wohnung. Neue B\u00f6den, neue K\u00fcche.","raeume":3,"objekttypid":1,"kaufpreis":"0.00","kaufpreisoeffentlich":0,"objekttitel":"Wohnung","picid":null,"download":null,"pic":null,"laenge":15.716972351074,"breite":48.651227067535}]``  
- - - - 
##### GET objektarten/{wohnen}/{gewerbe}  
liefert die Objektkategorien
    
    wohnen: 1=inkl.Wohnkategorien   
    gewerbe: 1=inkl. Gewerbekategorien 
  
###### Beispiel (alle Objektarten aus den Kategorien Wohnen und Gewerbe):
  ``api/v1/objektarten/1/1``  

###### Ergebnis:
``[{"idnr":4,"bezeichnung_abfrage_mehrzahl":"Wohnungen und H\u00e4user","bezeichnung_abfrage":"Wohnung"},{"idnr":3,"bezeichnung_abfrage_mehrzahl":"Baugr\u00fcnde","bezeichnung_abfrage":"Baugrund"},{"idnr":2,"bezeichnung_abfrage_mehrzahl":"Gewerbeobjekte, Gesch\u00e4ftsfl\u00e4chen \/ Gesch\u00e4ftslokale","bezeichnung_abfrage":"Gewerbeobjekt"},{"idnr":1,"bezeichnung_abfrage_mehrzahl":"Gewerbegrundst\u00fccke","bezeichnung_abfrage":"Gewerbegrund"}]``
- - - - 
##### GET objekt/{objektid}  
liefert von einem aktuellen Objekt die Objektdetails
    
    objekid: id des Objekts   
  
######Beispiel:
  ``api/v1/objekt/16523``  

###### Ergebnis:
``[{"0":{"bildid":71112,"bildid1":71113,"breite":0,"code":"ICS2100\/14125","code1":0,"code2":0,"email":"bettina.auer@immo-contract.com","geaendertvon":0,"grundflaeche":"0.00","herkunftskennung":"ICS","idnr":16523,"imported":1,"inseratstatus":0,"ipvomanleger":null,"klicks":33,"kontaktdatenoeffentlich":1,"laenge":0,"lage":0,"lis_key":"2100\/14125","markler":1,"mikana":1,"mikana1":0,"mikana2":0,"name1":"IMMO-CONTRACT Maklerges.m.b.H St.P\u00f6lten","objekttitel":"WG-taugliche Balkonwohnung mit Blick auf G\u00f6ttweig - BARRIEREFREI","ort":"Krems an der Donau","ort1":"St. P\u00f6lten","planid":0,"planid1":0,"plz":"3500","plz1":"3100","standortinfo":"Zentrum","strasse":null,"strasse1":"Brunngasse","telefon1":"43 \/ 50450\/270, 43\/664\/8191811","userId":0,"veroeffentlichungsart":1,"vorname1":"Frau Bettina Auer","www":"www.immocontract.com"},"gemeindeid":134,"objektartid":4,"ol":0,"ob":0,"gl":15.600371360779,"gb":48.411713122315,"code1":0,"code2":0,"name":"Krems","gstrasse":"stadtgraben 13","gplz":"3500","gort":"Krems","kontaktperson":"DI Dr. Matthias Slatner","gtelefon1":"02732 \/ 801-555","gtelefon2":"","fax":"02732 \/ 801-90555","email":"wirtschaft@krems.gv.at","bezeichnung_abfrage":"Wohnung","bezeichnung_abfrage_mehrzahl":"Wohnungen und H\u00e4user","email1":"bettina.auer@immo-contract.com","www":"www.immocontract.com","skype":""}]``
- - - - 
##### GET wertevorrat/lage/{kategorie}  
liefert IDs und Bezeichnungen für Feld "Lage"
    
    kategorie: "gewerbe" oder "wohnen"   
  
######Beispiel:
  ``api/v1/wertevorrat/lage/gewerbe``  

###### Ergebnis:
``[{"idnr":1,"name":"Ortskern"},{"idnr":2,"name":"Ortsrand"},{"idnr":3,"name":"Gewerbegebiet"}]``
- - - - 
##### GET wertevorrat/infrastrukturtechnisch/{kategorie}  
liefert IDs und Bezeichnungen für die Auswahlfelder "Infrastrukturtechnisch"
    
    kategorie: "gewerbe" oder "wohnen"   
  
######Beispiel:
  ``api/v1/wertevorrat/infrastrukturtechnisch/gewerbe``  

###### Ergebnis:
``[{"beschreibung":"Trinkwasser","idnr":7,"wohnen":1},{"beschreibung":"Nutzwasser","idnr":8,"wohnen":1},{"beschreibung":"Strom","idnr":9,"wohnen":1}}]``
- - - - 
##### GET wertevorrat/infrastrukturtverkehr  
liefert IDs und Bezeichnungen für die Auswahlfelder "Verkehrs-Infrastruktur"
  
######Beispiel:
  ``api/v1/wertevorrat/infrastrukturtverkehr``  

###### Ergebnis:
``[{"beschreibung":"Autobahn innerhalb 5km","idnr":1},{"beschreibung":"Schnellstra\u00dfe innerhalb 5km","idnr":2}]``
- - - -
##### wertevorrat/heizungsart  
liefert IDs und Bezeichnungen für die Option "Heizungsart"
  
######Beispiel:
  ``api/v1/wertevorrat/heizungsart``  

###### Ergebnis:
``[{"heizungsart":"Zentralheizung","idnr":1},{"heizungsart":"Fernw\u00e4rme","idnr":2},{"heizungsart":"Etagenheizung","idnr":3}]`` 
- - - -
##### GET wertevorat/brennstoffart  
liefert IDs und Bezeichnungen für die Option "Brennstoffart"
   
###### Beispiel:
  ``api/v1/wertevorrat/brennstoffart``  
 
###### Ergebnis:
``[{"brennstoffart":"Oel","idnr":1},{"brennstoffart":"Gas","idnr":2}]`` 
- - - - 
##### GET wertevorrat/zustand  
liefert IDs und Bezeichnungen für den Zustand einer Immobilie"
   
######Beispiel:
  ``api/v1/wertevorrat/zustand``  
 
###### Ergebnis:
``[{"czzustand":"1","idnr":1,"plzustand":"bardzo dobry","skzustand":"velmi dobre","zustand":"  sehr gut"}]`` 
- - - - 
##### GET wertevorrat/kontaktdatenveroeffentlichung  
liefert IDs und Optionen, wie mit einem Inserenten Kontakt aufgenommen werden kann"
   
###### Beispiel:
  ``api/v1/wertevorrat/kontaktdatenveroeffentlichung``  
 
###### Ergebnis:
``[{"idnr":0,"name":"nur Tel. und Email"},{"idnr":1,"name":"Name, Adresse, Tel., Email"},{"idnr":2,"name":"Kontakt des Ansprechpartners in der Gemeinde"}]`` 
- - - - 
##### GET wertevorat/widmungsart/{bundesland} 
liefert IDs und Bezeichnungen für die Option "Widmungsart" abhängig vom Bundesland
    
    bundesland: erste Stelle vom Gemeindecode - 3 NÖ, 4 OÖ, 1 B, 6 STMK  
   
###### Beispiel:
  ``api/v1/wertevorrat/widmungsart/4``  
 
###### Ergebnis:
``[{"beschreibung":"Sonstige Widmung im Gr\u00fcnland","beschreibung1":null,"beschreibung4":null,"beschreibung6":null,"idnr":50,"regionid":4}]`` 
- - - - 
##### GET suche/objektanzahl/{regionid}/{bezirk}/{arrgemeindeid}/{objektartid}/{miete}/{kauf}
Anzahl der Objekte, die den Kriterien entsprechen
    
    regionid: die erste Stellen der Gemeindekennzahl (=Bundesland)  
    bezirk: ersten 3 Stellen des Gemeindecodes 
    arrgemeindeid: ein Array der zu berücksichtigenden GemeindeIDs  
    objektartid:  die Objektart(1=Gewerbegrund, 2=Gewerbeobjekt,3=Baugrund,4=Wohnobekjt) 
    miete: 1=ja, 0=nein  
    kauf: 1=ja, 0=nein
   
  
###### Beispiel (Wohnobjekte im Bezirk Horn, Miete oder Kauf:
  ``api/v1/suche/objektanzahl/3/311/null/4/0/0``  

###### Ergebnis:
``66``
- - - - 
##### GET suche/objektanzahlprobezirk/{regionid}
Anzahl akueller Objekte nach Bezirken in einer Region  
    
    regionid: die erste Stellen der Gemeindekennzahl (=Bundesland)  
  
###### Beispiel:
  ``api/v1/suche/objektanzahlprobezirk/4``  

###### Ergebnis:
``[{"bezirk":403,"anzahl":"53"},{"bezirk":408,"anzahl":"13"}]``
- - - - 
##### GET suche/objektanzahl/wohnen/{regionid}/{bezirk}/{arrgemeindeid}/{objektartid}/{miete}/{kauf}/{wohnung}/{haus}/{bauernhaus}
Anzahl der Objekte, die den Kriterien entsprechen - ergänzt um die Parameter der Subkategorien von Wohnobjekten (Haus, Wohnung, Bauernhaus)
    
    regionid: die erste Stellen der Gemeindekennzahl (=Bundesland)  
    bezirk: ersten 3 Stellen des Gemeindecodes 
    arrgemeindeid: ein Array von zu berücksichtigenden GemeindeIDs  
    objektartid:  die Objektart(1=Gewerbegrund, 2=Gewerbeobjekt,3=Baugrund,4=Wohnobekjt) 
    miete: 1=ja, 0=nein  
    kauf: 1=ja, 0=nein
    wohnung: bei Kategorie Wohnobjekt Subkategorie "Wohnung" berücksichtigen(1=ja, 0=nein)
    haus: bei Kategorie Wohnobjekt Subkategorie "Haus" berücksichtigen (1=ja, 0=nein)
    bauernhaus: bei Kategorie Wohnobjekt Subkategorie "Bauernhaus" berücksichtigen (1=ja, 0=nein)
  
###### Beispiel (Wohnobjekte im Bezirk Horn, Miete oder Kauf:
  ``api/v1/suche/objektanzahl/wohnen/0/311/0/4/1/1/1/0/1  

###### Ergebnis:
``20``
- - - - 
##### POST immobilie/neu/{kategorie}/{typ}
erzeugt eine neue Immobilie (Onlineeintrag), wird beim Onlineinserat auf woiwa.at verwendet  
Standortbeauftragte der Gemeinde werden per Mail informiert und entscheiden über Onlinefreigabe 
    
**Path-Parameter**

    regionid: die erste Stellen der Gemeindekennzahl (=Bundesland)
    kategorie: "wohnen" oder "gewerbe"
    typ:
       zulässige Werte bei kategorie "wohnen": wohnung, haus, bauernhaus, baugrund
       zulässige Werte bei kategorie "gewerbe": grund, objekt
   
**Body-Parameter**
     
     Schema: 
       {"objekt":{},"objektdetail":{},"bilder":[],"dokumente":[],"infrastrukturttechnisch":[],"infrastrukturverkehr":[]}
    
     objekt: Objektdaten (Datenfelder siehe Model Objekt im Anhang)
     objektdetail: Objektdaten abhängig von der Objektart (Datenfelder siehe Models  Gewerbegrund/Baugrund, Gewerbeobjekt, Wohnobjekt im Anhang)

     bilder: Array mit urls zu den Bildern 
       Formate: gif|jpg|jpeg|png
       Beispiel: ["http://example.com/my.jpg","http://...."]
             
     dokumente: Array mit urls zu den Dokumenten 
       Formate: pdf|doc|docx|xls|xlsx|ppt|pptx
       Beispiel: ["http://example.com/my.jpg","http://...."]
       
     infrastrukturtechnisch: Array mit IDs aus dem Wertevorrat (siehe GET /wertevorrat/infrastrukturtechnisch
     infrastrukturverkehr: Array mit IDs aus dem Wertevorrat (siehe GET /wertevorrat/infrastrukturtverkehr)
     
           
###### Beispiel:
  ``curl -i -H "Content-Type: application/json" -X POST -d '{"objekt":{"objekttitel":"Haus am Land","gemeindeid":"91","ort":"Horn","strasse":"Florianigasse 8","plz":"3580","mikana":"0","mikana1":"1","mikana2":"0","lage":"Nordhang","markler":"1","grundflaeche":"200","standortinfo":"im Zentrum","name1":"Muster","vorname1":"Hansi","ort1":"Wien","strasse1":"Lerchenweg 2","plz1":"1135","telefon1":"013932","email":"hm@hamma.net","laenge":"48.3","breite":"16.7","kontaktdatenoeffentlich":"1","veroeffentlichungsart":"2","www":"www.ka.at"},"objektdetail":{"widmungvom":"01.01.2015","geschosse":"2","baujahr":"1909","wohnflaeche":"200","zustandid":"1","heizungsartid":"1","brennstoffid":"1","moeblierung":"Kueche","abstellplaetzepkw":"2","kaufpreis":"200000","miete":"400","kaution":"800","courtage":"3%","sanierungen":"keine","adaptierungen":"keine","raeume":"4","interneanmerkung":"","kaufpreisoeffentlich":"1","mietpreisoeffentlich":"1","betriebskostenoeffentlich":"1","kautionoeffentlich":"1","ea_hwb":"122.4","ea_fgee":"3.23","widmungsartid":"1"},"bilder":["http://example.com/my.jpg","http://example.com/my1.jpg"],"dokumente":[],"infrastrukturtechnisch":[11,21],"infrastrukturverkehr":[4]}' http://www3.komsis.at/api/v1/immobilie/neu/wohnen/haus``

###### Ergebnis:
       
       Created: ``201`` 
       Rückgabe der ObjektID im JSON-Format {"objektid":16292}
       
       Bad Request: ``400`` 
       Rückgabe: "Kategorie oder Typ unbekannt"
       
       Internal Server Error: ``500``
       Ursache: Validierung der Body Parameter fehlgeschlagen
        
###### Anmerkung zum Testen:
  Wenn man zum Testen der Inserataufgabe den Endpunkt der Domain dev.komsis.at verwenden, dann erhält nach einem erfolgreichen POST weder die zuständige Gemeindekein noch die
  im Datensatz angegebene Adresse ein Bestätigungsmail.          
- - - -
##### POST statistik/{objektid}/{referrer}
macht Eintrag in Zugriffsstatistik um den Aufruf eines Inserats zu zählen  
    
    objektid: id des Aufgerufenen Objekts
    referrer: die aufrufende Quelle (M=Mostviertel Mitte,S=Standortfinder.at, H=komsis.at, X=Adminbereich, G=Gemeindehompeage, W=WOIWA)  
  
###### Beispiel:
  ``api/v1/statistik/16000/W``  

###### Ergebnis:
OK: ``200`` 
ERROR: ``303`` 
- - - - 

### ANHANG

#### Models

##### Objekt
*= required
    
    gemeindeid: integer
    objekttitel: string(100)
    ort: string(50) *
    strasse: string(50)
    plz: string(10) *
    mikana: boolean(0,1) *
    mikana1: boolean(0,1) *
    mikana2: boolean(0,1) *
    lage: integer
    markler: boolean (0,1)
    grundflaeche: decimal *
    standortinfo: text
    name1: string(50) *
    vorname1: string(50)
    strasse1: string(50)
    plz1: string(10)
    ort1: string(100)
    telefon1: string(70)
    email: string(50) *
    laenge: float
    breite: float
    veroeffentlichungsart: integer *
    www: string(100)
    
*Minimalset: {"objekt":{"gemeindeid":"91","ort":"Horn","plz":"3580","mikana1":"1","grundflaeche":"200","name1":"Muster Max","email":"hm@hamma.net","veroeffentlichungsart":"1"}*

##### Gewerbegrund / Baugrund
Gewerbegrund und Baugrund haben dieselbe Datenstruktur 
*= required
    
    widmungvom: string(30)
    bebauungsplan: integer
    grundstueckspreism2: decimal
    coutage: string(50)
    aufschliessung: boolean(0,1)
    aufschliessungskosten: decimal
    verkehrserschliessung: text  (enthält Kurzbeschreibung/Besonderheiten)
    bauklasse: string(15)
    preisoeffentlich: boolean(0,1)
    widmungsartid: integer *
    interneanmerkung: text
    
*Minimalset: {"objektdetail":{"widmungsartid":0}}*
    
##### Gewerbeobjekt
####
    widmungvom: string(20)   
    geschosse: integer
    verkehrserschliessung: text (enthält info zu notwendigen Sanierungen)
    baujahr: string(20)
    bueroflaeche: decimal
    geschaeftsflaeche: decimal
    produktionsflaeche: decimal
    lagerflaeche: decimal
    zustandid: integer *
    branchebisher: text
    heizungsartid: integer *
    brennstoffid: integer *
    moeblierung: text
    abstellplaetzelkw: string(50)
    abstellplaetzepkw: string(50)
    abstellplaetzecontainer: string(50)
    kaufpreis: decimal  
    miete: decimal
    kaution: decimal
    adaptierungen: text (Objektbeschreibung)
    courtage: string(50)
    raeume: integer
    interneanmerkung: text
    betriebskosten: decimal
    widmungsartid: integer *
    kaufpreisoeffentlich: boolean(0,1)
    mietpreisoeffentlich: boolean(0,1)
    betriebskostenoeffentlich: boolean(0,1)
    kautionoeffentlich: boolean(0,1)
    ea_hwb: decimal
    ea_hwb: decimal

*Minimalset: {"objektdetail":{"zustandid":1,"heizungsartid":0,"brennstoffid":0,"widmungsartid":0}}*    
    
##### Wohnobjekt
####
    widmungvom: string(20)
    geschosse: integer
    baujahr: string(20)
    wohnflaeche: decimal
    zustandid: integer *
    heizungsartid: integer *
    brennstoffid: integer *
    moeblierung: text
    abstellplaetzepkw: integer
    kaufpreis: decimal
    miete: decimal
    kaution: decimal
    courtage: string(20)
    sanierungen: text
    adaptierungen text  (Objektbeschreibung)
    raeume: integer
    interneanmerkung: text
    betriebskosten: decimal
    widmungsartid: integer *
    kaufpreisoeffentlich: boolean(0,1)
    mietpreisoeffentlich: boolean(0,1)
    betriebskostenoeffentlich: boolean(0,1)
    kautionoeffentlich: boolean(0,1)
    ea_fgee: decimal
    ea_hwb: decimal

*Minimalset: {"objektdetail":{"zustandid":1,"heizungsartid":0,"brennstoffid":0,"widmungsartid":0}}*
    
#### Wertevorräte

##### Variable Verbund
####
    WIW Wohnen im Waldviertel
    VIE Airport-Region
    MOM Region Mostviertel Mitte
    STA Standort:Aktiv
    LAA Region Land um Laa
    W3  Region W3
- - - -
##### Variable Regionen
####
    1 B
    2 K
    3 NÖ
    4 OÖ
    5 S
    6 ST
    7 T
    8 V
    9 Weinviertel
    10 Waldviertel
    11 Mostviertel
    12 Industrieviertel
    13 Translokal
    14 NÖ-Mitte
