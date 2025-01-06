export const mainInfo = [
  {
    id: 'basic-info.license',
    label: 'Лицензионное соглашение',
    url: 'basic-info.license',
  },
  {
    id: 'basic-info.changelog',
    label: 'Лог изменений',
    url: 'basic-info.changelog',
  },
  {
    id: 'basic-info.credits',
    label: 'Разработчики',
    url: 'basic-info.credits',
  },
  {
    id: 'installation',
    title: 'Установка & Настройка',
    items: [
      {
        label: 'Требования',
        id: 'basic-info.requirements',
      },
      {
        label: 'Установка',
        id: 'installation.index',
      },
      {
        label: 'Обновление с предыдущих версий',
        id: 'installation.upgrading',
      },
    ],
  },
  {
    id: 'general',
    title: 'Базовые возможности',
    items: [
      {id: 'general.how-admins-work', label: 'Админы'},
      {id: 'general.how-bans-work', label: 'Баны'},
      {id: 'general.how-reserved-slots-work', label: 'Резервирование слотов'},
      {id: 'general.admin-game', label: 'Админ Игра'},
      {id: 'general.multiple-realms', label: 'Несколько серверов'},
      {id: 'general.autohosting', label: 'Авто хостинг'},
      {id: 'general.savegames', label: 'Сохранение Игр'},
      {id: 'general.replays', label: 'Сохранение Реплеев'},
      {id: 'general.mapcfg', label: 'Конфигурация карт'},
      {id: 'general.use-map-command', label: 'Комманда "map"'},
      {id: 'general.use-mql', label: 'Использование MySQL'},
      {id: 'general.automatic-matchmaking', label: 'Автоматическая организация матчей'},
      {id: 'general.hcl-standard', label: 'HCL (ХостБот Библиотека Комманд) Стандарт'},
      {id: 'general.w3mmd-standard', label: 'W3MMD (Warcraft III Мета Данные Карт) Стандарт'},
      {id: 'general.load-in-game-feature', label: 'Загрузка в Игре'},
      {id: 'general.commands', label: 'Список Комманд'},
    ],
  },
  {
    id: 'compile',
    title: 'Сборка',
    items: [
      {
        id: 'compile.windows',
        label: 'под Windows',
      },
      {
        id: 'compile.linux',
        label: 'под Linux',
      },
      {
        id: 'compile.osx',
        label: 'под OS X',
      },
    ],
  },
];

export const gproxyInfo = [
  {
    id: 'gproxy.general',
    label: 'Описание',
    url: '/user-guide/gproxy#general',
  },
  {
    id: 'gproxy.configuration',
    label: 'Настройка',
    url: '/user-guide/gproxy#configuration',
  },
  {
    id: 'gproxy.commands',
    label: 'Команды',
    url: '/user-guide/gproxy#commands',
  },
];

export const communityInfo = [
  {
    id: 'svn',
    label: 'GHost++ SVN Репозиторий',
    url: '/user-guide/contrib.svn',
  },
];
