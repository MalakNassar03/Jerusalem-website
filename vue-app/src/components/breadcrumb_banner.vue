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

<template>
    <div class="breadcrumb_banner" >
        <div class="container">
            <div class="bannerInfo">
            <ul class="breadCrumb_ul">
                <li>
                    <router-link to="/">Home</router-link>
                </li>
                <li>
                    <router-link to="/">Test</router-link>
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
