const { createApp } = Vue;
const apiUri = "http://localhost/PHP-DISCHI-JSON/api";
const app = createApp({
  data() {
    return {
      discs: [],
    };
  },
  created() {
    axios.get(apiUri).then((res) => {
      this.discs = res.data;
    });
  },
});

app.mount("#app");
