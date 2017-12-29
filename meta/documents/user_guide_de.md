
# User Guide für das ElasticExportKaufluxDE Plugin

<div class="container-toc"></div>

## 1 Bei kauflux.de registrieren

Auf dem Marktplatz kauflux.de bieten Sie Ihre Artikel zum Verkauf an. Weitere Informationen zu diesem Marktplatz finden Sie auf der Handbuchseite [kauflux einrichten](https://www.plentymarkets.eu/handbuch/multi-channel/kauflux/).

## 2 Das Format KaufluxDE-Plugin in plentymarkets einrichten

Um dieses Format nutzen zu können, benötigen Sie das Plugin Elastic Export.

Auf der Handbuchseite [Daten exportieren](https://www.plentymarkets.eu/handbuch/datenaustausch/daten-exportieren/#4) werden die einzelnen Formateinstellungen beschrieben.

In der folgenden Tabelle finden Sie Hinweise zu den Einstellungen, Formateinstellungen und empfohlenen Artikelfiltern für das Format **KaufluxDE-Plugin**.
<table>
    <tr>
        <th>
            Einstellung
        </th>
        <th>
            Erläuterung
        </th>
    </tr>
    <tr>
        <td class="th" colspan="2">
            Einstellungen
        </td>
    </tr>
    <tr>
        <td>
            Format
        </td>
        <td>
            <b>KaufluxDE-Plugin</b> wählen.
        </td>        
    </tr>
    <tr>
        <td>
            Bereitstellung
        </td>
        <td>
            <b>URL</b> wählen.
        </td>        
    </tr>
    <tr>
        <td>
            Dateiname
        </td>
        <td>
            Der Dateiname muss auf <b>.csv</b> oder <b>.txt</b> enden, damit Kauflux.de die Datei erfolgreich importieren kann.
        </td>        
    </tr>
    <tr>
        <td class="th" colspan="2">
            Artikelfilter
        </td>
    </tr>
    <tr>
        <td>
            Aktiv
        </td>
        <td>
            <b>Aktiv</b> wählen.
        </td>        
    </tr>
    <tr>
        <td>
            Märkte
        </td>
        <td>
            Eine oder mehrere Auftragsherkünfte wählen. Die gewählten Auftragsherkünfte müssen an der Variante aktiviert sein, damit der Artikel exportiert wird.
        </td>        
    </tr>
    <tr>
        <td class="th" colspan="2">
            Formateinstellungen
        </td>
    </tr>
    <tr>
        <td>
            Auftragsherkunft
        </td>
        <td>
            Die Auftragsherkunft wählen, die beim Auftragsimport zugeordnet werden soll.
        </td>        
    </tr>
    <tr>
    	<td>
    		Bestandspuffer
    	</td>
    	<td>
    		Der Bestandspuffer für Varianten mit der Beschränkung auf den Netto Warenbestand.
    	</td>        
    </tr>
    <tr>
    	<td>
    		Bestand für Varianten ohne Bestandsbeschränkung
    	</td>
    	<td>
    		Der Bestand für Varianten ohne Bestandsbeschränkung.
    	</td>        
    </tr>
    <tr>
    	<td>
    		Bestand für Varianten ohne Bestandsführung
    	</td>
    	<td>
    		Der Bestand für Varianten ohne Bestandsführung.
    	</td>        
    </tr>
    <tr>
        <td>
            Angebotspreis
        </td>
        <td>
            Diese Option ist für dieses Format nicht relevant.
        </td>        
    </tr>
    <tr>
        <td>
            MwSt.-Hinweis
        </td>
        <td>
            Diese Option ist für dieses Format nicht relevant.
        </td>        
    </tr>
</table>


## 3 Übersicht der verfügbaren Spalten

<table>
    <tr>
        <th>
            Spaltenbezeichnung
        </th>
        <th>
            Erläuterung
        </th>
    </tr>
    <tr>
		<td>
			ProductID
		</td>
		<td>
			<b>Inhalt:</b> Die <b>Artikel-ID</b> der Variante.
		</td>        
	</tr>
    <tr>
		<td>
			BestellNr
		</td>
		<td>
			<b>Inhalt:</b> Die <b>SKU</b> der Variante.
		</td>        
	</tr>
	<tr>
		<td>
			EAN
		</td>
		<td>
			<b>Inhalt:</b> Entsprechend der Formateinstellung <b>Barcode</b>.
		</td>        
	</tr>
	<tr>
		<td>
			Hersteller
		</td>
		<td>
			<b>Inhalt:</b> Der <b>Name des Herstellers</b> des Artikels. Der <b>Externe Name</b> unter <b>Einstellungen » Artikel » Hersteller</b> wird bevorzugt, wenn vorhanden.
		</td>        
	</tr>
	<tr>
		<td>
			BestandModus
		</td>
		<td>
			<b>Inhalt:</b> Die <b>Art der Bestandsführung</b>, welche eingestellt wird unter Einstellungen » Märkte » Kauflux » Grundeinstellungen.
		</td>        
	</tr>
	<tr>
		<td>
			BestandAbsolut
		</td>
		<td>
			<b>Inhalt:</b> Der <b>Netto-Warenbestand der Variante</b>. Bei Artikeln, die nicht auf den Netto-Warenbestand beschränkt sind, wird <b>999</b> übertragen.
		</td>        
	</tr>
	<tr>
		<td>
			Liefertyp
		</td>
		<td>
			<b>Inhalt:</b> Art der Lieferung dieses Artikels: V = Versand
		</td>
	</tr>
	<tr>
		<td>
			VersandKlasse
		</td>
		<td>
			<b>Inhalt:</b> Entsprechend der Formateinstellung <b>Versandkosten</b>.
		</td>        
	</tr>
	<tr>
		<td>
			Lieferzeit
		</td>
		<td>
			<b>Content:</b>Der <b>Name der Artikelverfügbarkeit</b> unter <b>Einstellungen » Artikel » Artikelverfügbarkeit</b> oder die Übersetzung gemäß der Formateinstellung <b>Artikelverfügbarkeit</b>.
		</td>        
	</tr>
	<tr>
		<td>
			Umtausch
		</td>
		<td>
			<b>Inhalt:</b> Die <b>Umtauschfrist nach Lieferung in Tagen</b>, welche unter Einstellungen » Märkte » Kauflux » Grundeinstellungen eingestellt wird.
		</td>        
	</tr>
	<tr>
		<td>
			Bezeichnung
		</td>
		<td>
			<b>Inhalt:</b> Entsprechend der Formateinstellung <b>Artikelname</b>.
		</td>        
	</tr>
	<tr>
		<td>
			KurzText
		</td>
		<td>
			<b>Inhalt:</b> Entsprechend der Formateinstellung <b>Vorschautext</b>.
		</td>        
	</tr>
	<tr>
		<td>
			DetailText
		</td>
		<td>
			<b>Inhalt:</b> Entsprechend der Formateinstellung <b>Beschreibung</b>.
		</td>        
	</tr>
	<tr>
		<td>
			Keywords
		</td>
		<td>
			<b>Inhalt:</b> Die <b>Keywords</b> des Artikels.
		</td>        
	</tr>
	<tr>
		<td>
			Bild1
		</td>
		<td>
			<b>Inhalt:</b> URL des Bildes. Variantenbiler werden vor Artikelbildern priorisiert.
		</td>        
	</tr>
	<tr>
		<td>
			Bild2
		</td>
		<td>
			<b>Inhalt:</b> URL des Bildes. Variantenbiler werden vor Artikelbildern priorisiert.
		</td>        
	</tr>
	<tr>
		<td>
			Bild3
		</td>
		<td>
			<b>Inhalt:</b> URL des Bildes. Variantenbiler werden vor Artikelbildern priorisiert.
		</td>        
	</tr>
	<tr>
		<td>
			Gewicht
		</td>
		<td>
			<b>Inhalt:</b> Gesamtgewicht in Gramm.
		</td>        
	</tr>
	<tr>
		<td>
			Preis
		</td>
		<td>
			<b>Inhalt:</b> Hier steht der <b>Verkaufspreis</b>.
		</td>        
	</tr>
	<tr>
		<td>
			MwSt
		</td>
		<td>
			<b>Inhalt:</b> Die Mehrwertsteuer in %.
		</td>        
	</tr>
	<tr>
		<td>
			UVP
		</td>
		<td>
			<b>Inhalt:</b> Der <b>Verkaufspreis</b> der Variante. Wenn der <b>UVP</b> in den Formateinstellungen aktiviert wurde und höher ist als der Verkaufspreis, wird dieser hier eingetragen.
		</td>        
	</tr>
	<tr>
		<td>
			Katalog1
		</td>
		<td>
			<b>Inhalt:</b> Der Name der Kategorie.
		</td>        
	</tr>
	<tr>
		<td>
			Flags
		</td>
		<td>
			<b>Inhalt:</b> Die <b>Shop-Aktion</b> des Artikels.
		</td>        
	</tr>
	<tr>
		<td>
			ExtLinkDetail
		</td>
		<td>
			<b>Inhalt:</b> Der <b>URL-Pfad</b> des Artikels abhängig vom gewählten <b>Mandanten</b> in den Formateinstellungen.
		</td>        
	</tr>
	<tr>
		<td>
			Status
		</td>
		<td>
			<b>Inhalt:</b> Status des Artikels: 0=sichtbar, 1=gesperrt, 2=versteckt.
		</td>        
	</tr>
	<tr>
		<td>
			FreeVar1
		</td>
		<td>
			<b>Inhalt:</b> <b>Freitextfeld 1</b>.
		</td>        
	</tr>
    <tr>
		<td>
			FreeVar2
		</td>
		<td>
			<b>Inhalt:</b> <b>Freitextfeld 2</b>.
		</td>        
	</tr>
    <tr>
		<td>
			FreeVar3
		</td>
		<td>
			<b>Inhalt:</b> <b>Freitextfeld 3</b>.
		</td>        
	</tr>
	<tr>
		<td>
			InhaltMenge
		</td>
		<td>
			<b>Inhalt:</b> Die <b>Menge</b> der Variante (Beispiel: 250).
		</td>        
	</tr>
	<tr>
		<td>
			InhaltEinheit
		</td>
		<td>
			<b>Inhalt:</b> Die <b>Einheit</b> der <b>Menge</b> (Beispiel: ml).
		</td>        
	</tr>
	<tr>
		<td>
			InhaltVergleich
		</td>
		<td>
			<b>Inhalt:</b> Vergleichsmenge der Netto-Inhaltsmenge zur automatischen Berechnung des Preises einer handelsüblichen Menge.
		</td>        
	</tr>
	<tr>
		<td>
			HerstellerArtNr
		</td>
		<td>
			<b>Inhalt:</b> Das <b>Modell</b> der Variante.
		</td>        
	</tr>
</table>

## 4 Lizenz

Das gesamte Projekt unterliegt der GNU AFFERO GENERAL PUBLIC LICENSE – weitere Informationen finden Sie in der [LICENSE.md](https://github.com/plentymarkets/plugin-elastic-export-kauflux-de/blob/master/LICENSE.md).
