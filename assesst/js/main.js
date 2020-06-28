let colorItem = $(".box-color");

colorItem.eq(0).css("backgroundColor", "#ab7119");
colorItem.eq(1).css("backgroundColor", "#0275d8");
colorItem.eq(2).css("backgroundColor", "#d9534f");

colorItem.click(function () {
  let color = $(this).css("backgroundColor");
  $("p").css("color", color);
});
$("#box-option i").click(function () {
  if ($("#box-option").css("left") == "-200px") {
    $("#box-option").animate({ left: `0px` }, 1000);
  } else {
    $("#box-option").animate({ left: `-200px` }, 1000);
  }
});
// reg
var inputName = document.getElementById("inputName");
var inputMail = document.getElementById("inputMail");
var inputPhone = document.getElementById("inputPhone");
var inputsub = document.getElementById("inputsub");
var regName = /^(?![\s.]+$)[a-zA-Z\s.]*$/;
var regMail = /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;
var regPhone = /^\+*[0-9]+$/;
var regSub = /^(?![\s.]+$)[a-zA-Z\s.]*$/;

inputName.addEventListener("keyup", function () {
  if (regName.test(inputName.value) == false) {
    inputName.classList.add("is-invalid");
  } else {
    inputName.classList.remove("is-invalid");
    inputName.classList.add("is-valid");
  }
});
inputsub.addEventListener("keyup", function () {
  if (regSub.test(inputsub.value) == false) {
    inputsub.classList.add("is-invalid");
  } else {
    inputsub.classList.remove("is-invalid");
    inputsub.classList.add("is-valid");
  }
});

inputMail.addEventListener("keyup", function () {
  if (regMail.test(inputMail.value) == false) {
    inputMail.classList.add("is-invalid");
  } else {
    inputMail.classList.remove("is-invalid");
    inputMail.classList.add("is-valid");
  }
});
inputPhone.addEventListener("keyup", function () {
  if (regPhone.test(inputPhone.value) == false) {
    inputPhone.classList.add("is-invalid");
  } else {
    inputPhone.classList.remove("is-invalid");
    inputPhone.classList.add("is-valid");
  }
});
