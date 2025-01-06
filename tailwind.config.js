/** @type {import('tailwindcss').Config} */
export default {
  content: ['./src/**/*.{astro,html,js,jsx,md,mdx,svelte,ts,tsx,vue}'],
  theme: {
    extend: {
      colors: {
        primary: {
          DEFAULT: '#0A4676',
          light: '#1f4e73',
        },
        neutral: {
          50: '#FEFEFE',
          100: '#F9FAFB',
          200: '#E3E3E3',
        },
      },
    },
  },
  plugins: [],
};
