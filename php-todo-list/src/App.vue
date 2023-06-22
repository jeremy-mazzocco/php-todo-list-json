<script>
import axios from 'axios';

export default {
  data() {

    return {
      todoitems: [],

      // newStudent: {
      //   name: "",
      //   last_name: ""
      // }
    };
  },
  mounted() {
    axios.get('http://localhost/Booleans-php/php-todo-list-json/php/index.php')
      .then(response => {
        this.todoitems = response.data;
        console.log(typeof this.todoitems);
      });
  }
};



</script>

<template>
  <h1>
    Todo list
  </h1>
  <div class="container">
    <ul>
      <li v-for="(item, index) in todoitems" :key="index">
        {{ item.name }}

      </li>
    </ul>
  </div>
</template>

<style scoped>
h1 {
  text-align: center;
}

.container {
  width: 40%;
  height: 500px;
  margin: auto;
  background-color: blueviolet;
}
</style>