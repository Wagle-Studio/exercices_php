const htmlTrashIcons = document.querySelectorAll(".trash-icon");

if (htmlTrashIcons) {
  htmlTrashIcons.forEach((trashIcon) => {
    trashIcon.addEventListener("click", deleteStudent);
  });
}

function deleteStudent(event) {
  const studentId = event.target.dataset.id;

  const request = new XMLHttpRequest();

  request.open("POST", "./treatment/deleteStudent.php", true);

  request.setRequestHeader("content-type", "application/x-www-form-urlencoded");

  const dataToSend = "studentId=" + studentId;

  request.send(dataToSend);

  request.onreadystatechange = () => {
    if (request.readyState === 4 && request.status === 200) {
      location.reload();
    }
  };
}
