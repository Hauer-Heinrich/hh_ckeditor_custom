# Typo3 Custom ck_editor Config

## What does it do?

This extension allows the custom configuration of the ck_editor.
It specifies required files and directories in the fileadmin folder. There you can modify them.

Or use it to build your own ext. ;)

Now you can change the path of the yaml file:
Go to the extension manager search for the extension "hh_ckeditor_custom" and click on the "gear-wheel" of the extension.

## Installation

The extension needs to be installed as any other extension of TYPO3 CMS:

1. Switch to the module “Extension Manager”.
2. Get the extension
    - Get it from the Extension Manager: Press the **Retrieve/Update** button and search for the extension key *hh_ckeditor_custom* and import the extension from the repository.
    - Get it from typo3.org: You can always get current version from
      http://typo3.org/extensions/repository/view/hh_ckeditor_custom/current/
      _ by downloading either the t3x or zip version. Upload the file afterwards in the Extension Manager.
    - Latest version from git
    https://github.com/Hauer-Heinrich/hh_ckeditor_custom.git
3. Preparation: Include static TypoScript (to include the css file in the frontend)
    The extension ships some TypoScript code which needs to be included.
    - Switch to the root page of your site.
    - Switch to the **Template module** and select *Info/Modify*.
    - Press the link **Edit the whole template record** and switch to the tab *Includes*.
    - Select **hh Custom ck_editor Config (hh_ckeditor_custom)** at the field *Include static (from extensions):*

    or add the **custom_ckeditor.css** in your own TypoScript config if you want.

4. Preparation: Include Page Config
    - Switch to the root page of your site.
    - Edit page properties
    - Switch to tab **Resources**
    - Select **HH ckeditor custom config (hh_ckeditor_custom)**

    or add the rte.preset to your PageTS:
    **RTE.default.preset = hh_custom_ckeditor**

### Known Issues
  - none so far
