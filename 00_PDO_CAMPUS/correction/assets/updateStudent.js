const htmlSelectStudentElement = document.getElementById("student");

htmlSelectStudentElement.addEventListener("change", () => {
  const request = new XMLHttpRequest();

  request.open("POST", "./treatment/findStudentById.php", true);

  request.setRequestHeader("content-type", "application/x-www-form-urlencoded");

  const dataToSend = "studentId=" + htmlSelectStudentElement.value;

  request.send(dataToSend);

  request.onreadystatechange = () => {
    if (request.readyState === 4 && request.status === 200) {
      const student = JSON.parse(request.responseText);

      if (student) {
        createStudentForm(student);
      }
    }
  };
});

function createStudentForm(student) {
  const htmlStudentForm = document.getElementById("studentForm");

  const departments = [
    {
      id: 1,
      name: "École d'Ingénierie",
    },
    {
      id: 2,
      name: "Faculté des Sciences",
    },
    {
      id: 3,
      name: "Faculté des Arts",
    },
    {
      id: 4,
      name: "Faculté de Lettres",
    },
    {
      id: 5,
      name: "Faculté des Sciences de la Vie",
    },
    {
      id: 6,
      name: "Département d'Histoire",
    },
  ];

  const departmentOptions = [];

  departments.forEach((department) => {
    if (department.id === student.departmentId) {
      departmentOptions.push(
        `<option value="${department.id}" selected>${department.name}</option>`
      );
    } else {
      departmentOptions.push(
        `<option value="${department.id}">${department.name}</option>`
      );
    }
  });

  const form = `
    <form action="./treatment/updateStudent.php" method="POST">
      <div>
          <input type="hidden" required name="id" id="id" value=${student.id}>
      </div>
      <div>
          <label for="name">Name *</label>
          <input required type="text" name="name" id="name" value=${student.name}>
      </div>
      <div>
          <label for="surname">Surname *</label>
          <input required type="text" name="surname" id="surname" value=${student.surname}>
      </div>
      <div>
          <label for="birthdate">Birthdate *</label>
          <input required type="date" name="birthdate" id="birthdate" value=${student.birthdate}>
      </div>
      <div>
          <label for="email">Email *</label>
          <input required type="email" name="email" id="email" value=${student.email}>
      </div>
      <div>
          <label for="department">Department</label>
          <select required name="department" id="department">
            ${departmentOptions}
          </select>
      </div>
      <div>
          <input type="submit" value="Save">
      </div>
    </form>
  `;

  htmlStudentForm.innerHTML = form;
}
