const form = document.querySelector(".form_signup form"),
  continueBtn = form.querySelector(".form_signup .field input");

form.onsubmit = (e) => {
  e.prevenDefault(); //preventing form from submitting
};
// click 'Ready for a new journey?'
continueBtn.onclick = () => {
  //   let's start Ajax
  let xhr = new XMLHttpRequest();
  xhr.opne("POST", "php/signup.php", true);
  xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        let data = xhr.response;
        console.log(data);
      }
    }
  };
  xhr.send();
};
