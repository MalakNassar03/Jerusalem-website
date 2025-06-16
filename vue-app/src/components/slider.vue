<script setup>
import { ref } from 'vue'
import { Swiper, SwiperSlide } from 'swiper/vue'
import { Navigation, Pagination, Autoplay, Thumbs } from 'swiper'

// Swiper styles
import 'swiper/css'
import 'swiper/css/navigation'
import 'swiper/css/pagination'
import 'swiper/css/thumbs'

// define props for slides & banners
const props = defineProps({
    slides: {
        type: Array,
        required: true
    },
    banners: {
        type: Array,
        default: () => []
    }
})

// reference to thumbnail swiper
const thumbsSwiper = ref(null)
function setThumbsSwiper(swiper) {
    thumbsSwiper.value = swiper
}
</script>

<template>
    <div class="slider">
        <!-- Main slider -->
        <Swiper
            class="slider-container"
            :modules="[Navigation, Pagination, Autoplay, Thumbs]"
            :thumbs="{ swiper: thumbsSwiper }"
            navigation
            :pagination="{ clickable: true }"
            :autoplay="{ delay: 5550, disableOnInteraction: false }"
            pauseOnMouseEnter: true
            :speed="1000"
            loop
        >
            <SwiperSlide v-for="(slide, i) in props.slides" :key="i">
                <div class="container">
                    <div class="slide-info">
                        <div class="slide-text">
                            <div class="slider_header">{{ slide.title }}</div>
                            <p class="slider_paragraph">{{ slide.description }}<button class="read-more-btn">..read more</button></p>
<!--                            <button class="slider_button">{{ slide.page_url_text }}</button>-->
                        </div>

                    </div>
                </div>
            </SwiperSlide>
        </Swiper>
        <div class="fixed-banner">
            <div class="slider-banners">
                <a
                    class="slider-banner"
                    v-for="(banner, index) in banners"
                    :key="index"
                    >
                    <div class="banner-text">{{ banner.text }}</div>

                </a>
            </div>
        </div>

    </div>
</template>


