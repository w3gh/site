<em>Начиная с версии 13.0 GHost++ поддерживает автоматическую организацию матчей.
Это расширенная функция и она не рекомендована для использования если вы не достаточно знаете о GHost++ и MySQL базах данных.</em>
<p>Автоматическая организация матчей - это система, которая пытается сопоставить игроков с одинаковым скилом вместе для более приятной игры.</p>

<ol>
 <p>Для использования автоматической организации матчей нужно соответствовать ряду требований:</p>
 <li> Можно использовать только с MySQL базами данных. SQLite не поддерживается.</li>
 <li> Можно использовать только с custom (не на развитие) картами.</li>
 <li> Можно использовать только с одним подключением к серверу. Вы не сможете использовать возможность мультисерверности GHost++'а с автоматической организацией матчей.</li>
 <li> Вам нужно указать "map_matchmakingcategory" значение в файле конфигурации карт.</li>
</ol>

Теперь давайте разберём как это работает:

<ol>
 <li> Автоматическая организация игр работает только при использовании автоматического создания игр  (автохостинг). Вам нужно использовать "!autohostmm" комманду для активации использования возможности.</li>
 <li> Когда игрок заходит в игру, GHost++ проверяет в MySQL базе таблицу "scores" используя значение "map_matchmakingcategory" для вычисления очков игрока.
<ol type="a">
 <li>GHost++ НИКОГДА не записывает данные о игроке и его очки. GHost++ НЕ содержит алгоритм подсчёта очков. Это ВАША ответственность позаботиться о создании таблицы "score".</li>
 <li>Очки могут быть любые числа, положительные или отрицательные, но всегда должны быть больше чем -99999. Если значение меньше то GHost++ подумает что  "нет очков".</li>
</ol>
</li>
<li> Когда игрок получает очки Ghost + + вычисляет средний балл всех игроков в настоящее время в игре, также учитывая новых игроков.
<ol type="a">
 <li> Если игра переполнена игрок с "наименьшим" баллом из среднего автоматически выкидывается из игры.</li>
 <li> Выкинутым игроком может оказаться новый игрок, если его балл тоже окажется ниже среднего.</li>
 <li> Игрок не имеющий очков будет иметь самый маленький приоритет и будет выкинут всегда если появится игрок с каким либо числом баллов.</li>
 <li> Команды автоматически балансируются (заметьте: на данный момент код ребалансирующий комманды просто их перемешивает).</li>
</ol>
</li>
</ol>
<p>Также вам нужно учитывать что GHost++ не содержит алгоритма подсчёта очков.
Это означает что эта возможность НЕ РАБОТАЕТ прямо "из коробки".
Вы можете использовать включенный "update_dota_elo" и "update_w3mmd_elo" проекты для генерации ELO очков для DotA карт и карт использующих W3MMD стандарт.</p>