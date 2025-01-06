import Logo from '../images/logo.png';
import {Button} from "./Button";

const links = {
  'community.home': 'http://community.w3gh.ru',
  'community.videos': 'http://community.w3gh.ru/forums/%D0%A3%D1%80%D0%BE%D0%BA%D0%B8-ghost.44/',
  'community.register': 'http://community.w3gh.ru/register',
  'community.login': 'http://community.w3gh.ru/login',
}

const nav = [
    {label: 'Главная', href: '/'},
    {label: 'Скачать', href: '/download'},
    {label: 'Документация', href: '/user-guide'},
    {label: 'Видео Уроки', href: links['community.videos']},
    {label: 'Сообщество', href: links['community.home']}
]

export function Navbar() {
  return (
    <nav className="fixed w-full bg-neutral-50/80 backdrop-blur-sm border-b border-neutral-200 z-50">
      <div className="container mx-auto px-6">
        <div className="flex items-center justify-between h-16">
          <div className="flex items-center gap-2">
            <a href="/" className="text-primary-light hover:text-primary">
              <img src={Logo.src} alt="Ghost++" className="h-8" />
            </a>
          </div>

          <div className="hidden md:flex items-center gap-6">
            {nav.map((link) => (
                <a href={link.href} className="text-primary-light hover:text-primary">
                  {link.label}
                </a>
            ))}
          </div>

          <div className="flex items-center gap-4">
            <Button href={links['community.register']} variant="primary" size="md">
              Регистрация
            </Button>
            <Button href={links['community.login']} variant="secondary" size="md">
              Вход
            </Button>
          </div>
        </div>
      </div>
    </nav>
  );
}
