const dropZone = document.getElementById("drop-zone");
const previewContainer = document.getElementById("preview-container");

dropZone.addEventListener("dragover", (event) => {
  event.preventDefault();
  dropZone.classList.add("dragover");
});

dropZone.addEventListener("dragleave", (event) => {
  event.preventDefault();
  dropZone.classList.remove("dragover");
});

dropZone.addEventListener("drop", (event) => {
  event.preventDefault();
  dropZone.classList.remove("dragover");
  
  const files = event.dataTransfer.files;

  for (let i = 0; i < files.length; i++) {
    const file = files[i];

    const reader = new FileReader();
    reader.readAsDataURL(file);
    reader.onload = () => {
      const previewItem = document.createElement("div");
      previewItem.classList.add("preview-item");

      const previewImage = document.createElement("img");
      previewImage.classList.add("preview-image");
      previewImage.src = reader.result;

      const previewDelete = document.createElement("button");
      previewDelete.classList.add("preview-delete");
      previewDelete.innerHTML = "X";
      previewDelete.addEventListener("click", () => {
        previewItem.remove();
      });

      previewItem.appendChild(previewImage);
      previewItem.appendChild(previewDelete);
      previewContainer.appendChild(previewItem);
    };
  }
});