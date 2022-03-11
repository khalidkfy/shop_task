Vue.component('client-index', {
  props: {
    ages: null,
  },
  mounted() {
  },
  data() {
    return {
      gender: 'male',
      age: this.ages[0],
      shoes_unit: 'eur',
      unit: 'cm',
    }
  },
  computed: {
    tall() {
      if (this.age) {
        return this.age[this.unit]
      }
      return this.ages[0]['cm']
    },
    shoes() {
      if (this.age) {
        return this.age[this.shoes_unit];
      }
      return this.ages[0]['eur']
    },
    image() {
      if (this.age) {
        if (this.gender === 'male') {
          return this.age.male_img;
        } else {
          return this.age.female_img;
        }
      }
      return this.ages[0]['male_img'];
    }
  },
  methods: {
  }
})