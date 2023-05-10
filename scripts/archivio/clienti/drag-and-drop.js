const dropArea = document.getElementById("drop-area");
const fileList = document.getElementById("file-list");
const fileElem = document.getElementById("fileElem");
let files = [];

function handleFiles(newFiles) {
  files = [...files, ...newFiles];
  console.log(files);
  for (let i = files.length - newFiles.length; i < files.length; i++) {
    const file = files[i];
    const li = document.createElement("li");
    li.setAttribute("data-index", i);
    const span = document.createElement("span");
    span.textContent = file.name;
    li.appendChild(span);
    const removeBtn = document.createElement("button");
    removeBtn.innerHTML = "Rimuovi";
    removeBtn.addEventListener("click", function() {
      const liToRemove = this.closest("li");
      const index = parseInt(liToRemove.getAttribute("data-index"));
      files.splice(index, 1);
      liToRemove.remove();
      console.log(files);
    });
    li.appendChild(removeBtn);
    fileList.appendChild(li);
  }
}

dropArea.addEventListener("dragover", function(event) {
  event.preventDefault();
  dropArea.classList.add("active");
});

dropArea.addEventListener("dragleave", function(event) {
  event.preventDefault();
  dropArea.classList.remove("active");
});

dropArea.addEventListener("drop", function(event) {
  event.preventDefault();
  dropArea.classList.remove("active");
  const newFiles = event.dataTransfer.files;
  handleFiles(newFiles);
});

fileElem.addEventListener("change", function() {
  const newFiles = fileElem.files;
  handleFiles(newFiles);
});