
# ElasticExportKaufluxDE plugin user guide

<div class="container-toc"></div>

## 1 Registering with kauflux.de

Items are sold on the market kauflux.de. For further information about this market, refer to the [Setting up kauflux](https://www.plentymarkets.eu/handbuch/multi-channel/kauflux/) page of the manual.

## 2 Setting up the data format KaufluxDE-Plugin in plentymarkets

The plugin Elastic Export is required to use this format.

Refer to the [Exporting data formats for price search engines](https://knowledge.plentymarkets.com/en/basics/data-exchange/exporting-data#30) page of the manual for further details about the individual format settings.

The following table lists details for settings, format settings and recommended item filters for the format **KaufluxDE-Plugin**.
<table>
    <tr>
        <th>
            Settings
        </th>
        <th>
            Explanation
        </th>
    </tr>
    <tr>
        <td class="th" colspan="2">
            Settings
        </td>
    </tr>
    <tr>
        <td>
            Format
        </td>
        <td>
            Choose <b>KaufluxDE-Plugin</b>.
        </td>        
    </tr>
    <tr>
        <td>
            Provisioning
        </td>
        <td>
            Choose <b>URL</b>.
        </td>        
    </tr>
    <tr>
        <td>
            File name
        </td>
        <td>
            The file name must have the ending <b>.csv</b> or <b>.txt</b> for kauflux.de to be able to import the file successfully.
        </td>        
    </tr>
    <tr>
        <td class="th" colspan="2">
            Item filter
        </td>
    </tr>
    <tr>
        <td>
            Active
        </td>
        <td>
            Choose <b>active</b>.
        </td>        
    </tr>
    <tr>
        <td>
            Markets
        </td>
        <td>
            Choose one or multiple order referrers. The chosen order referrer has to be active at the variation for the item to be exported.
        </td>        
    </tr>
    <tr>
        <td class="th" colspan="2">
            Format settings
        </td>
    </tr>
    <tr>
        <td>
            Order referrer
        </td>
        <td>
            Choose the order referrer that should be assigned during the order import.
        </td>        
    </tr>
    <tr>
        <td>
            Preview text
        </td>
        <td>
            This option is not relevant for this format.
        </td>        
    </tr>
    <tr>
        <td>
            Offer price
        </td>
        <td>
            This option is not relevant for this format.
        </td>        
    </tr>
    <tr>
        <td>
            VAT note
        </td>
        <td>
            This option is not relevant for this format.
        </td>        
    </tr>
</table>

## 3 Overview of available columns

<table>
    <tr>
        <th>
			Column name
		</th>
		<th>
			Explanation
		</th>
    </tr>
    <tr>
		<td>
			ProductID
		</td>
		<td>
			<b>Content:</b> The <b>item ID</b> of the variation.
		</td>        
	</tr>
    <tr>
		<td>
			BestellNr
		</td>
		<td>
			<b>Content:</b> The <b>SKU</b> of the variation.
		</td>        
	</tr>
	<tr>
		<td>
			EAN
		</td>
		<td>
			<b>Content:</b> According to the format setting <b>Barcode</b>.
		</td>        
	</tr>
	<tr>
		<td>
			Hersteller
		</td>
		<td>
			<b>Content:</b> The <b>name of the manufacturer</b> of the item. The <b>external name</b> in the menu <b>Settings » Items » Manufacturer</b> will be preferred if existing.
		</td>        
	</tr>
	<tr>
		<td>
			BestandModus
		</td>
		<td>
			<b>Content:</b> The <b>Type of stock management</b>, according to Settings » Markets » Kauflux » Basic settings.
		</td>        
	</tr>
	<tr>
		<td>
			BestandAbsolut
		</td>
		<td>
			<b>Content:</b> The <b>net stock</b> of the variation. If a variation is not limited to its net stock, the stock will be set to b>999</b>.
		</td>        
	</tr>
	<tr>
		<td>
			Liefertyp
		</td>
		<td>
			<b>Content:</b> Shippment type:	V = Versand
		</td>
	</tr>
	<tr>
		<td>
			VersandKlasse
		</td>
		<td>
			<b>Content:</b> According to the format setting <b>Shipping costs</b>.
		</td>        
	</tr>
	<tr>
		<td>
			Lieferzeit
		</td>
		<td>
			<b>Content:</b>The <b>name of the item availability</b> under <b>Settings » Item » Item availability</b> or the translation according to the format setting <b>Item availability</b>.
		</td>        
	</tr>
	<tr>
		<td>
			Umtausch
		</td>
		<td>
			<b>Content:</b> The <b>Exchange period after delivery in days</b>, according to Settings » Markets » Kauflux » Basic settings.
		</td>        
	</tr>
	<tr>
		<td>
			Bezeichnung
		</td>
		<td>
			<b>Content:</b> According to the format setting <b>Item name</b>.
		</td>        
	</tr>
	<tr>
		<td>
			KurzText
		</td>
		<td>
			<b>Content:</b> According to the format setting <b>Preview text</b>.
		</td>        
	</tr>
	<tr>
		<td>
			DetailText
		</td>
		<td>
			<b>Content:</b> According to the format setting <b>Description</b>.
		</td>        
	</tr>
	<tr>
		<td>
			Keywords
		</td>
		<td>
			<b>Content:</b> The <b>Keywords</b> of the item.
		</td>        
	</tr>
	<tr>
		<td>
			Bild1
		</td>
		<td>
			<b>Content:</b> The image URL. Item images are prioritizied over variation images.
		</td>        
	</tr>
	<tr>
		<td>
			Bild2
		</td>
		<td>
			<b>Content:</b> The image URL. Item images are prioritizied over variation images.
		</td>        
	</tr>
	<tr>
		<td>
			Bild3
		</td>
		<td>
			<b>Content:</b> The image URL. Item images are prioritizied over variation images.
		</td>        
	</tr>
	<tr>
		<td>
			Gewicht
		</td>
		<td>
			<b>Content:</b> The overall weight in gram.
		</td>        
	</tr>
	<tr>
		<td>
			Preis
		</td>
		<td>
			<b>Content:</b> The <b>sales price</b> of the variation.
		</td>        
	</tr>
	<tr>
		<td>
			MwSt
		</td>
		<td>
			<b>Inhalt:</b> The VAT in %.
		</td>        
	</tr>
	<tr>
		<td>
			UVP
		</td>
		<td>
			<b>Content:</b> If the <b>RRP</b> is activated in the format setting and is higher than the <b>sales price</b>, the <b>RRP</b> will be exported.
		</td>        
	</tr>
	<tr>
		<td>
			Katalog1
		</td>
		<td>
			<b>Content:</b> The name of the <b>category</b>.
		</td>        
	</tr>
	<tr>
		<td>
			Flags
		</td>
		<td>
			<b>Content:</b> The <b>Store special</b> of the item.
		</td>        
	</tr>
	<tr>
		<td>
			ExtLinkDetail
		</td>
		<td>
			<b>Content:</b> The <b>URL path</b> of the item depending on the chosen <b>client</b> in the format settings.
		</td>        
	</tr>
	<tr>
		<td>
			Status
		</td>
		<td>
			<b>Content:</b> Status of the item: 0=visible, 1=blocked, 2=hidden.
		</td>        
	</tr>
	<tr>
		<td>
			FreeVar1
		</td>
		<td>
			<b>Content:</b> <b>Free text field 1</b>.
		</td>        
	</tr>
    <tr>
		<td>
			FreeVar2
		</td>
		<td>
			<b>Content:</b> <b>Free text field 2</b>.
		</td>        
	</tr>
    <tr>
		<td>
			FreeVar3
		</td>
		<td>
			<b>Content:</b> <b>Free text field 3</b>.
		</td>        
	</tr>
	<tr>
		<td>
			InhaltMenge
		</td>
		<td>
			<b>Content:</b> The <b>Lot</b> of the variation (Example: 250).
		</td>        
	</tr>
	<tr>
		<td>
			InhaltEinheit
		</td>
		<td>
			<b>Content:</b> The <b>unit</b> for the <b>lot</b> (Example: ml).
		</td>        
	</tr>
	<tr>
		<td>
			InhaltVergleich
		</td>
		<td>
			<b>Content:</b> The comparative amount of the net content quantity for the automatic caculation of a commercial quantity.
		</td>        
	</tr>
	<tr>
		<td>
			HerstellerArtNr
		</td>
		<td>
			<b>Content:</b> The <b>Model</b> of the variation.
		</td>        
	</tr>
</table>

## License

This project is licensed under the GNU AFFERO GENERAL PUBLIC LICENSE.- find further information in the [LICENSE.md](https://github.com/plentymarkets/plugin-elastic-export-kauflux-de/blob/master/LICENSE.md).
