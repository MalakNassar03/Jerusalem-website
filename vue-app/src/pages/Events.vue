<script setup lang="ts">

import BreadCrumb from "@/components/breadcrumb_banner.vue";
import EventBox from "@/components/events.vue";
</script>
<script lang="ts">
export default {
data() {
    return {

        events: [],
        eventsCategory: {},

    };
},
};
</script>

<template>
    <bread-crumb></bread-crumb>
    <event-box
        :events="events"
        :category="eventsCategory"
    />

</template>

<style scoped>

</style>
