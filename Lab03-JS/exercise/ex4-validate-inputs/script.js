function xoa_dau(str) {
  str = str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g, "a");
  str = str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g, "e");
  str = str.replace(/ì|í|ị|ỉ|ĩ/g, "i");
  str = str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g, "o");
  str = str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g, "u");
  str = str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g, "y");
  str = str.replace(/đ/g, "d");
  str = str.replace(/À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ/g, "A");
  str = str.replace(/È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ/g, "E");
  str = str.replace(/Ì|Í|Ị|Ỉ|Ĩ/g, "I");
  str = str.replace(/Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ/g, "O");
  str = str.replace(/Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ/g, "U");
  str = str.replace(/Ỳ|Ý|Ỵ|Ỷ|Ỹ/g, "Y");
  str = str.replace(/Đ/g, "D");
  return str;
}


function validateName() {
  var x = document.getElementById("full-name");
  if(x.value == "") {
    alert("Họ và tên không được để trống!");
    x.focus();
    return false;
  }

  var str = xoa_dau(x.value);
  var pattern = new RegExp("^[A-Za-z ]+$");
  if (!pattern.test(str)) {
    alert("Họ và tên không hợp lệ!");
    x.focus();
    return false;
  } 
  return true;
}

function validateStudentCode() {
  var x = document.getElementById("student-code");
  if(x.value == "") {
    alert("Mã số sinh viên không được để trống!");
    x.focus();
    return false;
  }
  var pattern = new RegExp("^((20)((1[4-9])|20)[0-9]{4})$");
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

  var pattern = new RegExp("^(5[8-9]|6[0-5])$");
  if (!pattern.test(x.value)) {
    alert("Khóa không hợp lệ!");
    x.focus();
    return false;
  } 
  // if(isNaN(x.value) || x.value < 59 || x.value > 65) {
  //   alert("Khóa không hợp lệ");
  //   x.focus();
  //   return false;
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
  return true;
}

function validateClass() {
  var x = document.getElementById("class");
  if(x.value == "") {
    alert("Lớp không được để trống");
    x.focus();
    return false;
  } 
  return true;
}


function validateTel() {
  var x = document.getElementById("tel");
  var pattern = /^([0][0-9]{9})$/;
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
  return true;
}


function validateEmail() {
  var x = document.getElementById("email");
  if(x.value == "") {
    alert("Email không được để trống!");
    x.focus();
    return false;
  } 
  var pattern = /^([a-z]*[\.][a-z]+((1[4-9])|20)[0-9]{4}(@sis.hust.edu.vn))$/;
  if (!pattern.test(x.value)) {
    alert("Email không hợp lệ!");
    x.focus();
    return false;
  } 
  return true;
}


function validateDRL() {
  var x = document.getElementById("drl");
  if(x.value == "") {
    alert("Điểm rèn luyện không được để trống!");
    x.focus();
    return false;
  } 

  // var pattern = /^\d+$/;
  // if(isNaN(x.value) || x.value < 0 || x.value > 100 || !pattern.test(x.value)) {
  //   alert("Điểm rèn luyện không hợp lệ");
  //   x.focus();
  //   return false;
  // } 
  var pattern = /^([0-9]|[1-9][0-9]|100)$/;
  if(!pattern.test(x.value)) {
    alert("Điểm rèn luyện không hợp lệ");
    x.focus();
    return false;
  } 
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
    alert("Điểm CPA không hợp lệ!");
    x.focus();
    return false;
  } 
  return true;
}

function validateForm() {
  var arr = [validateName, validateStudentCode, validateAcademicYear, validateSchool, validateClass, validateTel, validateEmail, validateCPA, validateDRL]
  for(let i = 0; i != arr.length; ++i) {
    if(!arr[i]()) {
      return false;
    }
  }
  alert("THÀNH CÔNG. Thông tin điền biểu mẫu là hợp lệ!");
}


function doLoad() {
  document.getElementById("submit").addEventListener("click", validateForm, false);
}

window.addEventListener("load", doLoad, false);

