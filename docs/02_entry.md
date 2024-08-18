# Die Klasse `Entry`

Kind-Klasse von `rex_yform_manager_dataset`, damit stehen alle Methoden von YOrm-Datasets zur Verfügung. Greift auf die Tabelle `rex_milestone` zu.

> Es werden nachfolgend zur die durch dieses Addon ergänzte Methoden beschrieben. Lerne mehr über YOrm und den Methoden für Querys, Datasets und Collections in der [YOrm Doku](https://github.com/yakamara/yform/blob/master/docs/04_yorm.md)

## Alle Einträge erhalten

```php
$entries = Entry::query()->find(); // YOrm-Standard-Methode zum Finden von Einträgen, lässt sich mit where(), Limit(), etc. einschränken und Filtern.
$entries = Entry::findOnline(); // Gibt alle Einträge zurück, die den Status `online` haben.
```

## Methoden und Beispiele

### `findOnline()`

Gibt alle Einträge zurück, die den Status `online` haben.

```php
$entries = Entry::query()->findOnline();
```

### `getTitle()`

Gibt den Wert für das Feld `title` (Titel) zurück:

Beispiel:

```php
$dataset = milestone::get($id);
echo $dataset->getTitle();
```

### `setTitle(mixed $value)`

Setzt den Wert für das Feld `title` (Titel).

```php
$dataset = milestone::create();
$dataset->setTitle($value);
$dataset->save();
```

### `getDescription(bool $asPlaintext = false)`

Gibt den Wert für das Feld `description` (Beschreibung) zurück:

Beispiel:

```php
$dataset = milestone::get($id);
$text = $dataset->getDescription(true);
```

### `setDescription(mixed $value)`

Setzt den Wert für das Feld `description` (Beschreibung).

```php
$dataset = milestone::create();
$dataset->setDescription($value);
$dataset->save();
```

### `getImage(bool $asMedia = false)`

Gibt den Wert für das Feld `image` (Bild) zurück:

Beispiel:

```php
$dataset = milestone::get($id);
$media = $dataset->getImage(true);
```

### `setImage(string $filename)`

Setzt den Wert für das Feld `image` (Bild).

```php
$dataset = milestone::create();
$dataset->setImage($filename);
$dataset->save();
```

### `getDate()`

Gibt den Wert für das Feld `date` (Datum / Jahr) zurück:

Beispiel:

```php
$dataset = milestone::get($id);
echo $dataset->getDate();
```

### `setDate(mixed $value)`

Setzt den Wert für das Feld `date` (Datum / Jahr).

```php
$dataset = milestone::create();
$dataset->setDate($value);
$dataset->save();
```

### `getStatus()`

Gibt den Wert für das Feld `status` (Status) zurück:

Beispiel:

```php
$dataset = milestone::get($id);
$auswahl = $dataset->getStatus();
```

### `setStatus(mixed $param)`

Setzt den Wert für das Feld `status` (Status).

```php
$dataset = milestone::create();
$dataset->setStatus($param);
$dataset->save();
```

### `getCreateDate()`

Gibt den Wert für das Feld `createdate` (Erstellt am...) zurück:

Beispiel:

```php
$dataset = milestone::get($id);
$datestamp = $dataset->getCreateDate();
```

### `setCreateDate(string $value)`

Setzt den Wert für das Feld `createdate` (Erstellt am...).

```php
$dataset = milestone::create();
$dataset->setCreateDate($value);
$dataset->save();
```

### `getCreateUser()`

Gibt folgenden Wert

    zurück

: Erstellt von...

Beispiel:

```php
$dataset = milestone::get($id);
$benutzer = $dataset->getCreateUser();
```

### `setCreateUser(mixed $value)`

Setzt den Wert für das Feld `createuser` (Erstellt von...).

```php
$dataset = milestone::create();
$dataset->setCreateUser($value);
$dataset->save();
```

### `getUpdateDate()`

Gibt den Wert für das Feld `updatedate` (Zuletzt geändert am...) zurück:

Beispiel:

```php
$dataset = milestone::get($id);
$datestamp = $dataset->getUpdateDate();
```

### `setUpdateDate(string $value)`

Setzt den Wert für das Feld `updatedate` (Zuletzt geändert am...).

```php
$dataset = milestone::create();
$dataset->setUpdateDate($value);
$dataset->save();
```

### `getUpdateUser()`

Gibt folgenden Wert

    zurück

: zuletzt geändert von...

Beispiel:

```php
$dataset = milestone::get($id);
$benutzer = $dataset->getUpdateUser();
```

### `setUpdateUser(mixed $value)`

Setzt den Wert für das Feld `updateuser` (zuletzt geändert von...).

```php
$dataset = milestone::create();
$dataset->setUpdateUser($value);
$dataset->save();
```
