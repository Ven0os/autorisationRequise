function getValue(age) {
  let age = document.getElementById("age");

  if (parseInt(age.value) >= 18) {
    alert("Vous pouvez accedez au site");
    window.location.href = "suite.html";
  } else {
    alert("Vous ne pouvez pas accedez au site");
  }
}

function getValue2(date) {
  let naissance = document.getElementById("date").value;
  let date = new Date(new Date() - new Date(naissance)).getFullYear() - 1970;

  if (date >= 18) {
    alert("Vous pouvez accedez au site");
    window.location.href = "suite.html";
  } else {
    alert("Vous ne pouvez pas accedez au site");
  }
}

document.getElementById("btnage").addEventListener("click", (e) => {
  e.preventDefault();
  getValue(age);
});

document.getElementById("btndate").addEventListener("click", (e) => {
  e.preventDefault();
  getValue2(date);
});
