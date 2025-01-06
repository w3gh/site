import { ChevronRight } from 'lucide-react';

interface BreadcrumbItem {
  label: string;
  href?: string;
}

interface BreadcrumbsProps {
  items: BreadcrumbItem[];
}

export function Breadcrumbs({ items }: BreadcrumbsProps) {
  return (
    <nav className="bg-neutral-50 border-b border-neutral-200">
      <div className="container mx-auto px-6">
        <ol className="flex items-center h-12 text-sm">
          <li>
            <a href="/" className="text-primary-light hover:text-primary">
              Главная
            </a>
          </li>
          {items.map((item, index) => (
            <li key={item.label} className="flex items-center">
              <ChevronRight className="w-4 h-4 mx-2 text-primary-light" />
              {item.href && index < items.length - 1 ? (
                <a href={item.href} className="text-primary-light hover:text-primary">
                  {item.label}
                </a>
              ) : (
                <span className="text-primary font-medium">{item.label}</span>
              )}
            </li>
          ))}
        </ol>
      </div>
    </nav>
  );
}
