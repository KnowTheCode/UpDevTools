## 1.2.0 (06.Mar.2018)

- replaced constants with utility function.
- changed min. PHP to 5.6.
- simplied Whoops setup.

## 1.0.3 (04.July.2017)

- fixed `UPDEVTOOLS_DIR` constant
- added admin bar notification and styling to alert developers this plugin is activated per [issue #7](https://github.com/KnowTheCode/UpDevTools/issues/4)
- Changed "support" folder to "Support"

## 1.0.2 (04.July.2017)

- removed whoops setup from global space and moved into a function
- corrected link to Kint in [README.md](https://github.com/KnowTheCode/UpDevTools/blob/master/README.md) per [issue #7](https://github.com/KnowTheCode/UpDevTools/issues/7)

## 1.0.1

- Removed unused PHP packages as they were causing an issue on certain Windows + DesktopServer setups. Why? Those packages were trying to load a newer version of PHP, which was not available in DesktopServer...yet.
- Fixed comma in `composer.json`
- Fixed README.md git clone reference to use HTTPS

## 1.0.0

Initial release.
