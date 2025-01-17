# Upgrade Notes

## 3.0.7

- **[BUGFIX]**: Fix  custom layout resolving in EntryTypeManager [#63](https://github.com/dachcom-digital/pimcore-news/issues/63)


## 3.0.6
- **[BUGFIX]**: Fix paginator method call for px [#60](https://github.com/dachcom-digital/pimcore-news/issues/60)
- **[BUGFIX]**: Fix undefined array key warning [#61](https://github.com/dachcom-digital/pimcore-news/issues/61)

## 3.0.5
- **[BUGFIX]**: Fix exception Type of `NewsBundle\Controller\Admin\SettingsController::$translator` must not be defined [@georgringer](https://github.com/dachcom-digital/pimcore-news/pull/57)
- **[BUGFIX]**: Fix Attempted to load class `Versions` from namespace `PackageVersions` [@georgringer](https://github.com/dachcom-digital/pimcore-news/pull/58)

## 3.0.4
- **[BUGFIX]**: fix event constant `NEWS_EDITABLE_DIALOG`
- **[BUGFIX]**: fixed imports for `Pimcore\Twig\Extension\Templating\Placeholder\Container` [@rliebe](https://github.com/dachcom-digital/pimcore-news/pull/55)

## 3.0.3
- **[BUGFIX]**: fix otherElementsExists method: allow null for parameter `$id` [@pascalmoser](https://github.com/dachcom-digital/pimcore-news/pull/53)

## 3.0.2
- **[BUGFIX]**: missing service subscriber for EntryController [@pascalmoser](https://github.com/dachcom-digital/pimcore-news/pull/52)

## 3.0.1
- **[BUGFIX]**: catch class not found exception during installation [@MyZik](https://github.com/dachcom-digital/pimcore-news/pull/50)

## Migrating from Version 2.x to Version 3.0.0

### Global Changes
- PHP8 return type declarations added: you may have to adjust your extensions accordingly
- View `Areas/news/edit_custom.html.twig` has been removed. Use Event `\NewsBundle\NewsEvents::NEWS_EDITABLE_DIALOG` instead
- It is no longer possible to toggle editable configuration based on given values. 
***

News 2.x Upgrade Notes: https://github.com/dachcom-digital/pimcore-news/blob/2.x/UPGRADE.md
