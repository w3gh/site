import { glob } from 'astro/loaders';
import {defineCollection } from "astro:content";

const guide = defineCollection({
    loader: glob({ base: "./src/content/user-guide", pattern: "**/*.{md,mdx}" }),
    // schema: z.object({
    //     id: z.string(),
    //     slug: z.string(),
    // }),
});

export const collections = { guide };
