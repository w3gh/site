import type {Feature} from './types';

export function FeatureItem({ title, description }: Feature) {
  return (
    <li className="bg-white rounded-lg p-4 shadow-sm hover:shadow-md transition-shadow">
      <dl>
        <dt className="text-lg font-semibold text-primary mb-2">{title}</dt>
        <dd className="text-primary-light">{description}</dd>
      </dl>
    </li>
  );
}
