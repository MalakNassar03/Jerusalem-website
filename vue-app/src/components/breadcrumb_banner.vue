<script>
export default {
    name: "BreadCrumb",
    props: {
        events: {
            type: Array,
            default: () => []
        },
        category: {
            type: Object,
            default: () => ({})
        }
    }
};
</script>
<script setup>
import { computed } from 'vue'
import { useRoute }   from 'vue-router'

const route = useRoute()

// turn "who-we-are" → "Who We Are"
function humanize(segment) {
    return segment
        .split('-')
        .map(w => w.charAt(0).toUpperCase() + w.slice(1))
        .join(' ')
}

const crumbs = computed(() => {
    const segments = route.path.split('/').filter(Boolean)
    return segments.map((seg, idx) => {
        return {
            text: humanize(seg),
            // rebuild path piecewise
            to: '/' + segments.slice(0, idx + 1).join('/')
        }
    })
})
</script>

<template>
    <div class="breadcrumb_banner" >
        <div class="container">
            <div class="bannerInfo">
                <ul class="breadCrumb_ul">
                    <li>
                        <router-link to="/">Home</router-link>

                    </li>
                    <li
                        v-for="(crumb, i) in crumbs"
                        :key="crumb.to"
                    >
                        <router-link :to="crumb.to">{{ crumb.text }}</router-link>
                        <span v-if="i < crumbs.length - 1">›</span>
                    </li>
                </ul>
            <div class="banner_header">Who we are</div>
            <p>The Jerusalem Fund works to educate the United States’ public and policymakers about Palestine’s past, present and future, and provide community development support to communities in Palestine.</p>
        </div>
        </div>
    </div>

</template>

<style scoped>

</style>
