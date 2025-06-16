// src/data.js
export async function fetchPostsByCategory(slug) {
    try {
        const res = await fetch(`/api/${slug}`);
        if (!res.ok) throw new Error(res.statusText);
        return await res.json();
    } catch (e) {
        console.error(`Failed to fetch /api/${slug}`, e);
        return [];
    }
}

// convenience for many slugs at once:
export async function fetchPostsForCategories(slugs) {
    const entries = await Promise.all(
        slugs.map(async slug => [ slug, await fetchPostsByCategory(slug) ])
    );
    return Object.fromEntries(entries);
}
export async function fetchCategoryAndPosts(slug) {
    const res = await fetch(`/api/${slug}`);
    if (!res.ok) throw new Error(res.statusText);
    return res.json();   // returns { category: {...}, posts: [...] }
}

