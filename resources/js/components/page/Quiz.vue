<template>
  <div>
    <the-header />
		<main class="main">
			<section class="section quiz site-width container">
				<h1 class="quiz-title quiz-problem">第{{ this.quizNumber }}問</h1>
				<p class="quiz-anounce">{{ this.title }}</p>
				
				<div class="quiz-select">
					<ul class="quiz-list">
						<li class="quiz-item" v-for="(answer, index) in answers" :keys="index"><button class="quiz-number" @click="showAnswer(index + 1)" :disabled="isAlreadyAnswered">{{ index + 1 }}</button>{{ answer }}</li>

					</ul>
          <p class="quiz-category">カテゴリー：{{ this.category }}</p>
				</div>
			</section>
			
			<section class="section answer site-width container" v-show="isAlreadyAnswered">
				<h1 class="quiz-title quiz-answer">正解</h1>
				
				<p class="answer-text">正解は<span class="answer-num">{{ correctAnswer }}</span>でした！</p>
				
				<p class="answer-correct" v-if="isCorrect">正解！</p>
				
				<p class="answer-incorrect" v-if="isMistake">不正解！</p>
			</section>
			
			<section class="section commentary site-width container" v-show="isAlreadyAnswered">
				<h1 class="quiz-title quiz-commentary">解説</h1>
				
				<p class="commentary-text">
					{{ this.commentary }}
				</p>
        
        <button type="submit" class="btn btn-submit" v-if="!isFinish && isAlreadyAnswered" @click="nextQuiz">次の問題へ</button>
        <button type="submit" class="btn btn-submit" v-if="isFinish && isAlreadyAnswered" @click="showModal">結果を見る</button>
			</section>
      
      <section class="modalArea" v-if="isModal">
        <div class="modalBg" @click="closeModal"></div>
        <div class="modalWrapper">
          <div class="modalContents">
            <h1>あなたのクイズの結果は・・・</h1>
            <p class="modal-text">10問中<span class="modal-num">{{ this.score }}</span>問正解でした！</p>
          </div>
          <div @click="closeModal" class="closeModal">
            ×
          </div>
        </div>
      </section>
		</main>
  </div>
</template>

<script>
import TheHeader from '../layout/TheHeader'

export default {
  name: 'Quiz',
  components: {
    TheHeader,
  },
  data() {
    return {
      quizData: [],
      title: '',
      answers: [],
      commentary: '',
      correctAnswer: 0,
      category: '',
      quizNumber: 1,
      score: 0,
      isCorrect: false,
      isMistake: false,
      isAlreadyAnswered: false,
      isFinish: false,
      isModal: false,
    }
  },
  mounted() {
    console.log('mounted')
    const category = this.$route.query.category
    this.$http.get(`api/quiz?category=${category}`)
      .then( response => {
        console.log(response.data)
        this.quizData = response.data
        //取得した最初のデータをセットする
        this.setQuiz(0)
      })
  },
  methods: {
    setQuiz(quizNumber) {
      this.title = this.quizData[quizNumber].title
      this.answers = [
        this.quizData[quizNumber].answer.answer_1,
        this.quizData[quizNumber].answer.answer_2,
        this.quizData[quizNumber].answer.answer_3,
        this.quizData[quizNumber].answer.answer_4,
      ]
      this.commentary = this.quizData[quizNumber].answer.commentary
      this.correctAnswer = this.quizData[quizNumber].answer.correct_answer
      this.category = this.quizData[quizNumber].category.name
    },
    showAnswer(selectNum) {
      console.log(selectNum)
      if(selectNum == this.correctAnswer) {
        this.isCorrect = true
        this.isMistake = false
      }else {
        this.isMistake = true
        this.isCorrect = false
      }
      //2度回答禁止、正解・解説項目表示
      this.isAlreadyAnswered = true
      //答えが一致すればスコアを1点追加
      if(this.correctAnswer == selectNum) {
        this.score += 1
      }
    },
    nextQuiz() {
      this.quizNumber += 1
      //10問目に行ったらクイズ終了
      if(this.quizNumber >= 10) {
        this.isFinish = true
      }
      this.isAlreadyAnswered = false
      this.isCorrect = false
      this.isMistake = false
      this.setQuiz(this.quizNumber - 1)
    },
    showModal() {
      this.isModal = !this.isModal
    },
    closeModal() {
      this.isModal = !this.isModal
      this.$router.push('/')
    }
  },
}
</script>
<style lang="css" scoped>
</style>
