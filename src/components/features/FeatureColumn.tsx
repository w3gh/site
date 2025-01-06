import type { Feature } from './types';
import { FeatureItem } from './FeatureItem';

interface FeatureColumnProps {
  features: Feature[];
}

export function FeatureColumn({ features }: FeatureColumnProps) {
  return (
    <ul className="space-y-6">
      {features.map((feature) => (
        <FeatureItem key={feature.title} {...feature} />
      ))}
    </ul>
  );
}
