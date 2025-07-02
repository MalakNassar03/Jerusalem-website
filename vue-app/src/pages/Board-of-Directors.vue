<script setup lang="ts">
import BreadCrumb from "@/components/breadcrumb_banner.vue";

</script>

<script lang="ts">

import axios from "axios";

export default {
    data() {
        return {
            directors: [],

        }
    },
    async mounted() {
        try {
            // fire _all_ category & slider/card calls in parallel
            const [
                directorsRes,
            ] = await Promise.all([
                axios.get("http://jerusalemfund.test/slider/board-direction"),

            ]);
            // unpack slider & cards
            this.directors = directorsRes.data.repeater || [];
        } catch (e) {
            console.error("Fetch error:", e);
        }
    },
}
</script>

<template>

    <bread-crumb></bread-crumb>

    <div class="container">
        <div class="director_cards">
            <!-- loop -->
            <div
                class="director_card"
                v-for="(director, i) in directors"
                :key="i"
            >
                <div class="director_img">
                    <img
                        :src="director.image"
                        :alt="director.title"
                    />
                </div>
                <div class="card_info_director">
                    <h5 class="title-card">{{ director.title }}</h5>
                    <h6 class="sub-title">{{ director.subtitle }}</h6>
                    <p class="description-card" v-html="director.description" />
                </div>
            </div>
        </div>
    </div>

</template>

<style scoped>

</style>
