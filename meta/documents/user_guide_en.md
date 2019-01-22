
# ElasticExportKaufluxDE plugin user guide

<div class="container-toc"></div>

## 1 Registering with kauflux.de

Items are sold on the market kauflux.de. For further information about this market, refer to the [Kauflux](https://knowledge.plentymarkets.com/en/omni-channel/multi-channel/kauflux) page of the manual.

## 2 Setting up the data format KaufluxDE-Plugin in plentymarkets

By installing this plugin you will receive the export format **KaufluxDE-Plugin**. Use this format to exchange data between plentymarkets and Kauflux. It is required to install the Plugin **Elastic export** from the plentyMarketplace first before you can use the format **KaufluxDE-Plugin** in plentymarkets.

Once both plugins are installed, you can create the export format **KaufluxDE-Plugin**. Refer to the [Elastic Export](https://knowledge.plentymarkets.com/en/basics/data-exchange/elastic-export) page of the manual for further details about the individual format settings.

Creating a new export format:

1. Go to **Data » Elastic export**.
2. Click on **New export**.
3. Carry out the settings as desired. Pay attention to the information given in table 1.
4. **Save** the settings.
→ The export format is given an ID and it appears in the overview within the **Exports** tab.

The following table lists details for settings, format settings and recommended item filters for the format **KaufluxDE-Plugin**.

| **Setting**                                           | **Explanation** | 
| :---                                                  | :--- |
| **Settings**                                          | |
| **Name**                                              | Enter a name. The export format is listed under this name in the overview within the **Exports** tab. |
| **Type**                                              | Select the type **Item** from the drop-down list. |
| **Format**                                            | Select **KaufluxDE-Plugin**. |
| **Limit**                                             | Enter a number. If you want to transfer more than 9,999 data records to Kauflux, then the output file will not be generated again for another 24 hours. This is to save resources. If more than 9,999 data records are necessary, the setting **Generate cache file** has to be active. |
| **Generate cache file**                               | Place a check mark if you want to transfer more than 9,999 data records to Kauflux. The output file will not be generated again for another 24 hours. We recommend not to activate this setting for more than 20 export formats. This is to save resources. |
| **Provisioning**                                      | Select **URL**. This option generates a token for authentication in order to allow external access. |
| **Token, URL**                                        | If you have selected the option **URL** under **Provisioning**, then click on **Generate token**. The token will be entered automatically. When the token is generated under **Token**, the URL is entered automatically. |
| **File name**                                         | The file name must have the ending **.csv** or **.txt** for Kauflux to be able to import the file successfully. |
| **Item filters**                                      | |
| **Add item filters**                                  | Select an item filter from the drop-down list and click on **Add**. There are no filters set in default. It is possible to add multiple item filters from the drop-down list one after the other.<br/> **Variations** = Select **Transfer all** or **Only transfer main variations**.<br/> **Markets** = Select one or multiple order referrers. The chosen order referrer has to be active at the variation for the item to be exported.<br/> <br/> **Currency** = Select a currency.<br/> **Category** = Activate to transfer the item with its category link. Only items belonging to this category are exported.<br/> **Image** = Activate to transfer the item with its image. Only items with images are transferred.<br/> **Client** = Select client.<br/> **Stock** = Select which stocks you want to export.<br/> **Flag 1 - 2** = Select the flag.<br/> **Manufacturer** = Select one, several or **ALL** manufacturers.<br/> **Active** = Select **Active**. Only active variations are exported. |
| **Format settings**                                   | |
| **Product URL**                                       | Choose which URL should be transferred to the price comparison portal, the item’s URL or the variation’s URL. Variation SKUs can only be transferred in combination with the Ceres store. |
| **Client**                                            | Select a client. This setting is used for the URL structure. |
| **URL parameter**                                     | Enter a suffix for the product URL if this is required for the export. If you have activated the transfer option for the product URL further up, then this character string will be added to the product URL. |
| **Order referrer**                                    | Select the order referrer that should be assigned during the order import from the drop-down list. |
| **Marketplace account**                               | Select the marketplace account from the drop-down list. The selected referrer is added to the product URL so that sales can be analysed later. |
| **Language**                                          | Select the language from the drop-down list. |
| **Item name**                                         | Select **Name 1**, **Name 2** or **Name 3**. These names are saved in the **Texts** tab of the item. Enter a number into the **Maximum number of characters (def. Text)** field if desired. This specifies how many characters should be exported for the item name. |
| **Preview text**                                      | This option does not affect this format. |
| **Description**                                       | Select the text that you want to transfer as description.<br/> Enter a number into the **Maximum number of characters (def. text)** field if desired. This specifies how many characters should be exported for the description.<br/> Activate the option **Remove HTML tags** if you want HTML tags to be removed during the export. If you only want to allow specific HTML tags to be exported, then enter these tags into the field **Permitted HTML tags, separated by comma (def. Text)**. Use commas to separate multiple tags. |
| **Target country**                                    | Select the target country from the drop-down list. |
| **Barcode**                                           | Select the ASIN, ISBN or an EAN from the drop-down list. The barcode has to be linked to the order referrer selected above. If the barcode is not linked to the order referrer it will not be exported. |
| **Image**                                             | Select **Position 0** or **First image** to export this image.<br/> **Position 0** = An image with position 0 will be transferred.<br/> **First image** = The first image will be transferred. |
| **Image position of the energy efficiency label**     | This option does not affect this format. |
| **Stockbuffer**                                       | The stock buffer for variations with limitation to the net stock. |
| **Stock for variations without stock limitation**     | The stock for variations without stock limitation. |
| **Stock for variations with no stock administration** | The stock for variations without stock administration. |
| **Live currency conversion**                          | Activate this option to convert the price into the currency of the selected country of delivery. The price has to be released for the corresponding currency. |
| **Retail price**                                      | Select gross price or net price from the drop-down list. |
| **Offer price**                                       | This option does not affect this format. |
| **RRP**                                               | Activate to transfer the RRP. |
| **Shipping costs**                                    | Activate this option if you want to use the shipping costs that are saved in a configuration. If this option is activated, then you will be able to select the configuration and the payment method from the drop-down lists.<br/> Activate the option **Transfer flat rate shipping charge** if you want to use a fixed shipping charge. If this option is activated, a value has to be entered in the line underneath. |
| **VAT Note**                                          | This option does not affect this format. |
| **Item availability**                                 | Activate the **overwrite** option and enter item availabilities into the fields **1** to **10**. The fields represent the IDs of the availabilities. This will overwrite the item availabilities that are saved in the menu **System » Item » Availability**. |
       
_Tab. 1: Settings for the data format **KaufluxDE-Plugin**_

## 3 Available columns for the export format

| **Column name** | **Explanation** |
| :---                   | :--- |
| ProductID              | The item ID of the variation. |
| BestellNr              | The SKU of the variation. |
| EAN                    | According to the format setting **Barcode**. |
| Hersteller             | The **name of the manufacturer** of the item. The **external name** within **System » Item » Manufacturers** is preferred if existing. |
| BestandModus           | The type of stock management, according to **System » Markets » Kauflux » Settings**. |
| BestandAbsolut         | The net stock of the variation. If a variation is not limited to its net stock, the stock is set to **999**. |
| Liefertyp              | Shipment type: V = Versand. |
| VersandKlasse          | According to the format setting **Shipping costs**. |
| Lieferzeit             | The **name of the item availability** under **System » Item » Item availability** of the translation according to the format setting **Item availability**. |
| Umtausch               | The **exchange period** after delivery in days, according to **System » Markets » Kauflux » Settings**. |
| Bezeichnung            | According to the format setting **Item name**. |
| KurzText               | According to the format setting **Preview text**. |
| DetailText             | According to the format setting **Description**. |
| Keywords               | The keywords of the item. |
| Bild1                  | The image URL. Item images are prioritised over variation images. |
| Bild2                  | The image URL. Item images are prioritised over variation images. |
| Bild3                  | The image URL. Item images are prioritised over variation images. |
| Gewicht                | The overall weight in gram. |
| Preis                  | The sales price of the variation. |
| MwSt                   | The VAT in %. |
| UVP                    | If the RRP is activated in the format setting and is higher than the sales price, the RRP is exported. |
| Katalog1               | The name of the category. |
| Flags                  | The store special of the item. |
| ExtLinkDetail          | The URL path of the item depending on the chosen client in the format settings. |
| Status                 | Status of the item: **0** = visible; **1** = blocked; **2** = hidden. |
| FreeVar1               | Free text field 1 |
| FreeVar2               | Free text field 2 |
| FreeVar3               | Free text field 3 |
| InhaltMenge            | The lot of the variation (example: 250). |
| InhaltEinheit          | The unit for the lot (example: ml). |
| InhaltVergleich        | The comparative amount of the net content quantity for the automatic calculation of a commercial quantity. |
| HerstellerArtNr        | The model of the variation. |

## License

This project is licensed under the GNU AFFERO GENERAL PUBLIC LICENSE.- find further information in the [LICENSE.md](https://github.com/plentymarkets/plugin-elastic-export-kauflux-de/blob/master/LICENSE.md).
