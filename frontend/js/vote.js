// CSRF
const csrf_name_val = document.querySelector('meta[name="csrf_name"]').content
const csrf_value_val = document.querySelector('meta[name="csrf_value"]').content

const popup_error = document.getElementById("popup-error-alert")
const popup_success = document.getElementById("popup-success-alert")
const email_input = document.getElementById("email_input")
const button_vote = document.getElementById("button_vote")
const button_close = document.getElementById("button_close")
const popup_text = document.getElementById("popup-text")



popup_error.classList.add("d-none")
popup_success.classList.add("d-none")
button_close.classList.add("d-none")


let voteProject = null
// EVENT LISTENERS
document.getElementById("vote_1").addEventListener("click", () => {voteProject = 1})
document.getElementById("vote_2").addEventListener("click", () => {voteProject = 2})
document.getElementById("vote_3").addEventListener("click", () => {voteProject = 3})

document.getElementById("button_vote").addEventListener("click", () => vote())


// REQUEST
function vote(){
    // Pokud neni voteProject variable nastavena (refresh s otevrenym popup)
    if (voteProject === null){
      window.location.href = ""
      return;
    }

    // Clear alerts
    popup_error.classList.add("d-none")
    popup_success.classList.add("d-none")

    var email = email_input.value

    // PARAMS
    const params = new URLSearchParams()
    params.append('csrf_name', csrf_name_val)
    params.append('csrf_value', csrf_value_val)
    params.append('project_id', voteProject)
    params.append('email', email)

    console.log("VOTING FOR " + voteProject + "using email:" + email)


    const config = {
    headers: {
        'Content-Type': 'application/x-www-form-urlencoded'
    }}

    axios.post('/api/vote', params, config)
    .then(function (response) {
      // ZDE RESIT ZE SUCCESSFULL REQUEST
      popup_success.classList.add("d-block")
      button_close.classList.add("d-inline-block")
      popup_error.classList.remove("d-block")
      popup_error.classList.add("d-none")
      email_input.classList.add("d-none")
      button_vote.classList.add("d-none")
      popup_text.classList.add("d-none")

    })
    .catch(err => {
      popup_error.classList.add("d-block")
      popup_error.innerHTML = err.response.data.status
      
    })
}
