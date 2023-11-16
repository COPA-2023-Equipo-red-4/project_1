const { defineConfig } = require('@vue/cli-service')
module.exports = defineConfig({
  transpileDependencies: true,
  devServer: {
    // proxy: {
    //   "/v1": {
    //     ws: true,
    //     changeOrigin: true,
    //     target: "https://rafalopez.ar"
    //   }
    // }
  }
})
