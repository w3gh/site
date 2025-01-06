import { defineConfig } from 'astro/config';
import react from '@astrojs/react';
import tailwind from '@astrojs/tailwind';

import cloudflare from '@astrojs/cloudflare';

export default defineConfig({
  integrations: [react(), tailwind()],
  // adapter: cloudflare(),
  // site: 'https://[ваш-username].github.io',
  // base: '/[название-репозитория]',
});