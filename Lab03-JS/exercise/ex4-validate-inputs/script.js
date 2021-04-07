function validateName() {
  //console.log("Hi");
  var x = document.getElementById("full-name");
  if(x.value == "") {
    alert("Họ và tên không được để trống!");
    x.focus();
    return false;
  }
  return true;
}

function validateStudentCode() {
  var x = document.getElementById("student-code");
  var pattern = new RegExp("(20)(((1)[4-9])|20)[0-9]{4}");
  if(x.value == "") {
    alert("Mã số sinh viên không được để trống!");
    x.focus();
    return false;
  }
  if (!pattern.test(x.value)) {
    alert("Mã số sinh viên không hợp lệ!");
    x.focus();
    return false;
  } 
  return true;
}


function validateAcademicYear() {
  var x = document.getElementById("academic-year");
  if(x.value == "") {
    alert("Khóa không được để trống!");
    x.focus();
    return false;
  } 
  if(isNaN(x.value) || x.value < 59 || x.value > 65) {
    alert("Khóa không hợp lệ");
    x.focus();
    return false;
  } 
  // else {
  //   alert("Hello");
  // }
  return true;
}


function validateSchool() {
  var x = document.getElementById("school");
  
  if(x.value == "") {
    alert("Chưa chọn viện đào tạo");
    x.focus();
    return false;
  } 
  // else {
  //   alert("Hello");
  // }
  return true;
}

function validateClass() {
  var x = document.getElementById("class");
  
  if(x.value == "") {
    alert("Lớp không được để trống");
    x.focus();
    return false;
  } 
  // else {
  //   alert("Hello");
  // }
  return true;
}


function validateTel() {
  var x = document.getElementById("tel");
  var pattern = /[0][0-9]{9}/;
  if(x.value == "") {
    alert("Số điện thoại không được để trống!");
    x.focus();
    return false;
  } 
  if (!pattern.test(x.value)) {
    alert("Số điện thoại không hợp lệ!");
    x.focus();
    return false;
  } 
  // else {
  //   alert("Hello");
  // }
  return true;
}


function validateEmail() {
  var x = document.getElementById("email");
  var pattern = /^[a-z]*[\.][a-z]*((1[5-9])|20)[0-9]{4}(@sis.hust.edu.vn)$/;
  if(x.value == "") {
    alert("Email không được để trống!");
    x.focus();
    return false;
  } 
  if (!pattern.test(x.value)) {
    alert("Email không hợp lệ!");
    x.focus();
    return false;
  } 
  // else {
  //   alert("Hello");
  // }
  return true;
}


function validateDRL() {
  var x = document.getElementById("drl");
  if(x.value == "") {
    alert("Điểm rèn luyện không được để trống!");
    x.focus();
    return false;
  } 
  if(isNaN(x.value) || x.value < 0 || x.value > 100) {
    alert("Điểm rèn luyện không hợp lệ");
    x.focus();
    return false;
  } 
  // else {
  //   alert("Hello");
  // }
  return true;
}


function validateCPA() {
  var x = document.getElementById("cpa");
  if(x.value == "") {
    alert("Điểm CPA không được để trống!");
    x.focus();
    return false;
  } 
  if(isNaN(x.value) || x.value < 0 || x.value > 4) {
    alert("Điểm CPA không hợp lệ");
    x.focus();
    return false;
  } 
  // else {
  //   alert("Hello");
  // }
  return true;
}

function validateForm() {
  var arr = [validateName, validateStudentCode, validateAcademicYear, validateSchool, validateClass, validateTel, validateEmail, validateCPA, validateDRL]
  for(let i = 0; i != arr.length; ++i) {
    if(!arr[i]()) {
      return false;
    }
  }
  // validateStudentCode();
  // validateAcademicYear();
  // validateSchool();
  // validateClass();
  // validateTel();
  // validateEmail();
  // validateCPA();
  // validateDRL();
  alert("Nộp biểu mẫu thành công!");
}


function doLoad() {
  document.getElementById("submit").addEventListener("click", validateForm, false);
}

window.addEventListener("load", doLoad, false);

