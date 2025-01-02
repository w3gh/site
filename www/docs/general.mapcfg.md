GHost++ использует файлы конфигурации карт для определения некоторых режимов игры и слотов для каждой карты.
Начиная с версии 7.0 GHost++ может автоматически рассчитывать некоторые значения карты если существует реальный фаил данной карты.Он может определять следующее:

- `map_size` размер карты.
- `map_info` CRC32 значение карты).
- `map_crc` генерирует значение по другому алгоритму, отличному от CRC.
- `map_width` играбельная ширина карты.
- `map_height` играбельная высота карты.
- `map_numplayers` число игроков - используется только для карт на развитие.
- `map_numteams` число комманд - используется только для карт на развитие.
- `map_slotN` структура слотов.

GHost++ определяет следующие вещи перед началом:

1.) Бот открывает `War3Patch.mpq`  расположеный в дирректории `bnet_war3path`.
2.) Если фаил найден, он извлекает `Scripts\common.j` и `Scripts\blizzard.j` и сохраняет их в папку в bot_mapcfgpath.

> НЕ является ошибкой если бот не нашёл `War3Patch.mpq` и не смог извлеч файлы.
Если вы уже скопировали `common.j` и `blizzard.j` в `bot_mapcfgpath` папку.
Если вы не нуждаетесь в автоматическом расчете `map_crc` .

GHost++ определяет следующие значения когда загружает фаил конфигурации карты:

1. Открывает указанный cfg фаил карты.
2. Пытается открыть реальный фаил карты который определяется из `bot_mappath + map_localpath`.
3. Если всё прошло успешно то вычисляется `map_size` и `map_info`.
4. Пытается открыть `common.j` в дирректории указанной в `bot_mapcfgpath`. Если это невозможно, он прекращяет процесс вычисленмя map_crc.
5. Пытается открыть `blizzard.j` в дирректории указанной в `bot_mapcfgpath`. Если это невозможно, он прекращяет процесс вычисленмя map_crc.
6. Пытается открыть реальный фаил карты как MPQ архив.
7. Если успешно автоматически вычисляет map_crc. IЕсли это невозможно, он прекращяет процесс вычисленмя map_crc.
8. Если может открыть MPQ архив то он извлекает `war3map.w3i` (он ложит это фаил в память).
9. Если всё прошло успешно автоматически вычисляет `map_width`, `map_height`, `map_slotN`, `map_numplayers`, и `map_numteams`.
10. Если какие либо из вычисляемых параметров определены в файле конфигурации карты, он перезаписывает их  ВМЕСТО автоматически вычисленных значений.

Вы можете удивиться почему `common.j` и `blizzard.j` не включены в поставку и извлекаются из WC3
Это потому что `common.j` и `blizzard.j` официальные файлы Blizzard и они защищены авторским правом.
Если вы не хотите чтобы GHost++ извлекал common.j и blizzard.j то вручную скопируйте их в bot_mapcfgpath.
Это особенно касается Linux пользователей которые не хотят копировать 25 MB фаил на GHost++ сервер.

Итак:

Если вы хотите позволить скачивать карту:
 - убедитесь что у вас есть реальный фаил карты расположенный в `bot_mappath + map_localpath` .
 - убедитесь что выставлен `bot_allowdownloads = 1`

Если вы хотите чтобы GHost++ автоматически вычислял `map_size` и `map_info`:
 - убедитесь что у вас есть реальный фаил карты расположенный в `bot_mappath + map_localpath`  .

Если вы хотите чтобы GHost++ автоматически вычислял map_crc:
 - убедитесь что у вас есть копия common.j и blizzard.j извлечённых из `War3Patch.mpq` в `bot_mapcfgpath`.
 - убедитесь что у вас есть реальный фаил карты расположенный в `bot_mappath + map_localpath`  .

Если вы хотите чтобы GHost++ автоматически вычислял `map_width`, `map_height`, `map_slotN`, `map_numplayers`, и `map_numteams`:
 - убедитесь что у вас есть реальный фаил карты расположенный в `bot_mappath + map_localpath`.

Если вы хотите чтобы GHost++ автоматически извлекал `common.j` и `blizzard.j` из `War3Patch.mpq`:
 - убедитесь что у вас есть копия файла `War3Patch.mpq` в `bnet_war3path` перед запуском.

> Некоторые карты "защищены" и в некоторых случаях StormLib не может прочитать их.
Это означает что бот может вычислять не верные значения.