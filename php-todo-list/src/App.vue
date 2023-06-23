<script>
import axios from 'axios';

export default {
  data() {

    return {
      todoitems: [],
      newtask: {
        name: ""
      }
    };
  },
  methods: {
    addTask() {
      const url = 'http://localhost/Booleans-php/php-todo-list-json/php/addtask.php';
      const data = this.newtask;
      const headers = {
        headers: { 'Content-Type': 'multipart/form-data' }
      };

      axios.post(url, data, headers)
        .then(response => {
          this.todoitems = response.data;
          this.newtask.name = "";

        })
        .catch(error => console.error("error", error));
    },

    deleteTask(index) {
      const url = 'http://localhost/Booleans-php/php-todo-list-json/php/deletetask.php';
      const data = { "index": index };
      const headers = {
        headers: { 'Content-Type': 'multipart/form-data' }
      };

      axios.post(url, data, headers)
        .then(response => {
          this.todoitems = response.data;
        })
        .catch(error => console.error("error", error));

    },
  },
  mounted() {
    axios.get('http://localhost/Booleans-php/php-todo-list-json/php/index.php')
      .then(response => {
        this.todoitems = response.data;
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
        <button @click="deleteTask(index)"> X </button>
      </li>
    </ul>
    <form @submit.prevent="addTask">
      <label for="newtask">New Task</label>
      <input type="text" placeholder="add new task" v-model="newtask.name">
    </form>
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

button {
  background-color: transparent;
  color: red;
  border: none;
}
</style>