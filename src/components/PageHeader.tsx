import React from 'react';

interface PageHeaderProps {
  title: string;
  description?: string;
}

export function PageHeader({ title, description }: PageHeaderProps) {
  return (
    <div className="bg-primary/5 py-12">
      <div className="container mx-auto px-6">
        <h1 className="text-4xl font-bold text-primary mb-4">{title}</h1>
        {description && <p className="text-xl text-primary-light">{description}</p>}
      </div>
    </div>
  );
}