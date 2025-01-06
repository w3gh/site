import React from 'react';
import type {GuideSectionItem} from './types';

interface GuideSectionProps {
  title: string;
  description?: string;
  items: GuideSectionItem[];
}

function toUrl(item: GuideSectionItem) {
    if (item.url) {
        return item.url;
    }

    return `/user-guide/${item.id}`;
}

export function GuideSection({ title, description, items }: GuideSectionProps) {
  return (
    <div className="bg-neutral-100 rounded-lg overflow-hidden">
      <div className="bg-primary px-4 py-3">
        <h3 className="text-lg font-semibold text-neutral-50">{title}</h3>
      </div>

      {description && (
        <div className="px-4 py-3 border-b border-neutral-200">
          <p className="text-primary-light">{description}</p>
        </div>
      )}

      <ul className="divide-y divide-neutral-200">
        {items.map((item) => (
          <li key={item.id} className="p-4">
            {item.title && <h4 className="font-bold text-primary mb-2">{item.title}</h4>}
            {item.items ? (
              <ul className="space-y-2 pl-4">
                {item.items.map((subItem) => (
                  <li key={subItem.id}>
                    <a href={toUrl(subItem)} className="text-primary-light hover:text-primary">
                      {subItem.label}
                    </a>
                  </li>
                ))}
              </ul>
            ) : (
              <a href={toUrl(item)} className="text-primary-light hover:text-primary">
                {item.label}
              </a>
            )}
          </li>
        ))}
      </ul>
    </div>
  );
}
