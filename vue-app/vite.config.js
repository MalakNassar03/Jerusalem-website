import { fileURLToPath, URL } from 'node:url'

import { defineConfig } from 'vite'
import vue from '@vitejs/plugin-vue'


// https://vite.dev/config/
export default defineConfig({
  plugins: [
    vue(),
  ],
  resolve: {
    alias: {
      '@': fileURLToPath(new URL('./src', import.meta.url))
    },
  },
    server: {
        proxy: {
            // any request to /api/* gets sent to jerusalemfund.test instead
            '/api': {
                target: 'http://jerusalemfund.test',
                changeOrigin: true,
                secure: false,
            }
        }
    }
})
