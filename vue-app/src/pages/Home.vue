
<script>
import axios from "axios";
import AboutusData from "@/assets/Data/AboutusData.js";
import { fetchCategoryAndPosts } from "@/assets/Data/data.js";

import sliderData from "@/assets/Data/sliderData.js";
import Slider from "@/components/slider.vue";
import EventBox from "@/components/events.vue";
import AboutUs from "@/components/about_us.vue";
export default {
    name: "Home",
    components: { Slider, EventBox,AboutUs },
    mixins: [AboutusData],
    data() {
        return {
            // static banners come from your local file
            banners: sliderData,

            // dynamic data from the API
            slide: [],
            cards: [],
            newss: [],
            category: {},
            events: [],
            eventsCategory: {},
            impact: [],
            impactCategory: {},
        };
    },
    computed: {
        featuredNews() {
            if (!this.newss.length) return null;
            const found = this.newss.find(
                (p) => p.type && p.type.slug === "featured_news"
            );
            return found || this.newss[0];
        },
        otherNews() {
            if (!this.newss.length) return [];
            return this.newss.filter((p) => p !== this.featuredNews);
        },
    },
    async mounted() {
        try {
            // fire _all_ category & slider/card calls in parallel
            const [
                sliderRes,
                cardsRes,
                homeRes,
                evRes,
                imRes,
            ] = await Promise.all([
                axios.get("http://jerusalemfund.test/slider/slider"),
                axios.get("http://jerusalemfund.test/slider/cards"),
                fetchCategoryAndPosts("latest-updates-insights"),
                fetchCategoryAndPosts("events"),
                fetchCategoryAndPosts("impact")

            ]);
            // unpack slider & cards
            this.slide = sliderRes.data.repeater || [];
            this.cards = cardsRes.data.repeater || [];
            // unpack home news
            this.category = homeRes.category;
            this.newss = homeRes.posts;

            // unpack events
            this.eventsCategory = evRes.category;
            this.events = evRes.posts;

            // unpack impact
            this.impactCategory = imRes.category;
            this.impact = imRes.posts;

        } catch (e) {
            console.error("Fetch error:", e);
        }
    },
};
</script>

<template>

    <Slider :slides="slide" :banners="banners" v-if="slide.length"
    />





<!--need so fixing to do when i create the repeater -->
    <div class="container">
      <div class="cards">
        <div class="card" v-for="(card, index) in cards" :key="index">
          <div class="card_img">
            <img :src="card.image" :alt="card.title" />
          </div>
          <div class="card_info">
          <div class="title">{{ card.title }}</div>
          <div class="description">{{ card.subtitle }}</div>
          <p>{{ card.description }}</p>
          </div>
          <div class="button-border">
            <button class="card-button">{{ card.page_url_text }}</button>

          </div>
        </div>
      </div>
    </div>




<about-us :about="about"/>
<!--  <div class="container">-->
<!--    <div class="support-box" v-if="about">-->
<!--      <div class="support-img">-->
<!--        <img :src="about.image_url" alt="">-->
<!--      </div>-->
<!--      <div class="support-info" v-if="about">-->
<!--        <div class="date">{{ about.date }}</div>-->
<!--          <a class="header">-->
<!--              {{ about.title.split(' ').slice(0, -1).join(' ') }}-->
<!--              <span>{{ about.title.split(' ').pop() }}</span>-->
<!--          </a>-->
<!--        <p  v-html="about.paragraph1"></p>-->
<!--        <p>{{ about.paragraph2 }} <button class="read-more-btn">..read more</button></p>-->
<!--        <button class="donate-btn">Donate now!</button>-->

<!--      </div>-->

<!--    </div>-->

<!--  </div>-->

  <div class="container">
    <div class="updates-header-box">
    <div class="updates-header">
      <div class="updates-title">{{ category.name }}</div>
      <button>See All</button>
    </div>
      <div class="updates-description">{{ category.description }}</div>
    </div>

    <div class="news-box" :style="{    backgroundImage: 'url(' + featuredNews.image + ')',
}" v-if="featuredNews" >
      <div class="overlay">
      <div class="news-info">
      <div class="banner">#{{ featuredNews.tags[0].slug.toUpperCase() }}</div>
      <div class="news-header">{{featuredNews.title}}</div>
        <div class="date">{{ featuredNews.date }}</div>
      </div>
    </div>
    </div>

    <div class="news-cards" v-if="otherNews.length">
      <div class="news-card" v-for="card in newss.slice(1, 5)" :key="card.id">
        <div class="news-card-img">
          <div class="banner">#{{ card.tags[0].slug.toUpperCase() }}</div>
          <img :src="card.image" :alt="card.title" />
        </div>
        <div class="news-card-title">{{ card.title }}</div>
        <div class="date">{{ card.date }}</div>
      </div>
  </div>
  </div>


  <div class="donate_banner">
    <button class="donate_btn">Donate now</button>
  </div>



<!--  <div class="container">-->
<!--    <div class="updates-header-box">-->
<!--      <div class="updates-header">-->
<!--        <div class="updates-title">{{ eventsCategory.name }}</div>-->
<!--        <button>See All</button>-->
<!--      </div>-->
<!--      <div class="updates-description">{{eventsCategory.description}}</div>-->
<!--    </div>-->

<!--    <div class="events_cards">-->
<!--      <div-->
<!--          class="events_card"-->
<!--          v-for="(event, index) in events"-->
<!--          :key="index"-->
<!--      >-->
<!--        <div class="event_date">{{ event.date }}</div>-->
<!--        <img :src="event.image" :alt="event.title" />-->
<!--        <div class="event_description">{{ event.title }}</div>-->
<!--      </div>-->
<!--    </div>-->

<!--  </div>-->






    <event-box
        :events="events"
        :category="eventsCategory"
    />



    <div class="container">
        <div class="updates-header-box">
            <div class="updates-header">
                <div class="updates-title">{{ category.name }}</div>
                <button>See All</button>
            </div>
        </div>

        <div class="what-we-do-cards">

            <div class="what-we-do-card"
                 v-for="(box, index) in impact"
                 :key="index"
                 :style="{ backgroundImage: 'url(' + box.image + ')' }">
                <div class="what-we-do-card-info">
                <div class="what-we-do-card-title">{{ box.title }}</div>
                <div class="what-we-do-card-description">{{ box.content }}</div>
                </div>
                </div>
        </div>

    </div>


</template>

<style scoped>

</style>
