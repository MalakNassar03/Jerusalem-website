<script setup>
// const links=[
//   {pageName:"Who we are",link:"/"},
//   {pageName:"What we do ",link:"/"},
//   {pageName:"Grants",link:"/"},
//   {pageName:"Blog",link:"/"},
//   {pageName:"Resource Library",link:"/"},
//   {pageName:"Contact Us",link:"/"},
// ]
const NavIcons=[

  {
    // For items that have an icon:
    icon: 'fa-solid fa-magnifying-glass',
    href: '',
    classes: 'hover_circle search',
    target: '_blank'
  }
]

import { ref, onMounted } from 'vue'
import { useRouter }     from 'vue-router'
import axios              from 'axios'
const router = useRouter()
const links  = ref([])
const socialIcons = ref([])


onMounted(async () => {
    try {
        // Fire both requests in parallel
        const [menuRes, iconsRes] = await Promise.all([
            axios.get('/api/menu', {
                params: { slug: 'nav-bar' }
            }),
            axios.get('/api/social-links')    // Awesome Social Links endpoint
        ])

        links.value = menuRes.data.items.map(item => ({
            title:    item.title,
            path:     item.url,
            external: item.isExternal,
            cssClass: item.cssClass
        }));

        // Map your social icons
        socialIcons.value = iconsRes.data.map(i => ({
            icon:    i.icon,               // FA class from the API
            href:    i.url,                     // link URL
            classes: 'hover_circle icon',       // your same container classes
            target:  i.external ? '_blank' : '_self'
        }))
    }
    catch (err) {
        console.error('Could not load navbar items or social icons:', err)
    }
})


</script>

<template>
    <div class="contact-us-navbar">
        <div class="container">
        <ul class="nav-icons">
            <li class="phone-icon">
                <a href="tel:2023381985" class="hover_circle phone">
                    <i class="fa-solid fa-phone icon"></i>
                </a>
                <a href="tel:2023381985" class="phone-number">(202) 338 - 1985</a>
            </li>
            <li
                v-for="(item, idx) in socialIcons"
                :key="'social-'+idx"
                :class="item.classes"
            >
                <a
                    :href="item.href"
                    :target="item.target"
                    class="icon-button"
                    rel="noopener"
                >
                    <i :class="item.icon"></i>
                </a>
            </li>
        </ul>

        </div>
    </div>
  <nav class="nav-bar">
<div class="container">
  <div class="nav-content">
  <router-link to="/" class="logo">

      <img src="@/assets/images/JF%20logo%20wide2%20transparent.png" alt="Logo">

  </router-link>
  <ul class="nav" >
    <li v-for="item in links" :key="item.title">
        <router-link
            v-if="!item.external"
            class="nav-link"
            :to="item.path"
        >
           {{ item.title }}

        </router-link>
    </li>
  </ul>
      <!-- magnifying-glass + social icons -->
      <ul class="nav-icons">
          <li
              v-for="(icon, i) in NavIcons"
              :key="'search-'+i"
              :class="icon.classes"
          >


                  <i :class="icon.icon"></i>
          </li>

      </ul>
</div>
</div>
  </nav>


</template>

<style scoped>

</style>
