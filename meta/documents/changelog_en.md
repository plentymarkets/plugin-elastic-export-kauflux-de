# Release Notes for Elastic Export kauflux.de

## v1.1.0 (2017-12-28)

### Added
- The StockHelper takes the new fields "Stockbuffer", "Stock for variations without stock limitation" and "Stock for variations with not stock administration" into account.

## v1.0.7 (2017-09-27)

### Fixed
- An issue was fixed which caused file to be empty.

## v1.0.6 (2017-08-23)

### Changed
- The format plugin is now based on Elastic Search only.
- The performance has been improved.

## v1.0.5 (2017-07-26)

### Fixed
- Adjustment to the new return value of the method **getBasePriceDetails** from the Elastic Export version 1.2.2.

## v1.0.4 (2017-07-19)

### Fixed
- The values for the fields "InhaltMenge", "InhaltVergleich" and "InhaltEinheit" will now be correctly exported. 

## v1.0.3 (2017-06-23)

### Changed
- The plugin Elastic Export is now required to use the plugin format KaufluxDE.

### Fixed
- An issue was fixed which caused elastic search to ignore the set referrers for the barcodes.
- An issue was fixed which caused the stock filter not to be correctly evaluated.
- An issue was fixed which caused the variations not to be exported in the correct order.
- An issue was fixed which caused the export format to export texts in the wrong language.

## v1.0.2 (2017-03-22)

### Fixed
- We now use a different value to get the image URLs for plugins working with elastic search.

## v1.0.1 (2017-03-13)

### Added
- Added marketplace name.

### Changed
- Changed plugin icons.

## v1.0.0 (2017-02-20)
 
### Added
- Added initial plugin files