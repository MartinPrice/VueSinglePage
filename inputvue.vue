<template>
    <div class="container">
        <form @submit.prevent="submit">
            <label for="lessontype">Lesson Type:</label>
            <input type="text" name="name" id="name" v-model="fields.name"/>
            <div v-if="errors && errors.name">{{ errors.name[0] }}</div>
            <button type="submit">Submit</button>
            <div v-if="success">Message sent</div>
        </form>
    </div>
</template>

<script>
export default {
  props: ['studentId'],
  data() {
    return {
      fields: {},
      errors: {},
      success: false,
      loaded: true,
    }
  },
  methods: {
    submit() {
      if (this.loaded) {
        this.loaded = false;
        this.success = false;
        this.errors = {};
        axios.post('/submit/'+this.studentId, this.fields).then(response => {
          this.fields = {}; //Clear input fields.
          this.loaded = true;
          this.success = true;
        }).catch(error => {
          this.loaded = true;
          if (error.response.status === 422) {
            this.errors = error.response.data.errors || {};
          }
        });
      }
    },
  },
}
</script>