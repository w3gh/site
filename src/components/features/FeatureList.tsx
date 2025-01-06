import { FeatureColumn } from './FeatureColumn';
import { leftFeatures, rightFeatures } from './featureData';

export function FeatureList() {
  return (
    <section className="py-16 bg-neutral-50">
      <div className="container mx-auto px-6">
        <div className="grid md:grid-cols-2 gap-8">
          <FeatureColumn features={leftFeatures} />
          <FeatureColumn features={rightFeatures} />
        </div>
      </div>
    </section>
  );
}