// CSRF
const csrf_name_val = document.querySelector('meta[name="csrf_name"]').content
const csrf_value_val = document.querySelector('meta[name="csrf_value"]').content

// EVENT LISTENERS
document.getElementById("button_project_1").addEventListener("click", () => vote(1));
document.getElementById("button_project_2").addEventListener("click", () => vote(2));
document.getElementById("button_project_3").addEventListener("click", () => vote(3));

// REQUEST
function vote(id){

    var email = document.getElementById("email_input").value

    // PARAMS
    const params = new URLSearchParams();
    params.append('csrf_name', csrf_name_val);
    params.append('csrf_value', csrf_value_val);
    params.append('project_id', id);
    params.append('email', email);


    const config = {
    headers: {
        'Content-Type': 'application/x-www-form-urlencoded'
    }}

    axios.post('/api/vote', params, config)
    .then(function (response) {
      // ZDE RESIT ZE SUCCESSFULL REQUEST
    })
    .catch(err => {
      // ZDE RESIT CHYBY
      // MUZE HODIT TYTO ERRORY
      // err.response.data.error_type === 1 -> invalid email ;;;;;; err.response.data.status -> error text
      // err.response.data.error_type === 2 -> Email already exists ;;;;;; err.response.data.status -> error text
      console.log(err.response.data)
    })
}
