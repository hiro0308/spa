<template>
  <div>
		<header class="header">
			<div class="site-width">
        <div class="header-inner">
    			<h1 class="header-title"><router-link to="/">Quiz&Answer</router-link><span class="header-subTitle">～4つの選択肢から選んで答えを探そう～</span></h1>
    			
    			<p class="header-subTitle" v-if="isHome">
    				
    			</p>
          
          <p class="header-nav btn" v-if="!isHome" @click="goTopPage">
    				ゲームを中断する
    			</p>
        </div>
      </div>
		</header>
  </div>
</template>

<script>
export default {
  data() {
    return {
      isHome: true
    }
  },
  methods: {
    goTopPage() {
      this.$router.push('/')
    }
  },
  mounted() {
    if(this.$route.path !== '/') {
      this.isHome = !this.isHome
      return
    }
    this.isHome = true
  }
}
</script>

<style lang="css" scoped>
</style>
