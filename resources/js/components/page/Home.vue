<template>
  <div>
    <the-header />
    <main class="main">
      <div class="bgColor">
        <section class="home site-width container">
          <div class="home-select">
            <form class="form home-form">
              <span class="home-category">ジャンルを選択してね</span>
              
              <label v-for="category in categories" :key="category.id">
                <input type="radio" v-model="selectCategory" :value="category.id">{{ category.name }}
              </label>
              
              <p class="home-anounce" v-show="error.flg">{{ error.msg }}</p>
              
              <button @click.prevent.stop="gameStart" class="btn btn-start">ゲームを始める</button>
              
            </form>
            
            <div class="home-description">
              ジャンルを選択してから<br>「ゲームスタート」を押してゲームを始めよう！
            </div>
            
          </div>
        </section>
      </div>
    </main>
  </div>
</template>

<script>
import TheHeader from '../layout/TheHeader'

export default {
  components: {
    TheHeader,
  },
  data() {
    return {
      categories: [],
      selectCategory: [],
      error: {
        msg: '',
        flg: false,
      },
    }
  },
  created() {
  },
  mounted() {
    this.$http.get('api/category')
      .then( response => {
        this.categories = response.data
      })
  },
  methods: {
    gameStart() {
      if(this.selectCategory.length == 0) {
        this.error.flg = true
        this.error.msg = '!!ジャンルを選択してからゲームを始めよう!!'
        return
      }else if(this.selectCategory != 1) {
        this.error.flg = true
        this.error.msg = '※現在、英語以外のジャンルを選択できません'
        return
      }
      this.error.flg = false
      this.error.msg = ''
      this.$router.push('/quiz?category=' + this.selectCategory)
    }
  },
}
</script>
