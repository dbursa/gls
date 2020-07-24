<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<meta name="csrf_name" content="<?= $name ?>" />
<meta name="csrf_value" content="<?= $value ?>" />

<h1> helou </h1>


<script>
const csrf_name_val = document.querySelector('meta[name="csrf_name"]').content
const csrf_value_val = document.querySelector('meta[name="csrf_value"]').content

const csrf_data = {csrf_name : csrf_name_val,csrf_value : csrf_value_val}
const params = new URLSearchParams();
params.append('csrf_name', csrf_name_val);
params.append('csrf_value', csrf_value_val);
const config = {
  headers: {
    'Content-Type': 'application/x-www-form-urlencoded'
  }
}
axios.post('/api/test', params, config)
  .then(function (response) {
    // handle success
    console.log(response);
  })
  .catch(function (err) {
      console.log(err)
  })
</script>