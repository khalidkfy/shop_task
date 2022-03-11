Vue.component('ages-form', {
  props:{
    _age: null
  },
  mounted() {
    if (this._age && this._age.id) {
      this.age = this._age.age;
      this.cm = this._age.cm;
      this.inch = this._age.inch;
      this.eur = this._age.eur;
      this.uk = this._age.uk;
      this.usa = this._age.usa;
      this.jap = this._age.jap;
    }
  },
  data() {
    return {
      age: null,
      male_img: null,
      female_img: null,
      cm: null,
      inch: null,
      eur: null,
      uk: null,
      usa: null,
      jap: null,
    }
  },
  methods: {
    save() {
      let url = '/dashboard/ages/create',
          method = 'post';

      if (this._age && this._age.id) {
       url = `/dashboard/ages/${this._age.id}/edit`;
       method = 'put';
      }

      this.saveForm(url, method, '/dashboard/ages', {
        age: this.age,
        male_img: this.male_img,
        female_img: this.female_img,
        cm: this.cm,
        inch: this.inch,
        eur: this.eur,
        uk: this.uk,
        usa: this.usa,
        jap: this.jap,
      })
    }
  },
})