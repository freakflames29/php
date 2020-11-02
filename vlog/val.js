let name = document.getElementById("exampleInputEmail1");
let pass = document.getElementById("exampleInputPassword1");
let cpass = document.getElementById("exampleInputPassword2");
let btn = document.getElementById("submit");
let di = document.getElementById("here");

eve();
function eve() {
  cpass.addEventListener("blur", check);
}
function check() {
  let para = document.createElement("div");
  let p = pass.value;
  let c = cpass.value;
  if (p === c) {
    if (p == "" || c == "") {
      para.className = "alert alert-primary ml-4";
      para.innerHTML = "field can not be empty";
      di.appendChild(para);
      btn.disabled = true;
      setTimeout(() => {
        para.remove();
      }, 2000);
    } else {
      para.className = "alert alert-success ml-4";
      para.innerHTML = "password is matching";
      di.appendChild(para);
      btn.disabled = false;
      setTimeout(() => {
        para.remove();
      }, 2000);
    }
  } else {
    para.className = "alert alert-danger ml-4";
    para.innerHTML = "password is not matching";
    di.appendChild(para);
    btn.disabled = true;
    setTimeout(() => {
      para.remove();
    }, 2000);
  }
  //   console.log(p);
}
